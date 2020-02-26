<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TInputOutputSpecificationType
 *
 *
 * XSD Type: tInputOutputSpecification
 */
class TInputOutputSpecificationType extends TBaseElementType
{

    /**
     * @property \ProcessMaker\Bpmn\Model\DataInput[] $dataInput
     */
    private $dataInput = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\DataOutput[] $dataOutput
     */
    private $dataOutput = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\InputSet[] $inputSet
     */
    private $inputSet = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\OutputSet[] $outputSet
     */
    private $outputSet = null;

    /**
     * Adds as dataInput
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Model\DataInput $dataInput
     */
    public function addToDataInput(\ProcessMaker\Bpmn\Model\DataInput $dataInput)
    {
        $this->dataInput[] = $dataInput;
        return $this;
    }

    /**
     * isset dataInput
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDataInput($index)
    {
        return isset($this->dataInput[$index]);
    }

    /**
     * unset dataInput
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDataInput($index)
    {
        unset($this->dataInput[$index]);
    }

    /**
     * Gets as dataInput
     *
     * @return \ProcessMaker\Bpmn\Model\DataInput[]
     */
    public function getDataInput()
    {
        return $this->dataInput;
    }

    /**
     * Sets a new dataInput
     *
     * @param \ProcessMaker\Bpmn\Model\DataInput[] $dataInput
     * @return self
     */
    public function setDataInput(array $dataInput)
    {
        $this->dataInput = $dataInput;
        return $this;
    }

    /**
     * Adds as dataOutput
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Model\DataOutput $dataOutput
     */
    public function addToDataOutput(\ProcessMaker\Bpmn\Model\DataOutput $dataOutput)
    {
        $this->dataOutput[] = $dataOutput;
        return $this;
    }

    /**
     * isset dataOutput
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDataOutput($index)
    {
        return isset($this->dataOutput[$index]);
    }

    /**
     * unset dataOutput
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDataOutput($index)
    {
        unset($this->dataOutput[$index]);
    }

    /**
     * Gets as dataOutput
     *
     * @return \ProcessMaker\Bpmn\Model\DataOutput[]
     */
    public function getDataOutput()
    {
        return $this->dataOutput;
    }

    /**
     * Sets a new dataOutput
     *
     * @param \ProcessMaker\Bpmn\Model\DataOutput[] $dataOutput
     * @return self
     */
    public function setDataOutput(array $dataOutput)
    {
        $this->dataOutput = $dataOutput;
        return $this;
    }

    /**
     * Adds as inputSet
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Model\InputSet $inputSet
     */
    public function addToInputSet(\ProcessMaker\Bpmn\Model\InputSet $inputSet)
    {
        $this->inputSet[] = $inputSet;
        return $this;
    }

    /**
     * isset inputSet
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInputSet($index)
    {
        return isset($this->inputSet[$index]);
    }

    /**
     * unset inputSet
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInputSet($index)
    {
        unset($this->inputSet[$index]);
    }

    /**
     * Gets as inputSet
     *
     * @return \ProcessMaker\Bpmn\Model\InputSet[]
     */
    public function getInputSet()
    {
        return $this->inputSet;
    }

    /**
     * Sets a new inputSet
     *
     * @param \ProcessMaker\Bpmn\Model\InputSet[] $inputSet
     * @return self
     */
    public function setInputSet(array $inputSet)
    {
        $this->inputSet = $inputSet;
        return $this;
    }

    /**
     * Adds as outputSet
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Model\OutputSet $outputSet
     */
    public function addToOutputSet(\ProcessMaker\Bpmn\Model\OutputSet $outputSet)
    {
        $this->outputSet[] = $outputSet;
        return $this;
    }

    /**
     * isset outputSet
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOutputSet($index)
    {
        return isset($this->outputSet[$index]);
    }

    /**
     * unset outputSet
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOutputSet($index)
    {
        unset($this->outputSet[$index]);
    }

    /**
     * Gets as outputSet
     *
     * @return \ProcessMaker\Bpmn\Model\OutputSet[]
     */
    public function getOutputSet()
    {
        return $this->outputSet;
    }

    /**
     * Sets a new outputSet
     *
     * @param \ProcessMaker\Bpmn\Model\OutputSet[] $outputSet
     * @return self
     */
    public function setOutputSet(array $outputSet)
    {
        $this->outputSet = $outputSet;
        return $this;
    }


}

