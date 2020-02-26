<?php

namespace Bpmn\Model;

/**
 * Class representing TChoreographyType
 *
 *
 * XSD Type: tChoreography
 */
class TChoreographyType extends TCollaborationType
{

    /**
     * @property \Bpmn\Model\FlowElement[] $flowElement
     */
    private $flowElement = null;

    /**
     * Adds as flowElement
     *
     * @return self
     * @param \Bpmn\Model\FlowElement $flowElement
     */
    public function addToFlowElement(\Bpmn\Model\FlowElement $flowElement)
    {
        $this->flowElement[] = $flowElement;
        return $this;
    }

    /**
     * isset flowElement
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlowElement($index)
    {
        return isset($this->flowElement[$index]);
    }

    /**
     * unset flowElement
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlowElement($index)
    {
        unset($this->flowElement[$index]);
    }

    /**
     * Gets as flowElement
     *
     * @return \Bpmn\Model\FlowElement[]
     */
    public function getFlowElement()
    {
        return $this->flowElement;
    }

    /**
     * Sets a new flowElement
     *
     * @param \Bpmn\Model\FlowElement[] $flowElement
     * @return self
     */
    public function setFlowElement(array $flowElement)
    {
        $this->flowElement = $flowElement;
        return $this;
    }


}

