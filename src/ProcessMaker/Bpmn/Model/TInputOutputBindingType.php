<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TInputOutputBindingType
 *
 *
 * XSD Type: tInputOutputBinding
 */
class TInputOutputBindingType extends TBaseElementType
{

    /**
     * @property string $operationRef
     */
    private $operationRef = null;

    /**
     * @property string $inputDataRef
     */
    private $inputDataRef = null;

    /**
     * @property string $outputDataRef
     */
    private $outputDataRef = null;

    /**
     * Gets as operationRef
     *
     * @return string
     */
    public function getOperationRef()
    {
        return $this->operationRef;
    }

    /**
     * Sets a new operationRef
     *
     * @param string $operationRef
     * @return self
     */
    public function setOperationRef($operationRef)
    {
        $this->operationRef = $operationRef;
        return $this;
    }

    /**
     * Gets as inputDataRef
     *
     * @return string
     */
    public function getInputDataRef()
    {
        return $this->inputDataRef;
    }

    /**
     * Sets a new inputDataRef
     *
     * @param string $inputDataRef
     * @return self
     */
    public function setInputDataRef($inputDataRef)
    {
        $this->inputDataRef = $inputDataRef;
        return $this;
    }

    /**
     * Gets as outputDataRef
     *
     * @return string
     */
    public function getOutputDataRef()
    {
        return $this->outputDataRef;
    }

    /**
     * Sets a new outputDataRef
     *
     * @param string $outputDataRef
     * @return self
     */
    public function setOutputDataRef($outputDataRef)
    {
        $this->outputDataRef = $outputDataRef;
        return $this;
    }


}

