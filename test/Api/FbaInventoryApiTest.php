<?php
/**
 * FbaInventoryApiTest
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for FBA Inventory
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace SpApi\Test\Api;

use SpApi\ApiException;
use SpApi\Api\fba\inventory\v1\FbaInventoryApi;
use SpApi\ObjectSerializer;

/**
 * FbaInventoryApiTest Class Doc Comment
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FbaInventoryApiTest extends BaseTestCase
{
    private FbaInventoryApi $apiInstance;
    public function setUp(): void
    {
        parent::setUp();
        // Initialize parameter value specific to case
        $this->testHelper->setSpecificValue('FbaInventoryApi', $this->getName());
        $this->apiInstance = new FbaInventoryApi($this->config, null, null);
        // Change Time Format if it requires
        $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('FbaInventoryApi');
        if ($specificTimeFormat) {
            ObjectSerializer::setDateTimeFormat($specificTimeFormat);
        }
    }

    /**
     * Test case for addInventory_200
     */
    public function testAddInventory200()
    {
        // Dynamic sandbox case
        try {
            // Skip test if it is in the skip list
            if ($this->testHelper->shouldSkipTest('testAddInventory200', 'FbaInventoryApi')) {
                $this->assertTrue(true);
                return;
            }
            // Skip entire class
            if ($this->testHelper->shouldSkipTest('FbaInventoryApi')) {
                $this->assertTrue(true);
                return;
            }
            $result = $this->testHelper->buildRequestForDynamicSandBox(
                $this->apiInstance,
                'addInventory'
            );
            $requestParams = $result;

            // Act: Call API
            list($response, $statusCode, $headers) =
                $this->apiInstance->addInventoryWithHttpInfo(...array_values($requestParams));

            // Assert the response code
            $this->assertHttpStatusCode(200, $statusCode);
        } catch (ApiException $e) {
            $this->handleApiException($e, 200);
        } catch (\ReflectionException $e) {
            $this->fail("Reflection exception: " . $e->getMessage());
        }
    }
    /**
     * Test case for addInventory_400
     */
    public function testAddInventory400()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for addInventory_403
     */
    public function testAddInventory403()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for addInventory_404
     */
    public function testAddInventory404()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for addInventory_429
     */
    public function testAddInventory429()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for addInventory_500
     */
    public function testAddInventory500()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for addInventory_503
     */
    public function testAddInventory503()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for createInventoryItem_200
     */
    public function testCreateInventoryItem200()
    {
        // Dynamic sandbox case
        try {
            // Skip test if it is in the skip list
            if ($this->testHelper->shouldSkipTest('testCreateInventoryItem200', 'FbaInventoryApi')) {
                $this->assertTrue(true);
                return;
            }
            // Skip entire class
            if ($this->testHelper->shouldSkipTest('FbaInventoryApi')) {
                $this->assertTrue(true);
                return;
            }
            $result = $this->testHelper->buildRequestForDynamicSandBox(
                $this->apiInstance,
                'createInventoryItem'
            );
            $requestParams = $result;

            // Act: Call API
            list($response, $statusCode, $headers) =
                $this->apiInstance->createInventoryItemWithHttpInfo(...array_values($requestParams));

            // Assert the response code
            $this->assertHttpStatusCode(200, $statusCode);
        } catch (ApiException $e) {
            $this->handleApiException($e, 200);
        } catch (\ReflectionException $e) {
            $this->fail("Reflection exception: " . $e->getMessage());
        }
    }
    /**
     * Test case for createInventoryItem_400
     */
    public function testCreateInventoryItem400()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for createInventoryItem_403
     */
    public function testCreateInventoryItem403()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for createInventoryItem_404
     */
    public function testCreateInventoryItem404()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for createInventoryItem_429
     */
    public function testCreateInventoryItem429()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for createInventoryItem_500
     */
    public function testCreateInventoryItem500()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for createInventoryItem_503
     */
    public function testCreateInventoryItem503()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for deleteInventoryItem_200
     */
    public function testDeleteInventoryItem200()
    {
        // Dynamic sandbox case
        try {
            // Skip test if it is in the skip list
            if ($this->testHelper->shouldSkipTest('testDeleteInventoryItem200', 'FbaInventoryApi')) {
                $this->assertTrue(true);
                return;
            }
            // Skip entire class
            if ($this->testHelper->shouldSkipTest('FbaInventoryApi')) {
                $this->assertTrue(true);
                return;
            }
            $result = $this->testHelper->buildRequestForDynamicSandBox(
                $this->apiInstance,
                'deleteInventoryItem'
            );
            $requestParams = $result;

            // Act: Call API
            list($response, $statusCode, $headers) =
                $this->apiInstance->deleteInventoryItemWithHttpInfo(...array_values($requestParams));

            // Assert the response code
            $this->assertHttpStatusCode(200, $statusCode);
        } catch (ApiException $e) {
            $this->handleApiException($e, 200);
        } catch (\ReflectionException $e) {
            $this->fail("Reflection exception: " . $e->getMessage());
        }
    }
    /**
     * Test case for deleteInventoryItem_400
     */
    public function testDeleteInventoryItem400()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for deleteInventoryItem_403
     */
    public function testDeleteInventoryItem403()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for deleteInventoryItem_404
     */
    public function testDeleteInventoryItem404()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for deleteInventoryItem_429
     */
    public function testDeleteInventoryItem429()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for deleteInventoryItem_500
     */
    public function testDeleteInventoryItem500()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for deleteInventoryItem_503
     */
    public function testDeleteInventoryItem503()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getInventorySummaries_200
     */
    public function testGetInventorySummaries200()
    {
        // Dynamic sandbox case
        try {
            // Skip test if it is in the skip list
            if ($this->testHelper->shouldSkipTest('testGetInventorySummaries200', 'FbaInventoryApi')) {
                $this->assertTrue(true);
                return;
            }
            // Skip entire class
            if ($this->testHelper->shouldSkipTest('FbaInventoryApi')) {
                $this->assertTrue(true);
                return;
            }
            $result = $this->testHelper->buildRequestForDynamicSandBox(
                $this->apiInstance,
                'getInventorySummaries'
            );
            $requestParams = $result;

            // Act: Call API
            list($response, $statusCode, $headers) =
                $this->apiInstance->getInventorySummariesWithHttpInfo(...array_values($requestParams));

            // Assert the response code
            $this->assertHttpStatusCode(200, $statusCode);
        } catch (ApiException $e) {
            $this->handleApiException($e, 200);
        } catch (\ReflectionException $e) {
            $this->fail("Reflection exception: " . $e->getMessage());
        }
    }
    /**
     * Test case for getInventorySummaries_400
     */
    public function testGetInventorySummaries400()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getInventorySummaries_403
     */
    public function testGetInventorySummaries403()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getInventorySummaries_404
     */
    public function testGetInventorySummaries404()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getInventorySummaries_429
     */
    public function testGetInventorySummaries429()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getInventorySummaries_500
     */
    public function testGetInventorySummaries500()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getInventorySummaries_503
     */
    public function testGetInventorySummaries503()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
}
