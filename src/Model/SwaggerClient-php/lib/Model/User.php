<?php
/**
 * User
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
 * User Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class User implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'context' => 'int',
        'password' => 'string',
        'default_email' => 'string',
        'status' => 'int',
        'substatus' => 'int',
        'auth_type' => '\Swagger\Client\Model\AuthType',
        'details' => '\Swagger\Client\Model\UserDetails',
        'lock' => '\Swagger\Client\Model\UserLock',
        'acls' => '\Swagger\Client\Model\UserAcls',
        'profiles' => '\Swagger\Client\Model\UserProfileViews',
        'ancestors' => '\Swagger\Client\Model\BasicUser[]',
        'customer' => '\Swagger\Client\Model\BasicCustomer',
        'name_server_groups' => '\Swagger\Client\Model\VirtualNameServerGroup[]',
        'subscriptions' => '\Swagger\Client\Model\Subscription[]',
        'applications' => '\Swagger\Client\Model\TrustedApplication[]',
        'user' => 'string',
        'language' => 'string',
        'parent' => '\Swagger\Client\Model\User'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => 'date-time',
        'updated' => 'date-time',
        'context' => 'int32',
        'password' => null,
        'default_email' => null,
        'status' => 'int32',
        'substatus' => 'int32',
        'auth_type' => null,
        'details' => null,
        'lock' => null,
        'acls' => null,
        'profiles' => null,
        'ancestors' => null,
        'customer' => null,
        'name_server_groups' => null,
        'subscriptions' => null,
        'applications' => null,
        'user' => null,
        'language' => null,
        'parent' => null
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
        'context' => 'context',
        'password' => 'password',
        'default_email' => 'defaultEmail',
        'status' => 'status',
        'substatus' => 'substatus',
        'auth_type' => 'authType',
        'details' => 'details',
        'lock' => 'lock',
        'acls' => 'acls',
        'profiles' => 'profiles',
        'ancestors' => 'ancestors',
        'customer' => 'customer',
        'name_server_groups' => 'nameServerGroups',
        'subscriptions' => 'subscriptions',
        'applications' => 'applications',
        'user' => 'user',
        'language' => 'language',
        'parent' => 'parent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'context' => 'setContext',
        'password' => 'setPassword',
        'default_email' => 'setDefaultEmail',
        'status' => 'setStatus',
        'substatus' => 'setSubstatus',
        'auth_type' => 'setAuthType',
        'details' => 'setDetails',
        'lock' => 'setLock',
        'acls' => 'setAcls',
        'profiles' => 'setProfiles',
        'ancestors' => 'setAncestors',
        'customer' => 'setCustomer',
        'name_server_groups' => 'setNameServerGroups',
        'subscriptions' => 'setSubscriptions',
        'applications' => 'setApplications',
        'user' => 'setUser',
        'language' => 'setLanguage',
        'parent' => 'setParent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'context' => 'getContext',
        'password' => 'getPassword',
        'default_email' => 'getDefaultEmail',
        'status' => 'getStatus',
        'substatus' => 'getSubstatus',
        'auth_type' => 'getAuthType',
        'details' => 'getDetails',
        'lock' => 'getLock',
        'acls' => 'getAcls',
        'profiles' => 'getProfiles',
        'ancestors' => 'getAncestors',
        'customer' => 'getCustomer',
        'name_server_groups' => 'getNameServerGroups',
        'subscriptions' => 'getSubscriptions',
        'applications' => 'getApplications',
        'user' => 'getUser',
        'language' => 'getLanguage',
        'parent' => 'getParent'
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
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['default_email'] = isset($data['default_email']) ? $data['default_email'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['substatus'] = isset($data['substatus']) ? $data['substatus'] : null;
        $this->container['auth_type'] = isset($data['auth_type']) ? $data['auth_type'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['lock'] = isset($data['lock']) ? $data['lock'] : null;
        $this->container['acls'] = isset($data['acls']) ? $data['acls'] : null;
        $this->container['profiles'] = isset($data['profiles']) ? $data['profiles'] : null;
        $this->container['ancestors'] = isset($data['ancestors']) ? $data['ancestors'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['name_server_groups'] = isset($data['name_server_groups']) ? $data['name_server_groups'] : null;
        $this->container['subscriptions'] = isset($data['subscriptions']) ? $data['subscriptions'] : null;
        $this->container['applications'] = isset($data['applications']) ? $data['applications'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['context'] === null) {
            $invalidProperties[] = "'context' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if (!preg_match("/^[^_].*/", $this->container['user'])) {
            $invalidProperties[] = "invalid value for 'user', must be conform to the pattern /^[^_].*/.";
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
     * @param \DateTime $created The user created date.
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
     * @param \DateTime $updated The user updated date.
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets context
     *
     * @return int
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param int $context The context.
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password The password.
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets default_email
     *
     * @return string
     */
    public function getDefaultEmail()
    {
        return $this->container['default_email'];
    }

    /**
     * Sets default_email
     *
     * @param string $default_email The default email.
     *
     * @return $this
     */
    public function setDefaultEmail($default_email)
    {
        $this->container['default_email'] = $default_email;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status The status.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets substatus
     *
     * @return int
     */
    public function getSubstatus()
    {
        return $this->container['substatus'];
    }

    /**
     * Sets substatus
     *
     * @param int $substatus The substatus.
     *
     * @return $this
     */
    public function setSubstatus($substatus)
    {
        $this->container['substatus'] = $substatus;

        return $this;
    }

    /**
     * Gets auth_type
     *
     * @return \Swagger\Client\Model\AuthType
     */
    public function getAuthType()
    {
        return $this->container['auth_type'];
    }

    /**
     * Sets auth_type
     *
     * @param \Swagger\Client\Model\AuthType $auth_type The users authorization method.
     *
     * @return $this
     */
    public function setAuthType($auth_type)
    {
        $this->container['auth_type'] = $auth_type;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \Swagger\Client\Model\UserDetails
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Swagger\Client\Model\UserDetails $details The user details.
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets lock
     *
     * @return \Swagger\Client\Model\UserLock
     */
    public function getLock()
    {
        return $this->container['lock'];
    }

    /**
     * Sets lock
     *
     * @param \Swagger\Client\Model\UserLock $lock The lock status of the user.
     *
     * @return $this
     */
    public function setLock($lock)
    {
        $this->container['lock'] = $lock;

        return $this;
    }

    /**
     * Gets acls
     *
     * @return \Swagger\Client\Model\UserAcls
     */
    public function getAcls()
    {
        return $this->container['acls'];
    }

    /**
     * Sets acls
     *
     * @param \Swagger\Client\Model\UserAcls $acls Wrapper for the user acls.
     *
     * @return $this
     */
    public function setAcls($acls)
    {
        $this->container['acls'] = $acls;

        return $this;
    }

    /**
     * Gets profiles
     *
     * @return \Swagger\Client\Model\UserProfileViews
     */
    public function getProfiles()
    {
        return $this->container['profiles'];
    }

    /**
     * Sets profiles
     *
     * @param \Swagger\Client\Model\UserProfileViews $profiles Wrapper for the user profiles.
     *
     * @return $this
     */
    public function setProfiles($profiles)
    {
        $this->container['profiles'] = $profiles;

        return $this;
    }

    /**
     * Gets ancestors
     *
     * @return \Swagger\Client\Model\BasicUser[]
     */
    public function getAncestors()
    {
        return $this->container['ancestors'];
    }

    /**
     * Sets ancestors
     *
     * @param \Swagger\Client\Model\BasicUser[] $ancestors The ancestors of the user.
     *
     * @return $this
     */
    public function setAncestors($ancestors)
    {
        $this->container['ancestors'] = $ancestors;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Swagger\Client\Model\BasicCustomer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Swagger\Client\Model\BasicCustomer $customer The customer belonging to the user.
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets name_server_groups
     *
     * @return \Swagger\Client\Model\VirtualNameServerGroup[]
     */
    public function getNameServerGroups()
    {
        return $this->container['name_server_groups'];
    }

    /**
     * Sets name_server_groups
     *
     * @param \Swagger\Client\Model\VirtualNameServerGroup[] $name_server_groups The available name server groups
     *
     * @return $this
     */
    public function setNameServerGroups($name_server_groups)
    {
        $this->container['name_server_groups'] = $name_server_groups;

        return $this;
    }

    /**
     * Gets subscriptions
     *
     * @return \Swagger\Client\Model\Subscription[]
     */
    public function getSubscriptions()
    {
        return $this->container['subscriptions'];
    }

    /**
     * Sets subscriptions
     *
     * @param \Swagger\Client\Model\Subscription[] $subscriptions Wrapper for the subscriptions.
     *
     * @return $this
     */
    public function setSubscriptions($subscriptions)
    {
        $this->container['subscriptions'] = $subscriptions;

        return $this;
    }

    /**
     * Gets applications
     *
     * @return \Swagger\Client\Model\TrustedApplication[]
     */
    public function getApplications()
    {
        return $this->container['applications'];
    }

    /**
     * Sets applications
     *
     * @param \Swagger\Client\Model\TrustedApplication[] $applications Holds the used applications.
     *
     * @return $this
     */
    public function setApplications($applications)
    {
        $this->container['applications'] = $applications;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string $user The user name.
     *
     * @return $this
     */
    public function setUser($user)
    {

        if ((!preg_match("/^[^_].*/", $user))) {
            throw new \InvalidArgumentException("invalid value for $user when calling User., must conform to the pattern /^[^_].*/.");
        }

        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language The language.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return \Swagger\Client\Model\User
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \Swagger\Client\Model\User $parent The parent.
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

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


