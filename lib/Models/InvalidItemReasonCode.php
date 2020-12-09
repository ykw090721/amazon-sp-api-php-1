<?php
/**
 * InvalidItemReasonCode
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
use \Swagger\Client\ObjectSerializer;

/**
 * InvalidItemReasonCode Class Doc Comment
 *
 * @category Class
 * @description A code for why the item is invalid for return.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvalidItemReasonCode
{
    /**
     * Possible values of this enum
     */
    const INVALID_VALUES = 'InvalidValues';
const DUPLICATE_REQUEST = 'DuplicateRequest';
const NO_COMPLETED_SHIP_ITEMS = 'NoCompletedShipItems';
const NO_RETURNABLE_QUANTITY = 'NoReturnableQuantity';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INVALID_VALUES,
self::DUPLICATE_REQUEST,
self::NO_COMPLETED_SHIP_ITEMS,
self::NO_RETURNABLE_QUANTITY,        ];
    }
}
