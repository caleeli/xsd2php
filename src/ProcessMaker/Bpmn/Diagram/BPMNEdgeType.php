<?php

namespace ProcessMaker\Bpmn\Diagram;

/**
 * Class representing BPMNEdgeType
 *
 *
 * XSD Type: BPMNEdge
 */
class BPMNEdgeType extends LabeledEdgeType
{

    /**
     * @property string $bpmnElement
     */
    private $bpmnElement = null;

    /**
     * @property string $sourceElement
     */
    private $sourceElement = null;

    /**
     * @property string $targetElement
     */
    private $targetElement = null;

    /**
     * @property string $messageVisibleKind
     */
    private $messageVisibleKind = null;

    /**
     * @property \ProcessMaker\Bpmn\Diagram\BPMNLabel $bPMNLabel
     */
    private $bPMNLabel = null;

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

    /**
     * Gets as sourceElement
     *
     * @return string
     */
    public function getSourceElement()
    {
        return $this->sourceElement;
    }

    /**
     * Sets a new sourceElement
     *
     * @param string $sourceElement
     * @return self
     */
    public function setSourceElement($sourceElement)
    {
        $this->sourceElement = $sourceElement;
        return $this;
    }

    /**
     * Gets as targetElement
     *
     * @return string
     */
    public function getTargetElement()
    {
        return $this->targetElement;
    }

    /**
     * Sets a new targetElement
     *
     * @param string $targetElement
     * @return self
     */
    public function setTargetElement($targetElement)
    {
        $this->targetElement = $targetElement;
        return $this;
    }

    /**
     * Gets as messageVisibleKind
     *
     * @return string
     */
    public function getMessageVisibleKind()
    {
        return $this->messageVisibleKind;
    }

    /**
     * Sets a new messageVisibleKind
     *
     * @param string $messageVisibleKind
     * @return self
     */
    public function setMessageVisibleKind($messageVisibleKind)
    {
        $this->messageVisibleKind = $messageVisibleKind;
        return $this;
    }

    /**
     * Gets as bPMNLabel
     *
     * @return \ProcessMaker\Bpmn\Diagram\BPMNLabel
     */
    public function getBPMNLabel()
    {
        return $this->bPMNLabel;
    }

    /**
     * Sets a new bPMNLabel
     *
     * @param \ProcessMaker\Bpmn\Diagram\BPMNLabel $bPMNLabel
     * @return self
     */
    public function setBPMNLabel(\ProcessMaker\Bpmn\Diagram\BPMNLabel $bPMNLabel)
    {
        $this->bPMNLabel = $bPMNLabel;
        return $this;
    }


}

