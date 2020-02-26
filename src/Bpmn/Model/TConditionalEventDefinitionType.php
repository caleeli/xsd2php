<?php

namespace Bpmn\Model;

/**
 * Class representing TConditionalEventDefinitionType
 *
 *
 * XSD Type: tConditionalEventDefinition
 */
class TConditionalEventDefinitionType extends TEventDefinitionType
{

    /**
     * @property \Bpmn\Model\TExpressionType $condition
     */
    private $condition = null;

    /**
     * Gets as condition
     *
     * @return \Bpmn\Model\TExpressionType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * @param \Bpmn\Model\TExpressionType $condition
     * @return self
     */
    public function setCondition(\Bpmn\Model\TExpressionType $condition)
    {
        $this->condition = $condition;
        return $this;
    }


}

