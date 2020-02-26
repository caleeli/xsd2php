<?php

namespace Bpmn\Model;

/**
 * Class representing TOperationType
 *
 *
 * XSD Type: tOperation
 */
class TOperationType extends TBaseElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $implementationRef
     */
    private $implementationRef = null;

    /**
     * @property string $inMessageRef
     */
    private $inMessageRef = null;

    /**
     * @property string $outMessageRef
     */
    private $outMessageRef = null;

    /**
     * @property string[] $errorRef
     */
    private $errorRef = null;

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
     * Gets as implementationRef
     *
     * @return string
     */
    public function getImplementationRef()
    {
        return $this->implementationRef;
    }

    /**
     * Sets a new implementationRef
     *
     * @param string $implementationRef
     * @return self
     */
    public function setImplementationRef($implementationRef)
    {
        $this->implementationRef = $implementationRef;
        return $this;
    }

    /**
     * Gets as inMessageRef
     *
     * @return string
     */
    public function getInMessageRef()
    {
        return $this->inMessageRef;
    }

    /**
     * Sets a new inMessageRef
     *
     * @param string $inMessageRef
     * @return self
     */
    public function setInMessageRef($inMessageRef)
    {
        $this->inMessageRef = $inMessageRef;
        return $this;
    }

    /**
     * Gets as outMessageRef
     *
     * @return string
     */
    public function getOutMessageRef()
    {
        return $this->outMessageRef;
    }

    /**
     * Sets a new outMessageRef
     *
     * @param string $outMessageRef
     * @return self
     */
    public function setOutMessageRef($outMessageRef)
    {
        $this->outMessageRef = $outMessageRef;
        return $this;
    }

    /**
     * Adds as errorRef
     *
     * @return self
     * @param string $errorRef
     */
    public function addToErrorRef($errorRef)
    {
        $this->errorRef[] = $errorRef;
        return $this;
    }

    /**
     * isset errorRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetErrorRef($index)
    {
        return isset($this->errorRef[$index]);
    }

    /**
     * unset errorRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetErrorRef($index)
    {
        unset($this->errorRef[$index]);
    }

    /**
     * Gets as errorRef
     *
     * @return string[]
     */
    public function getErrorRef()
    {
        return $this->errorRef;
    }

    /**
     * Sets a new errorRef
     *
     * @param string[] $errorRef
     * @return self
     */
    public function setErrorRef(array $errorRef)
    {
        $this->errorRef = $errorRef;
        return $this;
    }


}

