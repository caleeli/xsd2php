<?php

namespace Bpmn\Model;

/**
 * Class representing TEventType
 *
 *
 * XSD Type: tEvent
 */
class TEventType extends TFlowNodeType
{

    /**
     * @property \Bpmn\Model\Property[] $property
     */
    private $property = null;

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


}

