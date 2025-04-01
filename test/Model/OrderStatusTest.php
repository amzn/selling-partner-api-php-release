<?php
/**
 * OrderStatusTest
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
use SpApi\Model\vendor\orders\v1\OrderStatus;

/**
 * OrderStatusTest Class Doc Comment
 *
 * @category    Class
 * @description Current status of a purchase order.
 * @package     SpApi
 */
class OrderStatusTest extends TestCase
{

    private OrderStatus $model;

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->model = new OrderStatus();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
        unset($this->model);
    }

    /**
     * Test "OrderStatus"
     */
    public function testOrderStatus()
    {
        $this->assertInstanceOf(OrderStatus::class, $this->model);
    }

    /**
     * Test attribute "purchase_order_number"
     */
    public function testPropertyPurchaseOrderNumber()
    {
        $testValue = 'test';
        
        $this->model->setPurchaseOrderNumber($testValue);
        $this->assertEquals($testValue, $this->model->getPurchaseOrderNumber());
    }

    /**
     * Test attribute "purchase_order_status"
     */
    public function testPropertyPurchaseOrderStatus()
    {
        $enumInstance = new OrderStatus();
        $allowedValues = $enumInstance->getPurchaseOrderStatusAllowableValues();
        $testValue = reset($allowedValues);
        $this->model->setPurchaseOrderStatus($testValue);
        $this->assertEquals($testValue, $this->model->getPurchaseOrderStatus());
    }

    /**
     * Test attribute "purchase_order_date"
     */
    public function testPropertyPurchaseOrderDate()
    {
        
        $testValue = new \DateTime();
        
        $this->model->setPurchaseOrderDate($testValue);
        $this->assertEquals($testValue, $this->model->getPurchaseOrderDate());
    }

    /**
     * Test attribute "last_updated_date"
     */
    public function testPropertyLastUpdatedDate()
    {
        
        $testValue = new \DateTime();
        
        $this->model->setLastUpdatedDate($testValue);
        $this->assertEquals($testValue, $this->model->getLastUpdatedDate());
    }

    /**
     * Test attribute "selling_party"
     */
    public function testPropertySellingParty()
    {
        
        $testValue = new \SpApi\Model\vendor\orders\v1\PartyIdentification();
        
        $this->model->setSellingParty($testValue);
        $this->assertEquals($testValue, $this->model->getSellingParty());
    }

    /**
     * Test attribute "ship_to_party"
     */
    public function testPropertyShipToParty()
    {
        
        $testValue = new \SpApi\Model\vendor\orders\v1\PartyIdentification();
        
        $this->model->setShipToParty($testValue);
        $this->assertEquals($testValue, $this->model->getShipToParty());
    }

    /**
     * Test attribute "item_status"
     */
    public function testPropertyItemStatus()
    {
        $testValue = [];
        
        $this->model->setItemStatus($testValue);
        $this->assertEquals($testValue, $this->model->getItemStatus());
    }
}
