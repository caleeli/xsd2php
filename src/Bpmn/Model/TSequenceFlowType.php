<?php

namespace Bpmn\Model;

/**
 * Class representing TSequenceFlowType
 *
 *
 * XSD Type: tSequenceFlow
 */
class TSequenceFlowType extends TFlowElementType
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
     * @property boolean $isImmediate
     */
    private $isImmediate = null;

    /**
     * @property \Bpmn\Model\TExpressionType $conditionExpression
     */
    private $conditionExpression = null;

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
     * Gets as isImmediate
     *
     * @return boolean
     */
    public function getIsImmediate()
    {
        return $this->isImmediate;
    }

    /**
     * Sets a new isImmediate
     *
     * @param boolean $isImmediate
     * @return self
     */
    public function setIsImmediate($isImmediate)
    {
        $this->isImmediate = $isImmediate;
        return $this;
    }

    /**
     * Gets as conditionExpression
     *
     * @return \Bpmn\Model\TExpressionType
     */
    public function getConditionExpression()
    {
        return $this->conditionExpression;
    }

    /**
     * Sets a new conditionExpression
     *
     * @param \Bpmn\Model\TExpressionType $conditionExpression
     * @return self
     */
    public function setConditionExpression(\Bpmn\Model\TExpressionType $conditionExpression)
    {
        $this->conditionExpression = $conditionExpression;
        return $this;
    }


}

