<?php
/**
 * TableViewProperties
 *
 * PHP version 5
 *
 * @category Class
 * @package  InfluxDB2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Influx API Service
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 0.1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace InfluxDB2\Model;
use \InfluxDB2\ObjectSerializer;

/**
 * TableViewProperties Class Doc Comment
 *
 * @category Class
 * @package  InfluxDB2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TableViewProperties extends ViewProperties 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TableViewProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'queries' => '\InfluxDB2\Model\DashboardQuery[]',
        'colors' => '\InfluxDB2\Model\DashboardColor[]',
        'shape' => 'string',
        'note' => 'string',
        'show_note_when_empty' => 'bool',
        'table_options' => 'object',
        'field_options' => '\InfluxDB2\Model\RenamableField[]',
        'time_format' => 'string',
        'decimal_places' => '\InfluxDB2\Model\DecimalPlaces'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'type' => null,
        'queries' => null,
        'colors' => null,
        'shape' => null,
        'note' => null,
        'show_note_when_empty' => null,
        'table_options' => null,
        'field_options' => null,
        'time_format' => null,
        'decimal_places' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'queries' => 'queries',
        'colors' => 'colors',
        'shape' => 'shape',
        'note' => 'note',
        'show_note_when_empty' => 'showNoteWhenEmpty',
        'table_options' => 'tableOptions',
        'field_options' => 'fieldOptions',
        'time_format' => 'timeFormat',
        'decimal_places' => 'decimalPlaces'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'queries' => 'setQueries',
        'colors' => 'setColors',
        'shape' => 'setShape',
        'note' => 'setNote',
        'show_note_when_empty' => 'setShowNoteWhenEmpty',
        'table_options' => 'setTableOptions',
        'field_options' => 'setFieldOptions',
        'time_format' => 'setTimeFormat',
        'decimal_places' => 'setDecimalPlaces'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'queries' => 'getQueries',
        'colors' => 'getColors',
        'shape' => 'getShape',
        'note' => 'getNote',
        'show_note_when_empty' => 'getShowNoteWhenEmpty',
        'table_options' => 'getTableOptions',
        'field_options' => 'getFieldOptions',
        'time_format' => 'getTimeFormat',
        'decimal_places' => 'getDecimalPlaces'
    ];

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
        return self::$openAPIModelName;
    }

    const TYPE_TABLE = 'table';
    const SHAPE_CHRONOGRAF_V2 = 'chronograf-v2';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TABLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShapeAllowableValues()
    {
        return [
            self::SHAPE_CHRONOGRAF_V2,
        ];
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

        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['queries'] = isset($data['queries']) ? $data['queries'] : null;
        $this->container['colors'] = isset($data['colors']) ? $data['colors'] : null;
        $this->container['shape'] = isset($data['shape']) ? $data['shape'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['show_note_when_empty'] = isset($data['show_note_when_empty']) ? $data['show_note_when_empty'] : null;
        $this->container['table_options'] = isset($data['table_options']) ? $data['table_options'] : null;
        $this->container['field_options'] = isset($data['field_options']) ? $data['field_options'] : null;
        $this->container['time_format'] = isset($data['time_format']) ? $data['time_format'] : null;
        $this->container['decimal_places'] = isset($data['decimal_places']) ? $data['decimal_places'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['queries'] === null) {
            $invalidProperties[] = "'queries' can't be null";
        }
        if ($this->container['colors'] === null) {
            $invalidProperties[] = "'colors' can't be null";
        }
        if ($this->container['shape'] === null) {
            $invalidProperties[] = "'shape' can't be null";
        }
        $allowedValues = $this->getShapeAllowableValues();
        if (!is_null($this->container['shape']) && !in_array($this->container['shape'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'shape', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['note'] === null) {
            $invalidProperties[] = "'note' can't be null";
        }
        if ($this->container['show_note_when_empty'] === null) {
            $invalidProperties[] = "'show_note_when_empty' can't be null";
        }
        if ($this->container['table_options'] === null) {
            $invalidProperties[] = "'table_options' can't be null";
        }
        if ($this->container['field_options'] === null) {
            $invalidProperties[] = "'field_options' can't be null";
        }
        if ($this->container['time_format'] === null) {
            $invalidProperties[] = "'time_format' can't be null";
        }
        if ($this->container['decimal_places'] === null) {
            $invalidProperties[] = "'decimal_places' can't be null";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets queries
     *
     * @return \InfluxDB2\Model\DashboardQuery[]
     */
    public function getQueries()
    {
        return $this->container['queries'];
    }

    /**
     * Sets queries
     *
     * @param \InfluxDB2\Model\DashboardQuery[] $queries queries
     *
     * @return $this
     */
    public function setQueries($queries)
    {
        $this->container['queries'] = $queries;

        return $this;
    }

    /**
     * Gets colors
     *
     * @return \InfluxDB2\Model\DashboardColor[]
     */
    public function getColors()
    {
        return $this->container['colors'];
    }

    /**
     * Sets colors
     *
     * @param \InfluxDB2\Model\DashboardColor[] $colors Colors define color encoding of data into a visualization
     *
     * @return $this
     */
    public function setColors($colors)
    {
        $this->container['colors'] = $colors;

        return $this;
    }

    /**
     * Gets shape
     *
     * @return string
     */
    public function getShape()
    {
        return $this->container['shape'];
    }

    /**
     * Sets shape
     *
     * @param string $shape shape
     *
     * @return $this
     */
    public function setShape($shape)
    {
        $allowedValues = $this->getShapeAllowableValues();
        if (!in_array($shape, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'shape', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shape'] = $shape;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets show_note_when_empty
     *
     * @return bool
     */
    public function getShowNoteWhenEmpty()
    {
        return $this->container['show_note_when_empty'];
    }

    /**
     * Sets show_note_when_empty
     *
     * @param bool $show_note_when_empty If true, will display note when empty
     *
     * @return $this
     */
    public function setShowNoteWhenEmpty($show_note_when_empty)
    {
        $this->container['show_note_when_empty'] = $show_note_when_empty;

        return $this;
    }

    /**
     * Gets table_options
     *
     * @return object
     */
    public function getTableOptions()
    {
        return $this->container['table_options'];
    }

    /**
     * Sets table_options
     *
     * @param object $table_options table_options
     *
     * @return $this
     */
    public function setTableOptions($table_options)
    {
        $this->container['table_options'] = $table_options;

        return $this;
    }

    /**
     * Gets field_options
     *
     * @return \InfluxDB2\Model\RenamableField[]
     */
    public function getFieldOptions()
    {
        return $this->container['field_options'];
    }

    /**
     * Sets field_options
     *
     * @param \InfluxDB2\Model\RenamableField[] $field_options fieldOptions represent the fields retrieved by the query with customization options
     *
     * @return $this
     */
    public function setFieldOptions($field_options)
    {
        $this->container['field_options'] = $field_options;

        return $this;
    }

    /**
     * Gets time_format
     *
     * @return string
     */
    public function getTimeFormat()
    {
        return $this->container['time_format'];
    }

    /**
     * Sets time_format
     *
     * @param string $time_format timeFormat describes the display format for time values according to moment.js date formatting
     *
     * @return $this
     */
    public function setTimeFormat($time_format)
    {
        $this->container['time_format'] = $time_format;

        return $this;
    }

    /**
     * Gets decimal_places
     *
     * @return \InfluxDB2\Model\DecimalPlaces
     */
    public function getDecimalPlaces()
    {
        return $this->container['decimal_places'];
    }

    /**
     * Sets decimal_places
     *
     * @param \InfluxDB2\Model\DecimalPlaces $decimal_places decimal_places
     *
     * @return $this
     */
    public function setDecimalPlaces($decimal_places)
    {
        $this->container['decimal_places'] = $decimal_places;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


