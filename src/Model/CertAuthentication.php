<?php
/**
 * CertAuthentication
 *
 * PHP version 5
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Domainrobot JSON API
 *
 * Domainrobot JSON API for managing: Domains, SSL            Certificates, DNS and            much more.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Domainrobot\Model;

use \ArrayAccess;
use \Domainrobot\ObjectSerializer;

/**
 * CertAuthentication Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CertAuthentication implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CertAuthentication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'method' => '\Domainrobot\Model\AuthMethodConstants',
        'dns' => 'string',
        'fileName' => 'string',
        'fileContent' => 'string',
        'approverEmails' => 'string[]',
        'provisioning' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'method' => null,
        'dns' => null,
        'fileName' => null,
        'fileContent' => null,
        'approverEmails' => null,
        'provisioning' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'method' => 'method',
        'dns' => 'dns',
        'fileName' => 'fileName',
        'fileContent' => 'fileContent',
        'approverEmails' => 'approverEmails',
        'provisioning' => 'provisioning'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'method' => 'setMethod',
        'dns' => 'setDns',
        'fileName' => 'setFileName',
        'fileContent' => 'setFileContent',
        'approverEmails' => 'setApproverEmails',
        'provisioning' => 'setProvisioning'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'method' => 'getMethod',
        'dns' => 'getDns',
        'fileName' => 'getFileName',
        'fileContent' => 'getFileContent',
        'approverEmails' => 'getApproverEmails',
        'provisioning' => 'getProvisioning'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['dns'] = isset($data['dns']) ? $data['dns'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['fileContent'] = isset($data['fileContent']) ? $data['fileContent'] : null;
        $this->container['approverEmails'] = isset($data['approverEmails']) ? $data['approverEmails'] : null;
        $this->container['provisioning'] = isset($data['provisioning']) ? $data['provisioning'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The domain name the authentication data belongs to.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets method
     *
     * @return \Domainrobot\Model\AuthMethodConstants
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param \Domainrobot\Model\AuthMethodConstants $method The authentication method.
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets dns
     *
     * @return string
     */
    public function getDns()
    {
        return $this->container['dns'];
    }

    /**
     * Sets dns
     *
     * @param string $dns The dns entry for dns based authentication.
     *
     * @return $this
     */
    public function setDns($dns)
    {
        $this->container['dns'] = $dns;

        return $this;
    }

    /**
     * Gets fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
     * Sets fileName
     *
     * @param string $fileName The filename for file based authentication.
     *
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;

        return $this;
    }

    /**
     * Gets fileContent
     *
     * @return string
     */
    public function getFileContent()
    {
        return $this->container['fileContent'];
    }

    /**
     * Sets fileContent
     *
     * @param string $fileContent The content for file based authentication.
     *
     * @return $this
     */
    public function setFileContent($fileContent)
    {
        $this->container['fileContent'] = $fileContent;

        return $this;
    }

    /**
     * Gets approverEmails
     *
     * @return string[]
     */
    public function getApproverEmails()
    {
        return $this->container['approverEmails'];
    }

    /**
     * Sets approverEmails
     *
     * @param string[] $approverEmails The approver addresses for email based authentication.
     *
     * @return $this
     */
    public function setApproverEmails($approverEmails)
    {
        $this->container['approverEmails'] = $approverEmails;

        return $this;
    }

    /**
     * Gets provisioning
     *
     * @return bool
     */
    public function getProvisioning()
    {
        return $this->container['provisioning'];
    }

    /**
     * Sets provisioning
     *
     * @param bool $provisioning Activates automatic provisioning of the zone for dns based authentication.
     *
     * @return $this
     */
    public function setProvisioning($provisioning)
    {
        $this->container['provisioning'] = $provisioning;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
    
    /**
     * @param boolean $removeEmptyValues [remove all empty values if true]
     * @param array $retrieveKeys [list of keys to get back in any case]
     * 
     * Examples:
     * toArray() => returns only non empty values
     * toArray(true) => returns all values
     */
    public function toArray($retrieveAllValues = false){
        $container = $this->container;
        foreach($container as $key => &$value){
            if(!$retrieveAllValues && empty($value)){
                unset($container[$key]);
                continue;
            }
            
            if(gettype($value) === "object"){
                $value = $value->toArray();
            }
            if(is_array($value)){
                foreach($value as &$v){
                    if (gettype($v) === "object") {
                        $v = $v->toArray();
                    }
                }
            }
        };
        return $container;
    }
}


