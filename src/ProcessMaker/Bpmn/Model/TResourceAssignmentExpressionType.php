<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TResourceAssignmentExpressionType
 *
 *
 * XSD Type: tResourceAssignmentExpression
 */
class TResourceAssignmentExpressionType extends TBaseElementType
{

    /**
     * @property \ProcessMaker\Bpmn\Model\Expression $expression
     */
    private $expression = null;

    /**
     * Gets as expression
     *
     * @return \ProcessMaker\Bpmn\Model\Expression
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Sets a new expression
     *
     * @param \ProcessMaker\Bpmn\Model\Expression $expression
     * @return self
     */
    public function setExpression(\ProcessMaker\Bpmn\Model\Expression $expression)
    {
        $this->expression = $expression;
        return $this;
    }


}

