<?php

namespace Bpmn\Model;

/**
 * Class representing TMultiInstanceLoopCharacteristicsType
 *
 *
 * XSD Type: tMultiInstanceLoopCharacteristics
 */
class TMultiInstanceLoopCharacteristicsType extends TLoopCharacteristicsType
{

    /**
     * @property boolean $isSequential
     */
    private $isSequential = null;

    /**
     * @property string $behavior
     */
    private $behavior = null;

    /**
     * @property string $oneBehaviorEventRef
     */
    private $oneBehaviorEventRef = null;

    /**
     * @property string $noneBehaviorEventRef
     */
    private $noneBehaviorEventRef = null;

    /**
     * @property \Bpmn\Model\TExpressionType $loopCardinality
     */
    private $loopCardinality = null;

    /**
     * @property string $loopDataInputRef
     */
    private $loopDataInputRef = null;

    /**
     * @property string $loopDataOutputRef
     */
    private $loopDataOutputRef = null;

    /**
     * @property \Bpmn\Model\TDataInputType $inputDataItem
     */
    private $inputDataItem = null;

    /**
     * @property \Bpmn\Model\TDataOutputType $outputDataItem
     */
    private $outputDataItem = null;

    /**
     * @property \Bpmn\Model\ComplexBehaviorDefinition[] $complexBehaviorDefinition
     */
    private $complexBehaviorDefinition = null;

    /**
     * @property \Bpmn\Model\TExpressionType $completionCondition
     */
    private $completionCondition = null;

    /**
     * Gets as isSequential
     *
     * @return boolean
     */
    public function getIsSequential()
    {
        return $this->isSequential;
    }

    /**
     * Sets a new isSequential
     *
     * @param boolean $isSequential
     * @return self
     */
    public function setIsSequential($isSequential)
    {
        $this->isSequential = $isSequential;
        return $this;
    }

    /**
     * Gets as behavior
     *
     * @return string
     */
    public function getBehavior()
    {
        return $this->behavior;
    }

    /**
     * Sets a new behavior
     *
     * @param string $behavior
     * @return self
     */
    public function setBehavior($behavior)
    {
        $this->behavior = $behavior;
        return $this;
    }

    /**
     * Gets as oneBehaviorEventRef
     *
     * @return string
     */
    public function getOneBehaviorEventRef()
    {
        return $this->oneBehaviorEventRef;
    }

    /**
     * Sets a new oneBehaviorEventRef
     *
     * @param string $oneBehaviorEventRef
     * @return self
     */
    public function setOneBehaviorEventRef($oneBehaviorEventRef)
    {
        $this->oneBehaviorEventRef = $oneBehaviorEventRef;
        return $this;
    }

    /**
     * Gets as noneBehaviorEventRef
     *
     * @return string
     */
    public function getNoneBehaviorEventRef()
    {
        return $this->noneBehaviorEventRef;
    }

    /**
     * Sets a new noneBehaviorEventRef
     *
     * @param string $noneBehaviorEventRef
     * @return self
     */
    public function setNoneBehaviorEventRef($noneBehaviorEventRef)
    {
        $this->noneBehaviorEventRef = $noneBehaviorEventRef;
        return $this;
    }

    /**
     * Gets as loopCardinality
     *
     * @return \Bpmn\Model\TExpressionType
     */
    public function getLoopCardinality()
    {
        return $this->loopCardinality;
    }

    /**
     * Sets a new loopCardinality
     *
     * @param \Bpmn\Model\TExpressionType $loopCardinality
     * @return self
     */
    public function setLoopCardinality(\Bpmn\Model\TExpressionType $loopCardinality)
    {
        $this->loopCardinality = $loopCardinality;
        return $this;
    }

    /**
     * Gets as loopDataInputRef
     *
     * @return string
     */
    public function getLoopDataInputRef()
    {
        return $this->loopDataInputRef;
    }

    /**
     * Sets a new loopDataInputRef
     *
     * @param string $loopDataInputRef
     * @return self
     */
    public function setLoopDataInputRef($loopDataInputRef)
    {
        $this->loopDataInputRef = $loopDataInputRef;
        return $this;
    }

    /**
     * Gets as loopDataOutputRef
     *
     * @return string
     */
    public function getLoopDataOutputRef()
    {
        return $this->loopDataOutputRef;
    }

    /**
     * Sets a new loopDataOutputRef
     *
     * @param string $loopDataOutputRef
     * @return self
     */
    public function setLoopDataOutputRef($loopDataOutputRef)
    {
        $this->loopDataOutputRef = $loopDataOutputRef;
        return $this;
    }

    /**
     * Gets as inputDataItem
     *
     * @return \Bpmn\Model\TDataInputType
     */
    public function getInputDataItem()
    {
        return $this->inputDataItem;
    }

    /**
     * Sets a new inputDataItem
     *
     * @param \Bpmn\Model\TDataInputType $inputDataItem
     * @return self
     */
    public function setInputDataItem(\Bpmn\Model\TDataInputType $inputDataItem)
    {
        $this->inputDataItem = $inputDataItem;
        return $this;
    }

    /**
     * Gets as outputDataItem
     *
     * @return \Bpmn\Model\TDataOutputType
     */
    public function getOutputDataItem()
    {
        return $this->outputDataItem;
    }

    /**
     * Sets a new outputDataItem
     *
     * @param \Bpmn\Model\TDataOutputType $outputDataItem
     * @return self
     */
    public function setOutputDataItem(\Bpmn\Model\TDataOutputType $outputDataItem)
    {
        $this->outputDataItem = $outputDataItem;
        return $this;
    }

    /**
     * Adds as complexBehaviorDefinition
     *
     * @return self
     * @param \Bpmn\Model\ComplexBehaviorDefinition $complexBehaviorDefinition
     */
    public function addToComplexBehaviorDefinition(\Bpmn\Model\ComplexBehaviorDefinition $complexBehaviorDefinition)
    {
        $this->complexBehaviorDefinition[] = $complexBehaviorDefinition;
        return $this;
    }

    /**
     * isset complexBehaviorDefinition
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComplexBehaviorDefinition($index)
    {
        return isset($this->complexBehaviorDefinition[$index]);
    }

    /**
     * unset complexBehaviorDefinition
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComplexBehaviorDefinition($index)
    {
        unset($this->complexBehaviorDefinition[$index]);
    }

    /**
     * Gets as complexBehaviorDefinition
     *
     * @return \Bpmn\Model\ComplexBehaviorDefinition[]
     */
    public function getComplexBehaviorDefinition()
    {
        return $this->complexBehaviorDefinition;
    }

    /**
     * Sets a new complexBehaviorDefinition
     *
     * @param \Bpmn\Model\ComplexBehaviorDefinition[] $complexBehaviorDefinition
     * @return self
     */
    public function setComplexBehaviorDefinition(array $complexBehaviorDefinition)
    {
        $this->complexBehaviorDefinition = $complexBehaviorDefinition;
        return $this;
    }

    /**
     * Gets as completionCondition
     *
     * @return \Bpmn\Model\TExpressionType
     */
    public function getCompletionCondition()
    {
        return $this->completionCondition;
    }

    /**
     * Sets a new completionCondition
     *
     * @param \Bpmn\Model\TExpressionType $completionCondition
     * @return self
     */
    public function setCompletionCondition(\Bpmn\Model\TExpressionType $completionCondition)
    {
        $this->completionCondition = $completionCondition;
        return $this;
    }


}

