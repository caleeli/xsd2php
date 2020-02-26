<?php

namespace DD\DI;

/**
 * Class representing PlaneType
 *
 *
 * XSD Type: Plane
 */
class PlaneType extends NodeType
{

    /**
     * @property \DD\DI\DiagramElement[] $diagramElement
     */
    private $diagramElement = null;

    /**
     * Adds as diagramElement
     *
     * @return self
     * @param \DD\DI\DiagramElement $diagramElement
     */
    public function addToDiagramElement(\DD\DI\DiagramElement $diagramElement)
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
     * @return \DD\DI\DiagramElement[]
     */
    public function getDiagramElement()
    {
        return $this->diagramElement;
    }

    /**
     * Sets a new diagramElement
     *
     * @param \DD\DI\DiagramElement[] $diagramElement
     * @return self
     */
    public function setDiagramElement(array $diagramElement)
    {
        $this->diagramElement = $diagramElement;
        return $this;
    }


}

