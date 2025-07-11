<?php

/**
 * Transaction.
 *
 * PHP version 8.3
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */

/**
 * The Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order or date range without having to wait until a statement period closes.
 *
 * The version of the OpenAPI document: 2024-06-19
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Model\finances\v2024_06_19;

use SpApi\Model\ModelInterface;
use SpApi\ObjectSerializer;

/**
 * Transaction Class Doc Comment.
 *
 * @category Class
 *
 * @description Contains all information related to the transaction.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class Transaction implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'Transaction';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'selling_partner_metadata' => '\SpApi\Model\finances\v2024_06_19\SellingPartnerMetadata',
        'related_identifiers' => '\SpApi\Model\finances\v2024_06_19\RelatedIdentifier[]',
        'transaction_type' => 'string',
        'transaction_id' => 'string',
        'transaction_status' => 'string',
        'description' => 'string',
        'posted_date' => '\DateTime',
        'total_amount' => '\SpApi\Model\finances\v2024_06_19\Currency',
        'marketplace_details' => '\SpApi\Model\finances\v2024_06_19\MarketplaceDetails',
        'items' => '\SpApi\Model\finances\v2024_06_19\Item[]',
        'contexts' => '\SpApi\Model\finances\v2024_06_19\Context[]',
        'breakdowns' => '\SpApi\Model\finances\v2024_06_19\Breakdown[]'];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'selling_partner_metadata' => null,
        'related_identifiers' => null,
        'transaction_type' => null,
        'transaction_id' => null,
        'transaction_status' => null,
        'description' => null,
        'posted_date' => 'date-time',
        'total_amount' => null,
        'marketplace_details' => null,
        'items' => null,
        'contexts' => null,
        'breakdowns' => null];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'selling_partner_metadata' => true,
        'related_identifiers' => true,
        'transaction_type' => true,
        'transaction_id' => true,
        'transaction_status' => true,
        'description' => true,
        'posted_date' => true,
        'total_amount' => true,
        'marketplace_details' => true,
        'items' => true,
        'contexts' => true,
        'breakdowns' => true,
    ];

    /**
     * If a nullable field gets set to null, insert it here.
     *
     * @var bool[]
     */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'selling_partner_metadata' => 'sellingPartnerMetadata',
        'related_identifiers' => 'relatedIdentifiers',
        'transaction_type' => 'transactionType',
        'transaction_id' => 'transactionId',
        'transaction_status' => 'transactionStatus',
        'description' => 'description',
        'posted_date' => 'postedDate',
        'total_amount' => 'totalAmount',
        'marketplace_details' => 'marketplaceDetails',
        'items' => 'items',
        'contexts' => 'contexts',
        'breakdowns' => 'breakdowns',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'selling_partner_metadata' => 'setSellingPartnerMetadata',
        'related_identifiers' => 'setRelatedIdentifiers',
        'transaction_type' => 'setTransactionType',
        'transaction_id' => 'setTransactionId',
        'transaction_status' => 'setTransactionStatus',
        'description' => 'setDescription',
        'posted_date' => 'setPostedDate',
        'total_amount' => 'setTotalAmount',
        'marketplace_details' => 'setMarketplaceDetails',
        'items' => 'setItems',
        'contexts' => 'setContexts',
        'breakdowns' => 'setBreakdowns',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'selling_partner_metadata' => 'getSellingPartnerMetadata',
        'related_identifiers' => 'getRelatedIdentifiers',
        'transaction_type' => 'getTransactionType',
        'transaction_id' => 'getTransactionId',
        'transaction_status' => 'getTransactionStatus',
        'description' => 'getDescription',
        'posted_date' => 'getPostedDate',
        'total_amount' => 'getTotalAmount',
        'marketplace_details' => 'getMarketplaceDetails',
        'items' => 'getItems',
        'contexts' => 'getContexts',
        'breakdowns' => 'getBreakdowns',
    ];

    /**
     * Associative array for storing property values.
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param null|array $data Associated array of property values
     *                         initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('selling_partner_metadata', $data ?? [], null);
        $this->setIfExists('related_identifiers', $data ?? [], null);
        $this->setIfExists('transaction_type', $data ?? [], null);
        $this->setIfExists('transaction_id', $data ?? [], null);
        $this->setIfExists('transaction_status', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('posted_date', $data ?? [], null);
        $this->setIfExists('total_amount', $data ?? [], null);
        $this->setIfExists('marketplace_details', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('contexts', $data ?? [], null);
        $this->setIfExists('breakdowns', $data ?? [], null);
    }

    /**
     * Gets the string presentation of the object.
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
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Checks if a property is nullable.
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        return [];
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets selling_partner_metadata.
     */
    public function getSellingPartnerMetadata(): ?SellingPartnerMetadata
    {
        return $this->container['selling_partner_metadata'];
    }

    /**
     * Sets selling_partner_metadata.
     *
     * @param null|SellingPartnerMetadata $selling_partner_metadata selling_partner_metadata
     */
    public function setSellingPartnerMetadata(?SellingPartnerMetadata $selling_partner_metadata): self
    {
        if (is_null($selling_partner_metadata)) {
            array_push($this->openAPINullablesSetToNull, 'selling_partner_metadata');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('selling_partner_metadata', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['selling_partner_metadata'] = $selling_partner_metadata;

        return $this;
    }

    /**
     * Gets related_identifiers.
     */
    public function getRelatedIdentifiers(): ?array
    {
        return $this->container['related_identifiers'];
    }

    /**
     * Sets related_identifiers.
     *
     * @param null|array $related_identifiers related business identifiers of the transaction
     */
    public function setRelatedIdentifiers(?array $related_identifiers): self
    {
        if (is_null($related_identifiers)) {
            array_push($this->openAPINullablesSetToNull, 'related_identifiers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('related_identifiers', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['related_identifiers'] = $related_identifiers;

        return $this;
    }

    /**
     * Gets transaction_type.
     */
    public function getTransactionType(): ?string
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type.
     *
     * @param null|string $transaction_type The type of transaction.  Possible values:  * Shipment
     */
    public function setTransactionType(?string $transaction_type): self
    {
        if (is_null($transaction_type)) {
            array_push($this->openAPINullablesSetToNull, 'transaction_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transaction_type', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets transaction_id.
     */
    public function getTransactionId(): ?string
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id.
     *
     * @param null|string $transaction_id the unique identifier for the transaction
     */
    public function setTransactionId(?string $transaction_id): self
    {
        if (is_null($transaction_id)) {
            array_push($this->openAPINullablesSetToNull, 'transaction_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transaction_id', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets transaction_status.
     */
    public function getTransactionStatus(): ?string
    {
        return $this->container['transaction_status'];
    }

    /**
     * Sets transaction_status.
     *
     * @param null|string $transaction_status The status of the transaction.  **Possible values:**  * `DEFERRED`: the transaction is currently deferred. * `RELEASED`: the transaction is currently released. * `DEFERRED_RELEASED`: the transaction was deferred in the past, but is now released. The status of a deferred transaction is updated to `DEFERRED_RELEASED` when the transaction is released.
     */
    public function setTransactionStatus(?string $transaction_status): self
    {
        if (is_null($transaction_status)) {
            array_push($this->openAPINullablesSetToNull, 'transaction_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transaction_status', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transaction_status'] = $transaction_status;

        return $this;
    }

    /**
     * Gets description.
     */
    public function getDescription(): ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description.
     *
     * @param null|string $description Describes the reasons for the transaction.  Example: 'Order Payment','Refund Order'
     */
    public function setDescription(?string $description): self
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets posted_date.
     */
    public function getPostedDate(): ?\DateTime
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date.
     *
     * @param null|\DateTime $posted_date fields with a schema type of date are in ISO 8601 date time format (for example GroupBeginDate)
     */
    public function setPostedDate(?\DateTime $posted_date): self
    {
        if (is_null($posted_date)) {
            array_push($this->openAPINullablesSetToNull, 'posted_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('posted_date', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets total_amount.
     */
    public function getTotalAmount(): ?Currency
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount.
     *
     * @param null|Currency $total_amount total_amount
     */
    public function setTotalAmount(?Currency $total_amount): self
    {
        if (is_null($total_amount)) {
            array_push($this->openAPINullablesSetToNull, 'total_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total_amount', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets marketplace_details.
     */
    public function getMarketplaceDetails(): ?MarketplaceDetails
    {
        return $this->container['marketplace_details'];
    }

    /**
     * Sets marketplace_details.
     *
     * @param null|MarketplaceDetails $marketplace_details marketplace_details
     */
    public function setMarketplaceDetails(?MarketplaceDetails $marketplace_details): self
    {
        if (is_null($marketplace_details)) {
            array_push($this->openAPINullablesSetToNull, 'marketplace_details');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('marketplace_details', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['marketplace_details'] = $marketplace_details;

        return $this;
    }

    /**
     * Gets items.
     */
    public function getItems(): ?array
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param null|array $items List of items in the transaction
     */
    public function setItems(?array $items): self
    {
        if (is_null($items)) {
            array_push($this->openAPINullablesSetToNull, 'items');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('items', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets contexts.
     */
    public function getContexts(): ?array
    {
        return $this->container['contexts'];
    }

    /**
     * Sets contexts.
     *
     * @param null|array $contexts list of additional Information about the item
     */
    public function setContexts(?array $contexts): self
    {
        if (is_null($contexts)) {
            array_push($this->openAPINullablesSetToNull, 'contexts');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contexts', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contexts'] = $contexts;

        return $this;
    }

    /**
     * Gets breakdowns.
     */
    public function getBreakdowns(): ?array
    {
        return $this->container['breakdowns'];
    }

    /**
     * Sets breakdowns.
     *
     * @param null|array $breakdowns a list of breakdowns that detail how the total amount is calculated for the transaction
     */
    public function setBreakdowns(?array $breakdowns): self
    {
        if (is_null($breakdowns)) {
            array_push($this->openAPINullablesSetToNull, 'breakdowns');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('breakdowns', $nullablesSetToNull);
            if (false !== $index) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['breakdowns'] = $breakdowns;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed    $value  Value to be set
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
     * @param int $offset Offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Array of nullable properties.
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null.
     *
     * @return bool[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null.
     *
     * @param bool[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array.
     *
     * @param mixed $defaultValue
     */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }
}
