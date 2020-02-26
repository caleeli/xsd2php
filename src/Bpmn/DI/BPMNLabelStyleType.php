<?php

namespace Bpmn\DI;

use DD\DI\StyleType;

/**
 * Class representing BPMNLabelStyleType
 *
 *
 * XSD Type: BPMNLabelStyle
 */
class BPMNLabelStyleType extends StyleType
{

    /**
     * @property \DD\DC\Font $font
     */
    private $font = null;

    /**
     * Gets as font
     *
     * @return \DD\DC\Font
     */
    public function getFont()
    {
        return $this->font;
    }

    /**
     * Sets a new font
     *
     * @param \DD\DC\Font $font
     * @return self
     */
    public function setFont(\DD\DC\Font $font)
    {
        $this->font = $font;
        return $this;
    }


}

