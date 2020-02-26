<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TCorrelationPropertyType
 *
 *
 * XSD Type: tCorrelationProperty
 */
class TCorrelationPropertyType extends TRootElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\CorrelationPropertyRetrievalExpression[]
     * $correlationPropertyRetrievalExpression
     */
    private $correlationPropertyRetrievalExpression = null;

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
     * Adds as correlationPropertyRetrievalExpression
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Model\CorrelationPropertyRetrievalExpression
     * $correlationPropertyRetrievalExpression
     */
    public function addToCorrelationPropertyRetrievalExpression(\ProcessMaker\Bpmn\Model\CorrelationPropertyRetrievalExpression $correlationPropertyRetrievalExpression)
    {
        $this->correlationPropertyRetrievalExpression[] = $correlationPropertyRetrievalExpression;
        return $this;
    }

    /**
     * isset correlationPropertyRetrievalExpression
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCorrelationPropertyRetrievalExpression($index)
    {
        return isset($this->correlationPropertyRetrievalExpression[$index]);
    }

    /**
     * unset correlationPropertyRetrievalExpression
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCorrelationPropertyRetrievalExpression($index)
    {
        unset($this->correlationPropertyRetrievalExpression[$index]);
    }

    /**
     * Gets as correlationPropertyRetrievalExpression
     *
     * @return \ProcessMaker\Bpmn\Model\CorrelationPropertyRetrievalExpression[]
     */
    public function getCorrelationPropertyRetrievalExpression()
    {
        return $this->correlationPropertyRetrievalExpression;
    }

    /**
     * Sets a new correlationPropertyRetrievalExpression
     *
     * @param \ProcessMaker\Bpmn\Model\CorrelationPropertyRetrievalExpression[]
     * $correlationPropertyRetrievalExpression
     * @return self
     */
    public function setCorrelationPropertyRetrievalExpression(array $correlationPropertyRetrievalExpression)
    {
        $this->correlationPropertyRetrievalExpression = $correlationPropertyRetrievalExpression;
        return $this;
    }


}

