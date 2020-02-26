<?php

namespace Bpmn\Model;

/**
 * Class representing TGroupType
 *
 *
 * XSD Type: tGroup
 */
class TGroupType extends TArtifactType
{

    /**
     * @property string $categoryValueRef
     */
    private $categoryValueRef = null;

    /**
     * Gets as categoryValueRef
     *
     * @return string
     */
    public function getCategoryValueRef()
    {
        return $this->categoryValueRef;
    }

    /**
     * Sets a new categoryValueRef
     *
     * @param string $categoryValueRef
     * @return self
     */
    public function setCategoryValueRef($categoryValueRef)
    {
        $this->categoryValueRef = $categoryValueRef;
        return $this;
    }


}

