<?php
/**
 * ResponseTvStation
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
 * ResponseTvStation Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseTvStation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Response.TvStation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'small_logo_url' => 'string',
'large_logo_url' => 'string',
'homepage_url' => 'string',
'is_recordable' => 'bool',
'live_stream' => 'AllOfResponseTvStationLiveStream'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
'name' => null,
'small_logo_url' => null,
'large_logo_url' => null,
'homepage_url' => null,
'is_recordable' => null,
'live_stream' => null    ];

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
        'id' => 'id',
'name' => 'name',
'small_logo_url' => 'smallLogoUrl',
'large_logo_url' => 'largeLogoUrl',
'homepage_url' => 'homepageUrl',
'is_recordable' => 'isRecordable',
'live_stream' => 'liveStream'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'small_logo_url' => 'setSmallLogoUrl',
'large_logo_url' => 'setLargeLogoUrl',
'homepage_url' => 'setHomepageUrl',
'is_recordable' => 'setIsRecordable',
'live_stream' => 'setLiveStream'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'small_logo_url' => 'getSmallLogoUrl',
'large_logo_url' => 'getLargeLogoUrl',
'homepage_url' => 'getHomepageUrl',
'is_recordable' => 'getIsRecordable',
'live_stream' => 'getLiveStream'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['small_logo_url'] = isset($data['small_logo_url']) ? $data['small_logo_url'] : null;
        $this->container['large_logo_url'] = isset($data['large_logo_url']) ? $data['large_logo_url'] : null;
        $this->container['homepage_url'] = isset($data['homepage_url']) ? $data['homepage_url'] : null;
        $this->container['is_recordable'] = isset($data['is_recordable']) ? $data['is_recordable'] : null;
        $this->container['live_stream'] = isset($data['live_stream']) ? $data['live_stream'] : null;
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
     * Gets small_logo_url
     *
     * @return string
     */
    public function getSmallLogoUrl()
    {
        return $this->container['small_logo_url'];
    }

    /**
     * Sets small_logo_url
     *
     * @param string $small_logo_url small_logo_url
     *
     * @return $this
     */
    public function setSmallLogoUrl($small_logo_url)
    {
        $this->container['small_logo_url'] = $small_logo_url;

        return $this;
    }

    /**
     * Gets large_logo_url
     *
     * @return string
     */
    public function getLargeLogoUrl()
    {
        return $this->container['large_logo_url'];
    }

    /**
     * Sets large_logo_url
     *
     * @param string $large_logo_url large_logo_url
     *
     * @return $this
     */
    public function setLargeLogoUrl($large_logo_url)
    {
        $this->container['large_logo_url'] = $large_logo_url;

        return $this;
    }

    /**
     * Gets homepage_url
     *
     * @return string
     */
    public function getHomepageUrl()
    {
        return $this->container['homepage_url'];
    }

    /**
     * Sets homepage_url
     *
     * @param string $homepage_url homepage_url
     *
     * @return $this
     */
    public function setHomepageUrl($homepage_url)
    {
        $this->container['homepage_url'] = $homepage_url;

        return $this;
    }

    /**
     * Gets is_recordable
     *
     * @return bool
     */
    public function getIsRecordable()
    {
        return $this->container['is_recordable'];
    }

    /**
     * Sets is_recordable
     *
     * @param bool $is_recordable is_recordable
     *
     * @return $this
     */
    public function setIsRecordable($is_recordable)
    {
        $this->container['is_recordable'] = $is_recordable;

        return $this;
    }

    /**
     * Gets live_stream
     *
     * @return AllOfResponseTvStationLiveStream
     */
    public function getLiveStream()
    {
        return $this->container['live_stream'];
    }

    /**
     * Sets live_stream
     *
     * @param AllOfResponseTvStationLiveStream $live_stream live_stream
     *
     * @return $this
     */
    public function setLiveStream($live_stream)
    {
        $this->container['live_stream'] = $live_stream;

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