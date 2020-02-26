<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TInputSetType
 *
 *
 * XSD Type: tInputSet
 */
class TInputSetType extends TBaseElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string[] $dataInputRefs
     */
    private $dataInputRefs = null;

    /**
     * @property string[] $optionalInputRefs
     */
    private $optionalInputRefs = null;

    /**
     * @property string[] $whileExecutingInputRefs
     */
    private $whileExecutingInputRefs = null;

    /**
     * @property string[] $outputSetRefs
     */
    private $outputSetRefs = null;

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as dataInputRefs
     *
     * @return self
     * @param string $dataInputRefs
     */
    public function addToDataInputRefs($dataInputRefs)
    {
        $this->dataInputRefs[] = $dataInputRefs;
        return $this;
    }

    /**
     * isset dataInputRefs
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDataInputRefs($index)
    {
        return isset($this->dataInputRefs[$index]);
    }

    /**
     * unset dataInputRefs
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDataInputRefs($index)
    {
        unset($this->dataInputRefs[$index]);
    }

    /**
     * Gets as dataInputRefs
     *
     * @return string[]
     */
    public function getDataInputRefs()
    {
        return $this->dataInputRefs;
    }

    /**
     * Sets a new dataInputRefs
     *
     * @param string[] $dataInputRefs
     * @return self
     */
    public function setDataInputRefs(array $dataInputRefs)
    {
        $this->dataInputRefs = $dataInputRefs;
        return $this;
    }

    /**
     * Adds as optionalInputRefs
     *
     * @return self
     * @param string $optionalInputRefs
     */
    public function addToOptionalInputRefs($optionalInputRefs)
    {
        $this->optionalInputRefs[] = $optionalInputRefs;
        return $this;
    }

    /**
     * isset optionalInputRefs
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOptionalInputRefs($index)
    {
        return isset($this->optionalInputRefs[$index]);
    }

    /**
     * unset optionalInputRefs
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOptionalInputRefs($index)
    {
        unset($this->optionalInputRefs[$index]);
    }

    /**
     * Gets as optionalInputRefs
     *
     * @return string[]
     */
    public function getOptionalInputRefs()
    {
        return $this->optionalInputRefs;
    }

    /**
     * Sets a new optionalInputRefs
     *
     * @param string[] $optionalInputRefs
     * @return self
     */
    public function setOptionalInputRefs(array $optionalInputRefs)
    {
        $this->optionalInputRefs = $optionalInputRefs;
        return $this;
    }

    /**
     * Adds as whileExecutingInputRefs
     *
     * @return self
     * @param string $whileExecutingInputRefs
     */
    public function addToWhileExecutingInputRefs($whileExecutingInputRefs)
    {
        $this->whileExecutingInputRefs[] = $whileExecutingInputRefs;
        return $this;
    }

    /**
     * isset whileExecutingInputRefs
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWhileExecutingInputRefs($index)
    {
        return isset($this->whileExecutingInputRefs[$index]);
    }

    /**
     * unset whileExecutingInputRefs
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWhileExecutingInputRefs($index)
    {
        unset($this->whileExecutingInputRefs[$index]);
    }

    /**
     * Gets as whileExecutingInputRefs
     *
     * @return string[]
     */
    public function getWhileExecutingInputRefs()
    {
        return $this->whileExecutingInputRefs;
    }

    /**
     * Sets a new whileExecutingInputRefs
     *
     * @param string[] $whileExecutingInputRefs
     * @return self
     */
    public function setWhileExecutingInputRefs(array $whileExecutingInputRefs)
    {
        $this->whileExecutingInputRefs = $whileExecutingInputRefs;
        return $this;
    }

    /**
     * Adds as outputSetRefs
     *
     * @return self
     * @param string $outputSetRefs
     */
    public function addToOutputSetRefs($outputSetRefs)
    {
        $this->outputSetRefs[] = $outputSetRefs;
        return $this;
    }

    /**
     * isset outputSetRefs
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOutputSetRefs($index)
    {
        return isset($this->outputSetRefs[$index]);
    }

    /**
     * unset outputSetRefs
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOutputSetRefs($index)
    {
        unset($this->outputSetRefs[$index]);
    }

    /**
     * Gets as outputSetRefs
     *
     * @return string[]
     */
    public function getOutputSetRefs()
    {
        return $this->outputSetRefs;
    }

    /**
     * Sets a new outputSetRefs
     *
     * @param string[] $outputSetRefs
     * @return self
     */
    public function setOutputSetRefs(array $outputSetRefs)
    {
        $this->outputSetRefs = $outputSetRefs;
        return $this;
    }


}

