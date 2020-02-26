<?php

namespace Bpmn\Model;

/**
 * Class representing TComplexBehaviorDefinitionType
 *
 *
 * XSD Type: tComplexBehaviorDefinition
 */
class TComplexBehaviorDefinitionType extends TBaseElementType
{

    /**
     * @property \Bpmn\Model\TFormalExpressionType $condition
     */
    private $condition = null;

    /**
     * @property \Bpmn\Model\TImplicitThrowEventType $event
     */
    private $event = null;

    /**
     * Gets as condition
     *
     * @return \Bpmn\Model\TFormalExpressionType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * @param \Bpmn\Model\TFormalExpressionType $condition
     * @return self
     */
    public function setCondition(\Bpmn\Model\TFormalExpressionType $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as event
     *
     * @return \Bpmn\Model\TImplicitThrowEventType
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * @param \Bpmn\Model\TImplicitThrowEventType $event
     * @return self
     */
    public function setEvent(\Bpmn\Model\TImplicitThrowEventType $event)
    {
        $this->event = $event;
        return $this;
    }


}

