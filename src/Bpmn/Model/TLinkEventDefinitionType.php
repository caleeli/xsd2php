<?php

namespace Bpmn\Model;

/**
 * Class representing TLinkEventDefinitionType
 *
 *
 * XSD Type: tLinkEventDefinition
 */
class TLinkEventDefinitionType extends TEventDefinitionType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string[] $source
     */
    private $source = null;

    /**
     * @property string $target
     */
    private $target = null;

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
     * Adds as source
     *
     * @return self
     * @param string $source
     */
    public function addToSource($source)
    {
        $this->source[] = $source;
        return $this;
    }

    /**
     * isset source
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSource($index)
    {
        return isset($this->source[$index]);
    }

    /**
     * unset source
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSource($index)
    {
        unset($this->source[$index]);
    }

    /**
     * Gets as source
     *
     * @return string[]
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * @param string[] $source
     * @return self
     */
    public function setSource(array $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * @param string $target
     * @return self
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }


}

