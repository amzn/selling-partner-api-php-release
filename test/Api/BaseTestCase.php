<?php

/**
 * BaseTestCase
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

 /**
 * Selling Partner API
 *
 * The Selling Partner API enables developers to programmatically retrieve information from various domains.
 * These APIs provide tools for building fast, flexible, and custom applications,
 * as well as demand-based decision support systems.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */
/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace SpApi\Test\Api;

use SpApi\Configuration;
use SpApi\ApiException;
use PHPUnit\Framework\TestCase;
use SpApi\Test\TestHelper;
use SpApi\AuthAndAuth\LWAAuthorizationCredentials;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__, 3));
$dotenv->load();

/**
 * BaseTestCase Class Doc Comment
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BaseTestCase extends TestCase
{
    protected TestHelper $testHelper;
    protected Configuration $config;

    protected function setUp(): void
    {
        parent::setUp();
        $this->testHelper = new TestHelper();
        $className = get_class($this);
        $isVendorApi = $this->testHelper->isVendorRelatedApi($className);
        // Initialize MarketPlaceId
        $this->testHelper->setMarketPlaceId($isVendorApi
            ? $_ENV['VENDOR_API_MARKETPLACE'] : $_ENV['SP_API_MARKETPLACE']);

        $credentialsConfig = [
            "clientId" => $isVendorApi ? $_ENV['VENDOR_API_CLIENT_ID'] : $_ENV['SP_API_CLIENT_ID'],
            "clientSecret" => $isVendorApi ? $_ENV['VENDOR_API_CLIENT_SECRET'] : $_ENV['SP_API_CLIENT_SECRET'],
            "refreshToken" => $isVendorApi ? $_ENV['VENDOR_API_REFRESH_TOKEN'] : $_ENV['SP_API_REFRESH_TOKEN'],
            "endpoint" => $isVendorApi ? $_ENV['VENDOR_API_ENDPOINT'] : $_ENV['SP_API_ENDPOINT']
        ];

        $scopes = $this->testHelper->getScopesForApi($this->getName());
        if (!empty($scopes)) {
            $credentialsConfig['scopes'] = $scopes;
        }

        $lwaAuthorizationCredentials = new LWAAuthorizationCredentials($credentialsConfig);
        $this->config = new Configuration([], $lwaAuthorizationCredentials);
        $this->config->setHost($isVendorApi ? $_ENV['VENDOR_API_ENDPOINT_HOST'] : $_ENV['SP_API_ENDPOINT_HOST']);
    }

    /**
     * Handles the response based on the expected HTTP status code.
     *
     * @param mixed $response The API response.
     * @param int $statusCode The actual HTTP status code.
     * @param int $expectedStatusCode The expected HTTP status code.
     * @throws \ReflectionException
     */
    protected function handleResponse(mixed $response, int $statusCode, int $expectedStatusCode, $responseParams): void
    {
        switch ($expectedStatusCode) {
            case 200:
            case 201:
            case 202:
                $this->assertEquals($responseParams, $response);
                break;

            case 204:
                $this->assertTrue(true);
                echo "Response is empty as expected for status code 204.";
                break;

            case 400:
                $this->assertArrayHasKey('errors', $responseParams);
                $this->assertEquals($responseParams['errors'], $response->getErrors());
                break;

            default:
                $this->fail("Unhandled response code: $expectedStatusCode");
                break;
        }
    }

    /**
     * Handles exceptions thrown during the API call.
     *
     * @param ApiException $e The exception thrown by the API.
     */
    protected function handleApiException(ApiException $e, int $expectedCode): void
    {
        if ($e->getCode() == $expectedCode) {
            $this->assertTrue(true);
        } else {
            $this->fail('Unexpected error code: ' . $e->getCode());
        }
    }

    /**
     * Asserts the HTTP status code.
     *
     * @param int $expectedStatusCode
     * @param int $actualStatusCode
     */
    protected function assertHttpStatusCode(int $expectedStatusCode, int $actualStatusCode): void
    {
        $this->assertEquals(
            $expectedStatusCode,
            $actualStatusCode,
            "Expected HTTP status code $expectedStatusCode but got $actualStatusCode."
        );
    }
}
