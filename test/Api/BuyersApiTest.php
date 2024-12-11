<?php
/**
 * BuyersApiTest
 * PHP version 7.2
 *
 * @category Class
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Gr4vy API (Beta)
 *
 * Welcome to the Gr4vy API reference documentation. Our API is still very much a work in product and subject to change.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: code@gr4vy.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace Gr4vy\Test\Api;

use \Gr4vy\Gr4vyConfig;
use PHPUnit\Framework\TestCase;

/**
 * BuyersApiTest Class Doc Comment
 *
 * @category Class
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BuyersApiTest extends TestCase
{
    private static $privateKeyLocation = __DIR__ . "/../../private_key.pem";
    private static $gr4vyId = "spider";

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for addBuyer
     *
     * New buyer.
     *
     */
    public function testAddBuyer()
    {
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $buyer_request = array("external_identifier"=>"testAddBuyer2","display_name"=>"🐶");
            $result = $config->addBuyer($buyer_request);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result["display_name"], "🐶");

            $result = $config->deleteBuyer($result["id"]);
            $this->assertArrayHasKey("success", $result);
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }

    /**
     * Test case for deleteBuyer
     *
     * Delete buyer.
     *
     */
    public function testDeleteBuyer()
    {
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $buyer_request = array("external_identifier"=>"testAddBuyer2","display_name"=>"Tester T.");
            $result = $config->addBuyer($buyer_request);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result["display_name"], "Tester T.");

            $result = $config->deleteBuyer($result["id"]);
            $this->assertArrayHasKey("success", $result);

        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }

    /**
     * Test case for getBuyer
     *
     * Get buyer.
     *
     */
    public function testGetBuyer()
    {
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);

            $buyer_request = array("external_identifier"=>"testAddBuyer2","display_name"=>"Tester T.");
            $result = $config->addBuyer($buyer_request);
            $this->assertArrayHasKey("id", $result);

            $result = $config->getBuyer($result["id"]);
            $this->assertArrayHasKey("id", $result);

            $result = $config->deleteBuyer($result["id"]);
            $this->assertArrayHasKey("success", $result);

        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }

    /**
     * Test case for listBuyers
     *
     * List buyers.
     *
     */
    public function testListBuyers()
    {

        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $result = $config->listBuyers();
            $this->assertGreaterThan(0, count($result["items"]), "Expected items to be greater than 0.");
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }

    /**
     * Test case for updateBuyer
     *
     * Update buyer.
     *
     */
    public function testUpdateBuyer()
    {
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);

            $buyer_request = array("external_identifier"=>"testAddBuyer6","display_name"=>"abc");
            $result = $config->addBuyer($buyer_request);
            $buyer_update = array("external_identifier"=>"testUpdateBuyer6");
            $result = $config->updateBuyer($result["id"], $buyer_update);
            $this->assertArrayHasKey("id", $result);
            $this->assertEquals($result["external_identifier"], "testUpdateBuyer6");

            $result = $config->deleteBuyer($result["id"]);
            $this->assertArrayHasKey("success", $result);
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }
}
