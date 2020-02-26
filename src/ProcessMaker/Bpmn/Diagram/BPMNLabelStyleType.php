<?php

namespace ProcessMaker\Bpmn\Diagram;

/**
 * Class representing BPMNLabelStyleType
 *
 *
 * XSD Type: BPMNLabelStyle
 */
class BPMNLabelStyleType extends StyleType
{

    /**
     * @property \ProcessMaker\Bpmn\Diagram\Font $font
     */
    private $font = null;

    /**
     * Gets as font
     *
     * @return \ProcessMaker\Bpmn\Diagram\Font
     */
    public function getFont()
    {
        return $this->font;
    }

    /**
     * Sets a new font
     *
     * @param \ProcessMaker\Bpmn\Diagram\Font $font
     * @return self
     */
    public function setFont(\ProcessMaker\Bpmn\Diagram\Font $font)
    {
        $this->font = $font;
        return $this;
    }


}

