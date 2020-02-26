<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TDataObjectType
 *
 *
 * XSD Type: tDataObject
 */
class TDataObjectType extends TFlowElementType
{

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

