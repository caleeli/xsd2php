<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TConditionalEventDefinitionType
 *
 *
 * XSD Type: tConditionalEventDefinition
 */
class TConditionalEventDefinitionType extends TEventDefinitionType
{

    /**
     * @property \ProcessMaker\Bpmn\Model\TExpressionType $condition
     */
    private $condition = null;

    /**
     * Gets as condition
     *
     * @return \ProcessMaker\Bpmn\Model\TExpressionType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * @param \ProcessMaker\Bpmn\Model\TExpressionType $condition
     * @return self
     */
    public function setCondition(\ProcessMaker\Bpmn\Model\TExpressionType $condition)
    {
        $this->condition = $condition;
        return $this;
    }


}

