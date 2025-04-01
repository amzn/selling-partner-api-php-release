<?php
/**
 * ConditionTest
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
use SpApi\Model\pricing\v2022_05_01\Condition;

/**
 * ConditionTest Class Doc Comment
 *
 * @category    Class
 * @description The condition of the item.
 * @package     SpApi
 */
class ConditionTest extends TestCase
{

    private Condition $model;

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->model = new Condition();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
        unset($this->model);
    }

    /**
     * Test "Condition"
     */
    public function testCondition()
    {
        $this->assertInstanceOf(Condition::class, $this->model);
    }
}
