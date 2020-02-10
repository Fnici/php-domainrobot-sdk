<?php
/**
 * JsonResponseDataRedirect
 *
 * PHP version 5
 *
 * @category Class
 * @package  IXDomainRobot
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

namespace IXDomainRobot\Model;

use \ArrayAccess;
use \IXDomainRobot\ObjectSerializer;

/**
 * JsonResponseDataRedirect Class Doc Comment
 *
 * @category Class
 * @package  IXDomainRobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JsonResponseDataRedirect implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JsonResponseDataRedirect';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'stid' => 'string',
        'messages' => '\IXDomainRobot\Model\Message[]',
        'status' => '\IXDomainRobot\Model\ResponseStatus',
        'object' => '\IXDomainRobot\Model\ResponseObject',
        'data' => '\IXDomainRobot\Model\Redirect[]',
        'ctid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'stid' => null,
        'messages' => null,
        'status' => null,
        'object' => null,
        'data' => null,
        'ctid' => null
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
        'stid' => 'stid',
        'messages' => 'messages',
        'status' => 'status',
        'object' => 'object',
        'data' => 'data',
        'ctid' => 'ctid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'stid' => 'setStid',
        'messages' => 'setMessages',
        'status' => 'setStatus',
        'object' => 'setObject',
        'data' => 'setData',
        'ctid' => 'setCtid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'stid' => 'getStid',
        'messages' => 'getMessages',
        'status' => 'getStatus',
        'object' => 'getObject',
        'data' => 'getData',
        'ctid' => 'getCtid'
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
        $this->container['stid'] = isset($data['stid']) ? $data['stid'] : null;
        $this->container['messages'] = isset($data['messages']) ? $data['messages'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['ctid'] = isset($data['ctid']) ? $data['ctid'] : null;
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
     * Gets stid
     *
     * @return string
     */
    public function getStid()
    {
        return $this->container['stid'];
    }

    /**
     * Sets stid
     *
     * @param string $stid The server transaction id for the response.
     *
     * @return $this
     */
    public function setStid($stid)
    {
        $this->container['stid'] = $stid;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return \IXDomainRobot\Model\Message[]
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \IXDomainRobot\Model\Message[] $messages The messages belonging to the response.
     *
     * @return $this
     */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \IXDomainRobot\Model\ResponseStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \IXDomainRobot\Model\ResponseStatus $status The status of the response.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets object
     *
     * @return \IXDomainRobot\Model\ResponseObject
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param \IXDomainRobot\Model\ResponseObject $object The object of the response.
     *
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \IXDomainRobot\Model\Redirect[]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \IXDomainRobot\Model\Redirect[] $data The data for the response. The type of the objects are depending on the request and are also specified in the responseObject value of the response.
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets ctid
     *
     * @return string
     */
    public function getCtid()
    {
        return $this->container['ctid'];
    }

    /**
     * Sets ctid
     *
     * @param string $ctid The client transaction id for the response.
     *
     * @return $this
     */
    public function setCtid($ctid)
    {
        $this->container['ctid'] = $ctid;

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


