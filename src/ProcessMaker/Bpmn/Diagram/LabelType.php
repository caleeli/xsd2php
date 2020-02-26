<?php

namespace ProcessMaker\Bpmn\Diagram;

/**
 * Class representing LabelType
 *
 *
 * XSD Type: Label
 */
class LabelType extends NodeType
{

    /**
     * @property \ProcessMaker\Bpmn\Diagram\Bounds $bounds
     */
    private $bounds = null;

    /**
     * Gets as bounds
     *
     * @return \ProcessMaker\Bpmn\Diagram\Bounds
     */
    public function getBounds()
    {
        return $this->bounds;
    }

    /**
     * Sets a new bounds
     *
     * @param \ProcessMaker\Bpmn\Diagram\Bounds $bounds
     * @return self
     */
    public function setBounds(\ProcessMaker\Bpmn\Diagram\Bounds $bounds)
    {
        $this->bounds = $bounds;
        return $this;
    }


}

