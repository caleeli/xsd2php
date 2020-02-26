<?php

namespace Bpmn\Model;

/**
 * Class representing TSignalEventDefinitionType
 *
 *
 * XSD Type: tSignalEventDefinition
 */
class TSignalEventDefinitionType extends TEventDefinitionType
{

    /**
     * @property string $signalRef
     */
    private $signalRef = null;

    /**
     * Gets as signalRef
     *
     * @return string
     */
    public function getSignalRef()
    {
        return $this->signalRef;
    }

    /**
     * Sets a new signalRef
     *
     * @param string $signalRef
     * @return self
     */
    public function setSignalRef($signalRef)
    {
        $this->signalRef = $signalRef;
        return $this;
    }


}

