<?php
/**
 * ApiNowPlayingStationQueue
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
 * ApiNowPlayingStationQueue Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiNowPlayingStationQueue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Api_NowPlaying_StationQueue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cued_at' => 'int',
'played_at' => 'int',
'duration' => 'int',
'playlist' => 'string',
'is_request' => 'bool',
'song' => '\Swagger\Client\Model\ApiSong'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cued_at' => null,
'played_at' => null,
'duration' => null,
'playlist' => null,
'is_request' => null,
'song' => null    ];

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
        'cued_at' => 'cued_at',
'played_at' => 'played_at',
'duration' => 'duration',
'playlist' => 'playlist',
'is_request' => 'is_request',
'song' => 'song'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cued_at' => 'setCuedAt',
'played_at' => 'setPlayedAt',
'duration' => 'setDuration',
'playlist' => 'setPlaylist',
'is_request' => 'setIsRequest',
'song' => 'setSong'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cued_at' => 'getCuedAt',
'played_at' => 'getPlayedAt',
'duration' => 'getDuration',
'playlist' => 'getPlaylist',
'is_request' => 'getIsRequest',
'song' => 'getSong'    ];

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
        $this->container['cued_at'] = isset($data['cued_at']) ? $data['cued_at'] : null;
        $this->container['played_at'] = isset($data['played_at']) ? $data['played_at'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['playlist'] = isset($data['playlist']) ? $data['playlist'] : null;
        $this->container['is_request'] = isset($data['is_request']) ? $data['is_request'] : null;
        $this->container['song'] = isset($data['song']) ? $data['song'] : null;
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
     * Gets cued_at
     *
     * @return int
     */
    public function getCuedAt()
    {
        return $this->container['cued_at'];
    }

    /**
     * Sets cued_at
     *
     * @param int $cued_at UNIX timestamp when the AutoDJ is expected to queue the song for playback.
     *
     * @return $this
     */
    public function setCuedAt($cued_at)
    {
        $this->container['cued_at'] = $cued_at;

        return $this;
    }

    /**
     * Gets played_at
     *
     * @return int
     */
    public function getPlayedAt()
    {
        return $this->container['played_at'];
    }

    /**
     * Sets played_at
     *
     * @param int $played_at UNIX timestamp when playback is expected to start.
     *
     * @return $this
     */
    public function setPlayedAt($played_at)
    {
        $this->container['played_at'] = $played_at;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration Duration of the song in seconds
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets playlist
     *
     * @return string
     */
    public function getPlaylist()
    {
        return $this->container['playlist'];
    }

    /**
     * Sets playlist
     *
     * @param string $playlist Indicates the playlist that the song was played from, if available, or empty string if not.
     *
     * @return $this
     */
    public function setPlaylist($playlist)
    {
        $this->container['playlist'] = $playlist;

        return $this;
    }

    /**
     * Gets is_request
     *
     * @return bool
     */
    public function getIsRequest()
    {
        return $this->container['is_request'];
    }

    /**
     * Sets is_request
     *
     * @param bool $is_request Indicates whether the song is a listener request.
     *
     * @return $this
     */
    public function setIsRequest($is_request)
    {
        $this->container['is_request'] = $is_request;

        return $this;
    }

    /**
     * Gets song
     *
     * @return \Swagger\Client\Model\ApiSong
     */
    public function getSong()
    {
        return $this->container['song'];
    }

    /**
     * Sets song
     *
     * @param \Swagger\Client\Model\ApiSong $song song
     *
     * @return $this
     */
    public function setSong($song)
    {
        $this->container['song'] = $song;

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