<?php
/**
 * ClaimReason
 *
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Amazon Shipping API
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * The version of the OpenAPI document: v2
 * Contact: swa-api-core@amazon.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\shipping\v2;
use SpApi\ObjectSerializer;
use SpApi\Model\ModelInterface;

/**
 * ClaimReason Class Doc Comment
 *
 * @category Class
 * @description The reason for which shipper is filing the claim for a particular shipment.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ClaimReason
{
    /**
     * Possible values of this enum
     */
    public const LOST_IN_TRANSIT = 'LOST_IN_TRANSIT';

    public const DAMAGED_IN_TRANSIT = 'DAMAGED_IN_TRANSIT';

    public const DELIVERED_NOT_RECEIVED = 'DELIVERED_NOT_RECEIVED';

    public const ITEM_MISSING_SWITCHEROO = 'ITEM_MISSING_SWITCHEROO';

    public const COD_ABUSE = 'COD_ABUSE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::LOST_IN_TRANSIT,
            self::DAMAGED_IN_TRANSIT,
            self::DELIVERED_NOT_RECEIVED,
            self::ITEM_MISSING_SWITCHEROO,
            self::COD_ABUSE
        ];
    }
}


