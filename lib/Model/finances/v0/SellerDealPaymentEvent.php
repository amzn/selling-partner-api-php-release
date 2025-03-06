<?php
/**
 * SellerDealPaymentEvent
 *
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace SpApi\Model\finances\v0;

use
ArrayAccess;
use SpApi\ObjectSerializer;
use SpApi\Model\ModelInterface;

/**
 * SellerDealPaymentEvent Class Doc Comment
 *
 * @category Class
 * @description An event linked to the payment of a fee related to the specified deal.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SellerDealPaymentEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SellerDealPaymentEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
             'posted_date' => '\DateTime',
             'deal_id' => 'string',
             'deal_description' => 'string',
             'event_type' => 'string',
             'fee_type' => 'string',
             'fee_amount' => '\SpApi\Model\finances\v0\Currency',
             'tax_amount' => '\SpApi\Model\finances\v0\Currency',
             'total_amount' => '\SpApi\Model\finances\v0\Currency'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
            'posted_date' => 'date-time',
            'deal_id' => null,
            'deal_description' => null,
            'event_type' => null,
            'fee_type' => null,
            'fee_amount' => null,
            'tax_amount' => null,
            'total_amount' => null    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'posted_date' => true,
        'deal_id' => true,
        'deal_description' => true,
        'event_type' => true,
        'fee_type' => true,
        'fee_amount' => true,
        'tax_amount' => true,
        'total_amount' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'posted_date' => 'postedDate',
                'deal_id' => 'dealId',
                'deal_description' => 'dealDescription',
                'event_type' => 'eventType',
                'fee_type' => 'feeType',
                'fee_amount' => 'feeAmount',
                'tax_amount' => 'taxAmount',
                'total_amount' => 'totalAmount'
        
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'posted_date' => 'setPostedDate',
        'deal_id' => 'setDealId',
        'deal_description' => 'setDealDescription',
        'event_type' => 'setEventType',
        'fee_type' => 'setFeeType',
        'fee_amount' => 'setFeeAmount',
        'tax_amount' => 'setTaxAmount',
        'total_amount' => 'setTotalAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'posted_date' => 'getPostedDate',
        'deal_id' => 'getDealId',
        'deal_description' => 'getDealDescription',
        'event_type' => 'getEventType',
        'fee_type' => 'getFeeType',
        'fee_amount' => 'getFeeAmount',
        'tax_amount' => 'getTaxAmount',
        'total_amount' => 'getTotalAmount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('posted_date', $data ?? [], null);
        $this->setIfExists('deal_id', $data ?? [], null);
        $this->setIfExists('deal_description', $data ?? [], null);
        $this->setIfExists('event_type', $data ?? [], null);
        $this->setIfExists('fee_type', $data ?? [], null);
        $this->setIfExists('fee_amount', $data ?? [], null);
        $this->setIfExists('tax_amount', $data ?? [], null);
        $this->setIfExists('total_amount', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets posted_date
     *
     * @return \DateTime|null
     */
    public function getPostedDate(): ?\DateTime
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param \DateTime|null $posted_date Fields with a schema type of date are in ISO 8601 date time format (for example GroupBeginDate).
     *
     * @return self
     */
    public function setPostedDate(?\DateTime $posted_date): self
    {
        if (is_null($posted_date)) {
            array_push($this->openAPINullablesSetToNull, 'posted_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('posted_date', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets deal_id
     *
     * @return string|null
     */
    public function getDealId(): ?string
    {
        return $this->container['deal_id'];
    }

    /**
     * Sets deal_id
     *
     * @param string|null $deal_id The unique identifier of the deal.
     *
     * @return self
     */
    public function setDealId(?string $deal_id): self
    {
        if (is_null($deal_id)) {
            array_push($this->openAPINullablesSetToNull, 'deal_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('deal_id', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['deal_id'] = $deal_id;

        return $this;
    }

    /**
     * Gets deal_description
     *
     * @return string|null
     */
    public function getDealDescription(): ?string
    {
        return $this->container['deal_description'];
    }

    /**
     * Sets deal_description
     *
     * @param string|null $deal_description The internal description of the deal.
     *
     * @return self
     */
    public function setDealDescription(?string $deal_description): self
    {
        if (is_null($deal_description)) {
            array_push($this->openAPINullablesSetToNull, 'deal_description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('deal_description', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['deal_description'] = $deal_description;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string|null
     */
    public function getEventType(): ?string
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string|null $event_type The type of event: SellerDealComplete.
     *
     * @return self
     */
    public function setEventType(?string $event_type): self
    {
        if (is_null($event_type)) {
            array_push($this->openAPINullablesSetToNull, 'event_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('event_type', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets fee_type
     *
     * @return string|null
     */
    public function getFeeType(): ?string
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type
     *
     * @param string|null $fee_type The type of fee: RunLightningDealFee.
     *
     * @return self
     */
    public function setFeeType(?string $fee_type): self
    {
        if (is_null($fee_type)) {
            array_push($this->openAPINullablesSetToNull, 'fee_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fee_type', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets fee_amount
     *
     * @return \SpApi\Model\finances\v0\Currency|null
     */
    public function getFeeAmount(): ?\SpApi\Model\finances\v0\Currency
    {
        return $this->container['fee_amount'];
    }

    /**
     * Sets fee_amount
     *
     * @param \SpApi\Model\finances\v0\Currency|null $fee_amount fee_amount
     *
     * @return self
     */
    public function setFeeAmount(?\SpApi\Model\finances\v0\Currency $fee_amount): self
    {
        if (is_null($fee_amount)) {
            array_push($this->openAPINullablesSetToNull, 'fee_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fee_amount', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fee_amount'] = $fee_amount;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return \SpApi\Model\finances\v0\Currency|null
     */
    public function getTaxAmount(): ?\SpApi\Model\finances\v0\Currency
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param \SpApi\Model\finances\v0\Currency|null $tax_amount tax_amount
     *
     * @return self
     */
    public function setTaxAmount(?\SpApi\Model\finances\v0\Currency $tax_amount): self
    {
        if (is_null($tax_amount)) {
            array_push($this->openAPINullablesSetToNull, 'tax_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tax_amount', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return \SpApi\Model\finances\v0\Currency|null
     */
    public function getTotalAmount(): ?\SpApi\Model\finances\v0\Currency
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param \SpApi\Model\finances\v0\Currency|null $total_amount total_amount
     *
     * @return self
     */
    public function setTotalAmount(?\SpApi\Model\finances\v0\Currency $total_amount): self
    {
        if (is_null($total_amount)) {
            array_push($this->openAPINullablesSetToNull, 'total_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total_amount', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['total_amount'] = $total_amount;

        return $this;
    }


    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


