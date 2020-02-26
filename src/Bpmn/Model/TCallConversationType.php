<?php

namespace Bpmn\Model;

/**
 * Class representing TCallConversationType
 *
 *
 * XSD Type: tCallConversation
 */
class TCallConversationType extends TConversationNodeType
{

    /**
     * @property string $calledCollaborationRef
     */
    private $calledCollaborationRef = null;

    /**
     * @property \Bpmn\Model\ParticipantAssociation[] $participantAssociation
     */
    private $participantAssociation = null;

    /**
     * Gets as calledCollaborationRef
     *
     * @return string
     */
    public function getCalledCollaborationRef()
    {
        return $this->calledCollaborationRef;
    }

    /**
     * Sets a new calledCollaborationRef
     *
     * @param string $calledCollaborationRef
     * @return self
     */
    public function setCalledCollaborationRef($calledCollaborationRef)
    {
        $this->calledCollaborationRef = $calledCollaborationRef;
        return $this;
    }

    /**
     * Adds as participantAssociation
     *
     * @return self
     * @param \Bpmn\Model\ParticipantAssociation $participantAssociation
     */
    public function addToParticipantAssociation(\Bpmn\Model\ParticipantAssociation $participantAssociation)
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
     * @return \Bpmn\Model\ParticipantAssociation[]
     */
    public function getParticipantAssociation()
    {
        return $this->participantAssociation;
    }

    /**
     * Sets a new participantAssociation
     *
     * @param \Bpmn\Model\ParticipantAssociation[] $participantAssociation
     * @return self
     */
    public function setParticipantAssociation(array $participantAssociation)
    {
        $this->participantAssociation = $participantAssociation;
        return $this;
    }


}

