<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TDataAssociationType
 *
 *
 * XSD Type: tDataAssociation
 */
class TDataAssociationType extends TBaseElementType
{

    /**
     * @property string[] $sourceRef
     */
    private $sourceRef = null;

    /**
     * @property string $targetRef
     */
    private $targetRef = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\TFormalExpressionType $transformation
     */
    private $transformation = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\Assignment[] $assignment
     */
    private $assignment = null;

    /**
     * Adds as sourceRef
     *
     * @return self
     * @param string $sourceRef
     */
    public function addToSourceRef($sourceRef)
    {
        $this->sourceRef[] = $sourceRef;
        return $this;
    }

    /**
     * isset sourceRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSourceRef($index)
    {
        return isset($this->sourceRef[$index]);
    }

    /**
     * unset sourceRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSourceRef($index)
    {
        unset($this->sourceRef[$index]);
    }

    /**
     * Gets as sourceRef
     *
     * @return string[]
     */
    public function getSourceRef()
    {
        return $this->sourceRef;
    }

    /**
     * Sets a new sourceRef
     *
     * @param string[] $sourceRef
     * @return self
     */
    public function setSourceRef(array $sourceRef)
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
     * Gets as transformation
     *
     * @return \ProcessMaker\Bpmn\Model\TFormalExpressionType
     */
    public function getTransformation()
    {
        return $this->transformation;
    }

    /**
     * Sets a new transformation
     *
     * @param \ProcessMaker\Bpmn\Model\TFormalExpressionType $transformation
     * @return self
     */
    public function setTransformation(\ProcessMaker\Bpmn\Model\TFormalExpressionType $transformation)
    {
        $this->transformation = $transformation;
        return $this;
    }

    /**
     * Adds as assignment
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Model\Assignment $assignment
     */
    public function addToAssignment(\ProcessMaker\Bpmn\Model\Assignment $assignment)
    {
        $this->assignment[] = $assignment;
        return $this;
    }

    /**
     * isset assignment
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAssignment($index)
    {
        return isset($this->assignment[$index]);
    }

    /**
     * unset assignment
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAssignment($index)
    {
        unset($this->assignment[$index]);
    }

    /**
     * Gets as assignment
     *
     * @return \ProcessMaker\Bpmn\Model\Assignment[]
     */
    public function getAssignment()
    {
        return $this->assignment;
    }

    /**
     * Sets a new assignment
     *
     * @param \ProcessMaker\Bpmn\Model\Assignment[] $assignment
     * @return self
     */
    public function setAssignment(array $assignment)
    {
        $this->assignment = $assignment;
        return $this;
    }


}

