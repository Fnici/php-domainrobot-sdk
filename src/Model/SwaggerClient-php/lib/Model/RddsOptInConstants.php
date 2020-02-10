<?php
/**
 * RddsOptInConstants
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
use \Swagger\Client\ObjectSerializer;

/**
 * RddsOptInConstants Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RddsOptInConstants
{
    /**
     * Possible values of this enum
     */
    const NOT_SET = 'NOT_SET';
    const OWNERC = 'OWNERC';
    const ADMINC = 'ADMINC';
    const OWNERC_ADMINC = 'OWNERC_ADMINC';
    const TECHC = 'TECHC';
    const OWNERC_TECHC = 'OWNERC_TECHC';
    const ADMINC_TECHC = 'ADMINC_TECHC';
    const ALL = 'ALL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOT_SET,
            self::OWNERC,
            self::ADMINC,
            self::OWNERC_ADMINC,
            self::TECHC,
            self::OWNERC_TECHC,
            self::ADMINC_TECHC,
            self::ALL,
        ];
    }
}


