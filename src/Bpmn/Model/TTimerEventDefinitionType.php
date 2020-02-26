<?php

namespace Bpmn\Model;

/**
 * Class representing TTimerEventDefinitionType
 *
 *
 * XSD Type: tTimerEventDefinition
 */
class TTimerEventDefinitionType extends TEventDefinitionType
{

    /**
     * @property \Bpmn\Model\TExpressionType $timeDate
     */
    private $timeDate = null;

    /**
     * @property \Bpmn\Model\TExpressionType $timeDuration
     */
    private $timeDuration = null;

    /**
     * @property \Bpmn\Model\TExpressionType $timeCycle
     */
    private $timeCycle = null;

    /**
     * Gets as timeDate
     *
     * @return \Bpmn\Model\TExpressionType
     */
    public function getTimeDate()
    {
        return $this->timeDate;
    }

    /**
     * Sets a new timeDate
     *
     * @param \Bpmn\Model\TExpressionType $timeDate
     * @return self
     */
    public function setTimeDate(\Bpmn\Model\TExpressionType $timeDate)
    {
        $this->timeDate = $timeDate;
        return $this;
    }

    /**
     * Gets as timeDuration
     *
     * @return \Bpmn\Model\TExpressionType
     */
    public function getTimeDuration()
    {
        return $this->timeDuration;
    }

    /**
     * Sets a new timeDuration
     *
     * @param \Bpmn\Model\TExpressionType $timeDuration
     * @return self
     */
    public function setTimeDuration(\Bpmn\Model\TExpressionType $timeDuration)
    {
        $this->timeDuration = $timeDuration;
        return $this;
    }

    /**
     * Gets as timeCycle
     *
     * @return \Bpmn\Model\TExpressionType
     */
    public function getTimeCycle()
    {
        return $this->timeCycle;
    }

    /**
     * Sets a new timeCycle
     *
     * @param \Bpmn\Model\TExpressionType $timeCycle
     * @return self
     */
    public function setTimeCycle(\Bpmn\Model\TExpressionType $timeCycle)
    {
        $this->timeCycle = $timeCycle;
        return $this;
    }


}

