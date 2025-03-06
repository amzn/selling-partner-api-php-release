<?php
/**
 * PrepInstruction
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

use
ArrayAccess;
use SpApi\ObjectSerializer;
use SpApi\Model\ModelInterface;

/**
 * PrepInstruction Class Doc Comment
 *
 * @category Class
 * @description Information pertaining to the preparation of inbound goods.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PrepInstruction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PrepInstruction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
             'fee' => '\SpApi\Model\fulfillment\inbound\v2024_03_20\Currency',
             'prep_owner' => 'string',
             'prep_type' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
            'fee' => null,
            'prep_owner' => null,
            'prep_type' => null    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fee' => true,
        'prep_owner' => true,
        'prep_type' => true
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
        'fee' => 'fee',
                'prep_owner' => 'prepOwner',
                'prep_type' => 'prepType'
        
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'fee' => 'setFee',
        'prep_owner' => 'setPrepOwner',
        'prep_type' => 'setPrepType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'fee' => 'getFee',
        'prep_owner' => 'getPrepOwner',
        'prep_type' => 'getPrepType'
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
        $this->setIfExists('fee', $data ?? [], null);
        $this->setIfExists('prep_owner', $data ?? [], null);
        $this->setIfExists('prep_type', $data ?? [], null);
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

        if (!is_null($this->container['prep_owner']) && (mb_strlen($this->container['prep_owner']) > 1024)) {
            $invalidProperties[] = "invalid value for 'prep_owner', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['prep_owner']) && (mb_strlen($this->container['prep_owner']) < 1)) {
            $invalidProperties[] = "invalid value for 'prep_owner', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['prep_type']) && (mb_strlen($this->container['prep_type']) > 1024)) {
            $invalidProperties[] = "invalid value for 'prep_type', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['prep_type']) && (mb_strlen($this->container['prep_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'prep_type', the character length must be bigger than or equal to 1.";
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
     * Gets fee
     *
     * @return \SpApi\Model\fulfillment\inbound\v2024_03_20\Currency|null
     */
    public function getFee(): ?\SpApi\Model\fulfillment\inbound\v2024_03_20\Currency
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \SpApi\Model\fulfillment\inbound\v2024_03_20\Currency|null $fee fee
     *
     * @return self
     */
    public function setFee(?\SpApi\Model\fulfillment\inbound\v2024_03_20\Currency $fee): self
    {
        if (is_null($fee)) {
            array_push($this->openAPINullablesSetToNull, 'fee');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fee', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets prep_owner
     *
     * @return string|null
     */
    public function getPrepOwner(): ?string
    {
        return $this->container['prep_owner'];
    }

    /**
     * Sets prep_owner
     *
     * @param string|null $prep_owner In some situations, special preparations are required for items and this field reflects the owner of the preparations. Options include `AMAZON`, `SELLER` or `NONE`.
     *
     * @return self
     */
    public function setPrepOwner(?string $prep_owner): self
    {
        if (is_null($prep_owner)) {
            array_push($this->openAPINullablesSetToNull, 'prep_owner');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('prep_owner', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($prep_owner) && (mb_strlen($prep_owner) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $prep_owner when calling PrepInstruction., must be smaller than or equal to 1024.');
        }
        if (!is_null($prep_owner) && (mb_strlen($prep_owner) < 1)) {
            throw new \InvalidArgumentException('invalid length for $prep_owner when calling PrepInstruction., must be bigger than or equal to 1.');
        }

        $this->container['prep_owner'] = $prep_owner;

        return $this;
    }

    /**
     * Gets prep_type
     *
     * @return string|null
     */
    public function getPrepType(): ?string
    {
        return $this->container['prep_type'];
    }

    /**
     * Sets prep_type
     *
     * @param string|null $prep_type Type of preparation that should be done.  Possible values: `ITEM_LABELING`, `ITEM_BUBBLEWRAP`, `ITEM_POLYBAGGING`, `ITEM_TAPING`, `ITEM_BLACK_SHRINKWRAP`, `ITEM_HANG_GARMENT`, `ITEM_BOXING`, `ITEM_SETCREAT`, `ITEM_RMOVHANG`, `ITEM_SUFFOSTK`, `ITEM_CAP_SEALING`, `ITEM_DEBUNDLE`, `ITEM_SETSTK`, `ITEM_SIOC`, `ITEM_NO_PREP`, `ADULT`, `BABY`, `TEXTILE`, `HANGER`, `FRAGILE`, `LIQUID`, `SHARP`, `SMALL`, `PERFORATED`, `GRANULAR`, `SET`, `FC_PROVIDED`, `UNKNOWN`, `NONE`.
     *
     * @return self
     */
    public function setPrepType(?string $prep_type): self
    {
        if (is_null($prep_type)) {
            array_push($this->openAPINullablesSetToNull, 'prep_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('prep_type', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($prep_type) && (mb_strlen($prep_type) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $prep_type when calling PrepInstruction., must be smaller than or equal to 1024.');
        }
        if (!is_null($prep_type) && (mb_strlen($prep_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $prep_type when calling PrepInstruction., must be bigger than or equal to 1.');
        }

        $this->container['prep_type'] = $prep_type;

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


