<?php

namespace Bpmn\Model;

/**
 * Class representing TCorrelationKeyType
 *
 *
 * XSD Type: tCorrelationKey
 */
class TCorrelationKeyType extends TBaseElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string[] $correlationPropertyRef
     */
    private $correlationPropertyRef = null;

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as correlationPropertyRef
     *
     * @return self
     * @param string $correlationPropertyRef
     */
    public function addToCorrelationPropertyRef($correlationPropertyRef)
    {
        $this->correlationPropertyRef[] = $correlationPropertyRef;
        return $this;
    }

    /**
     * isset correlationPropertyRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCorrelationPropertyRef($index)
    {
        return isset($this->correlationPropertyRef[$index]);
    }

    /**
     * unset correlationPropertyRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCorrelationPropertyRef($index)
    {
        unset($this->correlationPropertyRef[$index]);
    }

    /**
     * Gets as correlationPropertyRef
     *
     * @return string[]
     */
    public function getCorrelationPropertyRef()
    {
        return $this->correlationPropertyRef;
    }

    /**
     * Sets a new correlationPropertyRef
     *
     * @param string[] $correlationPropertyRef
     * @return self
     */
    public function setCorrelationPropertyRef(array $correlationPropertyRef)
    {
        $this->correlationPropertyRef = $correlationPropertyRef;
        return $this;
    }


}

