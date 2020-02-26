<?php

namespace Bpmn\Model;

/**
 * Class representing TStartEventType
 *
 *
 * XSD Type: tStartEvent
 */
class TStartEventType extends TCatchEventType
{

    /**
     * @property boolean $isInterrupting
     */
    private $isInterrupting = null;

    /**
     * Gets as isInterrupting
     *
     * @return boolean
     */
    public function getIsInterrupting()
    {
        return $this->isInterrupting;
    }

    /**
     * Sets a new isInterrupting
     *
     * @param boolean $isInterrupting
     * @return self
     */
    public function setIsInterrupting($isInterrupting)
    {
        $this->isInterrupting = $isInterrupting;
        return $this;
    }


}

