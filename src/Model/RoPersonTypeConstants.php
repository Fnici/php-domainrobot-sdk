<?php
/**
 * RoPersonTypeConstants
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
 * RoPersonTypeConstants Class Doc Comment
 *
 * @category Class
 * @package  IXDomainRobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoPersonTypeConstants
{
    /**
     * Possible values of this enum
     */
    const P = 'P';
    const AP = 'AP';
    const NC = 'NC';
    const C = 'C';
    const GI = 'GI';
    const PI = 'PI';
    const O = 'O';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::P,
            self::AP,
            self::NC,
            self::C,
            self::GI,
            self::PI,
            self::O,
        ];
    }
}


