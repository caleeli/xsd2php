<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TAssociationType
 *
 *
 * XSD Type: tAssociation
 */
class TAssociationType extends TArtifactType
{

    /**
     * @property string $sourceRef
     */
    private $sourceRef = null;

    /**
     * @property string $targetRef
     */
    private $targetRef = null;

    /**
     * @property string $associationDirection
     */
    private $associationDirection = null;

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

    /**
     * Gets as associationDirection
     *
     * @return string
     */
    public function getAssociationDirection()
    {
        return $this->associationDirection;
    }

    /**
     * Sets a new associationDirection
     *
     * @param string $associationDirection
     * @return self
     */
    public function setAssociationDirection($associationDirection)
    {
        $this->associationDirection = $associationDirection;
        return $this;
    }


}

