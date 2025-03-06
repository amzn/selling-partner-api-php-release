<?php
/**
 * ContainerLabelFormat
 *
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping
 *
 * Use the Selling Partner API for Direct Fulfillment Shipping to access a direct fulfillment vendor's shipping data.
 *
 * The version of the OpenAPI document: 2021-12-28
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\vendor\df\shipping\v2021_12_28;
use SpApi\ObjectSerializer;
use SpApi\Model\ModelInterface;

/**
 * ContainerLabelFormat Class Doc Comment
 *
 * @category Class
 * @description The format of the container label.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContainerLabelFormat
{
    /**
     * Possible values of this enum
     */
    public const PNG = 'PNG';

    public const ZPL = 'ZPL';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::PNG,
            self::ZPL
        ];
    }
}


