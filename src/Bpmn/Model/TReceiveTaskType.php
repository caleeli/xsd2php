<?php

namespace Bpmn\Model;

/**
 * Class representing TReceiveTaskType
 *
 *
 * XSD Type: tReceiveTask
 */
class TReceiveTaskType extends TTaskType
{

    /**
     * @property \Bpmn\Model\TImplementationType $implementation
     */
    private $implementation = null;

    /**
     * @property boolean $instantiate
     */
    private $instantiate = null;

    /**
     * @property string $messageRef
     */
    private $messageRef = null;

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
     * Gets as instantiate
     *
     * @return boolean
     */
    public function getInstantiate()
    {
        return $this->instantiate;
    }

    /**
     * Sets a new instantiate
     *
     * @param boolean $instantiate
     * @return self
     */
    public function setInstantiate($instantiate)
    {
        $this->instantiate = $instantiate;
        return $this;
    }

    /**
     * Gets as messageRef
     *
     * @return string
     */
    public function getMessageRef()
    {
        return $this->messageRef;
    }

    /**
     * Sets a new messageRef
     *
     * @param string $messageRef
     * @return self
     */
    public function setMessageRef($messageRef)
    {
        $this->messageRef = $messageRef;
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

