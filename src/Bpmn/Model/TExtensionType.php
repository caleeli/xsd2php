<?php

namespace Bpmn\Model;

/**
 * Class representing TExtensionType
 *
 *
 * XSD Type: tExtension
 */
class TExtensionType
{

    /**
     * @property string $definition
     */
    private $definition = null;

    /**
     * @property boolean $mustUnderstand
     */
    private $mustUnderstand = null;

    /**
     * @property \Bpmn\Model\Documentation[] $documentation
     */
    private $documentation = null;

    /**
     * Gets as definition
     *
     * @return string
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Sets a new definition
     *
     * @param string $definition
     * @return self
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Gets as mustUnderstand
     *
     * @return boolean
     */
    public function getMustUnderstand()
    {
        return $this->mustUnderstand;
    }

    /**
     * Sets a new mustUnderstand
     *
     * @param boolean $mustUnderstand
     * @return self
     */
    public function setMustUnderstand($mustUnderstand)
    {
        $this->mustUnderstand = $mustUnderstand;
        return $this;
    }

    /**
     * Adds as documentation
     *
     * @return self
     * @param \Bpmn\Model\Documentation $documentation
     */
    public function addToDocumentation(\Bpmn\Model\Documentation $documentation)
    {
        $this->documentation[] = $documentation;
        return $this;
    }

    /**
     * isset documentation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDocumentation($index)
    {
        return isset($this->documentation[$index]);
    }

    /**
     * unset documentation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDocumentation($index)
    {
        unset($this->documentation[$index]);
    }

    /**
     * Gets as documentation
     *
     * @return \Bpmn\Model\Documentation[]
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * @param \Bpmn\Model\Documentation[] $documentation
     * @return self
     */
    public function setDocumentation(array $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }


}

