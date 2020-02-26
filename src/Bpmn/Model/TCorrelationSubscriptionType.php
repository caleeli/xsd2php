<?php

namespace Bpmn\Model;

/**
 * Class representing TCorrelationSubscriptionType
 *
 *
 * XSD Type: tCorrelationSubscription
 */
class TCorrelationSubscriptionType extends TBaseElementType
{

    /**
     * @property string $correlationKeyRef
     */
    private $correlationKeyRef = null;

    /**
     * @property \Bpmn\Model\CorrelationPropertyBinding[] $correlationPropertyBinding
     */
    private $correlationPropertyBinding = null;

    /**
     * Gets as correlationKeyRef
     *
     * @return string
     */
    public function getCorrelationKeyRef()
    {
        return $this->correlationKeyRef;
    }

    /**
     * Sets a new correlationKeyRef
     *
     * @param string $correlationKeyRef
     * @return self
     */
    public function setCorrelationKeyRef($correlationKeyRef)
    {
        $this->correlationKeyRef = $correlationKeyRef;
        return $this;
    }

    /**
     * Adds as correlationPropertyBinding
     *
     * @return self
     * @param \Bpmn\Model\CorrelationPropertyBinding $correlationPropertyBinding
     */
    public function addToCorrelationPropertyBinding(\Bpmn\Model\CorrelationPropertyBinding $correlationPropertyBinding)
    {
        $this->correlationPropertyBinding[] = $correlationPropertyBinding;
        return $this;
    }

    /**
     * isset correlationPropertyBinding
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCorrelationPropertyBinding($index)
    {
        return isset($this->correlationPropertyBinding[$index]);
    }

    /**
     * unset correlationPropertyBinding
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCorrelationPropertyBinding($index)
    {
        unset($this->correlationPropertyBinding[$index]);
    }

    /**
     * Gets as correlationPropertyBinding
     *
     * @return \Bpmn\Model\CorrelationPropertyBinding[]
     */
    public function getCorrelationPropertyBinding()
    {
        return $this->correlationPropertyBinding;
    }

    /**
     * Sets a new correlationPropertyBinding
     *
     * @param \Bpmn\Model\CorrelationPropertyBinding[] $correlationPropertyBinding
     * @return self
     */
    public function setCorrelationPropertyBinding(array $correlationPropertyBinding)
    {
        $this->correlationPropertyBinding = $correlationPropertyBinding;
        return $this;
    }


}

