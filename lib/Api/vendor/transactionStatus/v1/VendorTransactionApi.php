<?php
/**
 * VendorTransactionApi
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Retail Procurement Transaction Status
 *
 * The Selling Partner API for Retail Procurement Transaction Status provides programmatic access to status information on specific asynchronous POST transactions for vendors.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpApi\Api\vendor\transactionStatus\v1;

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
 * VendorTransactionApi Class Doc Comment
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VendorTransactionApi
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
    public ?LimiterInterface $getTransactionRateLimiter;

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

            $factory = new RateLimiterFactory(Configuration::getRateLimitOptions("VendorTransactionApi-getTransaction"), $this->rateLimitStorage);
            $this->getTransactionRateLimiter = $factory->create("VendorTransactionApi-getTransaction");
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
     * Operation getTransaction
     *
     * @param  string $transaction_id
     *  The GUID provided by Amazon in the &#39;transactionId&#39; field in response to the post request of a specific transaction. (required)
     *
     * @param  string|null $restrictedDataToken Restricted Data Token (RDT) for accessing restricted resources (optional, required for operations that return PII)
     * @throws \SpApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SpApi\Model\vendor\transactionStatus\v1\GetTransactionResponse
     */
    public function getTransaction(
        string $transaction_id,
        ?string $restrictedDataToken = null
    ): \SpApi\Model\vendor\transactionStatus\v1\GetTransactionResponse {
        list($response) = $this->getTransactionWithHttpInfo($transaction_id,$restrictedDataToken);
        return $response;
    }

    /**
     * Operation getTransactionWithHttpInfo
     *
     * @param  string $transaction_id
     *  The GUID provided by Amazon in the &#39;transactionId&#39; field in response to the post request of a specific transaction. (required)
     *
     * @param  string|null $restrictedDataToken Restricted Data Token (RDT) for accessing restricted resources (optional, required for operations that return PII)
     * @throws \SpApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SpApi\Model\vendor\transactionStatus\v1\GetTransactionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransactionWithHttpInfo(
        string $transaction_id,
        ?string $restrictedDataToken = null
    ): array {
        $request = $this->getTransactionRequest($transaction_id);
        if ($restrictedDataToken !== null) {
            $request = RestrictedDataTokenSigner::sign($request, $restrictedDataToken, "VendorTransactionApi-getTransaction");
        } else {
            $request = $this->config->sign($request);
        }
        try {
            $options = $this->createHttpClientOption();
            try {
                if ($this->rateLimiterEnabled) {
                    $this->getTransactionRateLimiter->consume()->ensureAccepted();
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
                if ('\SpApi\Model\vendor\transactionStatus\v1\GetTransactionResponse' === '\SplFileObject') {
                    $content = $response->getBody(); //stream goes to serializer
                } else {
                    $content = (string) $response->getBody();
                    if ('\SpApi\Model\vendor\transactionStatus\v1\GetTransactionResponse' !== 'string') {
                        $content = json_decode($content);
                    }
                }

                return [
                    ObjectSerializer::deserialize($content, '\SpApi\Model\vendor\transactionStatus\v1\GetTransactionResponse', []),
                    $response->getStatusCode(),
                    $response->getHeaders()
                ];
        } catch (ApiException $e) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\SpApi\Model\vendor\transactionStatus\v1\GetTransactionResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
            throw $e;
        }
    }

    /**
     * Operation getTransactionAsync
     *
     * @param  string $transaction_id
     *  The GUID provided by Amazon in the &#39;transactionId&#39; field in response to the post request of a specific transaction. (required)
     *
     * @throws \InvalidArgumentException
     * @return PromiseInterface
     */
    public function getTransactionAsync(
        string $transaction_id
    ): PromiseInterface {
        return $this->getTransactionAsyncWithHttpInfo($transaction_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTransactionAsyncWithHttpInfo
     *
     * @param  string $transaction_id
     *  The GUID provided by Amazon in the &#39;transactionId&#39; field in response to the post request of a specific transaction. (required)
     *
     * @throws \InvalidArgumentException
     * @return PromiseInterface
     */
    public function getTransactionAsyncWithHttpInfo(
        string $transaction_id,
    ?string $restrictedDataToken = null
    ): PromiseInterface {
        $returnType = '\SpApi\Model\vendor\transactionStatus\v1\GetTransactionResponse';
        $request = $this->getTransactionRequest($transaction_id);
        if ($restrictedDataToken !== null) {
            $request = RestrictedDataTokenSigner::sign($request, $restrictedDataToken, "VendorTransactionApi-getTransaction");
        } else {
            $request = $this->config->sign($request);
        }
        if ($this->rateLimiterEnabled) {
            $this->getTransactionRateLimiter->consume()->ensureAccepted();
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
     * Create request for operation 'getTransaction'
     *
     * @param  string $transaction_id
     *  The GUID provided by Amazon in the &#39;transactionId&#39; field in response to the post request of a specific transaction. (required)
     *
     * @throws \InvalidArgumentException
     * @return Request
     */
    public function getTransactionRequest(
        string $transaction_id
    ): Request {
        // verify the required parameter 'transaction_id' is set
        if ($transaction_id === null || (is_array($transaction_id) && count($transaction_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transaction_id when calling getTransaction'
            );
        }

        $resourcePath = '/vendor/transactions/v1/transactions/{transactionId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($transaction_id !== null) {
            $resourcePath = str_replace(
                '{' . 'transactionId' . '}',
                ObjectSerializer::toPathValue($transaction_id),
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
