<?php

namespace Bpmn\Model;

/**
 * Class representing TCategoryType
 *
 *
 * XSD Type: tCategory
 */
class TCategoryType extends TRootElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \Bpmn\Model\CategoryValue[] $categoryValue
     */
    private $categoryValue = null;

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
     * Adds as categoryValue
     *
     * @return self
     * @param \Bpmn\Model\CategoryValue $categoryValue
     */
    public function addToCategoryValue(\Bpmn\Model\CategoryValue $categoryValue)
    {
        $this->categoryValue[] = $categoryValue;
        return $this;
    }

    /**
     * isset categoryValue
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCategoryValue($index)
    {
        return isset($this->categoryValue[$index]);
    }

    /**
     * unset categoryValue
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCategoryValue($index)
    {
        unset($this->categoryValue[$index]);
    }

    /**
     * Gets as categoryValue
     *
     * @return \Bpmn\Model\CategoryValue[]
     */
    public function getCategoryValue()
    {
        return $this->categoryValue;
    }

    /**
     * Sets a new categoryValue
     *
     * @param \Bpmn\Model\CategoryValue[] $categoryValue
     * @return self
     */
    public function setCategoryValue(array $categoryValue)
    {
        $this->categoryValue = $categoryValue;
        return $this;
    }


}

