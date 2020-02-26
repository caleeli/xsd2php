<?php

namespace ProcessMaker\Bpmn\Diagram;

/**
 * Class representing BPMNLabelType
 *
 *
 * XSD Type: BPMNLabel
 */
class BPMNLabelType extends LabelType
{

    /**
     * @property string $labelStyle
     */
    private $labelStyle = null;

    /**
     * Gets as labelStyle
     *
     * @return string
     */
    public function getLabelStyle()
    {
        return $this->labelStyle;
    }

    /**
     * Sets a new labelStyle
     *
     * @param string $labelStyle
     * @return self
     */
    public function setLabelStyle($labelStyle)
    {
        $this->labelStyle = $labelStyle;
        return $this;
    }


}

