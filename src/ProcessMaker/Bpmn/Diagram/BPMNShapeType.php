<?php

namespace ProcessMaker\Bpmn\Diagram;

/**
 * Class representing BPMNShapeType
 *
 *
 * XSD Type: BPMNShape
 */
class BPMNShapeType extends LabeledShapeType
{

    /**
     * @property string $bpmnElement
     */
    private $bpmnElement = null;

    /**
     * @property boolean $isHorizontal
     */
    private $isHorizontal = null;

    /**
     * @property boolean $isExpanded
     */
    private $isExpanded = null;

    /**
     * @property boolean $isMarkerVisible
     */
    private $isMarkerVisible = null;

    /**
     * @property boolean $isMessageVisible
     */
    private $isMessageVisible = null;

    /**
     * @property string $participantBandKind
     */
    private $participantBandKind = null;

    /**
     * @property string $choreographyActivityShape
     */
    private $choreographyActivityShape = null;

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
     * Gets as isHorizontal
     *
     * @return boolean
     */
    public function getIsHorizontal()
    {
        return $this->isHorizontal;
    }

    /**
     * Sets a new isHorizontal
     *
     * @param boolean $isHorizontal
     * @return self
     */
    public function setIsHorizontal($isHorizontal)
    {
        $this->isHorizontal = $isHorizontal;
        return $this;
    }

    /**
     * Gets as isExpanded
     *
     * @return boolean
     */
    public function getIsExpanded()
    {
        return $this->isExpanded;
    }

    /**
     * Sets a new isExpanded
     *
     * @param boolean $isExpanded
     * @return self
     */
    public function setIsExpanded($isExpanded)
    {
        $this->isExpanded = $isExpanded;
        return $this;
    }

    /**
     * Gets as isMarkerVisible
     *
     * @return boolean
     */
    public function getIsMarkerVisible()
    {
        return $this->isMarkerVisible;
    }

    /**
     * Sets a new isMarkerVisible
     *
     * @param boolean $isMarkerVisible
     * @return self
     */
    public function setIsMarkerVisible($isMarkerVisible)
    {
        $this->isMarkerVisible = $isMarkerVisible;
        return $this;
    }

    /**
     * Gets as isMessageVisible
     *
     * @return boolean
     */
    public function getIsMessageVisible()
    {
        return $this->isMessageVisible;
    }

    /**
     * Sets a new isMessageVisible
     *
     * @param boolean $isMessageVisible
     * @return self
     */
    public function setIsMessageVisible($isMessageVisible)
    {
        $this->isMessageVisible = $isMessageVisible;
        return $this;
    }

    /**
     * Gets as participantBandKind
     *
     * @return string
     */
    public function getParticipantBandKind()
    {
        return $this->participantBandKind;
    }

    /**
     * Sets a new participantBandKind
     *
     * @param string $participantBandKind
     * @return self
     */
    public function setParticipantBandKind($participantBandKind)
    {
        $this->participantBandKind = $participantBandKind;
        return $this;
    }

    /**
     * Gets as choreographyActivityShape
     *
     * @return string
     */
    public function getChoreographyActivityShape()
    {
        return $this->choreographyActivityShape;
    }

    /**
     * Sets a new choreographyActivityShape
     *
     * @param string $choreographyActivityShape
     * @return self
     */
    public function setChoreographyActivityShape($choreographyActivityShape)
    {
        $this->choreographyActivityShape = $choreographyActivityShape;
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

