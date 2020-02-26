<?php

namespace Bpmn\Model;

/**
 * Class representing TAssignmentType
 *
 *
 * XSD Type: tAssignment
 */
class TAssignmentType extends TBaseElementType
{

    /**
     * @property \Bpmn\Model\TExpressionType $from
     */
    private $from = null;

    /**
     * @property \Bpmn\Model\TExpressionType $to
     */
    private $to = null;

    /**
     * Gets as from
     *
     * @return \Bpmn\Model\TExpressionType
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Sets a new from
     *
     * @param \Bpmn\Model\TExpressionType $from
     * @return self
     */
    public function setFrom(\Bpmn\Model\TExpressionType $from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Gets as to
     *
     * @return \Bpmn\Model\TExpressionType
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets a new to
     *
     * @param \Bpmn\Model\TExpressionType $to
     * @return self
     */
    public function setTo(\Bpmn\Model\TExpressionType $to)
    {
        $this->to = $to;
        return $this;
    }


}

