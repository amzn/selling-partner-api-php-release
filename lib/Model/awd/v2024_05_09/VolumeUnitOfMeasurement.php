<?php
/**
 * VolumeUnitOfMeasurement
 *
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Selling Partner API for Amazon Warehousing and Distribution
 *
 * The Selling Partner API for Amazon Warehousing and Distribution (AWD) provides programmatic access to information about AWD shipments and inventory.
 *
 * The version of the OpenAPI document: 2024-05-09
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\awd\v2024_05_09;
use SpApi\ObjectSerializer;
use SpApi\Model\ModelInterface;

/**
 * VolumeUnitOfMeasurement Class Doc Comment
 *
 * @category Class
 * @description Unit of measurement for the package volume.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VolumeUnitOfMeasurement
{
    /**
     * Possible values of this enum
     */
    public const CU_IN = 'CU_IN';

    public const CBM = 'CBM';

    public const CC = 'CC';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::CU_IN,
            self::CBM,
            self::CC
        ];
    }
}


