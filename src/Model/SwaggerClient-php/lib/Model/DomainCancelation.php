<?php
/**
 * DomainCancelation
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * DomainCancelation Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DomainCancelation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DomainCancelation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'owner' => '\Swagger\Client\Model\BasicUser',
        'updater' => '\Swagger\Client\Model\BasicUser',
        'domain' => 'string',
        'registry_when' => '\DateTime',
        'gaining_registrar' => 'string',
        'disconnect' => 'bool',
        'notice' => 'string',
        'log_id' => 'int',
        'registry_status' => '\Swagger\Client\Model\RegistryStatusConstants',
        'type' => '\Swagger\Client\Model\CancelationTypeConstants',
        'execution' => '\Swagger\Client\Model\ExecutionTypeConstants'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => 'date-time',
        'updated' => 'date-time',
        'owner' => null,
        'updater' => null,
        'domain' => null,
        'registry_when' => 'date-time',
        'gaining_registrar' => null,
        'disconnect' => null,
        'notice' => null,
        'log_id' => 'int64',
        'registry_status' => null,
        'type' => null,
        'execution' => null
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
        'created' => 'created',
        'updated' => 'updated',
        'owner' => 'owner',
        'updater' => 'updater',
        'domain' => 'domain',
        'registry_when' => 'registryWhen',
        'gaining_registrar' => 'gainingRegistrar',
        'disconnect' => 'disconnect',
        'notice' => 'notice',
        'log_id' => 'logId',
        'registry_status' => 'registryStatus',
        'type' => 'type',
        'execution' => 'execution'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'owner' => 'setOwner',
        'updater' => 'setUpdater',
        'domain' => 'setDomain',
        'registry_when' => 'setRegistryWhen',
        'gaining_registrar' => 'setGainingRegistrar',
        'disconnect' => 'setDisconnect',
        'notice' => 'setNotice',
        'log_id' => 'setLogId',
        'registry_status' => 'setRegistryStatus',
        'type' => 'setType',
        'execution' => 'setExecution'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'owner' => 'getOwner',
        'updater' => 'getUpdater',
        'domain' => 'getDomain',
        'registry_when' => 'getRegistryWhen',
        'gaining_registrar' => 'getGainingRegistrar',
        'disconnect' => 'getDisconnect',
        'notice' => 'getNotice',
        'log_id' => 'getLogId',
        'registry_status' => 'getRegistryStatus',
        'type' => 'getType',
        'execution' => 'getExecution'
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
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['updater'] = isset($data['updater']) ? $data['updater'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['registry_when'] = isset($data['registry_when']) ? $data['registry_when'] : null;
        $this->container['gaining_registrar'] = isset($data['gaining_registrar']) ? $data['gaining_registrar'] : null;
        $this->container['disconnect'] = isset($data['disconnect']) ? $data['disconnect'] : null;
        $this->container['notice'] = isset($data['notice']) ? $data['notice'] : null;
        $this->container['log_id'] = isset($data['log_id']) ? $data['log_id'] : null;
        $this->container['registry_status'] = isset($data['registry_status']) ? $data['registry_status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['execution'] = isset($data['execution']) ? $data['execution'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
        if ($this->container['registry_when'] === null) {
            $invalidProperties[] = "'registry_when' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['execution'] === null) {
            $invalidProperties[] = "'execution' can't be null";
        }
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
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created The created date.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime $updated The updated date.
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \Swagger\Client\Model\BasicUser
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \Swagger\Client\Model\BasicUser $owner The owner of the object.
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets updater
     *
     * @return \Swagger\Client\Model\BasicUser
     */
    public function getUpdater()
    {
        return $this->container['updater'];
    }

    /**
     * Sets updater
     *
     * @param \Swagger\Client\Model\BasicUser $updater The updater of the object.
     *
     * @return $this
     */
    public function setUpdater($updater)
    {
        $this->container['updater'] = $updater;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain Lorem Ipsum
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets registry_when
     *
     * @return \DateTime
     */
    public function getRegistryWhen()
    {
        return $this->container['registry_when'];
    }

    /**
     * Sets registry_when
     *
     * @param \DateTime $registry_when The date of the execution. Only necessary when ExecutionType equals DATE.
     *
     * @return $this
     */
    public function setRegistryWhen($registry_when)
    {
        $this->container['registry_when'] = $registry_when;

        return $this;
    }

    /**
     * Gets gaining_registrar
     *
     * @return string
     */
    public function getGainingRegistrar()
    {
        return $this->container['gaining_registrar'];
    }

    /**
     * Sets gaining_registrar
     *
     * @param string $gaining_registrar Lorem Ipsum
     *
     * @return $this
     */
    public function setGainingRegistrar($gaining_registrar)
    {
        $this->container['gaining_registrar'] = $gaining_registrar;

        return $this;
    }

    /**
     * Gets disconnect
     *
     * @return bool
     */
    public function getDisconnect()
    {
        return $this->container['disconnect'];
    }

    /**
     * Sets disconnect
     *
     * @param bool $disconnect Lorem Ipsum
     *
     * @return $this
     */
    public function setDisconnect($disconnect)
    {
        $this->container['disconnect'] = $disconnect;

        return $this;
    }

    /**
     * Gets notice
     *
     * @return string
     */
    public function getNotice()
    {
        return $this->container['notice'];
    }

    /**
     * Sets notice
     *
     * @param string $notice Some remarks
     *
     * @return $this
     */
    public function setNotice($notice)
    {
        $this->container['notice'] = $notice;

        return $this;
    }

    /**
     * Gets log_id
     *
     * @return int
     */
    public function getLogId()
    {
        return $this->container['log_id'];
    }

    /**
     * Sets log_id
     *
     * @param int $log_id Lorem Ipsum
     *
     * @return $this
     */
    public function setLogId($log_id)
    {
        $this->container['log_id'] = $log_id;

        return $this;
    }

    /**
     * Gets registry_status
     *
     * @return \Swagger\Client\Model\RegistryStatusConstants
     */
    public function getRegistryStatus()
    {
        return $this->container['registry_status'];
    }

    /**
     * Sets registry_status
     *
     * @param \Swagger\Client\Model\RegistryStatusConstants $registry_status Lorem Ipsum
     *
     * @return $this
     */
    public function setRegistryStatus($registry_status)
    {
        $this->container['registry_status'] = $registry_status;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Swagger\Client\Model\CancelationTypeConstants
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Swagger\Client\Model\CancelationTypeConstants $type The cancelation type. TRANSIT is only possible for certain TLDs.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets execution
     *
     * @return \Swagger\Client\Model\ExecutionTypeConstants
     */
    public function getExecution()
    {
        return $this->container['execution'];
    }

    /**
     * Sets execution
     *
     * @param \Swagger\Client\Model\ExecutionTypeConstants $execution The execution type.
     *
     * @return $this
     */
    public function setExecution($execution)
    {
        $this->container['execution'] = $execution;

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
     * toArray() => returns all values
     * toArray(true) => returns only non empty values
     * toArray(true, ["key"]) => returns all non empty values and "key" even if empty
     * toArray(true, ["key:no_empty_value"]) => returns all non empty values and "key" if not empty
     */
    public function toArray($removeEmptyValues = false, $retrieveKeys = []){
        $container = $this->container;
        foreach($container as $key => &$value){
            if(!in_array($key, $retrieveKeys) && $removeEmptyValues && empty($value)){
                unset($container[$key]);
                continue;
            }
            if(in_array($key.":no_empty_value", $retrieveKeys)){
                unset($container[$key]);
                continue;
            }
            if(gettype($value) === "object"){
                $value = $value->toArray();
            }
        };
        return $container;
    }
}

