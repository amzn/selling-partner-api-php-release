<?php
/**
 * AllOwnersConstraint
 *
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\fulfillment\inbound\v2024_03_20;
use SpApi\ObjectSerializer;
use SpApi\Model\ModelInterface;

/**
 * AllOwnersConstraint Class Doc Comment
 *
 * @category Class
 * @description A constraint that applies to all owners. If no constraint is specified, defer to any individual owner constraints.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AllOwnersConstraint
{
    /**
     * Possible values of this enum
     */
    public const MUST_MATCH = 'MUST_MATCH';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::MUST_MATCH
        ];
    }
}


