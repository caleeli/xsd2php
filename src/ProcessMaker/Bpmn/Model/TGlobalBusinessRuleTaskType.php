<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TGlobalBusinessRuleTaskType
 *
 *
 * XSD Type: tGlobalBusinessRuleTask
 */
class TGlobalBusinessRuleTaskType extends TGlobalTaskType
{

    /**
     * @property \ProcessMaker\Bpmn\Model\TImplementationType $implementation
     */
    private $implementation = null;

    /**
     * Gets as implementation
     *
     * @return \ProcessMaker\Bpmn\Model\TImplementationType
     */
    public function getImplementation()
    {
        return $this->implementation;
    }

    /**
     * Sets a new implementation
     *
     * @param \ProcessMaker\Bpmn\Model\TImplementationType $implementation
     * @return self
     */
    public function setImplementation(\ProcessMaker\Bpmn\Model\TImplementationType $implementation)
    {
        $this->implementation = $implementation;
        return $this;
    }


}

