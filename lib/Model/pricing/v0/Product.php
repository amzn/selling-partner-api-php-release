<?php
/**
 * Product
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
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
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

namespace SpApi\Model\pricing\v0;

use
ArrayAccess;
use SpApi\ObjectSerializer;
use SpApi\Model\ModelInterface;

/**
 * Product Class Doc Comment
 *
 * @category Class
 * @description An item.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Product implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
             'identifiers' => '\SpApi\Model\pricing\v0\IdentifierType',
             'attribute_sets' => 'object[]',
             'relationships' => 'object[]',
             'competitive_pricing' => '\SpApi\Model\pricing\v0\CompetitivePricingType',
             'sales_rankings' => '\SpApi\Model\pricing\v0\SalesRankType[]',
             'offers' => '\SpApi\Model\pricing\v0\OfferType[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
            'identifiers' => null,
            'attribute_sets' => null,
            'relationships' => null,
            'competitive_pricing' => null,
            'sales_rankings' => null,
            'offers' => null    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'identifiers' => false,
        'attribute_sets' => true,
        'relationships' => true,
        'competitive_pricing' => true,
        'sales_rankings' => true,
        'offers' => true
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
        'identifiers' => 'Identifiers',
                'attribute_sets' => 'AttributeSets',
                'relationships' => 'Relationships',
                'competitive_pricing' => 'CompetitivePricing',
                'sales_rankings' => 'SalesRankings',
                'offers' => 'Offers'
        
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'identifiers' => 'setIdentifiers',
        'attribute_sets' => 'setAttributeSets',
        'relationships' => 'setRelationships',
        'competitive_pricing' => 'setCompetitivePricing',
        'sales_rankings' => 'setSalesRankings',
        'offers' => 'setOffers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'identifiers' => 'getIdentifiers',
        'attribute_sets' => 'getAttributeSets',
        'relationships' => 'getRelationships',
        'competitive_pricing' => 'getCompetitivePricing',
        'sales_rankings' => 'getSalesRankings',
        'offers' => 'getOffers'
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
        $this->setIfExists('identifiers', $data ?? [], null);
        $this->setIfExists('attribute_sets', $data ?? [], null);
        $this->setIfExists('relationships', $data ?? [], null);
        $this->setIfExists('competitive_pricing', $data ?? [], null);
        $this->setIfExists('sales_rankings', $data ?? [], null);
        $this->setIfExists('offers', $data ?? [], null);
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

        if ($this->container['identifiers'] === null) {
            $invalidProperties[] = "'identifiers' can't be null";
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
     * Gets identifiers
     *
     * @return \SpApi\Model\pricing\v0\IdentifierType
     */
    public function getIdentifiers(): \SpApi\Model\pricing\v0\IdentifierType
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers
     *
     * @param \SpApi\Model\pricing\v0\IdentifierType $identifiers identifiers
     *
     * @return self
     */
    public function setIdentifiers(\SpApi\Model\pricing\v0\IdentifierType $identifiers): self
    {
        if (is_null($identifiers)) {
            throw new \InvalidArgumentException('non-nullable identifiers cannot be null');
        }
        $this->container['identifiers'] = $identifiers;

        return $this;
    }

    /**
     * Gets attribute_sets
     *
     * @return array|null
     */
    public function getAttributeSets(): ?array
    {
        return $this->container['attribute_sets'];
    }

    /**
     * Sets attribute_sets
     *
     * @param array|null $attribute_sets A list of product attributes if they are applicable to the product that is returned.
     *
     * @return self
     */
    public function setAttributeSets(?array $attribute_sets): self
    {
        if (is_null($attribute_sets)) {
            array_push($this->openAPINullablesSetToNull, 'attribute_sets');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('attribute_sets', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['attribute_sets'] = $attribute_sets;

        return $this;
    }

    /**
     * Gets relationships
     *
     * @return array|null
     */
    public function getRelationships(): ?array
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param array|null $relationships A list that contains product variation information, if applicable.
     *
     * @return self
     */
    public function setRelationships(?array $relationships): self
    {
        if (is_null($relationships)) {
            array_push($this->openAPINullablesSetToNull, 'relationships');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('relationships', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['relationships'] = $relationships;

        return $this;
    }

    /**
     * Gets competitive_pricing
     *
     * @return \SpApi\Model\pricing\v0\CompetitivePricingType|null
     */
    public function getCompetitivePricing(): ?\SpApi\Model\pricing\v0\CompetitivePricingType
    {
        return $this->container['competitive_pricing'];
    }

    /**
     * Sets competitive_pricing
     *
     * @param \SpApi\Model\pricing\v0\CompetitivePricingType|null $competitive_pricing competitive_pricing
     *
     * @return self
     */
    public function setCompetitivePricing(?\SpApi\Model\pricing\v0\CompetitivePricingType $competitive_pricing): self
    {
        if (is_null($competitive_pricing)) {
            array_push($this->openAPINullablesSetToNull, 'competitive_pricing');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('competitive_pricing', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['competitive_pricing'] = $competitive_pricing;

        return $this;
    }

    /**
     * Gets sales_rankings
     *
     * @return array|null
     */
    public function getSalesRankings(): ?array
    {
        return $this->container['sales_rankings'];
    }

    /**
     * Sets sales_rankings
     *
     * @param array|null $sales_rankings A list of sales rank information for the item, by category.
     *
     * @return self
     */
    public function setSalesRankings(?array $sales_rankings): self
    {
        if (is_null($sales_rankings)) {
            array_push($this->openAPINullablesSetToNull, 'sales_rankings');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sales_rankings', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sales_rankings'] = $sales_rankings;

        return $this;
    }

    /**
     * Gets offers
     *
     * @return array|null
     */
    public function getOffers(): ?array
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     *
     * @param array|null $offers A list of offers.
     *
     * @return self
     */
    public function setOffers(?array $offers): self
    {
        if (is_null($offers)) {
            array_push($this->openAPINullablesSetToNull, 'offers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('offers', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['offers'] = $offers;

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


