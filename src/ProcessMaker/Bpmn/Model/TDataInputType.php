<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TDataInputType
 *
 *
 * XSD Type: tDataInput
 */
class TDataInputType extends TBaseElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $itemSubjectRef
     */
    private $itemSubjectRef = null;

    /**
     * @property boolean $isCollection
     */
    private $isCollection = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\DataState $dataState
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
     * Gets as isCollection
     *
     * @return boolean
     */
    public function getIsCollection()
    {
        return $this->isCollection;
    }

    /**
     * Sets a new isCollection
     *
     * @param boolean $isCollection
     * @return self
     */
    public function setIsCollection($isCollection)
    {
        $this->isCollection = $isCollection;
        return $this;
    }

    /**
     * Gets as dataState
     *
     * @return \ProcessMaker\Bpmn\Model\DataState
     */
    public function getDataState()
    {
        return $this->dataState;
    }

    /**
     * Sets a new dataState
     *
     * @param \ProcessMaker\Bpmn\Model\DataState $dataState
     * @return self
     */
    public function setDataState(\ProcessMaker\Bpmn\Model\DataState $dataState)
    {
        $this->dataState = $dataState;
        return $this;
    }


}

