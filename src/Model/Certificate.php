<?php
/**
 * Certificate
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
 * Certificate Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Certificate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Certificate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'owner' => '\Domainrobot\Model\BasicUser',
        'updater' => '\Domainrobot\Model\BasicUser',
        'extension' => '\Domainrobot\Model\ExtendedValidationExtension',
        'id' => 'int',
        'partnerOrderId' => 'string',
        'orderId' => 'string',
        'adminContact' => '\Domainrobot\Model\SslContact',
        'technicalContact' => '\Domainrobot\Model\SslContact',
        'name' => 'string',
        'lifetime' => '\Domainrobot\Model\TimePeriod',
        'software' => '\Domainrobot\Model\ServerSoftwareTypeConstants',
        'comment' => 'string',
        'csr' => 'string',
        'server' => 'string',
        'serialNumber' => 'string',
        'product' => 'string',
        'codeSigningType' => '\Domainrobot\Model\CodeSigningType',
        'certificateType' => '\Domainrobot\Model\CertificateType',
        'signatureHashAlgorithm' => '\Domainrobot\Model\SignatureHashAlgorithmConstants',
        'expire' => '\DateTime',
        'subjectAlternativeNames' => '\Domainrobot\Model\SubjectAlternativeName[]',
        'histories' => '\Domainrobot\Model\CertificateHistory[]',
        'certificationAuthority' => '\Domainrobot\Model\CaCertificate[]',
        'password' => 'string',
        'firstname' => 'string',
        'lastname' => 'string',
        'organizationUnitName' => 'string',
        'authentication' => '\Domainrobot\Model\CertAuthentication',
        'certificateTransparency' => 'bool',
        'certificateTransparencyPrivacy' => '\Domainrobot\Model\CertificateTransparencyPrivacyConstants',
        'domain' => 'string',
        'hasCsr' => 'bool',
        'idn' => 'string'
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
        'extension' => null,
        'id' => 'int32',
        'partnerOrderId' => null,
        'orderId' => null,
        'adminContact' => null,
        'technicalContact' => null,
        'name' => null,
        'lifetime' => null,
        'software' => null,
        'comment' => null,
        'csr' => null,
        'server' => null,
        'serialNumber' => null,
        'product' => null,
        'codeSigningType' => null,
        'certificateType' => null,
        'signatureHashAlgorithm' => null,
        'expire' => 'date-time',
        'subjectAlternativeNames' => null,
        'histories' => null,
        'certificationAuthority' => null,
        'password' => null,
        'firstname' => null,
        'lastname' => null,
        'organizationUnitName' => null,
        'authentication' => null,
        'certificateTransparency' => null,
        'certificateTransparencyPrivacy' => null,
        'domain' => null,
        'hasCsr' => null,
        'idn' => null
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
        'extension' => 'extension',
        'id' => 'id',
        'partnerOrderId' => 'partnerOrderId',
        'orderId' => 'orderId',
        'adminContact' => 'adminContact',
        'technicalContact' => 'technicalContact',
        'name' => 'name',
        'lifetime' => 'lifetime',
        'software' => 'software',
        'comment' => 'comment',
        'csr' => 'csr',
        'server' => 'server',
        'serialNumber' => 'serialNumber',
        'product' => 'product',
        'codeSigningType' => 'codeSigningType',
        'certificateType' => 'certificateType',
        'signatureHashAlgorithm' => 'signatureHashAlgorithm',
        'expire' => 'expire',
        'subjectAlternativeNames' => 'subjectAlternativeNames',
        'histories' => 'histories',
        'certificationAuthority' => 'certificationAuthority',
        'password' => 'password',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'organizationUnitName' => 'organizationUnitName',
        'authentication' => 'authentication',
        'certificateTransparency' => 'certificateTransparency',
        'certificateTransparencyPrivacy' => 'certificateTransparencyPrivacy',
        'domain' => 'domain',
        'hasCsr' => 'hasCsr',
        'idn' => 'idn'
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
        'extension' => 'setExtension',
        'id' => 'setId',
        'partnerOrderId' => 'setPartnerOrderId',
        'orderId' => 'setOrderId',
        'adminContact' => 'setAdminContact',
        'technicalContact' => 'setTechnicalContact',
        'name' => 'setName',
        'lifetime' => 'setLifetime',
        'software' => 'setSoftware',
        'comment' => 'setComment',
        'csr' => 'setCsr',
        'server' => 'setServer',
        'serialNumber' => 'setSerialNumber',
        'product' => 'setProduct',
        'codeSigningType' => 'setCodeSigningType',
        'certificateType' => 'setCertificateType',
        'signatureHashAlgorithm' => 'setSignatureHashAlgorithm',
        'expire' => 'setExpire',
        'subjectAlternativeNames' => 'setSubjectAlternativeNames',
        'histories' => 'setHistories',
        'certificationAuthority' => 'setCertificationAuthority',
        'password' => 'setPassword',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'organizationUnitName' => 'setOrganizationUnitName',
        'authentication' => 'setAuthentication',
        'certificateTransparency' => 'setCertificateTransparency',
        'certificateTransparencyPrivacy' => 'setCertificateTransparencyPrivacy',
        'domain' => 'setDomain',
        'hasCsr' => 'setHasCsr',
        'idn' => 'setIdn'
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
        'extension' => 'getExtension',
        'id' => 'getId',
        'partnerOrderId' => 'getPartnerOrderId',
        'orderId' => 'getOrderId',
        'adminContact' => 'getAdminContact',
        'technicalContact' => 'getTechnicalContact',
        'name' => 'getName',
        'lifetime' => 'getLifetime',
        'software' => 'getSoftware',
        'comment' => 'getComment',
        'csr' => 'getCsr',
        'server' => 'getServer',
        'serialNumber' => 'getSerialNumber',
        'product' => 'getProduct',
        'codeSigningType' => 'getCodeSigningType',
        'certificateType' => 'getCertificateType',
        'signatureHashAlgorithm' => 'getSignatureHashAlgorithm',
        'expire' => 'getExpire',
        'subjectAlternativeNames' => 'getSubjectAlternativeNames',
        'histories' => 'getHistories',
        'certificationAuthority' => 'getCertificationAuthority',
        'password' => 'getPassword',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'organizationUnitName' => 'getOrganizationUnitName',
        'authentication' => 'getAuthentication',
        'certificateTransparency' => 'getCertificateTransparency',
        'certificateTransparencyPrivacy' => 'getCertificateTransparencyPrivacy',
        'domain' => 'getDomain',
        'hasCsr' => 'getHasCsr',
        'idn' => 'getIdn'
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
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['partnerOrderId'] = isset($data['partnerOrderId']) ? $data['partnerOrderId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['adminContact'] = isset($data['adminContact']) ? $data['adminContact'] : null;
        $this->container['technicalContact'] = isset($data['technicalContact']) ? $data['technicalContact'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['lifetime'] = isset($data['lifetime']) ? $data['lifetime'] : null;
        $this->container['software'] = isset($data['software']) ? $data['software'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['csr'] = isset($data['csr']) ? $data['csr'] : null;
        $this->container['server'] = isset($data['server']) ? $data['server'] : null;
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['codeSigningType'] = isset($data['codeSigningType']) ? $data['codeSigningType'] : null;
        $this->container['certificateType'] = isset($data['certificateType']) ? $data['certificateType'] : null;
        $this->container['signatureHashAlgorithm'] = isset($data['signatureHashAlgorithm']) ? $data['signatureHashAlgorithm'] : null;
        $this->container['expire'] = isset($data['expire']) ? $data['expire'] : null;
        $this->container['subjectAlternativeNames'] = isset($data['subjectAlternativeNames']) ? $data['subjectAlternativeNames'] : null;
        $this->container['histories'] = isset($data['histories']) ? $data['histories'] : null;
        $this->container['certificationAuthority'] = isset($data['certificationAuthority']) ? $data['certificationAuthority'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['organizationUnitName'] = isset($data['organizationUnitName']) ? $data['organizationUnitName'] : null;
        $this->container['authentication'] = isset($data['authentication']) ? $data['authentication'] : null;
        $this->container['certificateTransparency'] = isset($data['certificateTransparency']) ? $data['certificateTransparency'] : null;
        $this->container['certificateTransparencyPrivacy'] = isset($data['certificateTransparencyPrivacy']) ? $data['certificateTransparencyPrivacy'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['hasCsr'] = isset($data['hasCsr']) ? $data['hasCsr'] : null;
        $this->container['idn'] = isset($data['idn']) ? $data['idn'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['lifetime'] === null) {
            $invalidProperties[] = "'lifetime' can't be null";
        }
        if ($this->container['software'] === null) {
            $invalidProperties[] = "'software' can't be null";
        }
        if ($this->container['product'] === null) {
            $invalidProperties[] = "'product' can't be null";
        }
        if (!is_null($this->container['password']) && !preg_match("/^[-a-zA-Z0-9 ]{8,32}$/", $this->container['password'])) {
            $invalidProperties[] = "invalid value for 'password', must be conform to the pattern /^[-a-zA-Z0-9 ]{8,32}$/.";
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
     * @return \Domainrobot\Model\BasicUser
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \Domainrobot\Model\BasicUser $owner The owner of the object.
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
     * @return \Domainrobot\Model\BasicUser
     */
    public function getUpdater()
    {
        return $this->container['updater'];
    }

    /**
     * Sets updater
     *
     * @param \Domainrobot\Model\BasicUser $updater The updating user of the object.
     *
     * @return $this
     */
    public function setUpdater($updater)
    {
        $this->container['updater'] = $updater;

        return $this;
    }

    /**
     * Gets extension
     *
     * @return \Domainrobot\Model\ExtendedValidationExtension
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param \Domainrobot\Model\ExtendedValidationExtension $extension The certificate extensions for comodo.
     *
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The ID of the certificate
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets partnerOrderId
     *
     * @return string
     */
    public function getPartnerOrderId()
    {
        return $this->container['partnerOrderId'];
    }

    /**
     * Sets partnerOrderId
     *
     * @param string $partnerOrderId The order number of the related request
     *
     * @return $this
     */
    public function setPartnerOrderId($partnerOrderId)
    {
        $this->container['partnerOrderId'] = $partnerOrderId;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string $orderId The unique certificate order number
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets adminContact
     *
     * @return \Domainrobot\Model\SslContact
     */
    public function getAdminContact()
    {
        return $this->container['adminContact'];
    }

    /**
     * Sets adminContact
     *
     * @param \Domainrobot\Model\SslContact $adminContact The administrative contact
     *
     * @return $this
     */
    public function setAdminContact($adminContact)
    {
        $this->container['adminContact'] = $adminContact;

        return $this;
    }

    /**
     * Gets technicalContact
     *
     * @return \Domainrobot\Model\SslContact
     */
    public function getTechnicalContact()
    {
        return $this->container['technicalContact'];
    }

    /**
     * Sets technicalContact
     *
     * @param \Domainrobot\Model\SslContact $technicalContact The technical contact
     *
     * @return $this
     */
    public function setTechnicalContact($technicalContact)
    {
        $this->container['technicalContact'] = $technicalContact;

        return $this;
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
     * @param string $name The name of the certificate
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets lifetime
     *
     * @return \Domainrobot\Model\TimePeriod
     */
    public function getLifetime()
    {
        return $this->container['lifetime'];
    }

    /**
     * Sets lifetime
     *
     * @param \Domainrobot\Model\TimePeriod $lifetime The certificate term in months
     *
     * @return $this
     */
    public function setLifetime($lifetime)
    {
        $this->container['lifetime'] = $lifetime;

        return $this;
    }

    /**
     * Gets software
     *
     * @return \Domainrobot\Model\ServerSoftwareTypeConstants
     */
    public function getSoftware()
    {
        return $this->container['software'];
    }

    /**
     * Sets software
     *
     * @param \Domainrobot\Model\ServerSoftwareTypeConstants $software The webserver software in use, relevant values: 'II5' for Mircosoft, 'APACHE2' for Linux
     *
     * @return $this
     */
    public function setSoftware($software)
    {
        $this->container['software'] = $software;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment A custom field. Can only be updated via PUT /certificate/{id}/_comment. Requires appropriate ACLs.
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets csr
     *
     * @return string
     */
    public function getCsr()
    {
        return $this->container['csr'];
    }

    /**
     * Sets csr
     *
     * @param string $csr CSR - Key (Certificate Signing Request)
     *
     * @return $this
     */
    public function setCsr($csr)
    {
        $this->container['csr'] = $csr;

        return $this;
    }

    /**
     * Gets server
     *
     * @return string
     */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
     * Sets server
     *
     * @param string $server The certificate
     *
     * @return $this
     */
    public function setServer($server)
    {
        $this->container['server'] = $server;

        return $this;
    }

    /**
     * Gets serialNumber
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
     * Sets serialNumber
     *
     * @param string $serialNumber Serial number of the certificate
     *
     * @return $this
     */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;

        return $this;
    }

    /**
     * Gets product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string $product The ordered product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets codeSigningType
     *
     * @return \Domainrobot\Model\CodeSigningType
     */
    public function getCodeSigningType()
    {
        return $this->container['codeSigningType'];
    }

    /**
     * Sets codeSigningType
     *
     * @param \Domainrobot\Model\CodeSigningType $codeSigningType The type of code signing
     *
     * @return $this
     */
    public function setCodeSigningType($codeSigningType)
    {
        $this->container['codeSigningType'] = $codeSigningType;

        return $this;
    }

    /**
     * Gets certificateType
     *
     * @return \Domainrobot\Model\CertificateType
     */
    public function getCertificateType()
    {
        return $this->container['certificateType'];
    }

    /**
     * Sets certificateType
     *
     * @param \Domainrobot\Model\CertificateType $certificateType The type of the certificate
     *
     * @return $this
     */
    public function setCertificateType($certificateType)
    {
        $this->container['certificateType'] = $certificateType;

        return $this;
    }

    /**
     * Gets signatureHashAlgorithm
     *
     * @return \Domainrobot\Model\SignatureHashAlgorithmConstants
     */
    public function getSignatureHashAlgorithm()
    {
        return $this->container['signatureHashAlgorithm'];
    }

    /**
     * Sets signatureHashAlgorithm
     *
     * @param \Domainrobot\Model\SignatureHashAlgorithmConstants $signatureHashAlgorithm The signature hash algorithm which was used
     *
     * @return $this
     */
    public function setSignatureHashAlgorithm($signatureHashAlgorithm)
    {
        $this->container['signatureHashAlgorithm'] = $signatureHashAlgorithm;

        return $this;
    }

    /**
     * Gets expire
     *
     * @return \DateTime
     */
    public function getExpire()
    {
        return $this->container['expire'];
    }

    /**
     * Sets expire
     *
     * @param \DateTime $expire The date on which the certificate expires
     *
     * @return $this
     */
    public function setExpire($expire)
    {
        $this->container['expire'] = $expire;

        return $this;
    }

    /**
     * Gets subjectAlternativeNames
     *
     * @return \Domainrobot\Model\SubjectAlternativeName[]
     */
    public function getSubjectAlternativeNames()
    {
        return $this->container['subjectAlternativeNames'];
    }

    /**
     * Sets subjectAlternativeNames
     *
     * @param \Domainrobot\Model\SubjectAlternativeName[] $subjectAlternativeNames Subject Alternative Names (SANs)
     *
     * @return $this
     */
    public function setSubjectAlternativeNames($subjectAlternativeNames)
    {
        $this->container['subjectAlternativeNames'] = $subjectAlternativeNames;

        return $this;
    }

    /**
     * Gets histories
     *
     * @return \Domainrobot\Model\CertificateHistory[]
     */
    public function getHistories()
    {
        return $this->container['histories'];
    }

    /**
     * Sets histories
     *
     * @param \Domainrobot\Model\CertificateHistory[] $histories The history of the certificate (old certificate versions)
     *
     * @return $this
     */
    public function setHistories($histories)
    {
        $this->container['histories'] = $histories;

        return $this;
    }

    /**
     * Gets certificationAuthority
     *
     * @return \Domainrobot\Model\CaCertificate[]
     */
    public function getCertificationAuthority()
    {
        return $this->container['certificationAuthority'];
    }

    /**
     * Sets certificationAuthority
     *
     * @param \Domainrobot\Model\CaCertificate[] $certificationAuthority The certificate authority chain
     *
     * @return $this
     */
    public function setCertificationAuthority($certificationAuthority)
    {
        $this->container['certificationAuthority'] = $certificationAuthority;

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
     * @param string $password The password that is to be used for the certificate download. Only for S/MIME!
     *
     * @return $this
     */
    public function setPassword($password)
    {

        if (!is_null($password) && (!preg_match("/^[-a-zA-Z0-9 ]{8,32}$/", $password))) {
            throw new \InvalidArgumentException("invalid value for $password when calling Certificate., must conform to the pattern /^[-a-zA-Z0-9 ]{8,32}$/.");
        }

        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string $firstname First Name. Only for S/MIME!
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname Last Name. Only for S/MIME!
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets organizationUnitName
     *
     * @return string
     */
    public function getOrganizationUnitName()
    {
        return $this->container['organizationUnitName'];
    }

    /**
     * Sets organizationUnitName
     *
     * @param string $organizationUnitName The organization unit. Only for S/MIME!
     *
     * @return $this
     */
    public function setOrganizationUnitName($organizationUnitName)
    {
        $this->container['organizationUnitName'] = $organizationUnitName;

        return $this;
    }

    /**
     * Gets authentication
     *
     * @return \Domainrobot\Model\CertAuthentication
     */
    public function getAuthentication()
    {
        return $this->container['authentication'];
    }

    /**
     * Sets authentication
     *
     * @param \Domainrobot\Model\CertAuthentication $authentication The authentication of the certificate
     *
     * @return $this
     */
    public function setAuthentication($authentication)
    {
        $this->container['authentication'] = $authentication;

        return $this;
    }

    /**
     * Gets certificateTransparency
     *
     * @return bool
     */
    public function getCertificateTransparency()
    {
        return $this->container['certificateTransparency'];
    }

    /**
     * Sets certificateTransparency
     *
     * @param bool $certificateTransparency Activates the certificate transparency for a certificate. Default is \"True\".
     *
     * @return $this
     */
    public function setCertificateTransparency($certificateTransparency)
    {
        $this->container['certificateTransparency'] = $certificateTransparency;

        return $this;
    }

    /**
     * Gets certificateTransparencyPrivacy
     *
     * @return \Domainrobot\Model\CertificateTransparencyPrivacyConstants
     */
    public function getCertificateTransparencyPrivacy()
    {
        return $this->container['certificateTransparencyPrivacy'];
    }

    /**
     * Sets certificateTransparencyPrivacy
     *
     * @param \Domainrobot\Model\CertificateTransparencyPrivacyConstants $certificateTransparencyPrivacy The privacy settings for certificate transparency. Default is \"Redacted\".
     *
     * @return $this
     */
    public function setCertificateTransparencyPrivacy($certificateTransparencyPrivacy)
    {
        $this->container['certificateTransparencyPrivacy'] = $certificateTransparencyPrivacy;

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
     * @param string $domain The domain, which the redirect belongs.
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets hasCsr
     *
     * @return bool
     */
    public function getHasCsr()
    {
        return $this->container['hasCsr'];
    }

    /**
     * Sets hasCsr
     *
     * @param bool $hasCsr States if a self created CSR is to be used for S/MIME. Default is false. Only for S/MIME!
     *
     * @return $this
     */
    public function setHasCsr($hasCsr)
    {
        $this->container['hasCsr'] = $hasCsr;

        return $this;
    }

    /**
     * Gets idn
     *
     * @return string
     */
    public function getIdn()
    {
        return $this->container['idn'];
    }

    /**
     * Sets idn
     *
     * @param string $idn The IDN version of the URL of the target domain.
     *
     * @return $this
     */
    public function setIdn($idn)
    {
        $this->container['idn'] = $idn;

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


