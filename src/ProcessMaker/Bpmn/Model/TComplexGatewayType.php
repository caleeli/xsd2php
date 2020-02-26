<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TComplexGatewayType
 *
 *
 * XSD Type: tComplexGateway
 */
class TComplexGatewayType extends TGatewayType
{

    /**
     * @property string $default
     */
    private $default = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\TExpressionType $activationCondition
     */
    private $activationCondition = null;

    /**
     * Gets as default
     *
     * @return string
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Sets a new default
     *
     * @param string $default
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }

    /**
     * Gets as activationCondition
     *
     * @return \ProcessMaker\Bpmn\Model\TExpressionType
     */
    public function getActivationCondition()
    {
        return $this->activationCondition;
    }

    /**
     * Sets a new activationCondition
     *
     * @param \ProcessMaker\Bpmn\Model\TExpressionType $activationCondition
     * @return self
     */
    public function setActivationCondition(\ProcessMaker\Bpmn\Model\TExpressionType $activationCondition)
    {
        $this->activationCondition = $activationCondition;
        return $this;
    }


}

