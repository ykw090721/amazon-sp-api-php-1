<?php
/**
 * CreateFulfillmentReturnResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: v0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Models;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * CreateFulfillmentReturnResult Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateFulfillmentReturnResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateFulfillmentReturnResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'return_item_list' => '\Swagger\Client\Models\ReturnItemList',
'invalid_return_item_list' => '\Swagger\Client\Models\InvalidReturnItemList',
'return_authorization_list' => '\Swagger\Client\Models\ReturnAuthorizationList'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'return_item_list' => null,
'invalid_return_item_list' => null,
'return_authorization_list' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'return_item_list' => 'ReturnItemList',
'invalid_return_item_list' => 'InvalidReturnItemList',
'return_authorization_list' => 'ReturnAuthorizationList'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'return_item_list' => 'setReturnItemList',
'invalid_return_item_list' => 'setInvalidReturnItemList',
'return_authorization_list' => 'setReturnAuthorizationList'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'return_item_list' => 'getReturnItemList',
'invalid_return_item_list' => 'getInvalidReturnItemList',
'return_authorization_list' => 'getReturnAuthorizationList'    ];

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
        return self::$swaggerModelName;
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
        $this->container['return_item_list'] = isset($data['return_item_list']) ? $data['return_item_list'] : null;
        $this->container['invalid_return_item_list'] = isset($data['invalid_return_item_list']) ? $data['invalid_return_item_list'] : null;
        $this->container['return_authorization_list'] = isset($data['return_authorization_list']) ? $data['return_authorization_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets return_item_list
     *
     * @return \Swagger\Client\Models\ReturnItemList
     */
    public function getReturnItemList()
    {
        return $this->container['return_item_list'];
    }

    /**
     * Sets return_item_list
     *
     * @param \Swagger\Client\Models\ReturnItemList $return_item_list return_item_list
     *
     * @return $this
     */
    public function setReturnItemList($return_item_list)
    {
        $this->container['return_item_list'] = $return_item_list;

        return $this;
    }

    /**
     * Gets invalid_return_item_list
     *
     * @return \Swagger\Client\Models\InvalidReturnItemList
     */
    public function getInvalidReturnItemList()
    {
        return $this->container['invalid_return_item_list'];
    }

    /**
     * Sets invalid_return_item_list
     *
     * @param \Swagger\Client\Models\InvalidReturnItemList $invalid_return_item_list invalid_return_item_list
     *
     * @return $this
     */
    public function setInvalidReturnItemList($invalid_return_item_list)
    {
        $this->container['invalid_return_item_list'] = $invalid_return_item_list;

        return $this;
    }

    /**
     * Gets return_authorization_list
     *
     * @return \Swagger\Client\Models\ReturnAuthorizationList
     */
    public function getReturnAuthorizationList()
    {
        return $this->container['return_authorization_list'];
    }

    /**
     * Sets return_authorization_list
     *
     * @param \Swagger\Client\Models\ReturnAuthorizationList $return_authorization_list return_authorization_list
     *
     * @return $this
     */
    public function setReturnAuthorizationList($return_authorization_list)
    {
        $this->container['return_authorization_list'] = $return_authorization_list;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
