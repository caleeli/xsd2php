<?php

namespace Bpmn\Model;

/**
 * Class representing TResourceAssignmentExpressionType
 *
 *
 * XSD Type: tResourceAssignmentExpression
 */
class TResourceAssignmentExpressionType extends TBaseElementType
{

    /**
     * @property \Bpmn\Model\Expression $expression
     */
    private $expression = null;

    /**
     * Gets as expression
     *
     * @return \Bpmn\Model\Expression
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Sets a new expression
     *
     * @param \Bpmn\Model\Expression $expression
     * @return self
     */
    public function setExpression(\Bpmn\Model\Expression $expression)
    {
        $this->expression = $expression;
        return $this;
    }


}

