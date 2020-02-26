<?php

namespace Bpmn\Model;

/**
 * Class representing TProcessType
 *
 *
 * XSD Type: tProcess
 */
class TProcessType extends TCallableElementType
{

    /**
     * @property string $processType
     */
    private $processType = null;

    /**
     * @property boolean $isClosed
     */
    private $isClosed = null;

    /**
     * @property boolean $isExecutable
     */
    private $isExecutable = null;

    /**
     * @property string $definitionalCollaborationRef
     */
    private $definitionalCollaborationRef = null;

    /**
     * @property \Bpmn\Model\Auditing $auditing
     */
    private $auditing = null;

    /**
     * @property \Bpmn\Model\Monitoring $monitoring
     */
    private $monitoring = null;

    /**
     * @property \Bpmn\Model\Property[] $property
     */
    private $property = null;

    /**
     * @property \Bpmn\Model\LaneSet[] $laneSet
     */
    private $laneSet = null;

    /**
     * @property \Bpmn\Model\FlowElement[] $flowElement
     */
    private $flowElement = null;

    /**
     * @property \Bpmn\Model\Artifact[] $artifact
     */
    private $artifact = null;

    /**
     * @property \Bpmn\Model\ResourceRole[] $resourceRole
     */
    private $resourceRole = null;

    /**
     * @property \Bpmn\Model\CorrelationSubscription[] $correlationSubscription
     */
    private $correlationSubscription = null;

    /**
     * @property string[] $supports
     */
    private $supports = null;

    /**
     * Gets as processType
     *
     * @return string
     */
    public function getProcessType()
    {
        return $this->processType;
    }

    /**
     * Sets a new processType
     *
     * @param string $processType
     * @return self
     */
    public function setProcessType($processType)
    {
        $this->processType = $processType;
        return $this;
    }

    /**
     * Gets as isClosed
     *
     * @return boolean
     */
    public function getIsClosed()
    {
        return $this->isClosed;
    }

    /**
     * Sets a new isClosed
     *
     * @param boolean $isClosed
     * @return self
     */
    public function setIsClosed($isClosed)
    {
        $this->isClosed = $isClosed;
        return $this;
    }

    /**
     * Gets as isExecutable
     *
     * @return boolean
     */
    public function getIsExecutable()
    {
        return $this->isExecutable;
    }

    /**
     * Sets a new isExecutable
     *
     * @param boolean $isExecutable
     * @return self
     */
    public function setIsExecutable($isExecutable)
    {
        $this->isExecutable = $isExecutable;
        return $this;
    }

    /**
     * Gets as definitionalCollaborationRef
     *
     * @return string
     */
    public function getDefinitionalCollaborationRef()
    {
        return $this->definitionalCollaborationRef;
    }

    /**
     * Sets a new definitionalCollaborationRef
     *
     * @param string $definitionalCollaborationRef
     * @return self
     */
    public function setDefinitionalCollaborationRef($definitionalCollaborationRef)
    {
        $this->definitionalCollaborationRef = $definitionalCollaborationRef;
        return $this;
    }

    /**
     * Gets as auditing
     *
     * @return \Bpmn\Model\Auditing
     */
    public function getAuditing()
    {
        return $this->auditing;
    }

    /**
     * Sets a new auditing
     *
     * @param \Bpmn\Model\Auditing $auditing
     * @return self
     */
    public function setAuditing(\Bpmn\Model\Auditing $auditing)
    {
        $this->auditing = $auditing;
        return $this;
    }

    /**
     * Gets as monitoring
     *
     * @return \Bpmn\Model\Monitoring
     */
    public function getMonitoring()
    {
        return $this->monitoring;
    }

    /**
     * Sets a new monitoring
     *
     * @param \Bpmn\Model\Monitoring $monitoring
     * @return self
     */
    public function setMonitoring(\Bpmn\Model\Monitoring $monitoring)
    {
        $this->monitoring = $monitoring;
        return $this;
    }

