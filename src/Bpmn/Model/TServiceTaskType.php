<?php

namespace Bpmn\Model;

/**
 * Class representing TServiceTaskType
 *
 *
 * XSD Type: tServiceTask
 */
class TServiceTaskType extends TTaskType
{

    /**
     * @property \Bpmn\Model\TImplementationType $implementation
     */
    private $implementation = null;

    /**
     * @property string $operationRef
     */
    private $operationRef = null;

    /**
     * Gets as implementation
     *
     * @return \Bpmn\Model\TImplementationType
     */
    public function getImplementation()
    {
        return $this->implementation;
    }

    /**
     * Sets a new implementation
     *
     * @param \Bpmn\Model\TImplementationType $implementation
     * @return self
     */
    public function setImplementation(\Bpmn\Model\TImplementationType $implementation)
    {
        $this->implementation = $implementation;
        return $this;
    }

    /**
     * Gets as operationRef
     *
     * @return string
     */
    public function getOperationRef()
    {
        return $this->operationRef;
    }

    /**
     * Sets a new operationRef
     *
     * @param string $operationRef
     * @return self
     */
    public function setOperationRef($operationRef)
    {
        $this->operationRef = $operationRef;
        return $this;
    }


}

