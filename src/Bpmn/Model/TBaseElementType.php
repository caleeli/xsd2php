<?php

namespace Bpmn\Model;

/**
 * Class representing TBaseElementType
 *
 *
 * XSD Type: tBaseElement
 */
class TBaseElementType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \Bpmn\Model\Documentation[] $documentation
     */
    private $documentation = null;

    /**
     * @property \Bpmn\Model\ExtensionElements $extensionElements
     */
    private $extensionElements = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
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

    /**
     * Gets as extensionElements
     *
     * @return \Bpmn\Model\ExtensionElements
     */
    public function getExtensionElements()
    {
        return $this->extensionElements;
    }

    /**
     * Sets a new extensionElements
     *
     * @param \Bpmn\Model\ExtensionElements $extensionElements
     * @return self
     */
    public function setExtensionElements(\Bpmn\Model\ExtensionElements $extensionElements)
    {
        $this->extensionElements = $extensionElements;
        return $this;
    }


}

