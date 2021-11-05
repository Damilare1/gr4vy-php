<?php
/**
 * DigitalWalletUpdate
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Gr4vy API
 *
 * Welcome to the Gr4vy API reference documentation. Our API is still very much a work in product and subject to change.
 *
 * The version of the OpenAPI document: 1.1.0-beta
 * Contact: code@gr4vy.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Gr4vy\model;

use \ArrayAccess;
use \Gr4vy\ObjectSerializer;

/**
 * DigitalWalletUpdate Class Doc Comment
 *
 * @category Class
 * @description Request body to update a registered digital wallet&#39;s details.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DigitalWalletUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DigitalWalletUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchant_name' => 'string',
        'domain_names' => 'string[]',
        'environments' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'merchant_name' => null,
        'domain_names' => null,
        'environments' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'merchant_name' => 'merchant_name',
        'domain_names' => 'domain_names',
        'environments' => 'environments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_name' => 'setMerchantName',
        'domain_names' => 'setDomainNames',
        'environments' => 'setEnvironments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_name' => 'getMerchantName',
        'domain_names' => 'getDomainNames',
        'environments' => 'getEnvironments'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const ENVIRONMENTS_DEVELOPMENT = 'development';
    const ENVIRONMENTS_STAGING = 'staging';
    const ENVIRONMENTS_PRODUCTION = 'production';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEnvironmentsAllowableValues()
    {
        return [
            self::ENVIRONMENTS_DEVELOPMENT,
            self::ENVIRONMENTS_STAGING,
            self::ENVIRONMENTS_PRODUCTION,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['merchant_name'] = $data['merchant_name'] ?? null;
        $this->container['domain_names'] = $data['domain_names'] ?? null;
        $this->container['environments'] = $data['environments'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['domain_names']) && (count($this->container['domain_names']) > 99)) {
            $invalidProperties[] = "invalid value for 'domain_names', number of items must be less than or equal to 99.";
        }

        if (!is_null($this->container['domain_names']) && (count($this->container['domain_names']) < 1)) {
            $invalidProperties[] = "invalid value for 'domain_names', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['environments']) && (count($this->container['environments']) > 3)) {
            $invalidProperties[] = "invalid value for 'environments', number of items must be less than or equal to 3.";
        }

        if (!is_null($this->container['environments']) && (count($this->container['environments']) < 0)) {
            $invalidProperties[] = "invalid value for 'environments', number of items must be greater than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets merchant_name
     *
     * @return string|null
     */
    public function getMerchantName()
    {
        return $this->container['merchant_name'];
    }

    /**
     * Sets merchant_name
     *
     * @param string|null $merchant_name The name of the merchant. This is used to update the value initially used to register with a digital wallet provider and this name is not displayed to the buyer.
     *
     * @return self
     */
    public function setMerchantName($merchant_name)
    {
        $this->container['merchant_name'] = $merchant_name;

        return $this;
    }

    /**
     * Gets domain_names
     *
     * @return string[]|null
     */
    public function getDomainNames()
    {
        return $this->container['domain_names'];
    }

    /**
     * Sets domain_names
     *
     * @param string[]|null $domain_names The list of fully qualified domain names that a digital wallet provider should process payments for.
     *
     * @return self
     */
    public function setDomainNames($domain_names)
    {

        if (!is_null($domain_names) && (count($domain_names) > 99)) {
            throw new \InvalidArgumentException('invalid value for $domain_names when calling DigitalWalletUpdate., number of items must be less than or equal to 99.');
        }
        if (!is_null($domain_names) && (count($domain_names) < 1)) {
            throw new \InvalidArgumentException('invalid length for $domain_names when calling DigitalWalletUpdate., number of items must be greater than or equal to 1.');
        }
        $this->container['domain_names'] = $domain_names;

        return $this;
    }

    /**
     * Gets environments
     *
     * @return string[]|null
     */
    public function getEnvironments()
    {
        return $this->container['environments'];
    }

    /**
     * Sets environments
     *
     * @param string[]|null $environments Determines the Gr4vy environments in which this digital wallet should be available.
     *
     * @return self
     */
    public function setEnvironments($environments)
    {
        $allowedValues = $this->getEnvironmentsAllowableValues();
        if (!is_null($environments) && array_diff($environments, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'environments', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (!is_null($environments) && (count($environments) > 3)) {
            throw new \InvalidArgumentException('invalid value for $environments when calling DigitalWalletUpdate., number of items must be less than or equal to 3.');
        }
        if (!is_null($environments) && (count($environments) < 0)) {
            throw new \InvalidArgumentException('invalid length for $environments when calling DigitalWalletUpdate., number of items must be greater than or equal to 0.');
        }
        $this->container['environments'] = $environments;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


