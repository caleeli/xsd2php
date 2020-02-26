<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TTimerEventDefinitionType
 *
 *
 * XSD Type: tTimerEventDefinition
 */
class TTimerEventDefinitionType extends TEventDefinitionType
{

    /**
     * @property \ProcessMaker\Bpmn\Model\TExpressionType $timeDate
     */
    private $timeDate = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\TExpressionType $timeDuration
     */
    private $timeDuration = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\TExpressionType $timeCycle
     */
    private $timeCycle = null;

    /**
     * Gets as timeDate
     *
     * @return \ProcessMaker\Bpmn\Model\TExpressionType
     */
    public function getTimeDate()
    {
        return $this->timeDate;
    }

    /**
     * Sets a new timeDate
     *
     * @param \ProcessMaker\Bpmn\Model\TExpressionType $timeDate
     * @return self
     */
    public function setTimeDate(\ProcessMaker\Bpmn\Model\TExpressionType $timeDate)
    {
        $this->timeDate = $timeDate;
        return $this;
    }

    /**
     * Gets as timeDuration
     *
     * @return \ProcessMaker\Bpmn\Model\TExpressionType
     */
    public function getTimeDuration()
    {
        return $this->timeDuration;
    }

    /**
     * Sets a new timeDuration
     *
     * @param \ProcessMaker\Bpmn\Model\TExpressionType $timeDuration
     * @return self
     */
    public function setTimeDuration(\ProcessMaker\Bpmn\Model\TExpressionType $timeDuration)
    {
        $this->timeDuration = $timeDuration;
        return $this;
    }

    /**
     * Gets as timeCycle
     *
     * @return \ProcessMaker\Bpmn\Model\TExpressionType
     */
    public function getTimeCycle()
    {
        return $this->timeCycle;
    }

    /**
     * Sets a new timeCycle
     *
     * @param \ProcessMaker\Bpmn\Model\TExpressionType $timeCycle
     * @return self
     */
    public function setTimeCycle(\ProcessMaker\Bpmn\Model\TExpressionType $timeCycle)
    {
        $this->timeCycle = $timeCycle;
        return $this;
    }


}

