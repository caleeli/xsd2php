<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TDataStoreReferenceType
 *
 *
 * XSD Type: tDataStoreReference
 */
class TDataStoreReferenceType extends TFlowElementType
{

    /**
     * @property string $itemSubjectRef
     */
    private $itemSubjectRef = null;

    /**
     * @property string $dataStoreRef
     */
    private $dataStoreRef = null;

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
     * Gets as dataStoreRef
     *
     * @return string
     */
    public function getDataStoreRef()
    {
        return $this->dataStoreRef;
    }

    /**
     * Sets a new dataStoreRef
     *
     * @param string $dataStoreRef
     * @return self
     */
    public function setDataStoreRef($dataStoreRef)
    {
        $this->dataStoreRef = $dataStoreRef;
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

