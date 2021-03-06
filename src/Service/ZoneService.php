<?php

namespace Domainrobot\Service;

use Domainrobot\Domainrobot;
use Domainrobot\Lib\ArrayHelper;
use Domainrobot\Lib\DomainrobotConfig;
use Domainrobot\Lib\DomainrobotPromise;
use Domainrobot\Model\Zone;
use Domainrobot\Model\ZoneStream;
use Domainrobot\Model\Query;
use Domainrobot\Service\DomainrobotService;

class ZoneService extends DomainrobotService
{

    /**
     *
     * @param DomainrobotConfig $domainrobotConfig
     */
    public function __construct(DomainrobotConfig $domainrobotConfig)
    {
        parent::__construct($domainrobotConfig);
    }

    /**
     * Sends a zone create request.
     *
     * @param Zone $body
     * @return Zone
     */
    public function create(Zone $body)
    {
        $domainrobotPromise = $this->createAsync($body);
        $domainrobotResult = $domainrobotPromise->wait();

        Domainrobot::setLastDomainrobotResult($domainrobotResult);

        return new Zone(ArrayHelper::getValueFromArray($domainrobotResult->getResult(), 'data.0', []));
    }

    /**
     * Sends a zone create request.
     *
     * @param Zone $body
     * @return DomainrobotPromise
     */
    public function createAsync(Zone $body)
    {
        return $this->sendRequest(
            $this->domainRobotConfig->getUrl() . "/zone",
            'POST',
            ["json" => $body->toArray(true)]
        );
    }

    /**
     * Sends a zone stream request to add and/or remove records for every zone with
     * the given origin.
     *
     * @param [string] $origin
     * @param ZoneStream $body
     */
    public function stream($origin, ZoneStream $body)
    {
        $domainrobotPromise = $this->streamAsync($origin, $body);
        $domainrobotResult = $domainrobotPromise->wait();

        Domainrobot::setLastDomainrobotResult($domainrobotResult);

        return new Zone(ArrayHelper::getValueFromArray($domainrobotResult->getResult(), 'data.0', []));
    }

    /**
     * Sends a zone stream request to add and/or remove records for every zone with
     * the given origin.
     *
     * @param [string] $origin
     * @param ZoneStream $body
     * @return DomainrobotPromise
     */
    public function streamAsync($origin, ZoneStream $body)
    {
        return $this->sendRequest(
            $this->domainRobotConfig->getUrl() . "/zone/$origin/_stream",
            'POST',
            ["json" => $body->toArray(true)]
        );
    }

    /**
     * Imports an existing zone.
     *
     * @param Zone $body
     * @return Zone
     */
    public function importZone(Zone $body)
    {
        $domainrobotPromise = $this->importZoneAsync($body);
        $domainrobotResult = $domainrobotPromise->wait();

        Domainrobot::setLastDomainrobotResult($domainrobotResult);

        return new Zone(ArrayHelper::getValueFromArray($domainrobotResult->getResult(), 'data.0', []));
    }

    /**
     * Imports an existing zone.
     *
     * @param Zone $body
     * @return DomainrobotPromise
     */
    public function importZoneAsync(Zone $body)
    {
        $name = $body->getOrigin();
        $systemNameServer = $body->getVirtualNameServer();

        return new DomainrobotPromise($this->sendRequest(
            $this->domainRobotConfig->getUrl() . "/zone/$name/$systemNameServer/_import",
            'POST',
            ["json" => $body->toArray(true)]
        ));
    }

    /**
     * Sends a zone list request.
     *
     * The following keys can be used for filtering, ordering or fetching additional
     * data via query parameter:
     *
     * * dnssec
     * * created
     * * mainip
     * * secondary1
     * * secondary2
     * * secondary3
     * * secondary4
     * * secondary5
     * * secondary6
     * * secondary7
     * * virtualNameServer
     * * domainsafe
     * * name
     * * comment
     * * updated
     * * action
     * * primary
     * * changed
     *
     * @param Query $body
     * @return Zone[]
     */
    public function list(Query $body = null)
    {
        $domainrobotPromise = $this->listAsync($body);
        $domainrobotResult = $domainrobotPromise->wait();

        Domainrobot::setLastDomainrobotResult($domainrobotResult);
        $data = $domainrobotResult->getResult()['data'];
        $zones = array();
        foreach ($data as $d) {
            $z = new Zone($d);
            array_push($zones, $z);
        }
        return $zones;
    }

