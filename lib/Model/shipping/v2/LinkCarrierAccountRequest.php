<?php
/**
 * LinkCarrierAccountRequest
 *
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Amazon Shipping API
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * The version of the OpenAPI document: v2
 * Contact: swa-api-core@amazon.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\shipping\v2;

use
ArrayAccess;
use SpApi\ObjectSerializer;
use SpApi\Model\ModelInterface;

/**
 * LinkCarrierAccountRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for verify and add the merchant&#39;s account with a certain carrier.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LinkCarrierAccountRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LinkCarrierAccountRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
             'client_reference_details' => '\SpApi\Model\shipping\v2\ClientReferenceDetail[]',
             'carrier_account_type' => 'string',
             'carrier_account_attributes' => '\SpApi\Model\shipping\v2\CarrierAccountAttribute[]',
             'encrypted_carrier_account_attributes' => '\SpApi\Model\shipping\v2\CarrierAccountAttribute[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
            'client_reference_details' => null,
            'carrier_account_type' => null,
            'carrier_account_attributes' => null,
            'encrypted_carrier_account_attributes' => null    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'client_reference_details' => true,
        'carrier_account_type' => false,
        'carrier_account_attributes' => false,
        'encrypted_carrier_account_attributes' => true
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
        'client_reference_details' => 'clientReferenceDetails',
                'carrier_account_type' => 'carrierAccountType',
                'carrier_account_attributes' => 'carrierAccountAttributes',
                'encrypted_carrier_account_attributes' => 'encryptedCarrierAccountAttributes'
        
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'client_reference_details' => 'setClientReferenceDetails',
        'carrier_account_type' => 'setCarrierAccountType',
        'carrier_account_attributes' => 'setCarrierAccountAttributes',
        'encrypted_carrier_account_attributes' => 'setEncryptedCarrierAccountAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'client_reference_details' => 'getClientReferenceDetails',
        'carrier_account_type' => 'getCarrierAccountType',
        'carrier_account_attributes' => 'getCarrierAccountAttributes',
        'encrypted_carrier_account_attributes' => 'getEncryptedCarrierAccountAttributes'
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
        $this->setIfExists('client_reference_details', $data ?? [], null);
        $this->setIfExists('carrier_account_type', $data ?? [], null);
        $this->setIfExists('carrier_account_attributes', $data ?? [], null);
        $this->setIfExists('encrypted_carrier_account_attributes', $data ?? [], null);
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

        if ($this->container['carrier_account_type'] === null) {
            $invalidProperties[] = "'carrier_account_type' can't be null";
        }
        if ($this->container['carrier_account_attributes'] === null) {
            $invalidProperties[] = "'carrier_account_attributes' can't be null";
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
     * Gets client_reference_details
     *
     * @return array|null
     */
    public function getClientReferenceDetails(): ?array
    {
        return $this->container['client_reference_details'];
    }

    /**
     * Sets client_reference_details
     *
     * @param array|null $client_reference_details Object to pass additional information about the MCI Integrator shipperType: List of ClientReferenceDetail
     *
     * @return self
     */
    public function setClientReferenceDetails(?array $client_reference_details): self
    {
        if (is_null($client_reference_details)) {
            array_push($this->openAPINullablesSetToNull, 'client_reference_details');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('client_reference_details', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['client_reference_details'] = $client_reference_details;

        return $this;
    }

    /**
     * Gets carrier_account_type
     *
     * @return string
     */
    public function getCarrierAccountType(): string
    {
        return $this->container['carrier_account_type'];
    }

    /**
     * Sets carrier_account_type
     *
     * @param string $carrier_account_type CarrierAccountType  associated with account.
     *
     * @return self
     */
    public function setCarrierAccountType(string $carrier_account_type): self
    {
        if (is_null($carrier_account_type)) {
            throw new \InvalidArgumentException('non-nullable carrier_account_type cannot be null');
        }
        $this->container['carrier_account_type'] = $carrier_account_type;

        return $this;
    }

    /**
     * Gets carrier_account_attributes
     *
     * @return array
     */
    public function getCarrierAccountAttributes(): array
    {
        return $this->container['carrier_account_attributes'];
    }

    /**
     * Sets carrier_account_attributes
     *
     * @param array $carrier_account_attributes A list of all attributes required by the carrier in order to successfully link the merchant's account
     *
     * @return self
     */
    public function setCarrierAccountAttributes(array $carrier_account_attributes): self
    {
        if (is_null($carrier_account_attributes)) {
            throw new \InvalidArgumentException('non-nullable carrier_account_attributes cannot be null');
        }
        $this->container['carrier_account_attributes'] = $carrier_account_attributes;

        return $this;
    }

    /**
     * Gets encrypted_carrier_account_attributes
     *
     * @return array|null
     */
    public function getEncryptedCarrierAccountAttributes(): ?array
    {
        return $this->container['encrypted_carrier_account_attributes'];
    }

    /**
     * Sets encrypted_carrier_account_attributes
     *
     * @param array|null $encrypted_carrier_account_attributes A list of all attributes required by the carrier in order to successfully link the merchant's account
     *
     * @return self
     */
    public function setEncryptedCarrierAccountAttributes(?array $encrypted_carrier_account_attributes): self
    {
        if (is_null($encrypted_carrier_account_attributes)) {
            array_push($this->openAPINullablesSetToNull, 'encrypted_carrier_account_attributes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('encrypted_carrier_account_attributes', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['encrypted_carrier_account_attributes'] = $encrypted_carrier_account_attributes;

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


