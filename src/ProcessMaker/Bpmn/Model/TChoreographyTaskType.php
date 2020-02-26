<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TChoreographyTaskType
 *
 *
 * XSD Type: tChoreographyTask
 */
class TChoreographyTaskType extends TChoreographyActivityType
{

    /**
     * @property string[] $messageFlowRef
     */
    private $messageFlowRef = null;

    /**
     * Adds as messageFlowRef
     *
     * @return self
     * @param string $messageFlowRef
     */
    public function addToMessageFlowRef($messageFlowRef)
    {
        $this->messageFlowRef[] = $messageFlowRef;
        return $this;
    }

    /**
     * isset messageFlowRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMessageFlowRef($index)
    {
        return isset($this->messageFlowRef[$index]);
    }

    /**
     * unset messageFlowRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMessageFlowRef($index)
    {
        unset($this->messageFlowRef[$index]);
    }

    /**
     * Gets as messageFlowRef
     *
     * @return string[]
     */
    public function getMessageFlowRef()
    {
        return $this->messageFlowRef;
    }

    /**
     * Sets a new messageFlowRef
     *
     * @param string[] $messageFlowRef
     * @return self
     */
    public function setMessageFlowRef(array $messageFlowRef)
    {
        $this->messageFlowRef = $messageFlowRef;
        return $this;
    }


}

