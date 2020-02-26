<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TConversationNodeType
 *
 *
 * XSD Type: tConversationNode
 */
class TConversationNodeType extends TBaseElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string[] $participantRef
     */
    private $participantRef = null;

    /**
     * @property string[] $messageFlowRef
     */
    private $messageFlowRef = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\CorrelationKey[] $correlationKey
     */
    private $correlationKey = null;

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
     * Adds as participantRef
     *
     * @return self
     * @param string $participantRef
     */
    public function addToParticipantRef($participantRef)
    {
        $this->participantRef[] = $participantRef;
        return $this;
    }

    /**
     * isset participantRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetParticipantRef($index)
    {
        return isset($this->participantRef[$index]);
    }

    /**
     * unset participantRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetParticipantRef($index)
    {
        unset($this->participantRef[$index]);
    }

    /**
     * Gets as participantRef
     *
     * @return string[]
     */
    public function getParticipantRef()
    {
        return $this->participantRef;
    }

    /**
     * Sets a new participantRef
     *
     * @param string[] $participantRef
     * @return self
     */
    public function setParticipantRef(array $participantRef)
    {
        $this->participantRef = $participantRef;
        return $this;
    }

    /**
     * Adds as messageFlowRef
     *
     * @return self
     * @param string $messageFlowRef
     */
    public function addToMessageFlowRef($messageFlowRef)
    {
        $this->messageFlowRef[] = $messageFlowRef;
        return $this;
    }

    /**
     * isset messageFlowRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMessageFlowRef($index)
    {
        return isset($this->messageFlowRef[$index]);
    }

    /**
     * unset messageFlowRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMessageFlowRef($index)
    {
        unset($this->messageFlowRef[$index]);
    }

    /**
     * Gets as messageFlowRef
     *
     * @return string[]
     */
    public function getMessageFlowRef()
    {
        return $this->messageFlowRef;
    }

    /**
     * Sets a new messageFlowRef
     *
     * @param string[] $messageFlowRef
     * @return self
     */
    public function setMessageFlowRef(array $messageFlowRef)
    {
        $this->messageFlowRef = $messageFlowRef;
        return $this;
    }

    /**
     * Adds as correlationKey
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Model\CorrelationKey $correlationKey
     */
    public function addToCorrelationKey(\ProcessMaker\Bpmn\Model\CorrelationKey $correlationKey)
    {
        $this->correlationKey[] = $correlationKey;
        return $this;
    }

    /**
     * isset correlationKey
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCorrelationKey($index)
    {
        return isset($this->correlationKey[$index]);
    }

    /**
     * unset correlationKey
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCorrelationKey($index)
    {
        unset($this->correlationKey[$index]);
    }

    /**
     * Gets as correlationKey
     *
     * @return \ProcessMaker\Bpmn\Model\CorrelationKey[]
     */
    public function getCorrelationKey()
    {
        return $this->correlationKey;
    }

    /**
     * Sets a new correlationKey
     *
     * @param \ProcessMaker\Bpmn\Model\CorrelationKey[] $correlationKey
     * @return self
     */
    public function setCorrelationKey(array $correlationKey)
    {
        $this->correlationKey = $correlationKey;
        return $this;
    }


}

