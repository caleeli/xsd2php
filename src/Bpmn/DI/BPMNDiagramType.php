<?php

namespace Bpmn\DI;

use DD\DI\DiagramType;

/**
 * Class representing BPMNDiagramType
 *
 *
 * XSD Type: BPMNDiagram
 */
class BPMNDiagramType extends DiagramType
{

    /**
     * @property \Bpmn\DI\BPMNPlane $bPMNPlane
     */
    private $bPMNPlane = null;

    /**
     * @property \Bpmn\DI\BPMNLabelStyle[] $bPMNLabelStyle
     */
    private $bPMNLabelStyle = null;

    /**
     * Gets as bPMNPlane
     *
     * @return \Bpmn\DI\BPMNPlane
     */
    public function getBPMNPlane()
    {
        return $this->bPMNPlane;
    }

    /**
     * Sets a new bPMNPlane
     *
     * @param \Bpmn\DI\BPMNPlane $bPMNPlane
     * @return self
     */
    public function setBPMNPlane(\Bpmn\DI\BPMNPlane $bPMNPlane)
    {
        $this->bPMNPlane = $bPMNPlane;
        return $this;
    }

    /**
     * Adds as bPMNLabelStyle
     *
     * @return self
     * @param \Bpmn\DI\BPMNLabelStyle $bPMNLabelStyle
     */
    public function addToBPMNLabelStyle(\Bpmn\DI\BPMNLabelStyle $bPMNLabelStyle)
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
     * @return \Bpmn\DI\BPMNLabelStyle[]
     */
    public function getBPMNLabelStyle()
    {
        return $this->bPMNLabelStyle;
    }

    /**
     * Sets a new bPMNLabelStyle
     *
     * @param \Bpmn\DI\BPMNLabelStyle[] $bPMNLabelStyle
     * @return self
     */
    public function setBPMNLabelStyle(array $bPMNLabelStyle)
    {
        $this->bPMNLabelStyle = $bPMNLabelStyle;
        return $this;
    }


}

