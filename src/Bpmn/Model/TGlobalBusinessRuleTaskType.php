<?php

namespace Bpmn\Model;

/**
 * Class representing TGlobalBusinessRuleTaskType
 *
 *
 * XSD Type: tGlobalBusinessRuleTask
 */
class TGlobalBusinessRuleTaskType extends TGlobalTaskType
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

