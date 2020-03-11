<?php

namespace IXDomainRobot\Service;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;

use GuzzleHttp\Client;
use IXDomainRobot\Lib\DomainRobotConfig;
use IXDomainRobot\Lib\DomainRobotHeaders;
use IXDomainRobot\Lib\DomainRobotException;
use IXDomainRobot\Lib\DomainRobotResult;
use IXDomainRobot\Lib\DomainRobotPromise;
use IXDomainRobot\Model\Certificate;
use Psr\Http\Message\ResponseInterface;

class DomainRobotService
{
    /**
     *
     * @var DomainRobotConfig
     */
    protected $domainRobotConfig;

    /**
     *
     * @var array
     */
    protected $guzzleClientConfig;

    public function __construct(DomainRobotConfig $domainRobotConfig)
    {
        $this->domainRobotConfig = $domainRobotConfig;

        // get current version of the SDK
        $handle = fopen(__DIR__."/../../composer.json", "r");
        $contents = fread($handle, filesize(__DIR__."/../../composer.json"));
        fclose($handle);
        preg_match("/version.+(\d+\.\d+\.\d+)/",$contents,$matches);

        $this->guzzleClientConfig = [
            'headers' => [
                DomainRobotHeaders::DOMAINROBOT_CONTENT_TYPE => "application/json",
                DomainRobotHeaders::DOMAINROBOT_USER_AGENT => "PHPDomainrobotSdk/$matches[1]",
                DomainRobotHeaders::DOMAINROBOT_HEADER_CONTEXT => $this->domainRobotConfig->getAuth()->getContext()
            ],
            'auth' => [
                $this->domainRobotConfig->getAuth()->getUser(),
                $this->domainRobotConfig->getAuth()->getPassword()
            ]
        ];
    }

    public function addHeaders($headers = [])
    {
        $this->guzzleClientConfig['headers'] = array_unique(array_merge($this->guzzleClientConfig['headers'], $headers));
        return $this;
    }

    /**
     * General guzzle interface
     *
     * @param string $url
     * @param string $method
     * @param array $options
     *
     * @return DomainRobotPromise
     */

    public function sendRequest($url, $method, $options = [])
    {
        $guzzleClient = new Client($this->guzzleClientConfig);

        $promise = $guzzleClient->requestAsync(
            $method,
            $url,
            $options
        )->then(
            /**
             *
             * @return DomainRobotException
             */
            function (ResponseInterface $response) {
                $rawResponse = $response->getBody()->getContents();
                $decodedResponse = json_decode($rawResponse, true);

                return new DomainRobotResult($decodedResponse, $response->getStatusCode());
            },
            /**
             *
             * @throws DomainRobotException
             */
            function (\Exception $exception) {
                if ($exception instanceof ClientException || $exception instanceof ServerException) {
                    $contents = json_decode($exception->getResponse()->getBody()->getContents(), true);

                    throw new DomainRobotException($contents, $exception->getResponse()->getStatusCode(), "DomainRobot Error");
                }
                // RequestException | ClientException
                $msg = $exception->getMessage();

                throw new DomainRobotException($msg, $exception->getCode(), "DomainRobot Error");
            }
        );
        return new DomainRobotPromise($promise);
    }
}
