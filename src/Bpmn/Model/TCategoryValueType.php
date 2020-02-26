<?php

namespace Bpmn\Model;

/**
 * Class representing TCategoryValueType
 *
 *
 * XSD Type: tCategoryValue
 */
class TCategoryValueType extends TBaseElementType
{

    /**
     * @property string $value
     */
    private $value = null;

    /**
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

