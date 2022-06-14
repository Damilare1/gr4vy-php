<?php
/**
 * PaymentServices
 *
 * PHP version 7.3
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
 * OpenAPI Generator version: 5.4.0
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
 * PaymentServices Class Doc Comment
 *
 * @category Class
 * @description A list of active, configured payment services.
 * @package  Gr4vy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentServices implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentServices';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'items' => '\Gr4vy\model\PaymentService[]',
        'limit' => 'int',
        'next_cursor' => 'string',
        'previous_cursor' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'items' => null,
        'limit' => 'int32',
        'next_cursor' => null,
        'previous_cursor' => null
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
        'items' => 'items',
        'limit' => 'limit',
        'next_cursor' => 'next_cursor',
        'previous_cursor' => 'previous_cursor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'items' => 'setItems',
        'limit' => 'setLimit',
        'next_cursor' => 'setNextCursor',
        'previous_cursor' => 'setPreviousCursor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'items' => 'getItems',
        'limit' => 'getLimit',
        'next_cursor' => 'getNextCursor',
        'previous_cursor' => 'getPreviousCursor'
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
        $this->container['items'] = $data['items'] ?? null;
        $this->container['limit'] = $data['limit'] ?? 20;
        $this->container['next_cursor'] = $data['next_cursor'] ?? null;
        $this->container['previous_cursor'] = $data['previous_cursor'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
            $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
            $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['next_cursor']) && (mb_strlen($this->container['next_cursor']) > 1000)) {
            $invalidProperties[] = "invalid value for 'next_cursor', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['next_cursor']) && (mb_strlen($this->container['next_cursor']) < 1)) {
            $invalidProperties[] = "invalid value for 'next_cursor', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['previous_cursor']) && (mb_strlen($this->container['previous_cursor']) > 1000)) {
            $invalidProperties[] = "invalid value for 'previous_cursor', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['previous_cursor']) && (mb_strlen($this->container['previous_cursor']) < 1)) {
            $invalidProperties[] = "invalid value for 'previous_cursor', the character length must be bigger than or equal to 1.";
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
     * Gets items
     *
     * @return \Gr4vy\model\PaymentService[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Gr4vy\model\PaymentService[]|null $items items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit The limit applied to request. This represents the number of items that are at maximum returned by this request.
     *
     * @return self
     */
    public function setLimit($limit)
    {

        if (!is_null($limit) && ($limit > 100)) {
            throw new \InvalidArgumentException('invalid value for $limit when calling PaymentServices., must be smaller than or equal to 100.');
        }
        if (!is_null($limit) && ($limit < 1)) {
            throw new \InvalidArgumentException('invalid value for $limit when calling PaymentServices., must be bigger than or equal to 1.');
        }

        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets next_cursor
     *
     * @return string|null
     */
    public function getNextCursor()
    {
        return $this->container['next_cursor'];
    }

    /**
     * Sets next_cursor
     *
     * @param string|null $next_cursor The cursor that represents the next page of results. Use the `cursor` query parameter to fetch this page of items.
     *
     * @return self
     */
    public function setNextCursor($next_cursor)
    {
        if (!is_null($next_cursor) && (mb_strlen($next_cursor) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $next_cursor when calling PaymentServices., must be smaller than or equal to 1000.');
        }
        if (!is_null($next_cursor) && (mb_strlen($next_cursor) < 1)) {
            throw new \InvalidArgumentException('invalid length for $next_cursor when calling PaymentServices., must be bigger than or equal to 1.');
        }

        $this->container['next_cursor'] = $next_cursor;

        return $this;
    }

    /**
     * Gets previous_cursor
     *
     * @return string|null
     */
    public function getPreviousCursor()
    {
        return $this->container['previous_cursor'];
    }

    /**
     * Sets previous_cursor
     *
     * @param string|null $previous_cursor The cursor that represents the next page of results. Use the `cursor` query parameter to fetch this page of items.
     *
     * @return self
     */
    public function setPreviousCursor($previous_cursor)
    {
        if (!is_null($previous_cursor) && (mb_strlen($previous_cursor) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $previous_cursor when calling PaymentServices., must be smaller than or equal to 1000.');
        }
        if (!is_null($previous_cursor) && (mb_strlen($previous_cursor) < 1)) {
            throw new \InvalidArgumentException('invalid length for $previous_cursor when calling PaymentServices., must be bigger than or equal to 1.');
        }

        $this->container['previous_cursor'] = $previous_cursor;

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


