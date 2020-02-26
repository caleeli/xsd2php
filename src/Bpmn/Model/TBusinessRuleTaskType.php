<?php

namespace Bpmn\Model;

/**
 * Class representing TBusinessRuleTaskType
 *
 *
 * XSD Type: tBusinessRuleTask
 */
class TBusinessRuleTaskType extends TTaskType
{

    /**
     * @property \Bpmn\Model\TImplementationType $implementation
     */
    private $implementation = null;

    /**
     * Gets as implementation
     *
     * @return \Bpmn\Model\TImplementationType
     */
    public function getImplementation()
    {
        return $this->implementation;
    }

    /**
     * Sets a new implementation
     *
     * @param \Bpmn\Model\TImplementationType $implementation
     * @return self
     */
    public function setImplementation(\Bpmn\Model\TImplementationType $implementation)
    {
        $this->implementation = $implementation;
        return $this;
    }


}

