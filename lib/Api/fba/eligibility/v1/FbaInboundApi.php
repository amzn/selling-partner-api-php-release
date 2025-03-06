<?php
/**
 * FbaInboundApi
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for FBA Inbound Eligibilty
 *
 * With the FBA Inbound Eligibility API, you can build applications that let sellers get eligibility previews for items before shipping them to Amazon's fulfillment centers. With this API you can find out if an item is eligible for inbound shipment to Amazon's fulfillment centers in a specific marketplace. You can also find out if an item is eligible for using the manufacturer barcode for FBA inventory tracking. Sellers can use this information to inform their decisions about which items to ship Amazon's fulfillment centers.
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

namespace SpApi\Api\fba\eligibility\v1;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SpApi\AuthAndAuth\RateLimitConfiguration;
use Symfony\Component\RateLimiter\LimiterInterface;
use Symfony\Component\RateLimiter\Storage\InMemoryStorage;
use Symfony\Component\RateLimiter\RateLimiterFactory;
use SpApi\ApiException;
use SpApi\Configuration;
use SpApi\HeaderSelector;
use SpApi\ObjectSerializer;

/**
 * FbaInboundApi Class Doc Comment
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FbaInboundApi
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

    /**
     * @var ?RateLimitConfiguration
     */
    private ?RateLimitConfiguration $rateLimitConfig = null;

    /**
     * @var ?LimiterInterface
     */
    private ?LimiterInterface $rateLimiter = null;

    /**
     * @param Configuration   $config
     * @param RateLimitConfiguration|null $rateLimitConfig
     * @param ClientInterface|null $client
     * @param HeaderSelector|null $selector
     * @param int $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        Configuration $config,
        ?RateLimitConfiguration $rateLimitConfig = null,
        ?ClientInterface $client = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->config = $config;
        $this->rateLimitConfig = $rateLimitConfig;
        if ($rateLimitConfig) {
            $type = $rateLimitConfig->getRateLimitType();
            $rateLimitOptions = [
                'id' => 'spApiCall',
                'policy' => $type,
                'limit' => $rateLimitConfig->getRateLimitTokenLimit(),
            ];
            if ($type === "fixed_window" || $type === "sliding_window") {
                $rateLimitOptions['interval'] = $rateLimitConfig->getRateLimitToken() . 'seconds';
            } else {
                $rateLimitOptions['rate'] = ['interval' => $rateLimitConfig->getRateLimitToken() . 'seconds'];
            }
            $factory = new RateLimiterFactory($rateLimitOptions, new InMemoryStorage());
            $this->rateLimiter = $factory->create();
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
     * Operation getItemEligibilityPreview
     *
     * @param  string $asin
     *  The ASIN of the item for which you want an eligibility preview. (required)
     * @param  string $program
     *  The program that you want to check eligibility against. (required)
     * @param  string[]|null $marketplace_ids
     *  The identifier for the marketplace in which you want to determine eligibility. Required only when program&#x3D;INBOUND. (optional)
     *
     * @throws \SpApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse
     */
    public function getItemEligibilityPreview(
        string $asin,
        string $program,
        ?array $marketplace_ids = null
    ): \SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse {
        list($response) = $this->getItemEligibilityPreviewWithHttpInfo($asin, $program, $marketplace_ids);
        return $response;
    }

    /**
     * Operation getItemEligibilityPreviewWithHttpInfo
     *
     * @param  string $asin
     *  The ASIN of the item for which you want an eligibility preview. (required)
     * @param  string $program
     *  The program that you want to check eligibility against. (required)
     * @param  string[]|null $marketplace_ids
     *  The identifier for the marketplace in which you want to determine eligibility. Required only when program&#x3D;INBOUND. (optional)
     *
     * @throws \SpApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getItemEligibilityPreviewWithHttpInfo(
        string $asin,
        string $program,
        ?array $marketplace_ids = null
    ): array {
        $request = $this->getItemEligibilityPreviewRequest($asin, $program, $marketplace_ids);
        $request = $this->config->sign($request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $this->rateLimitWait();
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

            switch($statusCode) {
                case 200:
                    if ('\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse';
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

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getItemEligibilityPreviewAsync
     *
     * @param  string $asin
     *  The ASIN of the item for which you want an eligibility preview. (required)
     * @param  string $program
     *  The program that you want to check eligibility against. (required)
     * @param  string[]|null $marketplace_ids
     *  The identifier for the marketplace in which you want to determine eligibility. Required only when program&#x3D;INBOUND. (optional)
     *
     * @throws \InvalidArgumentException
     * @return PromiseInterface
     */
    public function getItemEligibilityPreviewAsync(
        string $asin,
        string $program,
        ?array $marketplace_ids = null
    ): PromiseInterface {
        return $this->getItemEligibilityPreviewAsyncWithHttpInfo($asin, $program, $marketplace_ids)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getItemEligibilityPreviewAsyncWithHttpInfo
     *
     * @param  string $asin
     *  The ASIN of the item for which you want an eligibility preview. (required)
     * @param  string $program
     *  The program that you want to check eligibility against. (required)
     * @param  string[]|null $marketplace_ids
     *  The identifier for the marketplace in which you want to determine eligibility. Required only when program&#x3D;INBOUND. (optional)
     *
     * @throws \InvalidArgumentException
     * @return PromiseInterface
     */
    public function getItemEligibilityPreviewAsyncWithHttpInfo(
        string $asin,
        string $program,
        ?array $marketplace_ids = null
    ): PromiseInterface {
        $returnType = '\SpApi\Model\fba\eligibility\v1\GetItemEligibilityPreviewResponse';
        $request = $this->getItemEligibilityPreviewRequest($asin, $program, $marketplace_ids);
        $request = $this->config->sign($request);
        $this->rateLimitWait();

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
     * Create request for operation 'getItemEligibilityPreview'
     *
     * @param  string $asin
     *  The ASIN of the item for which you want an eligibility preview. (required)
     * @param  string $program
     *  The program that you want to check eligibility against. (required)
     * @param  string[]|null $marketplace_ids
     *  The identifier for the marketplace in which you want to determine eligibility. Required only when program&#x3D;INBOUND. (optional)
     *
     * @throws \InvalidArgumentException
     * @return Request
     */
    public function getItemEligibilityPreviewRequest(
        string $asin,
        string $program,
        ?array $marketplace_ids = null
    ): Request {
        // verify the required parameter 'asin' is set
        if ($asin === null || (is_array($asin) && count($asin) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $asin when calling getItemEligibilityPreview'
            );
        }
        // verify the required parameter 'program' is set
        if ($program === null || (is_array($program) && count($program) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $program when calling getItemEligibilityPreview'
            );
        }
        if ($marketplace_ids !== null && count($marketplace_ids) > 1) {
            throw new \InvalidArgumentException('invalid value for "$marketplace_ids" when calling FbaInboundApi.getItemEligibilityPreview, number of items must be less than or equal to 1.');
        }


        $resourcePath = '/fba/inbound/v1/eligibility/itemPreview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $marketplace_ids,
            'marketplaceIds', // param base name
            'array', // openApiType
            'form', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $asin,
            'asin', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $program,
            'program', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            true // required
        ) ?? []);




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'ItemEligibilityPreview']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'ItemEligibilityPreview'],
                
                '',
                false
            );
        }

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

    /**
     * Rate Limiter waits for tokens
     *
     * @return void
     */
    public function rateLimitWait(): void
    {
        if ($this->rateLimiter) {
            $type = $this->rateLimitConfig->getRateLimitType();
            if ($this->rateLimitConfig->getTimeOut() != 0 && ($type == "token_bucket" || $type == "fixed_window")) {
                $this->rateLimiter->reserve(1, ($this->rateLimitConfig->getTimeOut()) / 1000)->wait();
            } else {
                $this->rateLimiter->consume()->wait();
            }
        }
    }
}
