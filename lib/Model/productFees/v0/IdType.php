<?php
/**
 * IdType
 *
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Product Fees
 *
 * The Selling Partner API for Product Fees lets you programmatically retrieve estimated fees for a product. You can then account for those fees in your pricing.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\productFees\v0;
use SpApi\ObjectSerializer;
use SpApi\Model\ModelInterface;

/**
 * IdType Class Doc Comment
 *
 * @category Class
 * @description The type of product identifier used in a &#x60;FeesEstimateByIdRequest&#x60;.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IdType
{
    /**
     * Possible values of this enum
     */
    public const ASIN = 'ASIN';

    public const SELLER_SKU = 'SellerSKU';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::ASIN,
            self::SELLER_SKU
        ];
    }
}


