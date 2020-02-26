<?php

namespace ProcessMaker\Bpmn\Diagram;

/**
 * Class representing BPMNDiagramType
 *
 *
 * XSD Type: BPMNDiagram
 */
class BPMNDiagramType extends DiagramType
{

    /**
     * @property \ProcessMaker\Bpmn\Diagram\BPMNPlane $bPMNPlane
     */
    private $bPMNPlane = null;

    /**
     * @property \ProcessMaker\Bpmn\Diagram\BPMNLabelStyle[] $bPMNLabelStyle
     */
    private $bPMNLabelStyle = null;

    /**
     * Gets as bPMNPlane
     *
     * @return \ProcessMaker\Bpmn\Diagram\BPMNPlane
     */
    public function getBPMNPlane()
    {
        return $this->bPMNPlane;
    }

    /**
     * Sets a new bPMNPlane
     *
     * @param \ProcessMaker\Bpmn\Diagram\BPMNPlane $bPMNPlane
     * @return self
     */
    public function setBPMNPlane(\ProcessMaker\Bpmn\Diagram\BPMNPlane $bPMNPlane)
    {
        $this->bPMNPlane = $bPMNPlane;
        return $this;
    }

    /**
     * Adds as bPMNLabelStyle
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Diagram\BPMNLabelStyle $bPMNLabelStyle
     */
    public function addToBPMNLabelStyle(\ProcessMaker\Bpmn\Diagram\BPMNLabelStyle $bPMNLabelStyle)
    {
        $this->bPMNLabelStyle[] = $bPMNLabelStyle;
        return $this;
    }

    /**
     * isset bPMNLabelStyle
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBPMNLabelStyle($index)
    {
        return isset($this->bPMNLabelStyle[$index]);
    }

    /**
     * unset bPMNLabelStyle
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBPMNLabelStyle($index)
    {
        unset($this->bPMNLabelStyle[$index]);
    }

    /**
     * Gets as bPMNLabelStyle
     *
     * @return \ProcessMaker\Bpmn\Diagram\BPMNLabelStyle[]
     */
    public function getBPMNLabelStyle()
    {
        return $this->bPMNLabelStyle;
    }

    /**
     * Sets a new bPMNLabelStyle
     *
     * @param \ProcessMaker\Bpmn\Diagram\BPMNLabelStyle[] $bPMNLabelStyle
     * @return self
     */
    public function setBPMNLabelStyle(array $bPMNLabelStyle)
    {
        $this->bPMNLabelStyle = $bPMNLabelStyle;
        return $this;
    }


}

