<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TSendTaskType
 *
 *
 * XSD Type: tSendTask
 */
class TSendTaskType extends TTaskType
{

    /**
     * @property \ProcessMaker\Bpmn\Model\TImplementationType $implementation
     */
    private $implementation = null;

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
     * @return \ProcessMaker\Bpmn\Model\TImplementationType
     */
    public function getImplementation()
    {
        return $this->implementation;
    }

    /**
     * Sets a new implementation
     *
     * @param \ProcessMaker\Bpmn\Model\TImplementationType $implementation
     * @return self
     */
    public function setImplementation(\ProcessMaker\Bpmn\Model\TImplementationType $implementation)
    {
        $this->implementation = $implementation;
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
