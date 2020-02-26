<?php

namespace Bpmn\Model;

/**
 * Class representing TGatewayType
 *
 *
 * XSD Type: tGateway
 */
class TGatewayType extends TFlowNodeType
{

    /**
     * @property string $gatewayDirection
     */
    private $gatewayDirection = null;

    /**
     * Gets as gatewayDirection
     *
     * @return string
     */
    public function getGatewayDirection()
    {
        return $this->gatewayDirection;
    }

    /**
     * Sets a new gatewayDirection
     *
     * @param string $gatewayDirection
     * @return self
     */
    public function setGatewayDirection($gatewayDirection)
    {
        $this->gatewayDirection = $gatewayDirection;
        return $this;
    }


}

