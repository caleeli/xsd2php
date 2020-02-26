<?php

namespace Bpmn\Model;

/**
 * Class representing TConversationAssociationType
 *
 *
 * XSD Type: tConversationAssociation
 */
class TConversationAssociationType extends TBaseElementType
{

    /**
     * @property string $innerConversationNodeRef
     */
    private $innerConversationNodeRef = null;

    /**
     * @property string $outerConversationNodeRef
     */
    private $outerConversationNodeRef = null;

    /**
     * Gets as innerConversationNodeRef
     *
     * @return string
     */
    public function getInnerConversationNodeRef()
    {
        return $this->innerConversationNodeRef;
    }

    /**
     * Sets a new innerConversationNodeRef
     *
     * @param string $innerConversationNodeRef
     * @return self
     */
    public function setInnerConversationNodeRef($innerConversationNodeRef)
    {
        $this->innerConversationNodeRef = $innerConversationNodeRef;
        return $this;
    }

    /**
     * Gets as outerConversationNodeRef
     *
     * @return string
     */
    public function getOuterConversationNodeRef()
    {
        return $this->outerConversationNodeRef;
    }

    /**
     * Sets a new outerConversationNodeRef
     *
     * @param string $outerConversationNodeRef
     * @return self
     */
    public function setOuterConversationNodeRef($outerConversationNodeRef)
    {
        $this->outerConversationNodeRef = $outerConversationNodeRef;
        return $this;
    }


}

