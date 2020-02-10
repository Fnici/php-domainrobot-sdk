<?php
/**
 * Id4MeAgentStatus
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
use \IXDomainRobot\ObjectSerializer;

/**
 * Id4MeAgentStatus Class Doc Comment
 *
 * @category Class
 * @package  IXDomainRobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Id4MeAgentStatus
{
    /**
     * Possible values of this enum
     */
    const PENDING = 'PENDING';
    const PENDING_SSL = 'PENDING_SSL';
    const PENDING_SSL_VERIFY = 'PENDING_SSL_VERIFY';
    const SUCCESS = 'SUCCESS';
    const FAILED = 'FAILED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::PENDING_SSL,
            self::PENDING_SSL_VERIFY,
            self::SUCCESS,
            self::FAILED,
        ];
    }
}


