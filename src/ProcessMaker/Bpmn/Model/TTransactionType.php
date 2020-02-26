<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TTransactionType
 *
 *
 * XSD Type: tTransaction
 */
class TTransactionType extends TSubProcessType
{

    /**
     * @property \ProcessMaker\Bpmn\Model\TTransactionMethodType $method
     */
    private $method = null;

    /**
     * Gets as method
     *
     * @return \ProcessMaker\Bpmn\Model\TTransactionMethodType
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * @param \ProcessMaker\Bpmn\Model\TTransactionMethodType $method
     * @return self
     */
    public function setMethod(\ProcessMaker\Bpmn\Model\TTransactionMethodType $method)
    {
        $this->method = $method;
        return $this;
    }


}

