<?php
/**
 * ReasonComment
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
 * ReasonComment Class Doc Comment
 *
 * @category Class
 * @description Reason for cancelling or rescheduling a self-ship appointment.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReasonComment
{
    /**
     * Possible values of this enum
     */
    public const APPOINTMENT_REQUESTED_BY_MISTAKE = 'APPOINTMENT_REQUESTED_BY_MISTAKE';

    public const VEHICLE_DELAY = 'VEHICLE_DELAY';

    public const SLOT_NOT_SUITABLE = 'SLOT_NOT_SUITABLE';

    public const OUTSIDE_CARRIER_BUSINESS_HOURS = 'OUTSIDE_CARRIER_BUSINESS_HOURS';

    public const UNFAVOURABLE_EXTERNAL_CONDITIONS = 'UNFAVOURABLE_EXTERNAL_CONDITIONS';

    public const PROCUREMENT_DELAY = 'PROCUREMENT_DELAY';

    public const SHIPPING_PLAN_CHANGED = 'SHIPPING_PLAN_CHANGED';

    public const INCREASED_QUANTITY = 'INCREASED_QUANTITY';

    public const OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues(): array
    {
        return [
            self::APPOINTMENT_REQUESTED_BY_MISTAKE,
            self::VEHICLE_DELAY,
            self::SLOT_NOT_SUITABLE,
            self::OUTSIDE_CARRIER_BUSINESS_HOURS,
            self::UNFAVOURABLE_EXTERNAL_CONDITIONS,
            self::PROCUREMENT_DELAY,
            self::SHIPPING_PLAN_CHANGED,
            self::INCREASED_QUANTITY,
            self::OTHER
        ];
    }
}