    /**
     * Adds as property
     *
     * @return self
     * @param \Bpmn\Model\Property $property
     */
    public function addToProperty(\Bpmn\Model\Property $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProperty($index)
    {
        return isset($this->property[$index]);
    }

    /**
     * unset property
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProperty($index)
    {
        unset($this->property[$index]);
    }

    /**
     * Gets as property
     *
     * @return \Bpmn\Model\Property[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * @param \Bpmn\Model\Property[] $property
     * @return self
     */
    public function setProperty(array $property)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Adds as laneSet
     *
     * @return self
     * @param \Bpmn\Model\LaneSet $laneSet
     */
    public function addToLaneSet(\Bpmn\Model\LaneSet $laneSet)
    {
        $this->laneSet[] = $laneSet;
        return $this;
    }

    /**
     * isset laneSet
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLaneSet($index)
    {
        return isset($this->laneSet[$index]);
    }

    /**
     * unset laneSet
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLaneSet($index)
    {
        unset($this->laneSet[$index]);
    }

    /**
     * Gets as laneSet
     *
     * @return \Bpmn\Model\LaneSet[]
     */
    public function getLaneSet()
    {
        return $this->laneSet;
    }

    /**
     * Sets a new laneSet
     *
     * @param \Bpmn\Model\LaneSet[] $laneSet
     * @return self
     */
    public function setLaneSet(array $laneSet)
    {
        $this->laneSet = $laneSet;
        return $this;
    }

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

    /**
     * Adds as resourceRole
     *
     * @return self
     * @param \Bpmn\Model\ResourceRole $resourceRole
     */
    public function addToResourceRole(\Bpmn\Model\ResourceRole $resourceRole)
    {
        $this->resourceRole[] = $resourceRole;
        return $this;
    }

    /**
     * isset resourceRole
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResourceRole($index)
    {
        return isset($this->resourceRole[$index]);
    }

    /**
     * unset resourceRole
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResourceRole($index)
    {
        unset($this->resourceRole[$index]);
    }

    /**
     * Gets as resourceRole
     *
     * @return \Bpmn\Model\ResourceRole[]
     */
    public function getResourceRole()
    {
        return $this->resourceRole;
    }

    /**
     * Sets a new resourceRole
     *
     * @param \Bpmn\Model\ResourceRole[] $resourceRole
     * @return self
     */
    public function setResourceRole(array $resourceRole)
    {
        $this->resourceRole = $resourceRole;
        return $this;
    }

    /**
     * Adds as correlationSubscription
     *
     * @return self
     * @param \Bpmn\Model\CorrelationSubscription $correlationSubscription
     */
    public function addToCorrelationSubscription(\Bpmn\Model\CorrelationSubscription $correlationSubscription)
    {
        $this->correlationSubscription[] = $correlationSubscription;
        return $this;
    }

    /**
     * isset correlationSubscription
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCorrelationSubscription($index)
    {
        return isset($this->correlationSubscription[$index]);
    }

    /**
     * unset correlationSubscription
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCorrelationSubscription($index)
    {
        unset($this->correlationSubscription[$index]);
    }

    /**
     * Gets as correlationSubscription
     *
     * @return \Bpmn\Model\CorrelationSubscription[]
     */
    public function getCorrelationSubscription()
    {
        return $this->correlationSubscription;
    }

    /**
     * Sets a new correlationSubscription
     *
     * @param \Bpmn\Model\CorrelationSubscription[] $correlationSubscription
     * @return self
     */
    public function setCorrelationSubscription(array $correlationSubscription)
    {
        $this->correlationSubscription = $correlationSubscription;
        return $this;
    }

    /**
     * Adds as supports
     *
     * @return self
     * @param string $supports
     */
    public function addToSupports($supports)
    {
        $this->supports[] = $supports;
        return $this;
    }

    /**
     * isset supports
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSupports($index)
    {
        return isset($this->supports[$index]);
    }

    /**
     * unset supports
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSupports($index)
    {
        unset($this->supports[$index]);
    }

    /**
     * Gets as supports
     *
     * @return string[]
     */
    public function getSupports()
    {
        return $this->supports;
    }

    /**
     * Sets a new supports
     *
     * @param string[] $supports
     * @return self
     */
    public function setSupports(array $supports)
    {
        $this->supports = $supports;
        return $this;
    }


}

