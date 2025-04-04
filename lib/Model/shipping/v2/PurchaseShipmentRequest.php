<?php
/**
 * PurchaseShipmentRequest
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
 * PurchaseShipmentRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for the purchaseShipment operation.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PurchaseShipmentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PurchaseShipmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
             'request_token' => 'string',
             'rate_id' => 'string',
             'requested_document_specification' => '\SpApi\Model\shipping\v2\RequestedDocumentSpecification',
             'requested_value_added_services' => '\SpApi\Model\shipping\v2\RequestedValueAddedService[]',
             'additional_inputs' => 'array<string,object>'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
            'request_token' => null,
            'rate_id' => null,
            'requested_document_specification' => null,
            'requested_value_added_services' => null,
            'additional_inputs' => null    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'request_token' => false,
        'rate_id' => false,
        'requested_document_specification' => false,
        'requested_value_added_services' => true,
        'additional_inputs' => true
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
        'request_token' => 'requestToken',
                'rate_id' => 'rateId',
                'requested_document_specification' => 'requestedDocumentSpecification',
                'requested_value_added_services' => 'requestedValueAddedServices',
                'additional_inputs' => 'additionalInputs'
        
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'request_token' => 'setRequestToken',
        'rate_id' => 'setRateId',
        'requested_document_specification' => 'setRequestedDocumentSpecification',
        'requested_value_added_services' => 'setRequestedValueAddedServices',
        'additional_inputs' => 'setAdditionalInputs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'request_token' => 'getRequestToken',
        'rate_id' => 'getRateId',
        'requested_document_specification' => 'getRequestedDocumentSpecification',
        'requested_value_added_services' => 'getRequestedValueAddedServices',
        'additional_inputs' => 'getAdditionalInputs'
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
        $this->setIfExists('request_token', $data ?? [], null);
        $this->setIfExists('rate_id', $data ?? [], null);
        $this->setIfExists('requested_document_specification', $data ?? [], null);
        $this->setIfExists('requested_value_added_services', $data ?? [], null);
        $this->setIfExists('additional_inputs', $data ?? [], null);
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

        if ($this->container['request_token'] === null) {
            $invalidProperties[] = "'request_token' can't be null";
        }
        if ($this->container['rate_id'] === null) {
            $invalidProperties[] = "'rate_id' can't be null";
        }
        if ($this->container['requested_document_specification'] === null) {
            $invalidProperties[] = "'requested_document_specification' can't be null";
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
     * Gets request_token
     *
     * @return string
     */
    public function getRequestToken(): string
    {
        return $this->container['request_token'];
    }

    /**
     * Sets request_token
     *
     * @param string $request_token A unique token generated to identify a getRates operation.
     *
     * @return self
     */
    public function setRequestToken(string $request_token): self
    {
        if (is_null($request_token)) {
            throw new \InvalidArgumentException('non-nullable request_token cannot be null');
        }
        $this->container['request_token'] = $request_token;

        return $this;
    }

    /**
     * Gets rate_id
     *
     * @return string
     */
    public function getRateId(): string
    {
        return $this->container['rate_id'];
    }

    /**
     * Sets rate_id
     *
     * @param string $rate_id An identifier for the rate (shipment offering) provided by a shipping service provider.
     *
     * @return self
     */
    public function setRateId(string $rate_id): self
    {
        if (is_null($rate_id)) {
            throw new \InvalidArgumentException('non-nullable rate_id cannot be null');
        }
        $this->container['rate_id'] = $rate_id;

        return $this;
    }

    /**
     * Gets requested_document_specification
     *
     * @return \SpApi\Model\shipping\v2\RequestedDocumentSpecification
     */
    public function getRequestedDocumentSpecification(): \SpApi\Model\shipping\v2\RequestedDocumentSpecification
    {
        return $this->container['requested_document_specification'];
    }

    /**
     * Sets requested_document_specification
     *
     * @param \SpApi\Model\shipping\v2\RequestedDocumentSpecification $requested_document_specification requested_document_specification
     *
     * @return self
     */
    public function setRequestedDocumentSpecification(\SpApi\Model\shipping\v2\RequestedDocumentSpecification $requested_document_specification): self
    {
        if (is_null($requested_document_specification)) {
            throw new \InvalidArgumentException('non-nullable requested_document_specification cannot be null');
        }
        $this->container['requested_document_specification'] = $requested_document_specification;

        return $this;
    }

    /**
     * Gets requested_value_added_services
     *
     * @return array|null
     */
    public function getRequestedValueAddedServices(): ?array
    {
        return $this->container['requested_value_added_services'];
    }

    /**
     * Sets requested_value_added_services
     *
     * @param array|null $requested_value_added_services The value-added services to be added to a shipping service purchase.
     *
     * @return self
     */
    public function setRequestedValueAddedServices(?array $requested_value_added_services): self
    {
        if (is_null($requested_value_added_services)) {
            array_push($this->openAPINullablesSetToNull, 'requested_value_added_services');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('requested_value_added_services', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['requested_value_added_services'] = $requested_value_added_services;

        return $this;
    }

    /**
     * Gets additional_inputs
     *
     * @return array<string,object>|null
     */
    public function getAdditionalInputs(): ?array
    {
        return $this->container['additional_inputs'];
    }

    /**
     * Sets additional_inputs
     *
     * @param array<string,object>|null $additional_inputs The additional inputs required to purchase a shipping offering, in JSON format. The JSON provided here must adhere to the JSON schema that is returned in the response to the getAdditionalInputs operation.  Additional inputs are only required when indicated by the requiresAdditionalInputs property in the response to the getRates operation.
     *
     * @return self
     */
    public function setAdditionalInputs(?array $additional_inputs): self
    {
        if (is_null($additional_inputs)) {
            array_push($this->openAPINullablesSetToNull, 'additional_inputs');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('additional_inputs', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['additional_inputs'] = $additional_inputs;

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


