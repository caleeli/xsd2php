<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TInterfaceType
 *
 *
 * XSD Type: tInterface
 */
class TInterfaceType extends TRootElementType
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
     * @property \ProcessMaker\Bpmn\Model\Operation[] $operation
     */
    private $operation = null;

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
     * Adds as operation
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Model\Operation $operation
     */
    public function addToOperation(\ProcessMaker\Bpmn\Model\Operation $operation)
    {
        $this->operation[] = $operation;
        return $this;
    }

    /**
     * isset operation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOperation($index)
    {
        return isset($this->operation[$index]);
    }

    /**
     * unset operation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOperation($index)
    {
        unset($this->operation[$index]);
    }

    /**
     * Gets as operation
     *
     * @return \ProcessMaker\Bpmn\Model\Operation[]
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * @param \ProcessMaker\Bpmn\Model\Operation[] $operation
     * @return self
     */
    public function setOperation(array $operation)
    {
        $this->operation = $operation;
        return $this;
    }


}

