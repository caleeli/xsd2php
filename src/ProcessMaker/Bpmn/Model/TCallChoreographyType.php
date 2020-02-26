<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TCallChoreographyType
 *
 *
 * XSD Type: tCallChoreography
 */
class TCallChoreographyType extends TChoreographyActivityType
{

    /**
     * @property string $calledChoreographyRef
     */
    private $calledChoreographyRef = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\ParticipantAssociation[]
     * $participantAssociation
     */
    private $participantAssociation = null;

    /**
     * Gets as calledChoreographyRef
     *
     * @return string
     */
    public function getCalledChoreographyRef()
    {
        return $this->calledChoreographyRef;
    }

    /**
     * Sets a new calledChoreographyRef
     *
     * @param string $calledChoreographyRef
     * @return self
     */
    public function setCalledChoreographyRef($calledChoreographyRef)
    {
        $this->calledChoreographyRef = $calledChoreographyRef;
        return $this;
    }

    /**
     * Adds as participantAssociation
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Model\ParticipantAssociation $participantAssociation
     */
    public function addToParticipantAssociation(\ProcessMaker\Bpmn\Model\ParticipantAssociation $participantAssociation)
    {
        $this->participantAssociation[] = $participantAssociation;
        return $this;
    }

    /**
     * isset participantAssociation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetParticipantAssociation($index)
    {
        return isset($this->participantAssociation[$index]);
    }

    /**
     * unset participantAssociation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetParticipantAssociation($index)
    {
        unset($this->participantAssociation[$index]);
    }

    /**
     * Gets as participantAssociation
     *
     * @return \ProcessMaker\Bpmn\Model\ParticipantAssociation[]
     */
    public function getParticipantAssociation()
    {
        return $this->participantAssociation;
    }

    /**
     * Sets a new participantAssociation
     *
     * @param \ProcessMaker\Bpmn\Model\ParticipantAssociation[] $participantAssociation
     * @return self
     */
    public function setParticipantAssociation(array $participantAssociation)
    {
        $this->participantAssociation = $participantAssociation;
        return $this;
    }


}

