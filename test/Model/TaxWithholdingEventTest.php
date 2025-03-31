<?php
/**
 * TaxWithholdingEventTest
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
use SpApi\Model\finances\v0\TaxWithholdingEvent;

/**
 * TaxWithholdingEventTest Class Doc Comment
 *
 * @category    Class
 * @description A TaxWithholding event on seller&#39;s account.
 * @package     SpApi
 */
class TaxWithholdingEventTest extends TestCase
{

    private TaxWithholdingEvent $model;

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->model = new TaxWithholdingEvent();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
        unset($this->model);
    }

    /**
     * Test "TaxWithholdingEvent"
     */
    public function testTaxWithholdingEvent()
    {
        $this->assertInstanceOf(TaxWithholdingEvent::class, $this->model);
    }

    /**
     * Test attribute "posted_date"
     */
    public function testPropertyPostedDate()
    {
        
        $testValue = new \DateTime();
        
        $this->model->setPostedDate($testValue);
        $this->assertEquals($testValue, $this->model->getPostedDate());
    }

    /**
     * Test attribute "base_amount"
     */
    public function testPropertyBaseAmount()
    {
        
        $testValue = new \SpApi\Model\finances\v0\Currency();
        
        $this->model->setBaseAmount($testValue);
        $this->assertEquals($testValue, $this->model->getBaseAmount());
    }

    /**
     * Test attribute "withheld_amount"
     */
    public function testPropertyWithheldAmount()
    {
        
        $testValue = new \SpApi\Model\finances\v0\Currency();
        
        $this->model->setWithheldAmount($testValue);
        $this->assertEquals($testValue, $this->model->getWithheldAmount());
    }

    /**
     * Test attribute "tax_withholding_period"
     */
    public function testPropertyTaxWithholdingPeriod()
    {
        
        $testValue = new \SpApi\Model\finances\v0\TaxWithholdingPeriod();
        
        $this->model->setTaxWithholdingPeriod($testValue);
        $this->assertEquals($testValue, $this->model->getTaxWithholdingPeriod());
    }
}
