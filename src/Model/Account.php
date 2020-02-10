<?php
/**
 * Account
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
 * Account Class Doc Comment
 *
 * @category Class
 * @package  IXDomainRobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Account implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer' => '\IXDomainRobot\Model\GenericCustomer',
        'currentAccountBalance' => 'double',
        'runningTotal' => 'double',
        'creditLimit' => 'double',
        'currency' => 'string',
        'minRunningTotalNotification' => 'double',
        'minRunningTotalNotificationEmail' => 'string',
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'view' => '\IXDomainRobot\Model\CurrencyRate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customer' => null,
        'currentAccountBalance' => 'double',
        'runningTotal' => 'double',
        'creditLimit' => 'double',
        'currency' => null,
        'minRunningTotalNotification' => 'double',
        'minRunningTotalNotificationEmail' => null,
        'created' => 'date-time',
        'updated' => 'date-time',
        'view' => null
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
        'customer' => 'customer',
        'currentAccountBalance' => 'currentAccountBalance',
        'runningTotal' => 'runningTotal',
        'creditLimit' => 'creditLimit',
        'currency' => 'currency',
        'minRunningTotalNotification' => 'minRunningTotalNotification',
        'minRunningTotalNotificationEmail' => 'minRunningTotalNotificationEmail',
        'created' => 'created',
        'updated' => 'updated',
        'view' => 'view'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer' => 'setCustomer',
        'currentAccountBalance' => 'setCurrentAccountBalance',
        'runningTotal' => 'setRunningTotal',
        'creditLimit' => 'setCreditLimit',
        'currency' => 'setCurrency',
        'minRunningTotalNotification' => 'setMinRunningTotalNotification',
        'minRunningTotalNotificationEmail' => 'setMinRunningTotalNotificationEmail',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'view' => 'setView'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer' => 'getCustomer',
        'currentAccountBalance' => 'getCurrentAccountBalance',
        'runningTotal' => 'getRunningTotal',
        'creditLimit' => 'getCreditLimit',
        'currency' => 'getCurrency',
        'minRunningTotalNotification' => 'getMinRunningTotalNotification',
        'minRunningTotalNotificationEmail' => 'getMinRunningTotalNotificationEmail',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'view' => 'getView'
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
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['currentAccountBalance'] = isset($data['currentAccountBalance']) ? $data['currentAccountBalance'] : null;
        $this->container['runningTotal'] = isset($data['runningTotal']) ? $data['runningTotal'] : null;
        $this->container['creditLimit'] = isset($data['creditLimit']) ? $data['creditLimit'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['minRunningTotalNotification'] = isset($data['minRunningTotalNotification']) ? $data['minRunningTotalNotification'] : null;
        $this->container['minRunningTotalNotificationEmail'] = isset($data['minRunningTotalNotificationEmail']) ? $data['minRunningTotalNotificationEmail'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['view'] = isset($data['view']) ? $data['view'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
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
     * Gets customer
     *
     * @return \IXDomainRobot\Model\GenericCustomer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \IXDomainRobot\Model\GenericCustomer $customer The customer itself
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets currentAccountBalance
     *
     * @return double
     */
    public function getCurrentAccountBalance()
    {
        return $this->container['currentAccountBalance'];
    }

    /**
     * Sets currentAccountBalance
     *
     * @param double $currentAccountBalance The real account balance
     *
     * @return $this
     */
    public function setCurrentAccountBalance($currentAccountBalance)
    {
        $this->container['currentAccountBalance'] = $currentAccountBalance;

        return $this;
    }

    /**
     * Gets runningTotal
     *
     * @return double
     */
    public function getRunningTotal()
    {
        return $this->container['runningTotal'];
    }

    /**
     * Sets runningTotal
     *
     * @param double $runningTotal The current total, the amount of all finished and unfinished transactions
     *
     * @return $this
     */
    public function setRunningTotal($runningTotal)
    {
        $this->container['runningTotal'] = $runningTotal;

        return $this;
    }

    /**
     * Gets creditLimit
     *
     * @return double
     */
    public function getCreditLimit()
    {
        return $this->container['creditLimit'];
    }

    /**
     * Sets creditLimit
     *
     * @param double $creditLimit The credit limit of the account.
     *
     * @return $this
     */
    public function setCreditLimit($creditLimit)
    {
        $this->container['creditLimit'] = $creditLimit;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The currency of the account
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets minRunningTotalNotification
     *
     * @return double
     */
    public function getMinRunningTotalNotification()
    {
        return $this->container['minRunningTotalNotification'];
    }

    /**
     * Sets minRunningTotalNotification
     *
     * @param double $minRunningTotalNotification The minimum running total amount if a notification should be send
     *
     * @return $this
     */
    public function setMinRunningTotalNotification($minRunningTotalNotification)
    {
        $this->container['minRunningTotalNotification'] = $minRunningTotalNotification;

        return $this;
    }

    /**
     * Gets minRunningTotalNotificationEmail
     *
     * @return string
     */
    public function getMinRunningTotalNotificationEmail()
    {
        return $this->container['minRunningTotalNotificationEmail'];
    }

    /**
     * Sets minRunningTotalNotificationEmail
     *
     * @param string $minRunningTotalNotificationEmail The recipient of the notification limit email
     *
     * @return $this
     */
    public function setMinRunningTotalNotificationEmail($minRunningTotalNotificationEmail)
    {
        $this->container['minRunningTotalNotificationEmail'] = $minRunningTotalNotificationEmail;

        return $this;
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
     * @param \DateTime $created The date of the acccount creation
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
     * @param \DateTime $updated The date of the las update.
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets view
     *
     * @return \IXDomainRobot\Model\CurrencyRate
     */
    public function getView()
    {
        return $this->container['view'];
    }

    /**
     * Sets view
     *
     * @param \IXDomainRobot\Model\CurrencyRate $view The selected exchange for the account
     *
     * @return $this
     */
    public function setView($view)
    {
        $this->container['view'] = $view;

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


