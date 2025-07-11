<?php
/**
 * CustomerInvoicesApi
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping
 *
 * Use the Selling Partner API for Direct Fulfillment Shipping to access a direct fulfillment vendor's shipping data.
 *
 * The version of the OpenAPI document: 2021-12-28
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Api\vendor\df\shipping\v2021_12_28;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Symfony\Component\RateLimiter\LimiterInterface;
use Symfony\Component\RateLimiter\Storage\InMemoryStorage;
use Symfony\Component\RateLimiter\RateLimiterFactory;
use SpApi\AuthAndAuth\RestrictedDataTokenSigner;
use SpApi\ApiException;
use SpApi\Configuration;
use SpApi\HeaderSelector;
use SpApi\ObjectSerializer;

/**
 * CustomerInvoicesApi Class Doc Comment
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerInvoicesApi
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * @var HeaderSelector
     */
    protected HeaderSelector $headerSelector;

    /**
     * @var int Host index
     */
    protected int $hostIndex;

    private Bool $rateLimiterEnabled;
    private InMemoryStorage $rateLimitStorage;
    public ?LimiterInterface $getCustomerInvoiceRateLimiter;
    public ?LimiterInterface $getCustomerInvoicesRateLimiter;

    /**
     * @param Configuration   $config
     * @param RateLimitConfiguration|null $rateLimitConfig
     * @param ClientInterface|null $client
     * @param HeaderSelector|null $selector
     * @param int $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        Configuration $config,
        ?ClientInterface $client = null,
        ?Bool $rateLimiterEnabled = true,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->config = $config;
        $this->rateLimiterEnabled = $rateLimiterEnabled;

        if ($rateLimiterEnabled) {
            $this->rateLimitStorage = new InMemoryStorage();

            $factory = new RateLimiterFactory(Configuration::getRateLimitOptions("CustomerInvoicesApi-getCustomerInvoice"), $this->rateLimitStorage);
            $this->getCustomerInvoiceRateLimiter = $factory->create("CustomerInvoicesApi-getCustomerInvoice");
            $factory = new RateLimiterFactory(Configuration::getRateLimitOptions("CustomerInvoicesApi-getCustomerInvoices"), $this->rateLimitStorage);
            $this->getCustomerInvoicesRateLimiter = $factory->create("CustomerInvoicesApi-getCustomerInvoices");
        }

        $this->client = $client ?: new Client();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex(): int
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }
    /**
     * Operation getCustomerInvoice
     *
     * getCustomerInvoice
     *
     * @param  string $purchase_order_number
     *  Purchase order number of the shipment for which to return the invoice. (required)
     *
     * @param  string|null $restrictedDataToken Restricted Data Token (RDT) for accessing restricted resources (optional, required for operations that return PII)
     * @throws \SpApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SpApi\Model\vendor\df\shipping\v2021_12_28\CustomerInvoice
     */
    public function getCustomerInvoice(
        string $purchase_order_number,
        ?string $restrictedDataToken = null
    ): \SpApi\Model\vendor\df\shipping\v2021_12_28\CustomerInvoice {
        list($response) = $this->getCustomerInvoiceWithHttpInfo($purchase_order_number,$restrictedDataToken);
        return $response;
    }

    /**
     * Operation getCustomerInvoiceWithHttpInfo
     *
     * getCustomerInvoice
     *
     * @param  string $purchase_order_number
     *  Purchase order number of the shipment for which to return the invoice. (required)
     *
     * @param  string|null $restrictedDataToken Restricted Data Token (RDT) for accessing restricted resources (optional, required for operations that return PII)
     * @throws \SpApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SpApi\Model\vendor\df\shipping\v2021_12_28\CustomerInvoice, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerInvoiceWithHttpInfo(
        string $purchase_order_number,
        ?string $restrictedDataToken = null
    ): array {
        $request = $this->getCustomerInvoiceRequest($purchase_order_number);
        if ($restrictedDataToken !== null) {
            $request = RestrictedDataTokenSigner::sign($request, $restrictedDataToken, "CustomerInvoicesApi-getCustomerInvoice");
        } else {
            $request = $this->config->sign($request);
        }
        try {
            $options = $this->createHttpClientOption();
            try {
                if ($this->rateLimiterEnabled) {
                    $this->getCustomerInvoiceRateLimiter->consume()->ensureAccepted();
                }
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getResponse()->getBody()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }
                if ('\SpApi\Model\vendor\df\shipping\v2021_12_28\CustomerInvoice' === '\SplFileObject') {
                    $content = $response->getBody(); //stream goes to serializer
                } else {
                    $content = (string) $response->getBody();
                    if ('\SpApi\Model\vendor\df\shipping\v2021_12_28\CustomerInvoice' !== 'string') {
                        $content = json_decode($content);
                    }
                }

                return [
                    ObjectSerializer::deserialize($content, '\SpApi\Model\vendor\df\shipping\v2021_12_28\CustomerInvoice', []),
                    $response->getStatusCode(),
                    $response->getHeaders()
                ];
        } catch (ApiException $e) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\SpApi\Model\vendor\df\shipping\v2021_12_28\ErrorList',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
            throw $e;
        }
    }

    /**
     * Operation getCustomerInvoiceAsync
     *
     * getCustomerInvoice
     *
     * @param  string $purchase_order_number
     *  Purchase order number of the shipment for which to return the invoice. (required)
     *
     * @throws \InvalidArgumentException
     * @return PromiseInterface
     */
    public function getCustomerInvoiceAsync(
        string $purchase_order_number
    ): PromiseInterface {
        return $this->getCustomerInvoiceAsyncWithHttpInfo($purchase_order_number)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCustomerInvoiceAsyncWithHttpInfo
     *
     * getCustomerInvoice
     *
     * @param  string $purchase_order_number
     *  Purchase order number of the shipment for which to return the invoice. (required)
     *
     * @throws \InvalidArgumentException
     * @return PromiseInterface
     */
    public function getCustomerInvoiceAsyncWithHttpInfo(
        string $purchase_order_number,
    ?string $restrictedDataToken = null
    ): PromiseInterface {
        $returnType = '\SpApi\Model\vendor\df\shipping\v2021_12_28\CustomerInvoice';
        $request = $this->getCustomerInvoiceRequest($purchase_order_number);
        if ($restrictedDataToken !== null) {
            $request = RestrictedDataTokenSigner::sign($request, $restrictedDataToken, "CustomerInvoicesApi-getCustomerInvoice");
        } else {
            $request = $this->config->sign($request);
        }
        if ($this->rateLimiterEnabled) {
            $this->getCustomerInvoiceRateLimiter->consume()->ensureAccepted();
        }

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCustomerInvoice'
     *
     * @param  string $purchase_order_number
     *  Purchase order number of the shipment for which to return the invoice. (required)
     *
     * @throws \InvalidArgumentException
     * @return Request
     */
    public function getCustomerInvoiceRequest(
        string $purchase_order_number
    ): Request {
        // verify the required parameter 'purchase_order_number' is set
        if ($purchase_order_number === null || (is_array($purchase_order_number) && count($purchase_order_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $purchase_order_number when calling getCustomerInvoice'
            );
        }
        if (!preg_match("/^[a-zA-Z0-9]+$/", $purchase_order_number)) {
            throw new \InvalidArgumentException("invalid value for \"purchase_order_number\" when calling CustomerInvoicesApi.getCustomerInvoice, must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }


        $resourcePath = '/vendor/directFulfillment/shipping/2021-12-28/customerInvoices/{purchaseOrderNumber}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($purchase_order_number !== null) {
            $resourcePath = str_replace(
                '{' . 'purchaseOrderNumber' . '}',
                ObjectSerializer::toPathValue($purchase_order_number),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            
            '',
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams, $this->config);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = ObjectSerializer::buildQuery($queryParams, $this->config);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getCustomerInvoices
     *
     * getCustomerInvoices
     *
     * @param  \DateTime $created_after
     *  Orders that became available after this date and time will be included in the result. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. (required)
     * @param  \DateTime $created_before
     *  Orders that became available before this date and time will be included in the result. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. (required)
     * @param  string|null $ship_from_party_id
     *  The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. (optional)
     * @param  int|null $limit
     *  The limit to the number of records returned (optional)
     * @param  string|null $sort_order
     *  Sort ASC or DESC by order creation date. (optional)
     * @param  string|null $next_token
     *  Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. (optional)
     *
     * @param  string|null $restrictedDataToken Restricted Data Token (RDT) for accessing restricted resources (optional, required for operations that return PII)
     * @throws \SpApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SpApi\Model\vendor\df\shipping\v2021_12_28\CustomerInvoiceList
     */
    public function getCustomerInvoices(
        \DateTime $created_after,
        \DateTime $created_before,
        ?string $ship_from_party_id = null,
        ?int $limit = null,
        ?string $sort_order = null,
        ?string $next_token = null,
        ?string $restrictedDataToken = null
    ): \SpApi\Model\vendor\df\shipping\v2021_12_28\CustomerInvoiceList {
        list($response) = $this->getCustomerInvoicesWithHttpInfo($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token,$restrictedDataToken);
        return $response;
    }

    /**
     * Operation getCustomerInvoicesWithHttpInfo
     *
     * getCustomerInvoices
     *
     * @param  \DateTime $created_after
     *  Orders that became available after this date and time will be included in the result. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. (required)
     * @param  \DateTime $created_before
     *  Orders that became available before this date and time will be included in the result. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. (required)
     * @param  string|null $ship_from_party_id
     *  The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. (optional)
     * @param  int|null $limit
     *  The limit to the number of records returned (optional)
     * @param  string|null $sort_order
     *  Sort ASC or DESC by order creation date. (optional)
     * @param  string|null $next_token
     *  Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. (optional)
     *
     * @param  string|null $restrictedDataToken Restricted Data Token (RDT) for accessing restricted resources (optional, required for operations that return PII)
     * @throws \SpApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SpApi\Model\vendor\df\shipping\v2021_12_28\CustomerInvoiceList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerInvoicesWithHttpInfo(
        \DateTime $created_after,
        \DateTime $created_before,
        ?string $ship_from_party_id = null,
        ?int $limit = null,
        ?string $sort_order = null,
        ?string $next_token = null,
        ?string $restrictedDataToken = null
    ): array {
        $request = $this->getCustomerInvoicesRequest($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token);
        if ($restrictedDataToken !== null) {
            $request = RestrictedDataTokenSigner::sign($request, $restrictedDataToken, "CustomerInvoicesApi-getCustomerInvoices");
        } else {
            $request = $this->config->sign($request);
        }
        try {
            $options = $this->createHttpClientOption();
            try {
                if ($this->rateLimiterEnabled) {
                    $this->getCustomerInvoicesRateLimiter->consume()->ensureAccepted();
                }
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getResponse()->getBody()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }
                if ('\SpApi\Model\vendor\df\shipping\v2021_12_28\CustomerInvoiceList' === '\SplFileObject') {
                    $content = $response->getBody(); //stream goes to serializer
                } else {
                    $content = (string) $response->getBody();
                    if ('\SpApi\Model\vendor\df\shipping\v2021_12_28\CustomerInvoiceList' !== 'string') {
                        $content = json_decode($content);
                    }
                }

                return [
                    ObjectSerializer::deserialize($content, '\SpApi\Model\vendor\df\shipping\v2021_12_28\CustomerInvoiceList', []),
                    $response->getStatusCode(),
                    $response->getHeaders()
                ];
        } catch (ApiException $e) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\SpApi\Model\vendor\df\shipping\v2021_12_28\ErrorList',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
            throw $e;
        }
    }

    /**
     * Operation getCustomerInvoicesAsync
     *
     * getCustomerInvoices
     *
     * @param  \DateTime $created_after
     *  Orders that became available after this date and time will be included in the result. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. (required)
     * @param  \DateTime $created_before
     *  Orders that became available before this date and time will be included in the result. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. (required)
     * @param  string|null $ship_from_party_id
     *  The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. (optional)
     * @param  int|null $limit
     *  The limit to the number of records returned (optional)
     * @param  string|null $sort_order
     *  Sort ASC or DESC by order creation date. (optional)
     * @param  string|null $next_token
     *  Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. (optional)
     *
     * @throws \InvalidArgumentException
     * @return PromiseInterface
     */
    public function getCustomerInvoicesAsync(
        \DateTime $created_after,
        \DateTime $created_before,
        ?string $ship_from_party_id = null,
        ?int $limit = null,
        ?string $sort_order = null,
        ?string $next_token = null
    ): PromiseInterface {
        return $this->getCustomerInvoicesAsyncWithHttpInfo($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCustomerInvoicesAsyncWithHttpInfo
     *
     * getCustomerInvoices
     *
     * @param  \DateTime $created_after
     *  Orders that became available after this date and time will be included in the result. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. (required)
     * @param  \DateTime $created_before
     *  Orders that became available before this date and time will be included in the result. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. (required)
     * @param  string|null $ship_from_party_id
     *  The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. (optional)
     * @param  int|null $limit
     *  The limit to the number of records returned (optional)
     * @param  string|null $sort_order
     *  Sort ASC or DESC by order creation date. (optional)
     * @param  string|null $next_token
     *  Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. (optional)
     *
     * @throws \InvalidArgumentException
     * @return PromiseInterface
     */
    public function getCustomerInvoicesAsyncWithHttpInfo(
        \DateTime $created_after,
        \DateTime $created_before,
        ?string $ship_from_party_id = null,
        ?int $limit = null,
        ?string $sort_order = null,
        ?string $next_token = null,
    ?string $restrictedDataToken = null
    ): PromiseInterface {
        $returnType = '\SpApi\Model\vendor\df\shipping\v2021_12_28\CustomerInvoiceList';
        $request = $this->getCustomerInvoicesRequest($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token);
        if ($restrictedDataToken !== null) {
            $request = RestrictedDataTokenSigner::sign($request, $restrictedDataToken, "CustomerInvoicesApi-getCustomerInvoices");
        } else {
            $request = $this->config->sign($request);
        }
        if ($this->rateLimiterEnabled) {
            $this->getCustomerInvoicesRateLimiter->consume()->ensureAccepted();
        }

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCustomerInvoices'
     *
     * @param  \DateTime $created_after
     *  Orders that became available after this date and time will be included in the result. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. (required)
     * @param  \DateTime $created_before
     *  Orders that became available before this date and time will be included in the result. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. (required)
     * @param  string|null $ship_from_party_id
     *  The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. (optional)
     * @param  int|null $limit
     *  The limit to the number of records returned (optional)
     * @param  string|null $sort_order
     *  Sort ASC or DESC by order creation date. (optional)
     * @param  string|null $next_token
     *  Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. (optional)
     *
     * @throws \InvalidArgumentException
     * @return Request
     */
    public function getCustomerInvoicesRequest(
        \DateTime $created_after,
        \DateTime $created_before,
        ?string $ship_from_party_id = null,
        ?int $limit = null,
        ?string $sort_order = null,
        ?string $next_token = null
    ): Request {
        // verify the required parameter 'created_after' is set
        if ($created_after === null || (is_array($created_after) && count($created_after) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $created_after when calling getCustomerInvoices'
            );
        }
        // verify the required parameter 'created_before' is set
        if ($created_before === null || (is_array($created_before) && count($created_before) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $created_before when calling getCustomerInvoices'
            );
        }
        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling CustomerInvoicesApi.getCustomerInvoices, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling CustomerInvoicesApi.getCustomerInvoices, must be bigger than or equal to 1.');
        }


        $resourcePath = '/vendor/directFulfillment/shipping/2021-12-28/customerInvoices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ship_from_party_id,
            'shipFromPartyId', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
            $this->config
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false, // required
            $this->config
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_after,
            'createdAfter', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            true, // required
            $this->config
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_before,
            'createdBefore', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            true, // required
            $this->config
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort_order,
            'sortOrder', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
            $this->config
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $next_token,
            'nextToken', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            false, // required
            $this->config
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'payload'],
            
            '',
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams, $this->config);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = ObjectSerializer::buildQuery($queryParams, $this->config);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption(): array
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
