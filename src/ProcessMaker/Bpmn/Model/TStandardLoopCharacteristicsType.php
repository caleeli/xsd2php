<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TStandardLoopCharacteristicsType
 *
 *
 * XSD Type: tStandardLoopCharacteristics
 */
class TStandardLoopCharacteristicsType extends TLoopCharacteristicsType
{

    /**
     * @property boolean $testBefore
     */
    private $testBefore = null;

    /**
     * @property integer $loopMaximum
     */
    private $loopMaximum = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\TExpressionType $loopCondition
     */
    private $loopCondition = null;

    /**
     * Gets as testBefore
     *
     * @return boolean
     */
    public function getTestBefore()
    {
        return $this->testBefore;
    }

    /**
     * Sets a new testBefore
     *
     * @param boolean $testBefore
     * @return self
     */
    public function setTestBefore($testBefore)
    {
        $this->testBefore = $testBefore;
        return $this;
    }

    /**
     * Gets as loopMaximum
     *
     * @return integer
     */
    public function getLoopMaximum()
    {
        return $this->loopMaximum;
    }

    /**
     * Sets a new loopMaximum
     *
     * @param integer $loopMaximum
     * @return self
     */
    public function setLoopMaximum($loopMaximum)
    {
        $this->loopMaximum = $loopMaximum;
        return $this;
    }

    /**
     * Gets as loopCondition
     *
     * @return \ProcessMaker\Bpmn\Model\TExpressionType
     */
    public function getLoopCondition()
    {
        return $this->loopCondition;
    }

    /**
     * Sets a new loopCondition
     *
     * @param \ProcessMaker\Bpmn\Model\TExpressionType $loopCondition
     * @return self
     */
    public function setLoopCondition(\ProcessMaker\Bpmn\Model\TExpressionType $loopCondition)
    {
        $this->loopCondition = $loopCondition;
        return $this;
    }


}

