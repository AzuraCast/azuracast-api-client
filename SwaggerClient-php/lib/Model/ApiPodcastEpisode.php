<?php
/**
 * ApiPodcastEpisode
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
use \Swagger\Client\ObjectSerializer;

/**
 * ApiPodcastEpisode Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiPodcastEpisode extends HasLinks 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Api_PodcastEpisode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'title' => 'string',
'description' => 'string',
'explicit' => 'bool',
'publish_at' => 'int',
'has_media' => 'bool',
'media' => '\Swagger\Client\Model\ApiPodcastMedia',
'has_custom_art' => 'bool',
'art' => 'string',
'art_updated_at' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'title' => null,
'description' => null,
'explicit' => null,
'publish_at' => null,
'has_media' => null,
'media' => null,
'has_custom_art' => null,
'art' => null,
'art_updated_at' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'title' => 'title',
'description' => 'description',
'explicit' => 'explicit',
'publish_at' => 'publish_at',
'has_media' => 'has_media',
'media' => 'media',
'has_custom_art' => 'has_custom_art',
'art' => 'art',
'art_updated_at' => 'art_updated_at'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'title' => 'setTitle',
'description' => 'setDescription',
'explicit' => 'setExplicit',
'publish_at' => 'setPublishAt',
'has_media' => 'setHasMedia',
'media' => 'setMedia',
'has_custom_art' => 'setHasCustomArt',
'art' => 'setArt',
'art_updated_at' => 'setArtUpdatedAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'title' => 'getTitle',
'description' => 'getDescription',
'explicit' => 'getExplicit',
'publish_at' => 'getPublishAt',
'has_media' => 'getHasMedia',
'media' => 'getMedia',
'has_custom_art' => 'getHasCustomArt',
'art' => 'getArt',
'art_updated_at' => 'getArtUpdatedAt'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['explicit'] = isset($data['explicit']) ? $data['explicit'] : null;
        $this->container['publish_at'] = isset($data['publish_at']) ? $data['publish_at'] : null;
        $this->container['has_media'] = isset($data['has_media']) ? $data['has_media'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['has_custom_art'] = isset($data['has_custom_art']) ? $data['has_custom_art'] : null;
        $this->container['art'] = isset($data['art']) ? $data['art'] : null;
        $this->container['art_updated_at'] = isset($data['art_updated_at']) ? $data['art_updated_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets explicit
     *
     * @return bool
     */
    public function getExplicit()
    {
        return $this->container['explicit'];
    }

    /**
     * Sets explicit
     *
     * @param bool $explicit explicit
     *
     * @return $this
     */
    public function setExplicit($explicit)
    {
        $this->container['explicit'] = $explicit;

        return $this;
    }

    /**
     * Gets publish_at
     *
     * @return int
     */
    public function getPublishAt()
    {
        return $this->container['publish_at'];
    }

    /**
     * Sets publish_at
     *
     * @param int $publish_at publish_at
     *
     * @return $this
     */
    public function setPublishAt($publish_at)
    {
        $this->container['publish_at'] = $publish_at;

        return $this;
    }

    /**
     * Gets has_media
     *
     * @return bool
     */
    public function getHasMedia()
    {
        return $this->container['has_media'];
    }

    /**
     * Sets has_media
     *
     * @param bool $has_media has_media
     *
     * @return $this
     */
    public function setHasMedia($has_media)
    {
        $this->container['has_media'] = $has_media;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \Swagger\Client\Model\ApiPodcastMedia
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \Swagger\Client\Model\ApiPodcastMedia $media media
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets has_custom_art
     *
     * @return bool
     */
    public function getHasCustomArt()
    {
        return $this->container['has_custom_art'];
    }

    /**
     * Sets has_custom_art
     *
     * @param bool $has_custom_art has_custom_art
     *
     * @return $this
     */
    public function setHasCustomArt($has_custom_art)
    {
        $this->container['has_custom_art'] = $has_custom_art;

        return $this;
    }

    /**
     * Gets art
     *
     * @return string
     */
    public function getArt()
    {
        return $this->container['art'];
    }

    /**
     * Sets art
     *
     * @param string $art art
     *
     * @return $this
     */
    public function setArt($art)
    {
        $this->container['art'] = $art;

        return $this;
    }

    /**
     * Gets art_updated_at
     *
     * @return int
     */
    public function getArtUpdatedAt()
    {
        return $this->container['art_updated_at'];
    }

    /**
     * Sets art_updated_at
     *
     * @param int $art_updated_at art_updated_at
     *
     * @return $this
     */
    public function setArtUpdatedAt($art_updated_at)
    {
        $this->container['art_updated_at'] = $art_updated_at;

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