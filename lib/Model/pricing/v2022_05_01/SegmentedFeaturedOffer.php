<?php
/**
 * SegmentedFeaturedOffer
 *
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer pricing information for Amazon Marketplace products.  For more information, refer to the [Product Pricing v2022-05-01 Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/product-pricing-api-v2022-05-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2022-05-01
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\pricing\v2022_05_01;

use
ArrayAccess;
use SpApi\ObjectSerializer;
use SpApi\Model\ModelInterface;

/**
 * SegmentedFeaturedOffer Class Doc Comment
 *
 * @category Class
 * @description A product offer with segment information indicating where it&#39;s featured.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SegmentedFeaturedOffer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SegmentedFeaturedOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
             'seller_id' => 'string',
             'condition' => '\SpApi\Model\pricing\v2022_05_01\Condition',
             'sub_condition' => 'string',
             'fulfillment_type' => '\SpApi\Model\pricing\v2022_05_01\FulfillmentType',
             'listing_price' => '\SpApi\Model\pricing\v2022_05_01\MoneyType',
             'shipping_options' => '\SpApi\Model\pricing\v2022_05_01\ShippingOption[]',
             'points' => '\SpApi\Model\pricing\v2022_05_01\Points',
             'prime_details' => '\SpApi\Model\pricing\v2022_05_01\PrimeDetails',
             'featured_offer_segments' => '\SpApi\Model\pricing\v2022_05_01\FeaturedOfferSegment[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
            'seller_id' => null,
            'condition' => null,
            'sub_condition' => null,
            'fulfillment_type' => null,
            'listing_price' => null,
            'shipping_options' => null,
            'points' => null,
            'prime_details' => null,
            'featured_offer_segments' => null    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'seller_id' => false,
        'condition' => false,
        'sub_condition' => true,
        'fulfillment_type' => false,
        'listing_price' => false,
        'shipping_options' => true,
        'points' => true,
        'prime_details' => true,
        'featured_offer_segments' => false
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
        'seller_id' => 'sellerId',
                'condition' => 'condition',
                'sub_condition' => 'subCondition',
                'fulfillment_type' => 'fulfillmentType',
                'listing_price' => 'listingPrice',
                'shipping_options' => 'shippingOptions',
                'points' => 'points',
                'prime_details' => 'primeDetails',
                'featured_offer_segments' => 'featuredOfferSegments'
        
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'seller_id' => 'setSellerId',
        'condition' => 'setCondition',
        'sub_condition' => 'setSubCondition',
        'fulfillment_type' => 'setFulfillmentType',
        'listing_price' => 'setListingPrice',
        'shipping_options' => 'setShippingOptions',
        'points' => 'setPoints',
        'prime_details' => 'setPrimeDetails',
        'featured_offer_segments' => 'setFeaturedOfferSegments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'seller_id' => 'getSellerId',
        'condition' => 'getCondition',
        'sub_condition' => 'getSubCondition',
        'fulfillment_type' => 'getFulfillmentType',
        'listing_price' => 'getListingPrice',
        'shipping_options' => 'getShippingOptions',
        'points' => 'getPoints',
        'prime_details' => 'getPrimeDetails',
        'featured_offer_segments' => 'getFeaturedOfferSegments'
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

    public const SUB_CONDITION__NEW = 'New';
    public const SUB_CONDITION_MINT = 'Mint';
    public const SUB_CONDITION_VERY_GOOD = 'VeryGood';
    public const SUB_CONDITION_GOOD = 'Good';
    public const SUB_CONDITION_ACCEPTABLE = 'Acceptable';
    public const SUB_CONDITION_POOR = 'Poor';
    public const SUB_CONDITION_CLUB = 'Club';
    public const SUB_CONDITION_OEM = 'OEM';
    public const SUB_CONDITION_WARRANTY = 'Warranty';
    public const SUB_CONDITION_REFURBISHED_WARRANTY = 'RefurbishedWarranty';
    public const SUB_CONDITION_REFURBISHED = 'Refurbished';
    public const SUB_CONDITION_OPEN_BOX = 'OpenBox';
    public const SUB_CONDITION_OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubConditionAllowableValues(): array
    {
        return [
            self::SUB_CONDITION__NEW,
            self::SUB_CONDITION_MINT,
            self::SUB_CONDITION_VERY_GOOD,
            self::SUB_CONDITION_GOOD,
            self::SUB_CONDITION_ACCEPTABLE,
            self::SUB_CONDITION_POOR,
            self::SUB_CONDITION_CLUB,
            self::SUB_CONDITION_OEM,
            self::SUB_CONDITION_WARRANTY,
            self::SUB_CONDITION_REFURBISHED_WARRANTY,
            self::SUB_CONDITION_REFURBISHED,
            self::SUB_CONDITION_OPEN_BOX,
            self::SUB_CONDITION_OTHER,
        ];
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
        $this->setIfExists('seller_id', $data ?? [], null);
        $this->setIfExists('condition', $data ?? [], null);
        $this->setIfExists('sub_condition', $data ?? [], null);
        $this->setIfExists('fulfillment_type', $data ?? [], null);
        $this->setIfExists('listing_price', $data ?? [], null);
        $this->setIfExists('shipping_options', $data ?? [], null);
        $this->setIfExists('points', $data ?? [], null);
        $this->setIfExists('prime_details', $data ?? [], null);
        $this->setIfExists('featured_offer_segments', $data ?? [], null);
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

        if ($this->container['seller_id'] === null) {
            $invalidProperties[] = "'seller_id' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        $allowedValues = $this->getSubConditionAllowableValues();
        if (!is_null($this->container['sub_condition']) && !in_array($this->container['sub_condition'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sub_condition', must be one of '%s'",
                $this->container['sub_condition'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['fulfillment_type'] === null) {
            $invalidProperties[] = "'fulfillment_type' can't be null";
        }
        if ($this->container['listing_price'] === null) {
            $invalidProperties[] = "'listing_price' can't be null";
        }
        if ($this->container['featured_offer_segments'] === null) {
            $invalidProperties[] = "'featured_offer_segments' can't be null";
        }
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
     * Gets seller_id
     *
     * @return string
     */
    public function getSellerId(): string
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id
     *
     * @param string $seller_id The seller identifier for the offer.
     *
     * @return self
     */
    public function setSellerId(string $seller_id): self
    {
        if (is_null($seller_id)) {
            throw new \InvalidArgumentException('non-nullable seller_id cannot be null');
        }
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string
     */
    public function getCondition(): string
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition condition
     *
     * @return self
     */
    public function setCondition(string $condition): self
    {
        if (is_null($condition)) {
            throw new \InvalidArgumentException('non-nullable condition cannot be null');
        }
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets sub_condition
     *
     * @return string|null
     */
    public function getSubCondition(): ?string
    {
        return $this->container['sub_condition'];
    }

    /**
     * Sets sub_condition
     *
     * @param string|null $sub_condition The item subcondition of the offer.
     *
     * @return self
     */
    public function setSubCondition(?string $sub_condition): self
    {
        if (is_null($sub_condition)) {
            array_push($this->openAPINullablesSetToNull, 'sub_condition');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sub_condition', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getSubConditionAllowableValues();
        if (!is_null($sub_condition) && !in_array($sub_condition, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sub_condition', must be one of '%s'",
                    $sub_condition,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sub_condition'] = $sub_condition;

        return $this;
    }

    /**
     * Gets fulfillment_type
     *
     * @return string
     */
    public function getFulfillmentType(): string
    {
        return $this->container['fulfillment_type'];
    }

    /**
     * Sets fulfillment_type
     *
     * @param string $fulfillment_type fulfillment_type
     *
     * @return self
     */
    public function setFulfillmentType(string $fulfillment_type): self
    {
        if (is_null($fulfillment_type)) {
            throw new \InvalidArgumentException('non-nullable fulfillment_type cannot be null');
        }
        $this->container['fulfillment_type'] = $fulfillment_type;

        return $this;
    }

    /**
     * Gets listing_price
     *
     * @return \SpApi\Model\pricing\v2022_05_01\MoneyType
     */
    public function getListingPrice(): \SpApi\Model\pricing\v2022_05_01\MoneyType
    {
        return $this->container['listing_price'];
    }

    /**
     * Sets listing_price
     *
     * @param \SpApi\Model\pricing\v2022_05_01\MoneyType $listing_price listing_price
     *
     * @return self
     */
    public function setListingPrice(\SpApi\Model\pricing\v2022_05_01\MoneyType $listing_price): self
    {
        if (is_null($listing_price)) {
            throw new \InvalidArgumentException('non-nullable listing_price cannot be null');
        }
        $this->container['listing_price'] = $listing_price;

        return $this;
    }

    /**
     * Gets shipping_options
     *
     * @return array|null
     */
    public function getShippingOptions(): ?array
    {
        return $this->container['shipping_options'];
    }

    /**
     * Sets shipping_options
     *
     * @param array|null $shipping_options A list of shipping options associated with this offer
     *
     * @return self
     */
    public function setShippingOptions(?array $shipping_options): self
    {
        if (is_null($shipping_options)) {
            array_push($this->openAPINullablesSetToNull, 'shipping_options');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipping_options', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipping_options'] = $shipping_options;

        return $this;
    }

    /**
     * Gets points
     *
     * @return \SpApi\Model\pricing\v2022_05_01\Points|null
     */
    public function getPoints(): ?\SpApi\Model\pricing\v2022_05_01\Points
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param \SpApi\Model\pricing\v2022_05_01\Points|null $points points
     *
     * @return self
     */
    public function setPoints(?\SpApi\Model\pricing\v2022_05_01\Points $points): self
    {
        if (is_null($points)) {
            array_push($this->openAPINullablesSetToNull, 'points');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('points', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets prime_details
     *
     * @return \SpApi\Model\pricing\v2022_05_01\PrimeDetails|null
     */
    public function getPrimeDetails(): ?\SpApi\Model\pricing\v2022_05_01\PrimeDetails
    {
        return $this->container['prime_details'];
    }

    /**
     * Sets prime_details
     *
     * @param \SpApi\Model\pricing\v2022_05_01\PrimeDetails|null $prime_details prime_details
     *
     * @return self
     */
    public function setPrimeDetails(?\SpApi\Model\pricing\v2022_05_01\PrimeDetails $prime_details): self
    {
        if (is_null($prime_details)) {
            array_push($this->openAPINullablesSetToNull, 'prime_details');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('prime_details', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['prime_details'] = $prime_details;

        return $this;
    }

    /**
     * Gets featured_offer_segments
     *
     * @return array
     */
    public function getFeaturedOfferSegments(): array
    {
        return $this->container['featured_offer_segments'];
    }

    /**
     * Sets featured_offer_segments
     *
     * @param array $featured_offer_segments The list of segment information in which the offer is featured.
     *
     * @return self
     */
    public function setFeaturedOfferSegments(array $featured_offer_segments): self
    {
        if (is_null($featured_offer_segments)) {
            throw new \InvalidArgumentException('non-nullable featured_offer_segments cannot be null');
        }
        $this->container['featured_offer_segments'] = $featured_offer_segments;

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


