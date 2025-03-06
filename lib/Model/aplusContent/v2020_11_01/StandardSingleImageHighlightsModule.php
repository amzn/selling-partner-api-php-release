<?php
/**
 * StandardSingleImageHighlightsModule
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
 * StandardSingleImageHighlightsModule Class Doc Comment
 *
 * @category Class
 * @description A standard image with several paragraphs and a bulleted list.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StandardSingleImageHighlightsModule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'StandardSingleImageHighlightsModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
             'image' => '\SpApi\Model\aplusContent\v2020_11_01\ImageComponent',
             'headline' => '\SpApi\Model\aplusContent\v2020_11_01\TextComponent',
             'text_block1' => '\SpApi\Model\aplusContent\v2020_11_01\StandardTextBlock',
             'text_block2' => '\SpApi\Model\aplusContent\v2020_11_01\StandardTextBlock',
             'text_block3' => '\SpApi\Model\aplusContent\v2020_11_01\StandardTextBlock',
             'bulleted_list_block' => '\SpApi\Model\aplusContent\v2020_11_01\StandardHeaderTextListBlock'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
            'image' => null,
            'headline' => null,
            'text_block1' => null,
            'text_block2' => null,
            'text_block3' => null,
            'bulleted_list_block' => null    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'image' => true,
        'headline' => true,
        'text_block1' => true,
        'text_block2' => true,
        'text_block3' => true,
        'bulleted_list_block' => true
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
        'image' => 'image',
                'headline' => 'headline',
                'text_block1' => 'textBlock1',
                'text_block2' => 'textBlock2',
                'text_block3' => 'textBlock3',
                'bulleted_list_block' => 'bulletedListBlock'
        
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'image' => 'setImage',
        'headline' => 'setHeadline',
        'text_block1' => 'setTextBlock1',
        'text_block2' => 'setTextBlock2',
        'text_block3' => 'setTextBlock3',
        'bulleted_list_block' => 'setBulletedListBlock'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'image' => 'getImage',
        'headline' => 'getHeadline',
        'text_block1' => 'getTextBlock1',
        'text_block2' => 'getTextBlock2',
        'text_block3' => 'getTextBlock3',
        'bulleted_list_block' => 'getBulletedListBlock'
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
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('headline', $data ?? [], null);
        $this->setIfExists('text_block1', $data ?? [], null);
        $this->setIfExists('text_block2', $data ?? [], null);
        $this->setIfExists('text_block3', $data ?? [], null);
        $this->setIfExists('bulleted_list_block', $data ?? [], null);
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
     * Gets image
     *
     * @return \SpApi\Model\aplusContent\v2020_11_01\ImageComponent|null
     */
    public function getImage(): ?\SpApi\Model\aplusContent\v2020_11_01\ImageComponent
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \SpApi\Model\aplusContent\v2020_11_01\ImageComponent|null $image image
     *
     * @return self
     */
    public function setImage(?\SpApi\Model\aplusContent\v2020_11_01\ImageComponent $image): self
    {
        if (is_null($image)) {
            array_push($this->openAPINullablesSetToNull, 'image');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('image', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets headline
     *
     * @return \SpApi\Model\aplusContent\v2020_11_01\TextComponent|null
     */
    public function getHeadline(): ?\SpApi\Model\aplusContent\v2020_11_01\TextComponent
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param \SpApi\Model\aplusContent\v2020_11_01\TextComponent|null $headline headline
     *
     * @return self
     */
    public function setHeadline(?\SpApi\Model\aplusContent\v2020_11_01\TextComponent $headline): self
    {
        if (is_null($headline)) {
            array_push($this->openAPINullablesSetToNull, 'headline');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('headline', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets text_block1
     *
     * @return \SpApi\Model\aplusContent\v2020_11_01\StandardTextBlock|null
     */
    public function getTextBlock1(): ?\SpApi\Model\aplusContent\v2020_11_01\StandardTextBlock
    {
        return $this->container['text_block1'];
    }

    /**
     * Sets text_block1
     *
     * @param \SpApi\Model\aplusContent\v2020_11_01\StandardTextBlock|null $text_block1 text_block1
     *
     * @return self
     */
    public function setTextBlock1(?\SpApi\Model\aplusContent\v2020_11_01\StandardTextBlock $text_block1): self
    {
        if (is_null($text_block1)) {
            array_push($this->openAPINullablesSetToNull, 'text_block1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('text_block1', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['text_block1'] = $text_block1;

        return $this;
    }

    /**
     * Gets text_block2
     *
     * @return \SpApi\Model\aplusContent\v2020_11_01\StandardTextBlock|null
     */
    public function getTextBlock2(): ?\SpApi\Model\aplusContent\v2020_11_01\StandardTextBlock
    {
        return $this->container['text_block2'];
    }

    /**
     * Sets text_block2
     *
     * @param \SpApi\Model\aplusContent\v2020_11_01\StandardTextBlock|null $text_block2 text_block2
     *
     * @return self
     */
    public function setTextBlock2(?\SpApi\Model\aplusContent\v2020_11_01\StandardTextBlock $text_block2): self
    {
        if (is_null($text_block2)) {
            array_push($this->openAPINullablesSetToNull, 'text_block2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('text_block2', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['text_block2'] = $text_block2;

        return $this;
    }

    /**
     * Gets text_block3
     *
     * @return \SpApi\Model\aplusContent\v2020_11_01\StandardTextBlock|null
     */
    public function getTextBlock3(): ?\SpApi\Model\aplusContent\v2020_11_01\StandardTextBlock
    {
        return $this->container['text_block3'];
    }

    /**
     * Sets text_block3
     *
     * @param \SpApi\Model\aplusContent\v2020_11_01\StandardTextBlock|null $text_block3 text_block3
     *
     * @return self
     */
    public function setTextBlock3(?\SpApi\Model\aplusContent\v2020_11_01\StandardTextBlock $text_block3): self
    {
        if (is_null($text_block3)) {
            array_push($this->openAPINullablesSetToNull, 'text_block3');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('text_block3', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['text_block3'] = $text_block3;

        return $this;
    }

    /**
     * Gets bulleted_list_block
     *
     * @return \SpApi\Model\aplusContent\v2020_11_01\StandardHeaderTextListBlock|null
     */
    public function getBulletedListBlock(): ?\SpApi\Model\aplusContent\v2020_11_01\StandardHeaderTextListBlock
    {
        return $this->container['bulleted_list_block'];
    }

    /**
     * Sets bulleted_list_block
     *
     * @param \SpApi\Model\aplusContent\v2020_11_01\StandardHeaderTextListBlock|null $bulleted_list_block bulleted_list_block
     *
     * @return self
     */
    public function setBulletedListBlock(?\SpApi\Model\aplusContent\v2020_11_01\StandardHeaderTextListBlock $bulleted_list_block): self
    {
        if (is_null($bulleted_list_block)) {
            array_push($this->openAPINullablesSetToNull, 'bulleted_list_block');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bulleted_list_block', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bulleted_list_block'] = $bulleted_list_block;

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