    /**
     * Sends a zone list request.
     *
     * The following keys can be used for filtering, ordering or fetching additional
     * data via query parameter:
     *
     * * dnssec
     * * created
     * * mainip
     * * secondary1
     * * secondary2
     * * secondary3
     * * secondary4
     * * secondary5
     * * secondary6
     * * secondary7
     * * virtualNameServer
     * * domainsafe
     * * name
     * * comment
     * * updated
     * * action
     * * primary
     * * changed
     *
     * @param Query $body
     * @return DomainrobotPromise
     */
    public function listAsync(Query $body = null)
    {
        $data = null;
        if ($body != null) {
            $data = $body->toArray(true);
        }
        return new DomainrobotPromise($this->sendRequest(
            $this->domainRobotConfig->getUrl() . "/zone/_search",
            'POST',
            ["json" => $data]
        ));
    }

    /**
     * Sends a zone info request.
     *
     * @param [string] $name
     * @param [string] $systemNameServer
     * @return Zone
     */
    public function info($name, $systemNameServer)
    {
        $domainrobotPromise = $this->infoAsync($name, $systemNameServer);
        $domainrobotResult = $domainrobotPromise->wait();

        return new Zone(ArrayHelper::getValueFromArray($domainrobotResult->getResult(), 'data.0', []));
    }

    /**
     * Sends a zone info request.
     *
     * @param [string] $name
     * @param [string] $systemNameServer
     * @return DomainrobotPromise
     */
    public function infoAsync($name, $systemNameServer)
    {
        return $this->sendRequest(
            $this->domainRobotConfig->getUrl() . "/zone/$name/$systemNameServer",
            'GET'
        );
    }

    /**
     * Sends a zone delete request.
     *
     * @param [string] $name
     * @param [string] $systemNameServer
     * @return
     */
    public function delete($name, $systemNameServer)
    {
        $domainrobotPromise = $this->deleteAsync($name, $systemNameServer);
        $domainrobotResult = $domainrobotPromise->wait();

        Domainrobot::setLastDomainrobotResult($domainrobotResult);

    }

    /**
     * Sends a zone delete request.
     *
     * @param [string] $name
     * @param [string] $systemNameServer
     * @return
     */
    public function deleteAsync($name, $systemNameServer)
    {
        return $this->sendRequest(
            $this->domainRobotConfig->getUrl() . "/zone/$name/$systemNameServer",
            'DELETE'
        );
    }

    /**
     * Sends a zone update request.
     *
     * @param Zone $body
     * @return Zone
     */
    public function update(Zone $body)
    {
        $domainrobotPromise = $this->updateAsync($body);
        $domainrobotResult = $domainrobotPromise->wait();

        Domainrobot::setLastDomainrobotResult($domainrobotResult);

        return new Zone(ArrayHelper::getValueFromArray($domainrobotResult->getResult(), 'data.0', []));
    }

    /**
     * Sends a zone update request.
     *
     * @param Zone $body
     * @return GuzzleHttp\Promise\PromiseInterface $promise
     */
    public function updateAsync(Zone $body)
    {
        if ($body->getOrigin() === null) {
            throw InvalidArgumentException("Field Zone.origin is missing.");
        }
        if ($body->getVirtualNameServer() === null) {
            throw InvalidArgumentException("Field Zone.virtualNameServer is missing.");
        }
        return $this->sendRequest(
            $this->domainRobotConfig->getUrl() . "/zone/$name/$systemNameServer",
            'PUT',
            ["json" => $body->toArray(true)]
        );
    }
}
