<?php

namespace Bpmn\Model;

/**
 * Class representing TInclusiveGatewayType
 *
 *
 * XSD Type: tInclusiveGateway
 */
class TInclusiveGatewayType extends TGatewayType
{

    /**
     * @property string $default
     */
    private $default = null;

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


}

