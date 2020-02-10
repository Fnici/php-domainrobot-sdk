<?php
/**
 * UserProfileFlag
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
 * UserProfileFlag Class Doc Comment
 *
 * @category Class
 * @package  IXDomainRobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserProfileFlag
{
    /**
     * Possible values of this enum
     */
    const OPTIONAL = 'OPTIONAL';
    const FIX = 'FIX';
    const RECURSE = 'RECURSE';
    const HIDDEN = 'HIDDEN';
    const PARENT_FIX = 'PARENT_FIX';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OPTIONAL,
            self::FIX,
            self::RECURSE,
            self::HIDDEN,
            self::PARENT_FIX,
        ];
    }
}


