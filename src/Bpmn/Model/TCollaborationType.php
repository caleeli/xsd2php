<?php

namespace Bpmn\Model;

/**
 * Class representing TCollaborationType
 *
 *
 * XSD Type: tCollaboration
 */
class TCollaborationType extends TRootElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property boolean $isClosed
     */
    private $isClosed = null;

    /**
     * @property \Bpmn\Model\Participant[] $participant
     */
    private $participant = null;

    /**
     * @property \Bpmn\Model\MessageFlow[] $messageFlow
     */
    private $messageFlow = null;

    /**
     * @property \Bpmn\Model\Artifact[] $artifact
     */
    private $artifact = null;

    /**
     * @property \Bpmn\Model\ConversationNode[] $conversationNode
     */
    private $conversationNode = null;

    /**
     * @property \Bpmn\Model\ConversationAssociation[] $conversationAssociation
     */
    private $conversationAssociation = null;

    /**
     * @property \Bpmn\Model\ParticipantAssociation[] $participantAssociation
     */
    private $participantAssociation = null;

    /**
     * @property \Bpmn\Model\MessageFlowAssociation[] $messageFlowAssociation
     */
    private $messageFlowAssociation = null;

    /**
     * @property \Bpmn\Model\CorrelationKey[] $correlationKey
     */
    private $correlationKey = null;

    /**
     * @property string[] $choreographyRef
     */
    private $choreographyRef = null;

    /**
     * @property \Bpmn\Model\ConversationLink[] $conversationLink
     */
    private $conversationLink = null;

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
     * Gets as isClosed
     *
     * @return boolean
     */
    public function getIsClosed()
    {
        return $this->isClosed;
    }

    /**
     * Sets a new isClosed
     *
     * @param boolean $isClosed
     * @return self
     */
    public function setIsClosed($isClosed)
    {
        $this->isClosed = $isClosed;
        return $this;
    }

    /**
     * Adds as participant
     *
     * @return self
     * @param \Bpmn\Model\Participant $participant
     */
    public function addToParticipant(\Bpmn\Model\Participant $participant)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * isset participant
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetParticipant($index)
    {
        return isset($this->participant[$index]);
    }

    /**
     * unset participant
     *
     * @param scalar $index
     * @return void
     */
    public function unsetParticipant($index)
    {
        unset($this->participant[$index]);
    }

    /**
     * Gets as participant
     *
     * @return \Bpmn\Model\Participant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Sets a new participant
     *
     * @param \Bpmn\Model\Participant[] $participant
     * @return self
     */
    public function setParticipant(array $participant)
    {
        $this->participant = $participant;
        return $this;
    }

    /**
     * Adds as messageFlow
     *
     * @return self
     * @param \Bpmn\Model\MessageFlow $messageFlow
     */
    public function addToMessageFlow(\Bpmn\Model\MessageFlow $messageFlow)
    {
        $this->messageFlow[] = $messageFlow;
        return $this;
    }

    /**
     * isset messageFlow
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMessageFlow($index)
    {
        return isset($this->messageFlow[$index]);
    }

    /**
     * unset messageFlow
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMessageFlow($index)
    {
        unset($this->messageFlow[$index]);
    }

    /**
     * Gets as messageFlow
     *
     * @return \Bpmn\Model\MessageFlow[]
     */
    public function getMessageFlow()
    {
        return $this->messageFlow;
    }

    /**
     * Sets a new messageFlow
     *
     * @param \Bpmn\Model\MessageFlow[] $messageFlow
     * @return self
     */
    public function setMessageFlow(array $messageFlow)
    {
        $this->messageFlow = $messageFlow;
        return $this;
    }

    /**
     * Adds as artifact
     *
     * @return self
     * @param \Bpmn\Model\Artifact $artifact
     */
    public function addToArtifact(\Bpmn\Model\Artifact $artifact)
    {
        $this->artifact[] = $artifact;
        return $this;
    }

    /**
     * isset artifact
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetArtifact($index)
    {
        return isset($this->artifact[$index]);
    }

    /**
     * unset artifact
     *
     * @param scalar $index
     * @return void
     */
    public function unsetArtifact($index)
    {
        unset($this->artifact[$index]);
    }

    /**
     * Gets as artifact
     *
     * @return \Bpmn\Model\Artifact[]
     */
    public function getArtifact()
    {
        return $this->artifact;
    }

    /**
     * Sets a new artifact
     *
     * @param \Bpmn\Model\Artifact[] $artifact
     * @return self
     */
    public function setArtifact(array $artifact)
    {
        $this->artifact = $artifact;
        return $this;
    }

    /**
     * Adds as conversationNode
     *
     * @return self
     * @param \Bpmn\Model\ConversationNode $conversationNode
     */
    public function addToConversationNode(\Bpmn\Model\ConversationNode $conversationNode)
    {
        $this->conversationNode[] = $conversationNode;
        return $this;
    }

    /**
     * isset conversationNode
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetConversationNode($index)
    {
        return isset($this->conversationNode[$index]);
    }

    /**
     * unset conversationNode
     *
     * @param scalar $index
     * @return void
     */
    public function unsetConversationNode($index)
    {
        unset($this->conversationNode[$index]);
    }

    /**
     * Gets as conversationNode
     *
     * @return \Bpmn\Model\ConversationNode[]
     */
    public function getConversationNode()
    {
        return $this->conversationNode;
    }

    /**
     * Sets a new conversationNode
     *
     * @param \Bpmn\Model\ConversationNode[] $conversationNode
     * @return self
     */
    public function setConversationNode(array $conversationNode)
    {
        $this->conversationNode = $conversationNode;
        return $this;
    }

    /**
     * Adds as conversationAssociation
     *
     * @return self
     * @param \Bpmn\Model\ConversationAssociation $conversationAssociation
     */
    public function addToConversationAssociation(\Bpmn\Model\ConversationAssociation $conversationAssociation)
    {
        $this->conversationAssociation[] = $conversationAssociation;
        return $this;
    }

    /**
     * isset conversationAssociation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetConversationAssociation($index)
    {
        return isset($this->conversationAssociation[$index]);
    }

    /**
     * unset conversationAssociation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetConversationAssociation($index)
    {
        unset($this->conversationAssociation[$index]);
    }

    /**
     * Gets as conversationAssociation
     *
     * @return \Bpmn\Model\ConversationAssociation[]
     */
    public function getConversationAssociation()
    {
        return $this->conversationAssociation;
    }

    /**
     * Sets a new conversationAssociation
     *
     * @param \Bpmn\Model\ConversationAssociation[] $conversationAssociation
     * @return self
     */
    public function setConversationAssociation(array $conversationAssociation)
    {
        $this->conversationAssociation = $conversationAssociation;
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

    /**
     * Adds as messageFlowAssociation
     *
     * @return self
     * @param \Bpmn\Model\MessageFlowAssociation $messageFlowAssociation
     */
    public function addToMessageFlowAssociation(\Bpmn\Model\MessageFlowAssociation $messageFlowAssociation)
    {
        $this->messageFlowAssociation[] = $messageFlowAssociation;
        return $this;
    }

    /**
     * isset messageFlowAssociation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMessageFlowAssociation($index)
    {
        return isset($this->messageFlowAssociation[$index]);
    }

    /**
     * unset messageFlowAssociation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMessageFlowAssociation($index)
    {
        unset($this->messageFlowAssociation[$index]);
    }

    /**
     * Gets as messageFlowAssociation
     *
     * @return \Bpmn\Model\MessageFlowAssociation[]
     */
    public function getMessageFlowAssociation()
    {
        return $this->messageFlowAssociation;
    }

    /**
     * Sets a new messageFlowAssociation
     *
     * @param \Bpmn\Model\MessageFlowAssociation[] $messageFlowAssociation
     * @return self
     */
    public function setMessageFlowAssociation(array $messageFlowAssociation)
    {
        $this->messageFlowAssociation = $messageFlowAssociation;
        return $this;
    }

    /**
     * Adds as correlationKey
     *
     * @return self
     * @param \Bpmn\Model\CorrelationKey $correlationKey
     */
    public function addToCorrelationKey(\Bpmn\Model\CorrelationKey $correlationKey)
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
     * @return \Bpmn\Model\CorrelationKey[]
     */
    public function getCorrelationKey()
    {
        return $this->correlationKey;
    }

    /**
     * Sets a new correlationKey
     *
     * @param \Bpmn\Model\CorrelationKey[] $correlationKey
     * @return self
     */
    public function setCorrelationKey(array $correlationKey)
    {
        $this->correlationKey = $correlationKey;
        return $this;
    }

    /**
     * Adds as choreographyRef
     *
     * @return self
     * @param string $choreographyRef
     */
    public function addToChoreographyRef($choreographyRef)
    {
        $this->choreographyRef[] = $choreographyRef;
        return $this;
    }

    /**
     * isset choreographyRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetChoreographyRef($index)
    {
        return isset($this->choreographyRef[$index]);
    }

    /**
     * unset choreographyRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetChoreographyRef($index)
    {
        unset($this->choreographyRef[$index]);
    }

    /**
     * Gets as choreographyRef
     *
     * @return string[]
     */
    public function getChoreographyRef()
    {
        return $this->choreographyRef;
    }

    /**
     * Sets a new choreographyRef
     *
     * @param string[] $choreographyRef
     * @return self
     */
    public function setChoreographyRef(array $choreographyRef)
    {
        $this->choreographyRef = $choreographyRef;
        return $this;
    }

    /**
     * Adds as conversationLink
     *
     * @return self
     * @param \Bpmn\Model\ConversationLink $conversationLink
     */
    public function addToConversationLink(\Bpmn\Model\ConversationLink $conversationLink)
    {
        $this->conversationLink[] = $conversationLink;
        return $this;
    }

    /**
     * isset conversationLink
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetConversationLink($index)
    {
        return isset($this->conversationLink[$index]);
    }

    /**
     * unset conversationLink
     *
     * @param scalar $index
     * @return void
     */
    public function unsetConversationLink($index)
    {
        unset($this->conversationLink[$index]);
    }

    /**
     * Gets as conversationLink
     *
     * @return \Bpmn\Model\ConversationLink[]
     */
    public function getConversationLink()
    {
        return $this->conversationLink;
    }

    /**
     * Sets a new conversationLink
     *
     * @param \Bpmn\Model\ConversationLink[] $conversationLink
     * @return self
     */
    public function setConversationLink(array $conversationLink)
    {
        $this->conversationLink = $conversationLink;
        return $this;
    }


}

