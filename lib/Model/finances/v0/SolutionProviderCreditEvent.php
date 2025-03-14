<?php
/**
 * SolutionProviderCreditEvent
 *
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace SpApi\Model\finances\v0;

use
ArrayAccess;
use SpApi\ObjectSerializer;
use SpApi\Model\ModelInterface;

/**
 * SolutionProviderCreditEvent Class Doc Comment
 *
 * @category Class
 * @description A credit given to a solution provider.
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SolutionProviderCreditEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SolutionProviderCreditEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
             'provider_transaction_type' => 'string',
             'seller_order_id' => 'string',
             'marketplace_id' => 'string',
             'marketplace_country_code' => 'string',
             'seller_id' => 'string',
             'seller_store_name' => 'string',
             'provider_id' => 'string',
             'provider_store_name' => 'string',
             'transaction_amount' => '\SpApi\Model\finances\v0\Currency',
             'transaction_creation_date' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
            'provider_transaction_type' => null,
            'seller_order_id' => null,
            'marketplace_id' => null,
            'marketplace_country_code' => null,
            'seller_id' => null,
            'seller_store_name' => null,
            'provider_id' => null,
            'provider_store_name' => null,
            'transaction_amount' => null,
            'transaction_creation_date' => 'date-time'    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'provider_transaction_type' => true,
        'seller_order_id' => true,
        'marketplace_id' => true,
        'marketplace_country_code' => true,
        'seller_id' => true,
        'seller_store_name' => true,
        'provider_id' => true,
        'provider_store_name' => true,
        'transaction_amount' => true,
        'transaction_creation_date' => true
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
        'provider_transaction_type' => 'ProviderTransactionType',
                'seller_order_id' => 'SellerOrderId',
                'marketplace_id' => 'MarketplaceId',
                'marketplace_country_code' => 'MarketplaceCountryCode',
                'seller_id' => 'SellerId',
                'seller_store_name' => 'SellerStoreName',
                'provider_id' => 'ProviderId',
                'provider_store_name' => 'ProviderStoreName',
                'transaction_amount' => 'TransactionAmount',
                'transaction_creation_date' => 'TransactionCreationDate'
        
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'provider_transaction_type' => 'setProviderTransactionType',
        'seller_order_id' => 'setSellerOrderId',
        'marketplace_id' => 'setMarketplaceId',
        'marketplace_country_code' => 'setMarketplaceCountryCode',
        'seller_id' => 'setSellerId',
        'seller_store_name' => 'setSellerStoreName',
        'provider_id' => 'setProviderId',
        'provider_store_name' => 'setProviderStoreName',
        'transaction_amount' => 'setTransactionAmount',
        'transaction_creation_date' => 'setTransactionCreationDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'provider_transaction_type' => 'getProviderTransactionType',
        'seller_order_id' => 'getSellerOrderId',
        'marketplace_id' => 'getMarketplaceId',
        'marketplace_country_code' => 'getMarketplaceCountryCode',
        'seller_id' => 'getSellerId',
        'seller_store_name' => 'getSellerStoreName',
        'provider_id' => 'getProviderId',
        'provider_store_name' => 'getProviderStoreName',
        'transaction_amount' => 'getTransactionAmount',
        'transaction_creation_date' => 'getTransactionCreationDate'
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
        $this->setIfExists('provider_transaction_type', $data ?? [], null);
        $this->setIfExists('seller_order_id', $data ?? [], null);
        $this->setIfExists('marketplace_id', $data ?? [], null);
        $this->setIfExists('marketplace_country_code', $data ?? [], null);
        $this->setIfExists('seller_id', $data ?? [], null);
        $this->setIfExists('seller_store_name', $data ?? [], null);
        $this->setIfExists('provider_id', $data ?? [], null);
        $this->setIfExists('provider_store_name', $data ?? [], null);
        $this->setIfExists('transaction_amount', $data ?? [], null);
        $this->setIfExists('transaction_creation_date', $data ?? [], null);
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
     * Gets provider_transaction_type
     *
     * @return string|null
     */
    public function getProviderTransactionType(): ?string
    {
        return $this->container['provider_transaction_type'];
    }

    /**
     * Sets provider_transaction_type
     *
     * @param string|null $provider_transaction_type The transaction type.
     *
     * @return self
     */
    public function setProviderTransactionType(?string $provider_transaction_type): self
    {
        if (is_null($provider_transaction_type)) {
            array_push($this->openAPINullablesSetToNull, 'provider_transaction_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('provider_transaction_type', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['provider_transaction_type'] = $provider_transaction_type;

        return $this;
    }

    /**
     * Gets seller_order_id
     *
     * @return string|null
     */
    public function getSellerOrderId(): ?string
    {
        return $this->container['seller_order_id'];
    }

    /**
     * Sets seller_order_id
     *
     * @param string|null $seller_order_id A seller-defined identifier for an order.
     *
     * @return self
     */
    public function setSellerOrderId(?string $seller_order_id): self
    {
        if (is_null($seller_order_id)) {
            array_push($this->openAPINullablesSetToNull, 'seller_order_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('seller_order_id', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['seller_order_id'] = $seller_order_id;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string|null
     */
    public function getMarketplaceId(): ?string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string|null $marketplace_id The identifier of the marketplace where the order was placed.
     *
     * @return self
     */
    public function setMarketplaceId(?string $marketplace_id): self
    {
        if (is_null($marketplace_id)) {
            array_push($this->openAPINullablesSetToNull, 'marketplace_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('marketplace_id', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets marketplace_country_code
     *
     * @return string|null
     */
    public function getMarketplaceCountryCode(): ?string
    {
        return $this->container['marketplace_country_code'];
    }

    /**
     * Sets marketplace_country_code
     *
     * @param string|null $marketplace_country_code The two-letter country code of the country associated with the marketplace where the order was placed.
     *
     * @return self
     */
    public function setMarketplaceCountryCode(?string $marketplace_country_code): self
    {
        if (is_null($marketplace_country_code)) {
            array_push($this->openAPINullablesSetToNull, 'marketplace_country_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('marketplace_country_code', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['marketplace_country_code'] = $marketplace_country_code;

        return $this;
    }

    /**
     * Gets seller_id
     *
     * @return string|null
     */
    public function getSellerId(): ?string
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id
     *
     * @param string|null $seller_id The Amazon-defined identifier of the seller.
     *
     * @return self
     */
    public function setSellerId(?string $seller_id): self
    {
        if (is_null($seller_id)) {
            array_push($this->openAPINullablesSetToNull, 'seller_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('seller_id', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets seller_store_name
     *
     * @return string|null
     */
    public function getSellerStoreName(): ?string
    {
        return $this->container['seller_store_name'];
    }

    /**
     * Sets seller_store_name
     *
     * @param string|null $seller_store_name The store name where the payment event occurred.
     *
     * @return self
     */
    public function setSellerStoreName(?string $seller_store_name): self
    {
        if (is_null($seller_store_name)) {
            array_push($this->openAPINullablesSetToNull, 'seller_store_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('seller_store_name', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['seller_store_name'] = $seller_store_name;

        return $this;
    }

    /**
     * Gets provider_id
     *
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->container['provider_id'];
    }

    /**
     * Sets provider_id
     *
     * @param string|null $provider_id The Amazon-defined identifier of the solution provider.
     *
     * @return self
     */
    public function setProviderId(?string $provider_id): self
    {
        if (is_null($provider_id)) {
            array_push($this->openAPINullablesSetToNull, 'provider_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('provider_id', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['provider_id'] = $provider_id;

        return $this;
    }

    /**
     * Gets provider_store_name
     *
     * @return string|null
     */
    public function getProviderStoreName(): ?string
    {
        return $this->container['provider_store_name'];
    }

    /**
     * Sets provider_store_name
     *
     * @param string|null $provider_store_name The store name where the payment event occurred.
     *
     * @return self
     */
    public function setProviderStoreName(?string $provider_store_name): self
    {
        if (is_null($provider_store_name)) {
            array_push($this->openAPINullablesSetToNull, 'provider_store_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('provider_store_name', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['provider_store_name'] = $provider_store_name;

        return $this;
    }

    /**
     * Gets transaction_amount
     *
     * @return \SpApi\Model\finances\v0\Currency|null
     */
    public function getTransactionAmount(): ?\SpApi\Model\finances\v0\Currency
    {
        return $this->container['transaction_amount'];
    }

    /**
     * Sets transaction_amount
     *
     * @param \SpApi\Model\finances\v0\Currency|null $transaction_amount transaction_amount
     *
     * @return self
     */
    public function setTransactionAmount(?\SpApi\Model\finances\v0\Currency $transaction_amount): self
    {
        if (is_null($transaction_amount)) {
            array_push($this->openAPINullablesSetToNull, 'transaction_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transaction_amount', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transaction_amount'] = $transaction_amount;

        return $this;
    }

    /**
     * Gets transaction_creation_date
     *
     * @return \DateTime|null
     */
    public function getTransactionCreationDate(): ?\DateTime
    {
        return $this->container['transaction_creation_date'];
    }

    /**
     * Sets transaction_creation_date
     *
     * @param \DateTime|null $transaction_creation_date Fields with a schema type of date are in ISO 8601 date time format (for example GroupBeginDate).
     *
     * @return self
     */
    public function setTransactionCreationDate(?\DateTime $transaction_creation_date): self
    {
        if (is_null($transaction_creation_date)) {
            array_push($this->openAPINullablesSetToNull, 'transaction_creation_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transaction_creation_date', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transaction_creation_date'] = $transaction_creation_date;

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


