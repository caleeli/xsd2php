<?php

namespace Bpmn\Model;

/**
 * Class representing TTransactionType
 *
 *
 * XSD Type: tTransaction
 */
class TTransactionType extends TSubProcessType
{

    /**
     * @property \Bpmn\Model\TTransactionMethodType $method
     */
    private $method = null;

    /**
     * Gets as method
     *
     * @return \Bpmn\Model\TTransactionMethodType
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * @param \Bpmn\Model\TTransactionMethodType $method
     * @return self
     */
    public function setMethod(\Bpmn\Model\TTransactionMethodType $method)
    {
        $this->method = $method;
        return $this;
    }


}

