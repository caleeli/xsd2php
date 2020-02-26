<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TRelationshipType
 *
 *
 * XSD Type: tRelationship
 */
class TRelationshipType extends TBaseElementType
{

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property string $direction
     */
    private $direction = null;

    /**
     * @property string[] $source
     */
    private $source = null;

    /**
     * @property string[] $target
     */
    private $target = null;

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Sets a new direction
     *
     * @param string $direction
     * @return self
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
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
     * Adds as target
     *
     * @return self
     * @param string $target
     */
    public function addToTarget($target)
    {
        $this->target[] = $target;
        return $this;
    }

    /**
     * isset target
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTarget($index)
    {
        return isset($this->target[$index]);
    }

    /**
     * unset target
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTarget($index)
    {
        unset($this->target[$index]);
    }

    /**
     * Gets as target
     *
     * @return string[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * @param string[] $target
     * @return self
     */
    public function setTarget(array $target)
    {
        $this->target = $target;
        return $this;
    }


}

