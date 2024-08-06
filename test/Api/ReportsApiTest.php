<?php
/**
 * ReportsApiTest
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
 * ReportsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReportsApiTest extends TestCase
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
     * Test case for generateReportDownloadUrl
     *
     * New transaction.
     *
     */
    public function testGenerateReportDownloadUrl()
    {
        try {
            $config = new Gr4vyConfig(self::$gr4vyId, self::$privateKeyLocation);
            $result = $config->generateReportDownloadUrl("5e7882ac-1bda-413f-9e78-4fcf650657da", "83770ad3-2465-4a74-8bd4-3aa80849cf4b");
            $this->assertArrayHasKey("url", $result);
        } catch (Exception $e) {
            $this->fail("Exception thrown: " . $e->getMessage());
        }
    }

}
