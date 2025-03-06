<?php
/**
 * StandardFourImageTextQuadrantModule
 *
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * Use the A+ Content API to build applications that help selling partners add rich marketing content to their Amazon product detail pages. Selling partners can use A+ content to share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners use content modules to add images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\aplusContent\v2020_11_01;

use
ArrayAccess;
use SpApi\ObjectSerializer;
use SpApi\Model\ModelInterface;

/**
 * StandardFourImageTextQuadrantModule Class Doc Comment
 *
 * @category Class
 * @description Four standard images with text, presented on a grid of four quadrants.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StandardFourImageTextQuadrantModule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'StandardFourImageTextQuadrantModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
             'block1' => '\SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock',
             'block2' => '\SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock',
             'block3' => '\SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock',
             'block4' => '\SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
            'block1' => null,
            'block2' => null,
            'block3' => null,
            'block4' => null    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'block1' => false,
        'block2' => false,
        'block3' => false,
        'block4' => false
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
        'block1' => 'block1',
                'block2' => 'block2',
                'block3' => 'block3',
                'block4' => 'block4'
        
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'block1' => 'setBlock1',
        'block2' => 'setBlock2',
        'block3' => 'setBlock3',
        'block4' => 'setBlock4'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'block1' => 'getBlock1',
        'block2' => 'getBlock2',
        'block3' => 'getBlock3',
        'block4' => 'getBlock4'
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
        $this->setIfExists('block1', $data ?? [], null);
        $this->setIfExists('block2', $data ?? [], null);
        $this->setIfExists('block3', $data ?? [], null);
        $this->setIfExists('block4', $data ?? [], null);
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

        if ($this->container['block1'] === null) {
            $invalidProperties[] = "'block1' can't be null";
        }
        if ($this->container['block2'] === null) {
            $invalidProperties[] = "'block2' can't be null";
        }
        if ($this->container['block3'] === null) {
            $invalidProperties[] = "'block3' can't be null";
        }
        if ($this->container['block4'] === null) {
            $invalidProperties[] = "'block4' can't be null";
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
     * Gets block1
     *
     * @return \SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock
     */
    public function getBlock1(): \SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock
    {
        return $this->container['block1'];
    }

    /**
     * Sets block1
     *
     * @param \SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock $block1 block1
     *
     * @return self
     */
    public function setBlock1(\SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock $block1): self
    {
        if (is_null($block1)) {
            throw new \InvalidArgumentException('non-nullable block1 cannot be null');
        }
        $this->container['block1'] = $block1;

        return $this;
    }

    /**
     * Gets block2
     *
     * @return \SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock
     */
    public function getBlock2(): \SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock
    {
        return $this->container['block2'];
    }

    /**
     * Sets block2
     *
     * @param \SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock $block2 block2
     *
     * @return self
     */
    public function setBlock2(\SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock $block2): self
    {
        if (is_null($block2)) {
            throw new \InvalidArgumentException('non-nullable block2 cannot be null');
        }
        $this->container['block2'] = $block2;

        return $this;
    }

    /**
     * Gets block3
     *
     * @return \SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock
     */
    public function getBlock3(): \SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock
    {
        return $this->container['block3'];
    }

    /**
     * Sets block3
     *
     * @param \SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock $block3 block3
     *
     * @return self
     */
    public function setBlock3(\SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock $block3): self
    {
        if (is_null($block3)) {
            throw new \InvalidArgumentException('non-nullable block3 cannot be null');
        }
        $this->container['block3'] = $block3;

        return $this;
    }

    /**
     * Gets block4
     *
     * @return \SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock
     */
    public function getBlock4(): \SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock
    {
        return $this->container['block4'];
    }

    /**
     * Sets block4
     *
     * @param \SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock $block4 block4
     *
     * @return self
     */
    public function setBlock4(\SpApi\Model\aplusContent\v2020_11_01\StandardImageTextBlock $block4): self
    {
        if (is_null($block4)) {
            throw new \InvalidArgumentException('non-nullable block4 cannot be null');
        }
        $this->container['block4'] = $block4;

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


