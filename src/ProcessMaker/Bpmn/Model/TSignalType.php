<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TSignalType
 *
 *
 * XSD Type: tSignal
 */
class TSignalType extends TRootElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $structureRef
     */
    private $structureRef = null;

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
     * Gets as structureRef
     *
     * @return string
     */
    public function getStructureRef()
    {
        return $this->structureRef;
    }

    /**
     * Sets a new structureRef
     *
     * @param string $structureRef
     * @return self
     */
    public function setStructureRef($structureRef)
    {
        $this->structureRef = $structureRef;
        return $this;
    }


}

