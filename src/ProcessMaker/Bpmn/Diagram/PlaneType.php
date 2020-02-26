<?php

namespace ProcessMaker\Bpmn\Diagram;

/**
 * Class representing PlaneType
 *
 *
 * XSD Type: Plane
 */
class PlaneType extends NodeType
{

    /**
     * @property \ProcessMaker\Bpmn\Diagram\DiagramElement[] $diagramElement
     */
    private $diagramElement = null;

    /**
     * Adds as diagramElement
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Diagram\DiagramElement $diagramElement
     */
    public function addToDiagramElement(\ProcessMaker\Bpmn\Diagram\DiagramElement $diagramElement)
    {
        $this->diagramElement[] = $diagramElement;
        return $this;
    }

    /**
     * isset diagramElement
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDiagramElement($index)
    {
        return isset($this->diagramElement[$index]);
    }

    /**
     * unset diagramElement
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDiagramElement($index)
    {
        unset($this->diagramElement[$index]);
    }

    /**
     * Gets as diagramElement
     *
     * @return \ProcessMaker\Bpmn\Diagram\DiagramElement[]
     */
    public function getDiagramElement()
    {
        return $this->diagramElement;
    }

    /**
     * Sets a new diagramElement
     *
     * @param \ProcessMaker\Bpmn\Diagram\DiagramElement[] $diagramElement
     * @return self
     */
    public function setDiagramElement(array $diagramElement)
    {
        $this->diagramElement = $diagramElement;
        return $this;
    }


}

