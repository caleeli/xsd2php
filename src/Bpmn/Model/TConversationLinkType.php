<?php

namespace Bpmn\Model;

/**
 * Class representing TConversationLinkType
 *
 *
 * XSD Type: tConversationLink
 */
class TConversationLinkType extends TBaseElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $sourceRef
     */
    private $sourceRef = null;

    /**
     * @property string $targetRef
     */
    private $targetRef = null;

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
     * Gets as sourceRef
     *
     * @return string
     */
    public function getSourceRef()
    {
        return $this->sourceRef;
    }

    /**
     * Sets a new sourceRef
     *
     * @param string $sourceRef
     * @return self
     */
    public function setSourceRef($sourceRef)
    {
        $this->sourceRef = $sourceRef;
        return $this;
    }

    /**
     * Gets as targetRef
     *
     * @return string
     */
    public function getTargetRef()
    {
        return $this->targetRef;
    }

    /**
     * Sets a new targetRef
     *
     * @param string $targetRef
     * @return self
     */
    public function setTargetRef($targetRef)
    {
        $this->targetRef = $targetRef;
        return $this;
    }


}

