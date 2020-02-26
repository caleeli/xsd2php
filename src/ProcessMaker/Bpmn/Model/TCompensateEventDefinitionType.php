<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TCompensateEventDefinitionType
 *
 *
 * XSD Type: tCompensateEventDefinition
 */
class TCompensateEventDefinitionType extends TEventDefinitionType
{

    /**
     * @property boolean $waitForCompletion
     */
    private $waitForCompletion = null;

    /**
     * @property string $activityRef
     */
    private $activityRef = null;

    /**
     * Gets as waitForCompletion
     *
     * @return boolean
     */
    public function getWaitForCompletion()
    {
        return $this->waitForCompletion;
    }

    /**
     * Sets a new waitForCompletion
     *
     * @param boolean $waitForCompletion
     * @return self
     */
    public function setWaitForCompletion($waitForCompletion)
    {
        $this->waitForCompletion = $waitForCompletion;
        return $this;
    }

    /**
     * Gets as activityRef
     *
     * @return string
     */
    public function getActivityRef()
    {
        return $this->activityRef;
    }

    /**
     * Sets a new activityRef
     *
     * @param string $activityRef
     * @return self
     */
    public function setActivityRef($activityRef)
    {
        $this->activityRef = $activityRef;
        return $this;
    }


}

