<?php
/**
 * AutomotiveApiTest
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Selling Partner API for Automotive.
 *
 * The Selling Partner API for Automotive provides programmatic access to information needed by selling partners to provide compatibility information about their listed products.
 *
 * The version of the OpenAPI document: 2024-11-01
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
use SpApi\Api\vehicles\v2024_11_01\AutomotiveApi;
use SpApi\ObjectSerializer;

/**
 * AutomotiveApiTest Class Doc Comment
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AutomotiveApiTest extends BaseTestCase
{
    private AutomotiveApi $apiInstance;
    public function setUp(): void
    {
        parent::setUp();
        // Initialize parameter value specific to case
        $this->testHelper->setSpecificValue('AutomotiveApi', $this->getName());
        $this->apiInstance = new AutomotiveApi($this->config, null, null);
        // Change Time Format if it requires
        $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('AutomotiveApi');
        if ($specificTimeFormat) {
            ObjectSerializer::setDateTimeFormat($specificTimeFormat);
        }
    }

    /**
     * Test case for getVehicles_0_200
     */
    public function testGetVehicles0200()
    {
        try {
            // Skip test if it is in the skip list
            if ($this->testHelper->shouldSkipTest('testGetVehicles0200', 'AutomotiveApi')) {
                $this->assertTrue(true);
                return;
            }
            $jsonSchema = '{
  &quot;description&quot; : &quot;Success.&quot;,
  &quot;headers&quot; : {
    &quot;x-amzn-RequestId&quot; : {
      &quot;description&quot; : &quot;Unique request reference identifier.&quot;,
      &quot;schema&quot; : {
        &quot;type&quot; : &quot;string&quot;
      }
    },
    &quot;x-amzn-RateLimit-Limit&quot; : {
      &quot;description&quot; : &quot;Your rate limit (requests per second) for this operation.&quot;,
      &quot;schema&quot; : {
        &quot;type&quot; : &quot;string&quot;
      }
    }
  },
  &quot;content&quot; : {
    &quot;application/json&quot; : {
      &quot;schema&quot; : {
        &quot;$ref&quot; : &quot;#/components/schemas/VehiclesResponse&quot;
      },
      &quot;example&quot; : {
        &quot;pagination&quot; : {
          &quot;nextToken&quot; : &quot;xsdflkj324lkjsdlkj3423klkjsdfkljlk2j34klj2l3k4jlksdjl234&quot;,
          &quot;previousToken&quot; : &quot;mmkjsdflkj234lkjds234234lkjl234lksjdflkj234234lkjsfsdflkj333d&quot;
        },
        &quot;vehicles&quot; : [ {
          &quot;make&quot; : &quot;Chevrolet&quot;,
          &quot;model&quot; : &quot;Aveo&quot;,
          &quot;variantName&quot; : &quot;1.2&quot;,
          &quot;bodyStyle&quot; : &quot;Schrägheck&quot;,
          &quot;driveType&quot; : &quot;Frontantrieb&quot;,
          &quot;energy&quot; : &quot;Benzin&quot;,
          &quot;engineOutput&quot; : [ {
            &quot;value&quot; : 51,
            &quot;unit&quot; : &quot;KILOWATT&quot;
          }, {
            &quot;value&quot; : 69,
            &quot;unit&quot; : &quot;HORSEPOWER&quot;
          } ],
          &quot;manufacturingStartDate&quot; : {
            &quot;year&quot; : 2011,
            &quot;month&quot; : 3
          },
          &quot;manufacturingStopDate&quot; : { },
          &quot;lastProcessedDate&quot; : &quot;2024-09-01T18:00:03+00:00&quot;,
          &quot;status&quot; : &quot;DELETED&quot;,
          &quot;identifiers&quot; : [ {
            &quot;standard&quot; : &quot;KTYPE&quot;,
            &quot;value&quot; : &quot;9997&quot;
          } ]
        } ]
      }
    }
  },
  &quot;x-amzn-api-sandbox&quot; : {
    &quot;static&quot; : [ {
      &quot;request&quot; : {
        &quot;parameters&quot; : {
          &quot;pageToken&quot; : {
            &quot;value&quot; : &quot;urldwkj324lkjsdlkj3423klkjsdfkljlk2j34klj2l3k4jlksdjq130&quot;
          },
          &quot;marketplaceId&quot; : {
            &quot;value&quot; : &quot;A1PA6795UKMFR9&quot;
          },
          &quot;vehicleType&quot; : {
            &quot;value&quot; : &quot;MOTORBIKE&quot;
          },
          &quot;updatedAfter&quot; : {
            &quot;value&quot; : &quot;2024-01-05T18:00:03+00:00&quot;
          }
        }
      },
      &quot;response&quot; : {
        &quot;pagination&quot; : {
          &quot;nextToken&quot; : &quot;xsdflkj324lkjsdlkj3423klkjsdfkljlk2j34klj2l3k4jlksdjl234&quot;,
          &quot;previousToken&quot; : &quot;ilkjsdflkj234lkjds234234lkjl234lksjdflkj234234lkjsfsdflkj333d&quot;
        },
        &quot;vehicles&quot; : [ {
          &quot;make&quot; : &quot;Chevrolet&quot;,
          &quot;model&quot; : &quot;Avalanche&quot;,
          &quot;variantName&quot; : &quot;5.3 Flex-fuel&quot;,
          &quot;bodyStyle&quot; : &quot;Pick-up&quot;,
          &quot;driveType&quot; : &quot;Heckantrieb&quot;,
          &quot;energy&quot; : &quot;Benzin/Ethanol&quot;,
          &quot;engineOutput&quot; : [ {
            &quot;value&quot; : 235,
            &quot;unit&quot; : &quot;KILOWATT&quot;
          }, {
            &quot;value&quot; : 320,
            &quot;unit&quot; : &quot;HORSEPOWER&quot;
          } ],
          &quot;manufacturingStartDate&quot; : {
            &quot;year&quot; : 2005,
            &quot;month&quot; : 6
          },
          &quot;manufacturingStopDate&quot; : {
            &quot;year&quot; : 2007,
            &quot;month&quot; : 7
          },
          &quot;lastProcessedDate&quot; : &quot;2024-09-01T18:00:03+00:00&quot;,
          &quot;status&quot; : &quot;ACTIVE&quot;,
          &quot;identifiers&quot; : [ {
            &quot;standard&quot; : &quot;KTYPE&quot;,
            &quot;value&quot; : &quot;27566&quot;
          } ]
        } ]
      }
    } ]
  }
}';
            $result = $this->testHelper->extractRequestAndResponse(
                $this->apiInstance,
                $jsonSchema,
                'getVehicles_0'
            );
            $requestParams = $result['requestParams'];
            $expectedResponse = $result['expectedResponse'];

            // Change Time Format if it requires
            $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('AutomotiveApi');
            if ($specificTimeFormat) {
                ObjectSerializer::setDateTimeFormat($specificTimeFormat);
            }

            // Act: Call API
            list($response, $statusCode, $headers) =
                $this->apiInstance->getVehicles_0WithHttpInfo(...array_values($requestParams));

            // Assert the response code
            $this->assertHttpStatusCode(200, $statusCode);

            // Handle different response codes
            $this->handleResponse($response, $statusCode, 200, $expectedResponse);
        } catch (ApiException $e) {
            $this->handleApiException($e, 200);
        } catch (\ReflectionException $e) {
            $this->fail("Reflection exception: " . $e->getMessage());
        }
    }
    /**
     * Test case for getVehicles_0_400
     */
    public function testGetVehicles0400()
    {
        try {
            // Skip test if it is in the skip list
            if ($this->testHelper->shouldSkipTest('testGetVehicles0400', 'AutomotiveApi')) {
                $this->assertTrue(true);
                return;
            }
            $jsonSchema = '{
  &quot;description&quot; : &quot;Request has missing or invalid parameters and cannot be parsed.&quot;,
  &quot;headers&quot; : {
    &quot;x-amzn-RequestId&quot; : {
      &quot;description&quot; : &quot;Unique request reference identifier.&quot;,
      &quot;schema&quot; : {
        &quot;type&quot; : &quot;string&quot;
      }
    },
    &quot;x-amzn-RateLimit-Limit&quot; : {
      &quot;description&quot; : &quot;Your rate limit (requests per second) for this operation.&quot;,
      &quot;schema&quot; : {
        &quot;type&quot; : &quot;string&quot;
      }
    }
  },
  &quot;content&quot; : {
    &quot;application/json&quot; : {
      &quot;schema&quot; : {
        &quot;$ref&quot; : &quot;#/components/schemas/ErrorList&quot;
      }
    }
  },
  &quot;x-amzn-api-sandbox&quot; : {
    &quot;static&quot; : [ {
      &quot;request&quot; : {
        &quot;parameters&quot; : { }
      },
      &quot;response&quot; : {
        &quot;errors&quot; : [ {
          &quot;code&quot; : &quot;BAD_REQUEST&quot;,
          &quot;message&quot; : &quot;Invalid input&quot;,
          &quot;details&quot; : &quot;Invalid input&quot;
        } ]
      }
    } ]
  }
}';
            $result = $this->testHelper->extractRequestAndResponse(
                $this->apiInstance,
                $jsonSchema,
                'getVehicles_0'
            );
            $requestParams = $result['requestParams'];
            $expectedResponse = $result['expectedResponse'];

            // Change Time Format if it requires
            $specificTimeFormat = $this->testHelper->getDateTimeFormatForCase('AutomotiveApi');
            if ($specificTimeFormat) {
                ObjectSerializer::setDateTimeFormat($specificTimeFormat);
            }

            // Act: Call API
            list($response, $statusCode, $headers) =
                $this->apiInstance->getVehicles_0WithHttpInfo(...array_values($requestParams));

            // Assert the response code
            $this->assertHttpStatusCode(400, $statusCode);

            // Handle different response codes
            $this->handleResponse($response, $statusCode, 400, $expectedResponse);
        } catch (ApiException $e) {
            $this->handleApiException($e, 400);
        } catch (\ReflectionException $e) {
            $this->fail("Reflection exception: " . $e->getMessage());
        }
    }
    /**
     * Test case for getVehicles_0_403
     */
    public function testGetVehicles0403()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getVehicles_0_404
     */
    public function testGetVehicles0404()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getVehicles_0_413
     */
    public function testGetVehicles0413()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getVehicles_0_415
     */
    public function testGetVehicles0415()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getVehicles_0_429
     */
    public function testGetVehicles0429()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getVehicles_0_500
     */
    public function testGetVehicles0500()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
    /**
     * Test case for getVehicles_0_503
     */
    public function testGetVehicles0503()
    {
        // Skip this test
        $this->markTestSkipped('Skip test for this operation.');
    }
}
