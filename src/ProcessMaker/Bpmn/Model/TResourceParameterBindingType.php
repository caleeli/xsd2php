<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TResourceParameterBindingType
 *
 *
 * XSD Type: tResourceParameterBinding
 */
class TResourceParameterBindingType extends TBaseElementType
{

    /**
     * @property string $parameterRef
     */
    private $parameterRef = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\Expression $expression
     */
    private $expression = null;

    /**
     * Gets as parameterRef
     *
     * @return string
     */
    public function getParameterRef()
    {
        return $this->parameterRef;
    }

    /**
     * Sets a new parameterRef
     *
     * @param string $parameterRef
     * @return self
     */
    public function setParameterRef($parameterRef)
    {
        $this->parameterRef = $parameterRef;
        return $this;
    }

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

