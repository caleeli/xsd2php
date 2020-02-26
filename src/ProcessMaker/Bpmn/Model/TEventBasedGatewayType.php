<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TEventBasedGatewayType
 *
 *
 * XSD Type: tEventBasedGateway
 */
class TEventBasedGatewayType extends TGatewayType
{

    /**
     * @property boolean $instantiate
     */
    private $instantiate = null;

    /**
     * @property string $eventGatewayType
     */
    private $eventGatewayType = null;

    /**
     * Gets as instantiate
     *
     * @return boolean
     */
    public function getInstantiate()
    {
        return $this->instantiate;
    }

    /**
     * Sets a new instantiate
     *
     * @param boolean $instantiate
     * @return self
     */
    public function setInstantiate($instantiate)
    {
        $this->instantiate = $instantiate;
        return $this;
    }

    /**
     * Gets as eventGatewayType
     *
     * @return string
     */
    public function getEventGatewayType()
    {
        return $this->eventGatewayType;
    }

    /**
     * Sets a new eventGatewayType
     *
     * @param string $eventGatewayType
     * @return self
     */
    public function setEventGatewayType($eventGatewayType)
    {
        $this->eventGatewayType = $eventGatewayType;
        return $this;
    }


}

