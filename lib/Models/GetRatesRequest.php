<?php
/**
 * GetRatesRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Shipping
 *
 * Provides programmatic access to Amazon Shipping APIs.
 *
 * OpenAPI spec version: v1
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
 * GetRatesRequest Class Doc Comment
 *
 * @category Class
 * @description The payload schema for the getRates operation.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetRatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetRatesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ship_to' => '\Swagger\Client\Models\Address',
'ship_from' => '\Swagger\Client\Models\Address',
'service_types' => '\Swagger\Client\Models\ServiceTypeList',
'ship_date' => '\DateTime',
'container_specifications' => '\Swagger\Client\Models\ContainerSpecificationList'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ship_to' => null,
'ship_from' => null,
'service_types' => null,
'ship_date' => 'date-time',
'container_specifications' => null    ];

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
        'ship_to' => 'shipTo',
'ship_from' => 'shipFrom',
'service_types' => 'serviceTypes',
'ship_date' => 'shipDate',
'container_specifications' => 'containerSpecifications'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ship_to' => 'setShipTo',
'ship_from' => 'setShipFrom',
'service_types' => 'setServiceTypes',
'ship_date' => 'setShipDate',
'container_specifications' => 'setContainerSpecifications'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ship_to' => 'getShipTo',
'ship_from' => 'getShipFrom',
'service_types' => 'getServiceTypes',
'ship_date' => 'getShipDate',
'container_specifications' => 'getContainerSpecifications'    ];

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
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['ship_from'] = isset($data['ship_from']) ? $data['ship_from'] : null;
        $this->container['service_types'] = isset($data['service_types']) ? $data['service_types'] : null;
        $this->container['ship_date'] = isset($data['ship_date']) ? $data['ship_date'] : null;
        $this->container['container_specifications'] = isset($data['container_specifications']) ? $data['container_specifications'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ship_to'] === null) {
            $invalidProperties[] = "'ship_to' can't be null";
        }
        if ($this->container['ship_from'] === null) {
            $invalidProperties[] = "'ship_from' can't be null";
        }
        if ($this->container['service_types'] === null) {
            $invalidProperties[] = "'service_types' can't be null";
        }
        if ($this->container['container_specifications'] === null) {
            $invalidProperties[] = "'container_specifications' can't be null";
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
     * Gets ship_to
     *
     * @return \Swagger\Client\Models\Address
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \Swagger\Client\Models\Address $ship_to ship_to
     *
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets ship_from
     *
     * @return \Swagger\Client\Models\Address
     */
    public function getShipFrom()
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from
     *
     * @param \Swagger\Client\Models\Address $ship_from ship_from
     *
     * @return $this
     */
    public function setShipFrom($ship_from)
    {
        $this->container['ship_from'] = $ship_from;

        return $this;
    }

    /**
     * Gets service_types
     *
     * @return \Swagger\Client\Models\ServiceTypeList
     */
    public function getServiceTypes()
    {
        return $this->container['service_types'];
    }

    /**
     * Sets service_types
     *
     * @param \Swagger\Client\Models\ServiceTypeList $service_types service_types
     *
     * @return $this
     */
    public function setServiceTypes($service_types)
    {
        $this->container['service_types'] = $service_types;

        return $this;
    }

    /**
     * Gets ship_date
     *
     * @return \DateTime
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date
     *
     * @param \DateTime $ship_date The start date and time. This defaults to the current date and time.
     *
     * @return $this
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets container_specifications
     *
     * @return \Swagger\Client\Models\ContainerSpecificationList
     */
    public function getContainerSpecifications()
    {
        return $this->container['container_specifications'];
    }

    /**
     * Sets container_specifications
     *
     * @param \Swagger\Client\Models\ContainerSpecificationList $container_specifications container_specifications
     *
     * @return $this
     */
    public function setContainerSpecifications($container_specifications)
    {
        $this->container['container_specifications'] = $container_specifications;

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
