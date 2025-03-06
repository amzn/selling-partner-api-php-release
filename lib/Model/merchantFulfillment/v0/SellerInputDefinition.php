<?php
/**
 * SellerInputDefinition
 *
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * With the Selling Partner API for Merchant Fulfillment, you can build applications that sellers can use to purchase shipping for non-Prime and Prime orders using Amazon's Buy Shipping Services.
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

namespace SpApi\Model\merchantFulfillment\v0;

use
ArrayAccess;
use SpApi\ObjectSerializer;
use SpApi\Model\ModelInterface;

/**
 * SellerInputDefinition Class Doc Comment
 *
 * @category Class
 * @description Specifies characteristics that apply to a seller input.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SellerInputDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SellerInputDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
             'is_required' => 'bool',
             'data_type' => 'string',
             'constraints' => '\SpApi\Model\merchantFulfillment\v0\Constraint[]',
             'input_display_text' => 'string',
             'input_target' => '\SpApi\Model\merchantFulfillment\v0\InputTargetType',
             'stored_value' => '\SpApi\Model\merchantFulfillment\v0\AdditionalSellerInput',
             'restricted_set_values' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
            'is_required' => null,
            'data_type' => null,
            'constraints' => null,
            'input_display_text' => null,
            'input_target' => null,
            'stored_value' => null,
            'restricted_set_values' => null    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_required' => false,
        'data_type' => false,
        'constraints' => false,
        'input_display_text' => false,
        'input_target' => true,
        'stored_value' => false,
        'restricted_set_values' => true
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
        'is_required' => 'IsRequired',
                'data_type' => 'DataType',
                'constraints' => 'Constraints',
                'input_display_text' => 'InputDisplayText',
                'input_target' => 'InputTarget',
                'stored_value' => 'StoredValue',
                'restricted_set_values' => 'RestrictedSetValues'
        
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'is_required' => 'setIsRequired',
        'data_type' => 'setDataType',
        'constraints' => 'setConstraints',
        'input_display_text' => 'setInputDisplayText',
        'input_target' => 'setInputTarget',
        'stored_value' => 'setStoredValue',
        'restricted_set_values' => 'setRestrictedSetValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'is_required' => 'getIsRequired',
        'data_type' => 'getDataType',
        'constraints' => 'getConstraints',
        'input_display_text' => 'getInputDisplayText',
        'input_target' => 'getInputTarget',
        'stored_value' => 'getStoredValue',
        'restricted_set_values' => 'getRestrictedSetValues'
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
        $this->setIfExists('is_required', $data ?? [], null);
        $this->setIfExists('data_type', $data ?? [], null);
        $this->setIfExists('constraints', $data ?? [], null);
        $this->setIfExists('input_display_text', $data ?? [], null);
        $this->setIfExists('input_target', $data ?? [], null);
        $this->setIfExists('stored_value', $data ?? [], null);
        $this->setIfExists('restricted_set_values', $data ?? [], null);
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

        if ($this->container['is_required'] === null) {
            $invalidProperties[] = "'is_required' can't be null";
        }
        if ($this->container['data_type'] === null) {
            $invalidProperties[] = "'data_type' can't be null";
        }
        if ($this->container['constraints'] === null) {
            $invalidProperties[] = "'constraints' can't be null";
        }
        if ($this->container['input_display_text'] === null) {
            $invalidProperties[] = "'input_display_text' can't be null";
        }
        if ($this->container['stored_value'] === null) {
            $invalidProperties[] = "'stored_value' can't be null";
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
     * Gets is_required
     *
     * @return bool
     */
    public function getIsRequired(): bool
    {
        return $this->container['is_required'];
    }

    /**
     * Sets is_required
     *
     * @param bool $is_required When true, the additional input field is required.
     *
     * @return self
     */
    public function setIsRequired(bool $is_required): self
    {
        if (is_null($is_required)) {
            throw new \InvalidArgumentException('non-nullable is_required cannot be null');
        }
        $this->container['is_required'] = $is_required;

        return $this;
    }

    /**
     * Gets data_type
     *
     * @return string
     */
    public function getDataType(): string
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type
     *
     * @param string $data_type The data type of the additional input field.
     *
     * @return self
     */
    public function setDataType(string $data_type): self
    {
        if (is_null($data_type)) {
            throw new \InvalidArgumentException('non-nullable data_type cannot be null');
        }
        $this->container['data_type'] = $data_type;

        return $this;
    }

    /**
     * Gets constraints
     *
     * @return array
     */
    public function getConstraints(): array
    {
        return $this->container['constraints'];
    }

    /**
     * Sets constraints
     *
     * @param array $constraints List of constraints.
     *
     * @return self
     */
    public function setConstraints(array $constraints): self
    {
        if (is_null($constraints)) {
            throw new \InvalidArgumentException('non-nullable constraints cannot be null');
        }
        $this->container['constraints'] = $constraints;

        return $this;
    }

    /**
     * Gets input_display_text
     *
     * @return string
     */
    public function getInputDisplayText(): string
    {
        return $this->container['input_display_text'];
    }

    /**
     * Sets input_display_text
     *
     * @param string $input_display_text The display text for the additional input field.
     *
     * @return self
     */
    public function setInputDisplayText(string $input_display_text): self
    {
        if (is_null($input_display_text)) {
            throw new \InvalidArgumentException('non-nullable input_display_text cannot be null');
        }
        $this->container['input_display_text'] = $input_display_text;

        return $this;
    }

    /**
     * Gets input_target
     *
     * @return string|null
     */
    public function getInputTarget(): ?string
    {
        return $this->container['input_target'];
    }

    /**
     * Sets input_target
     *
     * @param string|null $input_target input_target
     *
     * @return self
     */
    public function setInputTarget(?string $input_target): self
    {
        if (is_null($input_target)) {
            array_push($this->openAPINullablesSetToNull, 'input_target');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('input_target', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['input_target'] = $input_target;

        return $this;
    }

    /**
     * Gets stored_value
     *
     * @return \SpApi\Model\merchantFulfillment\v0\AdditionalSellerInput
     */
    public function getStoredValue(): \SpApi\Model\merchantFulfillment\v0\AdditionalSellerInput
    {
        return $this->container['stored_value'];
    }

    /**
     * Sets stored_value
     *
     * @param \SpApi\Model\merchantFulfillment\v0\AdditionalSellerInput $stored_value stored_value
     *
     * @return self
     */
    public function setStoredValue(\SpApi\Model\merchantFulfillment\v0\AdditionalSellerInput $stored_value): self
    {
        if (is_null($stored_value)) {
            throw new \InvalidArgumentException('non-nullable stored_value cannot be null');
        }
        $this->container['stored_value'] = $stored_value;

        return $this;
    }

    /**
     * Gets restricted_set_values
     *
     * @return array|null
     */
    public function getRestrictedSetValues(): ?array
    {
        return $this->container['restricted_set_values'];
    }

    /**
     * Sets restricted_set_values
     *
     * @param array|null $restricted_set_values The set of fixed values in an additional seller input.
     *
     * @return self
     */
    public function setRestrictedSetValues(?array $restricted_set_values): self
    {
        if (is_null($restricted_set_values)) {
            array_push($this->openAPINullablesSetToNull, 'restricted_set_values');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('restricted_set_values', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['restricted_set_values'] = $restricted_set_values;

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


