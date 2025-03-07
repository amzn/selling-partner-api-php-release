<?php
/**
 * ShippingConstraints
 *
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Orders
 *
 * Use the Orders Selling Partner API to programmatically retrieve order information. With this API, you can develop fast, flexible, and custom applications to manage order synchronization, perform order research, and create demand-based decision support tools.   _Note:_ For the JP, AU, and SG marketplaces, the Orders API supports orders from 2016 onward. For all other marketplaces, the Orders API supports orders for the last two years (orders older than this don't show up in the response).
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

namespace SpApi\Model\orders\v0;

use
ArrayAccess;
use SpApi\ObjectSerializer;
use SpApi\Model\ModelInterface;

/**
 * ShippingConstraints Class Doc Comment
 *
 * @category Class
 * @description Delivery constraints applicable to this order.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShippingConstraints implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShippingConstraints';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
             'pallet_delivery' => '\SpApi\Model\orders\v0\ConstraintType',
             'signature_confirmation' => '\SpApi\Model\orders\v0\ConstraintType',
             'recipient_identity_verification' => '\SpApi\Model\orders\v0\ConstraintType',
             'recipient_age_verification' => '\SpApi\Model\orders\v0\ConstraintType'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
            'pallet_delivery' => null,
            'signature_confirmation' => null,
            'recipient_identity_verification' => null,
            'recipient_age_verification' => null    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pallet_delivery' => true,
        'signature_confirmation' => true,
        'recipient_identity_verification' => true,
        'recipient_age_verification' => true
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
        'pallet_delivery' => 'PalletDelivery',
                'signature_confirmation' => 'SignatureConfirmation',
                'recipient_identity_verification' => 'RecipientIdentityVerification',
                'recipient_age_verification' => 'RecipientAgeVerification'
        
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'pallet_delivery' => 'setPalletDelivery',
        'signature_confirmation' => 'setSignatureConfirmation',
        'recipient_identity_verification' => 'setRecipientIdentityVerification',
        'recipient_age_verification' => 'setRecipientAgeVerification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'pallet_delivery' => 'getPalletDelivery',
        'signature_confirmation' => 'getSignatureConfirmation',
        'recipient_identity_verification' => 'getRecipientIdentityVerification',
        'recipient_age_verification' => 'getRecipientAgeVerification'
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
        $this->setIfExists('pallet_delivery', $data ?? [], null);
        $this->setIfExists('signature_confirmation', $data ?? [], null);
        $this->setIfExists('recipient_identity_verification', $data ?? [], null);
        $this->setIfExists('recipient_age_verification', $data ?? [], null);
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
     * Gets pallet_delivery
     *
     * @return string|null
     */
    public function getPalletDelivery(): ?string
    {
        return $this->container['pallet_delivery'];
    }

    /**
     * Sets pallet_delivery
     *
     * @param string|null $pallet_delivery pallet_delivery
     *
     * @return self
     */
    public function setPalletDelivery(?string $pallet_delivery): self
    {
        if (is_null($pallet_delivery)) {
            array_push($this->openAPINullablesSetToNull, 'pallet_delivery');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pallet_delivery', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pallet_delivery'] = $pallet_delivery;

        return $this;
    }

    /**
     * Gets signature_confirmation
     *
     * @return string|null
     */
    public function getSignatureConfirmation(): ?string
    {
        return $this->container['signature_confirmation'];
    }

    /**
     * Sets signature_confirmation
     *
     * @param string|null $signature_confirmation signature_confirmation
     *
     * @return self
     */
    public function setSignatureConfirmation(?string $signature_confirmation): self
    {
        if (is_null($signature_confirmation)) {
            array_push($this->openAPINullablesSetToNull, 'signature_confirmation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('signature_confirmation', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['signature_confirmation'] = $signature_confirmation;

        return $this;
    }

    /**
     * Gets recipient_identity_verification
     *
     * @return string|null
     */
    public function getRecipientIdentityVerification(): ?string
    {
        return $this->container['recipient_identity_verification'];
    }

    /**
     * Sets recipient_identity_verification
     *
     * @param string|null $recipient_identity_verification recipient_identity_verification
     *
     * @return self
     */
    public function setRecipientIdentityVerification(?string $recipient_identity_verification): self
    {
        if (is_null($recipient_identity_verification)) {
            array_push($this->openAPINullablesSetToNull, 'recipient_identity_verification');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('recipient_identity_verification', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['recipient_identity_verification'] = $recipient_identity_verification;

        return $this;
    }

    /**
     * Gets recipient_age_verification
     *
     * @return string|null
     */
    public function getRecipientAgeVerification(): ?string
    {
        return $this->container['recipient_age_verification'];
    }

    /**
     * Sets recipient_age_verification
     *
     * @param string|null $recipient_age_verification recipient_age_verification
     *
     * @return self
     */
    public function setRecipientAgeVerification(?string $recipient_age_verification): self
    {
        if (is_null($recipient_age_verification)) {
            array_push($this->openAPINullablesSetToNull, 'recipient_age_verification');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('recipient_age_verification', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['recipient_age_verification'] = $recipient_age_verification;

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


