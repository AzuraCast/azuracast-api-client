<?php
/**
 * ApiNowPlayingLive
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AzuraCast
 *
 * AzuraCast is a standalone, turnkey web radio management tool. Radio stations hosted by AzuraCast expose a public API for viewing now playing data, making requests and more.
 *
 * OpenAPI spec version: 0.17.4
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ApiNowPlayingLive Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiNowPlayingLive implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Api_NowPlaying_Live';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_live' => 'bool',
'streamer_name' => 'string',
'broadcast_start' => 'int',
'art' => ''    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_live' => null,
'streamer_name' => null,
'broadcast_start' => null,
'art' => null    ];

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
        'is_live' => 'is_live',
'streamer_name' => 'streamer_name',
'broadcast_start' => 'broadcast_start',
'art' => 'art'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_live' => 'setIsLive',
'streamer_name' => 'setStreamerName',
'broadcast_start' => 'setBroadcastStart',
'art' => 'setArt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_live' => 'getIsLive',
'streamer_name' => 'getStreamerName',
'broadcast_start' => 'getBroadcastStart',
'art' => 'getArt'    ];

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
        $this->container['is_live'] = isset($data['is_live']) ? $data['is_live'] : null;
        $this->container['streamer_name'] = isset($data['streamer_name']) ? $data['streamer_name'] : null;
        $this->container['broadcast_start'] = isset($data['broadcast_start']) ? $data['broadcast_start'] : null;
        $this->container['art'] = isset($data['art']) ? $data['art'] : null;
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
     * Gets is_live
     *
     * @return bool
     */
    public function getIsLive()
    {
        return $this->container['is_live'];
    }

    /**
     * Sets is_live
     *
     * @param bool $is_live Whether the stream is known to currently have a live DJ.
     *
     * @return $this
     */
    public function setIsLive($is_live)
    {
        $this->container['is_live'] = $is_live;

        return $this;
    }

    /**
     * Gets streamer_name
     *
     * @return string
     */
    public function getStreamerName()
    {
        return $this->container['streamer_name'];
    }

    /**
     * Sets streamer_name
     *
     * @param string $streamer_name The current active streamer/DJ, if one is available.
     *
     * @return $this
     */
    public function setStreamerName($streamer_name)
    {
        $this->container['streamer_name'] = $streamer_name;

        return $this;
    }

    /**
     * Gets broadcast_start
     *
     * @return int
     */
    public function getBroadcastStart()
    {
        return $this->container['broadcast_start'];
    }

    /**
     * Sets broadcast_start
     *
     * @param int $broadcast_start The start timestamp of the current broadcast, if one is available.
     *
     * @return $this
     */
    public function setBroadcastStart($broadcast_start)
    {
        $this->container['broadcast_start'] = $broadcast_start;

        return $this;
    }

    /**
     * Gets art
     *
     * @return 
     */
    public function getArt()
    {
        return $this->container['art'];
    }

    /**
     * Sets art
     *
     * @param  $art URL to the streamer artwork (if available).
     *
     * @return $this
     */
    public function setArt($art)
    {
        $this->container['art'] = $art;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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