<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TFlowNodeType
 *
 *
 * XSD Type: tFlowNode
 */
class TFlowNodeType extends TFlowElementType
{

    /**
     * @property string[] $incoming
     */
    private $incoming = null;

    /**
     * @property string[] $outgoing
     */
    private $outgoing = null;

    /**
     * Adds as incoming
     *
     * @return self
     * @param string $incoming
     */
    public function addToIncoming($incoming)
    {
        $this->incoming[] = $incoming;
        return $this;
    }

    /**
     * isset incoming
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetIncoming($index)
    {
        return isset($this->incoming[$index]);
    }

    /**
     * unset incoming
     *
     * @param scalar $index
     * @return void
     */
    public function unsetIncoming($index)
    {
        unset($this->incoming[$index]);
    }

    /**
     * Gets as incoming
     *
     * @return string[]
     */
    public function getIncoming()
    {
        return $this->incoming;
    }

    /**
     * Sets a new incoming
     *
     * @param string[] $incoming
     * @return self
     */
    public function setIncoming(array $incoming)
    {
        $this->incoming = $incoming;
        return $this;
    }

    /**
     * Adds as outgoing
     *
     * @return self
     * @param string $outgoing
     */
    public function addToOutgoing($outgoing)
    {
        $this->outgoing[] = $outgoing;
        return $this;
    }

    /**
     * isset outgoing
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOutgoing($index)
    {
        return isset($this->outgoing[$index]);
    }

    /**
     * unset outgoing
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOutgoing($index)
    {
        unset($this->outgoing[$index]);
    }

    /**
     * Gets as outgoing
     *
     * @return string[]
     */
    public function getOutgoing()
    {
        return $this->outgoing;
    }

    /**
     * Sets a new outgoing
     *
     * @param string[] $outgoing
     * @return self
     */
    public function setOutgoing(array $outgoing)
    {
        $this->outgoing = $outgoing;
        return $this;
    }


}

