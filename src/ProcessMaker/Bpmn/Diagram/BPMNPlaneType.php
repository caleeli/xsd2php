<?php

namespace ProcessMaker\Bpmn\Diagram;

/**
 * Class representing BPMNPlaneType
 *
 *
 * XSD Type: BPMNPlane
 */
class BPMNPlaneType extends PlaneType
{

    /**
     * @property string $bpmnElement
     */
    private $bpmnElement = null;

    /**
     * Gets as bpmnElement
     *
     * @return string
     */
    public function getBpmnElement()
    {
        return $this->bpmnElement;
    }

    /**
     * Sets a new bpmnElement
     *
     * @param string $bpmnElement
     * @return self
     */
    public function setBpmnElement($bpmnElement)
    {
        $this->bpmnElement = $bpmnElement;
        return $this;
    }


}

