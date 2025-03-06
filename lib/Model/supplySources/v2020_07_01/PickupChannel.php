<?php
/**
 * PickupChannel
 *
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Supply Sources
 *
 * Manage configurations and capabilities of seller supply sources.
 *
 * The version of the OpenAPI document: 2020-07-01
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\supplySources\v2020_07_01;

use
ArrayAccess;
use SpApi\ObjectSerializer;
use SpApi\Model\ModelInterface;

/**
 * PickupChannel Class Doc Comment
 *
 * @category Class
 * @description The pick up channel of a supply source.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PickupChannel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PickupChannel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
             'inventory_hold_period' => '\SpApi\Model\supplySources\v2020_07_01\Duration',
             'is_supported' => 'bool',
             'operational_configuration' => '\SpApi\Model\supplySources\v2020_07_01\OperationalConfiguration',
             'in_store_pickup_configuration' => '\SpApi\Model\supplySources\v2020_07_01\InStorePickupConfiguration',
             'curbside_pickup_configuration' => '\SpApi\Model\supplySources\v2020_07_01\CurbsidePickupConfiguration'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
            'inventory_hold_period' => null,
            'is_supported' => null,
            'operational_configuration' => null,
            'in_store_pickup_configuration' => null,
            'curbside_pickup_configuration' => null    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'inventory_hold_period' => true,
        'is_supported' => true,
        'operational_configuration' => true,
        'in_store_pickup_configuration' => true,
        'curbside_pickup_configuration' => true
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
        'inventory_hold_period' => 'inventoryHoldPeriod',
                'is_supported' => 'isSupported',
                'operational_configuration' => 'operationalConfiguration',
                'in_store_pickup_configuration' => 'inStorePickupConfiguration',
                'curbside_pickup_configuration' => 'curbsidePickupConfiguration'
        
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'inventory_hold_period' => 'setInventoryHoldPeriod',
        'is_supported' => 'setIsSupported',
        'operational_configuration' => 'setOperationalConfiguration',
        'in_store_pickup_configuration' => 'setInStorePickupConfiguration',
        'curbside_pickup_configuration' => 'setCurbsidePickupConfiguration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'inventory_hold_period' => 'getInventoryHoldPeriod',
        'is_supported' => 'getIsSupported',
        'operational_configuration' => 'getOperationalConfiguration',
        'in_store_pickup_configuration' => 'getInStorePickupConfiguration',
        'curbside_pickup_configuration' => 'getCurbsidePickupConfiguration'
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
        $this->setIfExists('inventory_hold_period', $data ?? [], null);
        $this->setIfExists('is_supported', $data ?? [], null);
        $this->setIfExists('operational_configuration', $data ?? [], null);
        $this->setIfExists('in_store_pickup_configuration', $data ?? [], null);
        $this->setIfExists('curbside_pickup_configuration', $data ?? [], null);
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
     * Gets inventory_hold_period
     *
     * @return \SpApi\Model\supplySources\v2020_07_01\Duration|null
     */
    public function getInventoryHoldPeriod(): ?\SpApi\Model\supplySources\v2020_07_01\Duration
    {
        return $this->container['inventory_hold_period'];
    }

    /**
     * Sets inventory_hold_period
     *
     * @param \SpApi\Model\supplySources\v2020_07_01\Duration|null $inventory_hold_period inventory_hold_period
     *
     * @return self
     */
    public function setInventoryHoldPeriod(?\SpApi\Model\supplySources\v2020_07_01\Duration $inventory_hold_period): self
    {
        if (is_null($inventory_hold_period)) {
            array_push($this->openAPINullablesSetToNull, 'inventory_hold_period');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inventory_hold_period', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['inventory_hold_period'] = $inventory_hold_period;

        return $this;
    }

    /**
     * Gets is_supported
     *
     * @return bool|null
     */
    public function getIsSupported(): ?bool
    {
        return $this->container['is_supported'];
    }

    /**
     * Sets is_supported
     *
     * @param bool|null $is_supported is_supported
     *
     * @return self
     */
    public function setIsSupported(?bool $is_supported): self
    {
        if (is_null($is_supported)) {
            array_push($this->openAPINullablesSetToNull, 'is_supported');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_supported', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_supported'] = $is_supported;

        return $this;
    }

    /**
     * Gets operational_configuration
     *
     * @return \SpApi\Model\supplySources\v2020_07_01\OperationalConfiguration|null
     */
    public function getOperationalConfiguration(): ?\SpApi\Model\supplySources\v2020_07_01\OperationalConfiguration
    {
        return $this->container['operational_configuration'];
    }

    /**
     * Sets operational_configuration
     *
     * @param \SpApi\Model\supplySources\v2020_07_01\OperationalConfiguration|null $operational_configuration operational_configuration
     *
     * @return self
     */
    public function setOperationalConfiguration(?\SpApi\Model\supplySources\v2020_07_01\OperationalConfiguration $operational_configuration): self
    {
        if (is_null($operational_configuration)) {
            array_push($this->openAPINullablesSetToNull, 'operational_configuration');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('operational_configuration', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['operational_configuration'] = $operational_configuration;

        return $this;
    }

    /**
     * Gets in_store_pickup_configuration
     *
     * @return \SpApi\Model\supplySources\v2020_07_01\InStorePickupConfiguration|null
     */
    public function getInStorePickupConfiguration(): ?\SpApi\Model\supplySources\v2020_07_01\InStorePickupConfiguration
    {
        return $this->container['in_store_pickup_configuration'];
    }

    /**
     * Sets in_store_pickup_configuration
     *
     * @param \SpApi\Model\supplySources\v2020_07_01\InStorePickupConfiguration|null $in_store_pickup_configuration in_store_pickup_configuration
     *
     * @return self
     */
    public function setInStorePickupConfiguration(?\SpApi\Model\supplySources\v2020_07_01\InStorePickupConfiguration $in_store_pickup_configuration): self
    {
        if (is_null($in_store_pickup_configuration)) {
            array_push($this->openAPINullablesSetToNull, 'in_store_pickup_configuration');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('in_store_pickup_configuration', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['in_store_pickup_configuration'] = $in_store_pickup_configuration;

        return $this;
    }

    /**
     * Gets curbside_pickup_configuration
     *
     * @return \SpApi\Model\supplySources\v2020_07_01\CurbsidePickupConfiguration|null
     */
    public function getCurbsidePickupConfiguration(): ?\SpApi\Model\supplySources\v2020_07_01\CurbsidePickupConfiguration
    {
        return $this->container['curbside_pickup_configuration'];
    }

    /**
     * Sets curbside_pickup_configuration
     *
     * @param \SpApi\Model\supplySources\v2020_07_01\CurbsidePickupConfiguration|null $curbside_pickup_configuration curbside_pickup_configuration
     *
     * @return self
     */
    public function setCurbsidePickupConfiguration(?\SpApi\Model\supplySources\v2020_07_01\CurbsidePickupConfiguration $curbside_pickup_configuration): self
    {
        if (is_null($curbside_pickup_configuration)) {
            array_push($this->openAPINullablesSetToNull, 'curbside_pickup_configuration');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('curbside_pickup_configuration', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['curbside_pickup_configuration'] = $curbside_pickup_configuration;

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


