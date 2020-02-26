<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TItemDefinitionType
 *
 *
 * XSD Type: tItemDefinition
 */
class TItemDefinitionType extends TRootElementType
{

    /**
     * @property string $structureRef
     */
    private $structureRef = null;

    /**
     * @property boolean $isCollection
     */
    private $isCollection = null;

    /**
     * @property string $itemKind
     */
    private $itemKind = null;

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

    /**
     * Gets as isCollection
     *
     * @return boolean
     */
    public function getIsCollection()
    {
        return $this->isCollection;
    }

    /**
     * Sets a new isCollection
     *
     * @param boolean $isCollection
     * @return self
     */
    public function setIsCollection($isCollection)
    {
        $this->isCollection = $isCollection;
        return $this;
    }

    /**
     * Gets as itemKind
     *
     * @return string
     */
    public function getItemKind()
    {
        return $this->itemKind;
    }

    /**
     * Sets a new itemKind
     *
     * @param string $itemKind
     * @return self
     */
    public function setItemKind($itemKind)
    {
        $this->itemKind = $itemKind;
        return $this;
    }


}

