<?php

namespace Bpmn\Model;

/**
 * Class representing TDataStoreType
 *
 *
 * XSD Type: tDataStore
 */
class TDataStoreType extends TRootElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property integer $capacity
     */
    private $capacity = null;

    /**
     * @property boolean $isUnlimited
     */
    private $isUnlimited = null;

    /**
     * @property string $itemSubjectRef
     */
    private $itemSubjectRef = null;

    /**
     * @property \Bpmn\Model\DataState $dataState
     */
    private $dataState = null;

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
     * Gets as capacity
     *
     * @return integer
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Sets a new capacity
     *
     * @param integer $capacity
     * @return self
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
        return $this;
    }

    /**
     * Gets as isUnlimited
     *
     * @return boolean
     */
    public function getIsUnlimited()
    {
        return $this->isUnlimited;
    }

    /**
     * Sets a new isUnlimited
     *
     * @param boolean $isUnlimited
     * @return self
     */
    public function setIsUnlimited($isUnlimited)
    {
        $this->isUnlimited = $isUnlimited;
        return $this;
    }

    /**
     * Gets as itemSubjectRef
     *
     * @return string
     */
    public function getItemSubjectRef()
    {
        return $this->itemSubjectRef;
    }

    /**
     * Sets a new itemSubjectRef
     *
     * @param string $itemSubjectRef
     * @return self
     */
    public function setItemSubjectRef($itemSubjectRef)
    {
        $this->itemSubjectRef = $itemSubjectRef;
        return $this;
    }

    /**
     * Gets as dataState
     *
     * @return \Bpmn\Model\DataState
     */
    public function getDataState()
    {
        return $this->dataState;
    }

    /**
     * Sets a new dataState
     *
     * @param \Bpmn\Model\DataState $dataState
     * @return self
     */
    public function setDataState(\Bpmn\Model\DataState $dataState)
    {
        $this->dataState = $dataState;
        return $this;
    }


}

