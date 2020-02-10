<?php
/**
 * AuEligibilityIdTypeConstants
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
 * AuEligibilityIdTypeConstants Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuEligibilityIdTypeConstants
{
    /**
     * Possible values of this enum
     */
    const ACN = 'ACN';
    const ABN = 'ABN';
    const VIC_BN = 'VIC_BN';
    const NSW_BN = 'NSW_BN';
    const SA = 'SA';
    const BN = 'BN';
    const NT_BN = 'NT_BN';
    const WA_BN = 'WA_BN';
    const TAS_BN = 'TAS_BN';
    const ACT_BN = 'ACT_BN';
    const QLD_BN = 'QLD_BN';
    const TM = 'TM';
    const OTHER = 'OTHER';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACN,
            self::ABN,
            self::VIC_BN,
            self::NSW_BN,
            self::SA,
            self::BN,
            self::NT_BN,
            self::WA_BN,
            self::TAS_BN,
            self::ACT_BN,
            self::QLD_BN,
            self::TM,
            self::OTHER,
        ];
    }
}


