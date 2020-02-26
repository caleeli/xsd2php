<?php

namespace Bpmn\Model;

/**
 * Class representing TBoundaryEventType
 *
 *
 * XSD Type: tBoundaryEvent
 */
class TBoundaryEventType extends TCatchEventType
{

    /**
     * @property boolean $cancelActivity
     */
    private $cancelActivity = null;

    /**
     * @property string $attachedToRef
     */
    private $attachedToRef = null;

    /**
     * Gets as cancelActivity
     *
     * @return boolean
     */
    public function getCancelActivity()
    {
        return $this->cancelActivity;
    }

    /**
     * Sets a new cancelActivity
     *
     * @param boolean $cancelActivity
     * @return self
     */
    public function setCancelActivity($cancelActivity)
    {
        $this->cancelActivity = $cancelActivity;
        return $this;
    }

    /**
     * Gets as attachedToRef
     *
     * @return string
     */
    public function getAttachedToRef()
    {
        return $this->attachedToRef;
    }

    /**
     * Sets a new attachedToRef
     *
     * @param string $attachedToRef
     * @return self
     */
    public function setAttachedToRef($attachedToRef)
    {
        $this->attachedToRef = $attachedToRef;
        return $this;
    }


}

