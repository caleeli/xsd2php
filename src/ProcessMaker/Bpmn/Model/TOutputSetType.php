<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TOutputSetType
 *
 *
 * XSD Type: tOutputSet
 */
class TOutputSetType extends TBaseElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string[] $dataOutputRefs
     */
    private $dataOutputRefs = null;

    /**
     * @property string[] $optionalOutputRefs
     */
    private $optionalOutputRefs = null;

    /**
     * @property string[] $whileExecutingOutputRefs
     */
    private $whileExecutingOutputRefs = null;

    /**
     * @property string[] $inputSetRefs
     */
    private $inputSetRefs = null;

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
     * Adds as dataOutputRefs
     *
     * @return self
     * @param string $dataOutputRefs
     */
    public function addToDataOutputRefs($dataOutputRefs)
    {
        $this->dataOutputRefs[] = $dataOutputRefs;
        return $this;
    }

    /**
     * isset dataOutputRefs
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDataOutputRefs($index)
    {
        return isset($this->dataOutputRefs[$index]);
    }

    /**
     * unset dataOutputRefs
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDataOutputRefs($index)
    {
        unset($this->dataOutputRefs[$index]);
    }

    /**
     * Gets as dataOutputRefs
     *
     * @return string[]
     */
    public function getDataOutputRefs()
    {
        return $this->dataOutputRefs;
    }

    /**
     * Sets a new dataOutputRefs
     *
     * @param string[] $dataOutputRefs
     * @return self
     */
    public function setDataOutputRefs(array $dataOutputRefs)
    {
        $this->dataOutputRefs = $dataOutputRefs;
        return $this;
    }

    /**
     * Adds as optionalOutputRefs
     *
     * @return self
     * @param string $optionalOutputRefs
     */
    public function addToOptionalOutputRefs($optionalOutputRefs)
    {
        $this->optionalOutputRefs[] = $optionalOutputRefs;
        return $this;
    }

    /**
     * isset optionalOutputRefs
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOptionalOutputRefs($index)
    {
        return isset($this->optionalOutputRefs[$index]);
    }

    /**
     * unset optionalOutputRefs
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOptionalOutputRefs($index)
    {
        unset($this->optionalOutputRefs[$index]);
    }

    /**
     * Gets as optionalOutputRefs
     *
     * @return string[]
     */
    public function getOptionalOutputRefs()
    {
        return $this->optionalOutputRefs;
    }

    /**
     * Sets a new optionalOutputRefs
     *
     * @param string[] $optionalOutputRefs
     * @return self
     */
    public function setOptionalOutputRefs(array $optionalOutputRefs)
    {
        $this->optionalOutputRefs = $optionalOutputRefs;
        return $this;
    }

    /**
     * Adds as whileExecutingOutputRefs
     *
     * @return self
     * @param string $whileExecutingOutputRefs
     */
    public function addToWhileExecutingOutputRefs($whileExecutingOutputRefs)
    {
        $this->whileExecutingOutputRefs[] = $whileExecutingOutputRefs;
        return $this;
    }

    /**
     * isset whileExecutingOutputRefs
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWhileExecutingOutputRefs($index)
    {
        return isset($this->whileExecutingOutputRefs[$index]);
    }

    /**
     * unset whileExecutingOutputRefs
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWhileExecutingOutputRefs($index)
    {
        unset($this->whileExecutingOutputRefs[$index]);
    }

    /**
     * Gets as whileExecutingOutputRefs
     *
     * @return string[]
     */
    public function getWhileExecutingOutputRefs()
    {
        return $this->whileExecutingOutputRefs;
    }

    /**
     * Sets a new whileExecutingOutputRefs
     *
     * @param string[] $whileExecutingOutputRefs
     * @return self
     */
    public function setWhileExecutingOutputRefs(array $whileExecutingOutputRefs)
    {
        $this->whileExecutingOutputRefs = $whileExecutingOutputRefs;
        return $this;
    }

    /**
     * Adds as inputSetRefs
     *
     * @return self
     * @param string $inputSetRefs
     */
    public function addToInputSetRefs($inputSetRefs)
    {
        $this->inputSetRefs[] = $inputSetRefs;
        return $this;
    }

    /**
     * isset inputSetRefs
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInputSetRefs($index)
    {
        return isset($this->inputSetRefs[$index]);
    }

    /**
     * unset inputSetRefs
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInputSetRefs($index)
    {
        unset($this->inputSetRefs[$index]);
    }

    /**
     * Gets as inputSetRefs
     *
     * @return string[]
     */
    public function getInputSetRefs()
    {
        return $this->inputSetRefs;
    }

    /**
     * Sets a new inputSetRefs
     *
     * @param string[] $inputSetRefs
     * @return self
     */
    public function setInputSetRefs(array $inputSetRefs)
    {
        $this->inputSetRefs = $inputSetRefs;
        return $this;
    }


}

