<?php

namespace Bpmn\Model;

/**
 * Class representing TLaneType
 *
 *
 * XSD Type: tLane
 */
class TLaneType extends TBaseElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $partitionElementRef
     */
    private $partitionElementRef = null;

    /**
     * @property \Bpmn\Model\TBaseElementType $partitionElement
     */
    private $partitionElement = null;

    /**
     * @property string[] $flowNodeRef
     */
    private $flowNodeRef = null;

    /**
     * @property \Bpmn\Model\TLaneSetType $childLaneSet
     */
    private $childLaneSet = null;

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as partitionElementRef
     *
     * @return string
     */
    public function getPartitionElementRef()
    {
        return $this->partitionElementRef;
    }

    /**
     * Sets a new partitionElementRef
     *
     * @param string $partitionElementRef
     * @return self
     */
    public function setPartitionElementRef($partitionElementRef)
    {
        $this->partitionElementRef = $partitionElementRef;
        return $this;
    }

    /**
     * Gets as partitionElement
     *
     * @return \Bpmn\Model\TBaseElementType
     */
    public function getPartitionElement()
    {
        return $this->partitionElement;
    }

    /**
     * Sets a new partitionElement
     *
     * @param \Bpmn\Model\TBaseElementType $partitionElement
     * @return self
     */
    public function setPartitionElement(\Bpmn\Model\TBaseElementType $partitionElement)
    {
        $this->partitionElement = $partitionElement;
        return $this;
    }

    /**
     * Adds as flowNodeRef
     *
     * @return self
     * @param string $flowNodeRef
     */
    public function addToFlowNodeRef($flowNodeRef)
    {
        $this->flowNodeRef[] = $flowNodeRef;
        return $this;
    }

    /**
     * isset flowNodeRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlowNodeRef($index)
    {
        return isset($this->flowNodeRef[$index]);
    }

    /**
     * unset flowNodeRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlowNodeRef($index)
    {
        unset($this->flowNodeRef[$index]);
    }

    /**
     * Gets as flowNodeRef
     *
     * @return string[]
     */
    public function getFlowNodeRef()
    {
        return $this->flowNodeRef;
    }

    /**
     * Sets a new flowNodeRef
     *
     * @param string[] $flowNodeRef
     * @return self
     */
    public function setFlowNodeRef(array $flowNodeRef)
    {
        $this->flowNodeRef = $flowNodeRef;
        return $this;
    }

    /**
     * Gets as childLaneSet
     *
     * @return \Bpmn\Model\TLaneSetType
     */
    public function getChildLaneSet()
    {
        return $this->childLaneSet;
    }

    /**
     * Sets a new childLaneSet
     *
     * @param \Bpmn\Model\TLaneSetType $childLaneSet
     * @return self
     */
    public function setChildLaneSet(\Bpmn\Model\TLaneSetType $childLaneSet)
    {
        $this->childLaneSet = $childLaneSet;
        return $this;
    }


}

