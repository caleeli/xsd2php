<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TDataObjectReferenceType
 *
 *
 * XSD Type: tDataObjectReference
 */
class TDataObjectReferenceType extends TFlowElementType
{

    /**
     * @property string $itemSubjectRef
     */
    private $itemSubjectRef = null;

    /**
     * @property string $dataObjectRef
     */
    private $dataObjectRef = null;

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
     * Gets as dataObjectRef
     *
     * @return string
     */
    public function getDataObjectRef()
    {
        return $this->dataObjectRef;
    }

    /**
     * Sets a new dataObjectRef
     *
     * @param string $dataObjectRef
     * @return self
     */
    public function setDataObjectRef($dataObjectRef)
    {
        $this->dataObjectRef = $dataObjectRef;
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

