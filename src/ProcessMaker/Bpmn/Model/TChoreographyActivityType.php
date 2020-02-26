<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TChoreographyActivityType
 *
 *
 * XSD Type: tChoreographyActivity
 */
class TChoreographyActivityType extends TFlowNodeType
{

    /**
     * @property string $initiatingParticipantRef
     */
    private $initiatingParticipantRef = null;

    /**
     * @property string $loopType
     */
    private $loopType = null;

    /**
     * @property string[] $participantRef
     */
    private $participantRef = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\CorrelationKey[] $correlationKey
     */
    private $correlationKey = null;

    /**
     * Gets as initiatingParticipantRef
     *
     * @return string
     */
    public function getInitiatingParticipantRef()
    {
        return $this->initiatingParticipantRef;
    }

    /**
     * Sets a new initiatingParticipantRef
     *
     * @param string $initiatingParticipantRef
     * @return self
     */
    public function setInitiatingParticipantRef($initiatingParticipantRef)
    {
        $this->initiatingParticipantRef = $initiatingParticipantRef;
        return $this;
    }

    /**
     * Gets as loopType
     *
     * @return string
     */
    public function getLoopType()
    {
        return $this->loopType;
    }

    /**
     * Sets a new loopType
     *
     * @param string $loopType
     * @return self
     */
    public function setLoopType($loopType)
    {
        $this->loopType = $loopType;
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

