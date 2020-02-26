<?php

namespace Bpmn\Model;

/**
 * Class representing TSubChoreographyType
 *
 *
 * XSD Type: tSubChoreography
 */
class TSubChoreographyType extends TChoreographyActivityType
{

    /**
     * @property \Bpmn\Model\FlowElement[] $flowElement
     */
    private $flowElement = null;

    /**
     * @property \Bpmn\Model\Artifact[] $artifact
     */
    private $artifact = null;

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

    /**
     * Adds as artifact
     *
     * @return self
     * @param \Bpmn\Model\Artifact $artifact
     */
    public function addToArtifact(\Bpmn\Model\Artifact $artifact)
    {
        $this->artifact[] = $artifact;
        return $this;
    }

    /**
     * isset artifact
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetArtifact($index)
    {
        return isset($this->artifact[$index]);
    }

    /**
     * unset artifact
     *
     * @param scalar $index
     * @return void
     */
    public function unsetArtifact($index)
    {
        unset($this->artifact[$index]);
    }

    /**
     * Gets as artifact
     *
     * @return \Bpmn\Model\Artifact[]
     */
    public function getArtifact()
    {
        return $this->artifact;
    }

    /**
     * Sets a new artifact
     *
     * @param \Bpmn\Model\Artifact[] $artifact
     * @return self
     */
    public function setArtifact(array $artifact)
    {
        $this->artifact = $artifact;
        return $this;
    }


}

