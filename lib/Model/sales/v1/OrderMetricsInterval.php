<?php
/**
 * OrderMetricsInterval
 *
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Sales
 *
 * The Selling Partner API for Sales provides APIs related to sales performance.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\sales\v1;

use
ArrayAccess;
use SpApi\ObjectSerializer;
use SpApi\Model\ModelInterface;

/**
 * OrderMetricsInterval Class Doc Comment
 *
 * @category Class
 * @description Contains order metrics.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderMetricsInterval implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OrderMetricsInterval';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
             'interval' => 'string',
             'unit_count' => 'int',
             'order_item_count' => 'int',
             'order_count' => 'int',
             'average_unit_price' => '\SpApi\Model\sales\v1\Money',
             'total_sales' => '\SpApi\Model\sales\v1\Money'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
            'interval' => null,
            'unit_count' => null,
            'order_item_count' => null,
            'order_count' => null,
            'average_unit_price' => null,
            'total_sales' => null    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'interval' => false,
        'unit_count' => false,
        'order_item_count' => false,
        'order_count' => false,
        'average_unit_price' => false,
        'total_sales' => false
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
        'interval' => 'interval',
                'unit_count' => 'unitCount',
                'order_item_count' => 'orderItemCount',
                'order_count' => 'orderCount',
                'average_unit_price' => 'averageUnitPrice',
                'total_sales' => 'totalSales'
        
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'interval' => 'setInterval',
        'unit_count' => 'setUnitCount',
        'order_item_count' => 'setOrderItemCount',
        'order_count' => 'setOrderCount',
        'average_unit_price' => 'setAverageUnitPrice',
        'total_sales' => 'setTotalSales'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'interval' => 'getInterval',
        'unit_count' => 'getUnitCount',
        'order_item_count' => 'getOrderItemCount',
        'order_count' => 'getOrderCount',
        'average_unit_price' => 'getAverageUnitPrice',
        'total_sales' => 'getTotalSales'
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
        $this->setIfExists('interval', $data ?? [], null);
        $this->setIfExists('unit_count', $data ?? [], null);
        $this->setIfExists('order_item_count', $data ?? [], null);
        $this->setIfExists('order_count', $data ?? [], null);
        $this->setIfExists('average_unit_price', $data ?? [], null);
        $this->setIfExists('total_sales', $data ?? [], null);
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

        if ($this->container['interval'] === null) {
            $invalidProperties[] = "'interval' can't be null";
        }
        if ($this->container['unit_count'] === null) {
            $invalidProperties[] = "'unit_count' can't be null";
        }
        if ($this->container['order_item_count'] === null) {
            $invalidProperties[] = "'order_item_count' can't be null";
        }
        if ($this->container['order_count'] === null) {
            $invalidProperties[] = "'order_count' can't be null";
        }
        if ($this->container['average_unit_price'] === null) {
            $invalidProperties[] = "'average_unit_price' can't be null";
        }
        if ($this->container['total_sales'] === null) {
            $invalidProperties[] = "'total_sales' can't be null";
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
     * Gets interval
     *
     * @return string
     */
    public function getInterval(): string
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param string $interval The interval of time based on requested granularity (ex. Hour, Day, etc.) If this is the first or the last interval from the list, it might contain incomplete data if the requested interval doesn't align with the requested granularity (ex. request interval 2018-09-01T02:00:00Z--2018-09-04T19:00:00Z and granularity day will result in Sept 1st UTC day and Sept 4th UTC days having partial data).
     *
     * @return self
     */
    public function setInterval(string $interval): self
    {
        if (is_null($interval)) {
            throw new \InvalidArgumentException('non-nullable interval cannot be null');
        }
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets unit_count
     *
     * @return int
     */
    public function getUnitCount(): int
    {
        return $this->container['unit_count'];
    }

    /**
     * Sets unit_count
     *
     * @param int $unit_count The number of units in orders based on the specified filters.
     *
     * @return self
     */
    public function setUnitCount(int $unit_count): self
    {
        if (is_null($unit_count)) {
            throw new \InvalidArgumentException('non-nullable unit_count cannot be null');
        }
        $this->container['unit_count'] = $unit_count;

        return $this;
    }

    /**
     * Gets order_item_count
     *
     * @return int
     */
    public function getOrderItemCount(): int
    {
        return $this->container['order_item_count'];
    }

    /**
     * Sets order_item_count
     *
     * @param int $order_item_count The number of order items based on the specified filters.
     *
     * @return self
     */
    public function setOrderItemCount(int $order_item_count): self
    {
        if (is_null($order_item_count)) {
            throw new \InvalidArgumentException('non-nullable order_item_count cannot be null');
        }
        $this->container['order_item_count'] = $order_item_count;

        return $this;
    }

    /**
     * Gets order_count
     *
     * @return int
     */
    public function getOrderCount(): int
    {
        return $this->container['order_count'];
    }

    /**
     * Sets order_count
     *
     * @param int $order_count The number of orders based on the specified filters.
     *
     * @return self
     */
    public function setOrderCount(int $order_count): self
    {
        if (is_null($order_count)) {
            throw new \InvalidArgumentException('non-nullable order_count cannot be null');
        }
        $this->container['order_count'] = $order_count;

        return $this;
    }

    /**
     * Gets average_unit_price
     *
     * @return \SpApi\Model\sales\v1\Money
     */
    public function getAverageUnitPrice(): \SpApi\Model\sales\v1\Money
    {
        return $this->container['average_unit_price'];
    }

    /**
     * Sets average_unit_price
     *
     * @param \SpApi\Model\sales\v1\Money $average_unit_price average_unit_price
     *
     * @return self
     */
    public function setAverageUnitPrice(\SpApi\Model\sales\v1\Money $average_unit_price): self
    {
        if (is_null($average_unit_price)) {
            throw new \InvalidArgumentException('non-nullable average_unit_price cannot be null');
        }
        $this->container['average_unit_price'] = $average_unit_price;

        return $this;
    }

    /**
     * Gets total_sales
     *
     * @return \SpApi\Model\sales\v1\Money
     */
    public function getTotalSales(): \SpApi\Model\sales\v1\Money
    {
        return $this->container['total_sales'];
    }

    /**
     * Sets total_sales
     *
     * @param \SpApi\Model\sales\v1\Money $total_sales total_sales
     *
     * @return self
     */
    public function setTotalSales(\SpApi\Model\sales\v1\Money $total_sales): self
    {
        if (is_null($total_sales)) {
            throw new \InvalidArgumentException('non-nullable total_sales cannot be null');
        }
        $this->container['total_sales'] = $total_sales;

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


