<?php
/**
 * UnitOfLengthTest
 *
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

namespace SpApi\Test\Model;

use PHPUnit\Framework\TestCase;
use SpApi\Model\easyship\v2022_03_23\UnitOfLength;

/**
 * UnitOfLengthTest Class Doc Comment
 *
 * @category    Class
 * @description The unit of measurement used to measure the length.
 * @package     SpApi
 */
class UnitOfLengthTest extends TestCase
{

    private UnitOfLength $model;

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->model = new UnitOfLength();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
        unset($this->model);
    }

    /**
     * Test "UnitOfLength"
     */
    public function testUnitOfLength()
    {
        $this->assertInstanceOf(UnitOfLength::class, $this->model);
    }
}
