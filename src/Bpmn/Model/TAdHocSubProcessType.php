<?php

namespace Bpmn\Model;

/**
 * Class representing TAdHocSubProcessType
 *
 *
 * XSD Type: tAdHocSubProcess
 */
class TAdHocSubProcessType extends TSubProcessType
{

    /**
     * @property boolean $cancelRemainingInstances
     */
    private $cancelRemainingInstances = null;

    /**
     * @property string $ordering
     */
    private $ordering = null;

    /**
     * @property \Bpmn\Model\TExpressionType $completionCondition
     */
    private $completionCondition = null;

    /**
     * Gets as cancelRemainingInstances
     *
     * @return boolean
     */
    public function getCancelRemainingInstances()
    {
        return $this->cancelRemainingInstances;
    }

    /**
     * Sets a new cancelRemainingInstances
     *
     * @param boolean $cancelRemainingInstances
     * @return self
     */
    public function setCancelRemainingInstances($cancelRemainingInstances)
    {
        $this->cancelRemainingInstances = $cancelRemainingInstances;
        return $this;
    }

    /**
     * Gets as ordering
     *
     * @return string
     */
    public function getOrdering()
    {
        return $this->ordering;
    }

    /**
     * Sets a new ordering
     *
     * @param string $ordering
     * @return self
     */
    public function setOrdering($ordering)
    {
        $this->ordering = $ordering;
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

