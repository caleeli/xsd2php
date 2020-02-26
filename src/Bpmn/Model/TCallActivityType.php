<?php

namespace Bpmn\Model;

/**
 * Class representing TCallActivityType
 *
 *
 * XSD Type: tCallActivity
 */
class TCallActivityType extends TActivityType
{

    /**
     * @property string $calledElement
     */
    private $calledElement = null;

    /**
     * Gets as calledElement
     *
     * @return string
     */
    public function getCalledElement()
    {
        return $this->calledElement;
    }

    /**
     * Sets a new calledElement
     *
     * @param string $calledElement
     * @return self
     */
    public function setCalledElement($calledElement)
    {
        $this->calledElement = $calledElement;
        return $this;
    }


}

