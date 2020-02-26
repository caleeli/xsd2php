<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TComplexBehaviorDefinitionType
 *
 *
 * XSD Type: tComplexBehaviorDefinition
 */
class TComplexBehaviorDefinitionType extends TBaseElementType
{

    /**
     * @property \ProcessMaker\Bpmn\Model\TFormalExpressionType $condition
     */
    private $condition = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\TImplicitThrowEventType $event
     */
    private $event = null;

    /**
     * Gets as condition
     *
     * @return \ProcessMaker\Bpmn\Model\TFormalExpressionType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * @param \ProcessMaker\Bpmn\Model\TFormalExpressionType $condition
     * @return self
     */
    public function setCondition(\ProcessMaker\Bpmn\Model\TFormalExpressionType $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as event
     *
     * @return \ProcessMaker\Bpmn\Model\TImplicitThrowEventType
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * @param \ProcessMaker\Bpmn\Model\TImplicitThrowEventType $event
     * @return self
     */
    public function setEvent(\ProcessMaker\Bpmn\Model\TImplicitThrowEventType $event)
    {
        $this->event = $event;
        return $this;
    }


}

