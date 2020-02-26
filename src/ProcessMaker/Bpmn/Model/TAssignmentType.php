<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TAssignmentType
 *
 *
 * XSD Type: tAssignment
 */
class TAssignmentType extends TBaseElementType
{

    /**
     * @property \ProcessMaker\Bpmn\Model\TExpressionType $from
     */
    private $from = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\TExpressionType $to
     */
    private $to = null;

    /**
     * Gets as from
     *
     * @return \ProcessMaker\Bpmn\Model\TExpressionType
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Sets a new from
     *
     * @param \ProcessMaker\Bpmn\Model\TExpressionType $from
     * @return self
     */
    public function setFrom(\ProcessMaker\Bpmn\Model\TExpressionType $from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Gets as to
     *
     * @return \ProcessMaker\Bpmn\Model\TExpressionType
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets a new to
     *
     * @param \ProcessMaker\Bpmn\Model\TExpressionType $to
     * @return self
     */
    public function setTo(\ProcessMaker\Bpmn\Model\TExpressionType $to)
    {
        $this->to = $to;
        return $this;
    }


}

