<?php
/**
 * AppointmentSlotTest
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
use SpApi\Model\fulfillment\inbound\v2024_03_20\AppointmentSlot;

/**
 * AppointmentSlotTest Class Doc Comment
 *
 * @category    Class
 * @description The fulfillment center appointment slot for the transportation option.
 * @package     SpApi
 */
class AppointmentSlotTest extends TestCase
{

    private AppointmentSlot $model;

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->model = new AppointmentSlot();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
        unset($this->model);
    }

    /**
     * Test "AppointmentSlot"
     */
    public function testAppointmentSlot()
    {
        $this->assertInstanceOf(AppointmentSlot::class, $this->model);
    }

    /**
     * Test attribute "slot_id"
     */
    public function testPropertySlotId()
    {
        $testValue = 'test';
        
        $this->model->setSlotId($testValue);
        $this->assertEquals($testValue, $this->model->getSlotId());
    }

    /**
     * Test attribute "slot_time"
     */
    public function testPropertySlotTime()
    {
        
        $testValue = new \SpApi\Model\fulfillment\inbound\v2024_03_20\AppointmentSlotTime();
        
        $this->model->setSlotTime($testValue);
        $this->assertEquals($testValue, $this->model->getSlotTime());
    }
}
