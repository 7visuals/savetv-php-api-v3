<?php
/**
 * ResponsePlaylist
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Web API v3
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
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
 * ResponsePlaylist Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponsePlaylist implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Response.Playlist';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_public' => 'bool',
'playlist_type' => 'int',
'items_count' => 'int',
'last_telecast_id' => 'int',
'playlist_items' => '\Swagger\Client\Model\ResponsePlaylistItem[]',
'id' => 'int',
'name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_public' => null,
'playlist_type' => 'int32',
'items_count' => 'int32',
'last_telecast_id' => 'int32',
'playlist_items' => null,
'id' => 'int32',
'name' => null    ];

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
        'is_public' => 'isPublic',
'playlist_type' => 'playlistType',
'items_count' => 'itemsCount',
'last_telecast_id' => 'lastTelecastId',
'playlist_items' => 'playlistItems',
'id' => 'id',
'name' => 'name'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_public' => 'setIsPublic',
'playlist_type' => 'setPlaylistType',
'items_count' => 'setItemsCount',
'last_telecast_id' => 'setLastTelecastId',
'playlist_items' => 'setPlaylistItems',
'id' => 'setId',
'name' => 'setName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_public' => 'getIsPublic',
'playlist_type' => 'getPlaylistType',
'items_count' => 'getItemsCount',
'last_telecast_id' => 'getLastTelecastId',
'playlist_items' => 'getPlaylistItems',
'id' => 'getId',
'name' => 'getName'    ];

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
        $this->container['is_public'] = isset($data['is_public']) ? $data['is_public'] : null;
        $this->container['playlist_type'] = isset($data['playlist_type']) ? $data['playlist_type'] : null;
        $this->container['items_count'] = isset($data['items_count']) ? $data['items_count'] : null;
        $this->container['last_telecast_id'] = isset($data['last_telecast_id']) ? $data['last_telecast_id'] : null;
        $this->container['playlist_items'] = isset($data['playlist_items']) ? $data['playlist_items'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
     * Gets is_public
     *
     * @return bool
     */
    public function getIsPublic()
    {
        return $this->container['is_public'];
    }

    /**
     * Sets is_public
     *
     * @param bool $is_public is_public
     *
     * @return $this
     */
    public function setIsPublic($is_public)
    {
        $this->container['is_public'] = $is_public;

        return $this;
    }

    /**
     * Gets playlist_type
     *
     * @return int
     */
    public function getPlaylistType()
    {
        return $this->container['playlist_type'];
    }

    /**
     * Sets playlist_type
     *
     * @param int $playlist_type playlist_type
     *
     * @return $this
     */
    public function setPlaylistType($playlist_type)
    {
        $this->container['playlist_type'] = $playlist_type;

        return $this;
    }

    /**
     * Gets items_count
     *
     * @return int
     */
    public function getItemsCount()
    {
        return $this->container['items_count'];
    }

    /**
     * Sets items_count
     *
     * @param int $items_count items_count
     *
     * @return $this
     */
    public function setItemsCount($items_count)
    {
        $this->container['items_count'] = $items_count;

        return $this;
    }

    /**
     * Gets last_telecast_id
     *
     * @return int
     */
    public function getLastTelecastId()
    {
        return $this->container['last_telecast_id'];
    }

    /**
     * Sets last_telecast_id
     *
     * @param int $last_telecast_id last_telecast_id
     *
     * @return $this
     */
    public function setLastTelecastId($last_telecast_id)
    {
        $this->container['last_telecast_id'] = $last_telecast_id;

        return $this;
    }

    /**
     * Gets playlist_items
     *
     * @return \Swagger\Client\Model\ResponsePlaylistItem[]
     */
    public function getPlaylistItems()
    {
        return $this->container['playlist_items'];
    }

    /**
     * Sets playlist_items
     *
     * @param \Swagger\Client\Model\ResponsePlaylistItem[] $playlist_items playlist_items
     *
     * @return $this
     */
    public function setPlaylistItems($playlist_items)
    {
        $this->container['playlist_items'] = $playlist_items;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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