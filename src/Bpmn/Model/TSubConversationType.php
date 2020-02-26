<?php

namespace Bpmn\Model;

/**
 * Class representing TSubConversationType
 *
 *
 * XSD Type: tSubConversation
 */
class TSubConversationType extends TConversationNodeType
{

    /**
     * @property \Bpmn\Model\ConversationNode[] $conversationNode
     */
    private $conversationNode = null;

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


}

