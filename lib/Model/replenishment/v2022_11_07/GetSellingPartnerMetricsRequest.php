<?php
/**
 * GetSellingPartnerMetricsRequest
 *
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Replenishment
 *
 * The Selling Partner API for Replenishment (Replenishment API) provides programmatic access to replenishment program metrics and offers. These programs provide recurring delivery of any replenishable item at a frequency chosen by the customer.  The Replenishment API is available worldwide wherever Amazon Subscribe & Save is available or is supported. The API is available to vendors and FBA selling partners.
 *
 * The version of the OpenAPI document: 2022-11-07
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\replenishment\v2022_11_07;

use
ArrayAccess;
use SpApi\ObjectSerializer;
use SpApi\Model\ModelInterface;

/**
 * GetSellingPartnerMetricsRequest Class Doc Comment
 *
 * @category Class
 * @description The request body for the &#x60;getSellingPartnerMetrics&#x60; operation.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetSellingPartnerMetricsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetSellingPartnerMetricsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
             'aggregation_frequency' => '\SpApi\Model\replenishment\v2022_11_07\AggregationFrequency',
             'time_interval' => '\SpApi\Model\replenishment\v2022_11_07\TimeInterval',
             'metrics' => '\SpApi\Model\replenishment\v2022_11_07\Metric[]',
             'time_period_type' => '\SpApi\Model\replenishment\v2022_11_07\TimePeriodType',
             'marketplace_id' => 'string',
             'program_types' => '\SpApi\Model\replenishment\v2022_11_07\ProgramType[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
            'aggregation_frequency' => null,
            'time_interval' => null,
            'metrics' => null,
            'time_period_type' => null,
            'marketplace_id' => null,
            'program_types' => null    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'aggregation_frequency' => true,
        'time_interval' => false,
        'metrics' => true,
        'time_period_type' => false,
        'marketplace_id' => false,
        'program_types' => false
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
        'aggregation_frequency' => 'aggregationFrequency',
                'time_interval' => 'timeInterval',
                'metrics' => 'metrics',
                'time_period_type' => 'timePeriodType',
                'marketplace_id' => 'marketplaceId',
                'program_types' => 'programTypes'
        
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'aggregation_frequency' => 'setAggregationFrequency',
        'time_interval' => 'setTimeInterval',
        'metrics' => 'setMetrics',
        'time_period_type' => 'setTimePeriodType',
        'marketplace_id' => 'setMarketplaceId',
        'program_types' => 'setProgramTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'aggregation_frequency' => 'getAggregationFrequency',
        'time_interval' => 'getTimeInterval',
        'metrics' => 'getMetrics',
        'time_period_type' => 'getTimePeriodType',
        'marketplace_id' => 'getMarketplaceId',
        'program_types' => 'getProgramTypes'
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
        $this->setIfExists('aggregation_frequency', $data ?? [], null);
        $this->setIfExists('time_interval', $data ?? [], null);
        $this->setIfExists('metrics', $data ?? [], null);
        $this->setIfExists('time_period_type', $data ?? [], null);
        $this->setIfExists('marketplace_id', $data ?? [], null);
        $this->setIfExists('program_types', $data ?? [], null);
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

        if ($this->container['time_interval'] === null) {
            $invalidProperties[] = "'time_interval' can't be null";
        }
        if (!is_null($this->container['metrics']) && (count($this->container['metrics']) < 1)) {
            $invalidProperties[] = "invalid value for 'metrics', number of items must be greater than or equal to 1.";
        }

        if ($this->container['time_period_type'] === null) {
            $invalidProperties[] = "'time_period_type' can't be null";
        }
        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if ($this->container['program_types'] === null) {
            $invalidProperties[] = "'program_types' can't be null";
        }
        if ((count($this->container['program_types']) < 1)) {
            $invalidProperties[] = "invalid value for 'program_types', number of items must be greater than or equal to 1.";
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
     * Gets aggregation_frequency
     *
     * @return string|null
     */
    public function getAggregationFrequency(): ?string
    {
        return $this->container['aggregation_frequency'];
    }

    /**
     * Sets aggregation_frequency
     *
     * @param string|null $aggregation_frequency aggregation_frequency
     *
     * @return self
     */
    public function setAggregationFrequency(?string $aggregation_frequency): self
    {
        if (is_null($aggregation_frequency)) {
            array_push($this->openAPINullablesSetToNull, 'aggregation_frequency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('aggregation_frequency', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['aggregation_frequency'] = $aggregation_frequency;

        return $this;
    }

    /**
     * Gets time_interval
     *
     * @return \SpApi\Model\replenishment\v2022_11_07\TimeInterval
     */
    public function getTimeInterval(): \SpApi\Model\replenishment\v2022_11_07\TimeInterval
    {
        return $this->container['time_interval'];
    }

    /**
     * Sets time_interval
     *
     * @param \SpApi\Model\replenishment\v2022_11_07\TimeInterval $time_interval time_interval
     *
     * @return self
     */
    public function setTimeInterval(\SpApi\Model\replenishment\v2022_11_07\TimeInterval $time_interval): self
    {
        if (is_null($time_interval)) {
            throw new \InvalidArgumentException('non-nullable time_interval cannot be null');
        }
        $this->container['time_interval'] = $time_interval;

        return $this;
    }

    /**
     * Gets metrics
     *
     * @return array|null
     */
    public function getMetrics(): ?array
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param array|null $metrics The list of metrics requested. If no metric value is provided, data for all of the metrics will be returned.
     *
     * @return self
     */
    public function setMetrics(?array $metrics): self
    {
        if (is_null($metrics)) {
            array_push($this->openAPINullablesSetToNull, 'metrics');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('metrics', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        if (!is_null($metrics) && (count($metrics) < 1)) {
            throw new \InvalidArgumentException('invalid length for $metrics when calling GetSellingPartnerMetricsRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['metrics'] = $metrics;

        return $this;
    }

    /**
     * Gets time_period_type
     *
     * @return string
     */
    public function getTimePeriodType(): string
    {
        return $this->container['time_period_type'];
    }

    /**
     * Sets time_period_type
     *
     * @param string $time_period_type time_period_type
     *
     * @return self
     */
    public function setTimePeriodType(string $time_period_type): self
    {
        if (is_null($time_period_type)) {
            throw new \InvalidArgumentException('non-nullable time_period_type cannot be null');
        }
        $this->container['time_period_type'] = $time_period_type;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId(): string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id The marketplace identifier. The supported marketplaces for both sellers and vendors are US, CA, ES, UK, FR, IT, IN, DE and JP. The supported marketplaces for vendors only are BR, AU, MX, AE and NL. Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) to find the identifier for the marketplace.
     *
     * @return self
     */
    public function setMarketplaceId(string $marketplace_id): self
    {
        if (is_null($marketplace_id)) {
            throw new \InvalidArgumentException('non-nullable marketplace_id cannot be null');
        }
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets program_types
     *
     * @return array
     */
    public function getProgramTypes(): array
    {
        return $this->container['program_types'];
    }

    /**
     * Sets program_types
     *
     * @param array $program_types A list of replenishment program types.
     *
     * @return self
     */
    public function setProgramTypes(array $program_types): self
    {
        if (is_null($program_types)) {
            throw new \InvalidArgumentException('non-nullable program_types cannot be null');
        }


        if ((count($program_types) < 1)) {
            throw new \InvalidArgumentException('invalid length for $program_types when calling GetSellingPartnerMetricsRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['program_types'] = $program_types;

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


