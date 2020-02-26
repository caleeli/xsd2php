<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TFlowElementType
 *
 *
 * XSD Type: tFlowElement
 */
class TFlowElementType extends TBaseElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\Auditing $auditing
     */
    private $auditing = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\Monitoring $monitoring
     */
    private $monitoring = null;

    /**
     * @property string[] $categoryValueRef
     */
    private $categoryValueRef = null;

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
     * Gets as auditing
     *
     * @return \ProcessMaker\Bpmn\Model\Auditing
     */
    public function getAuditing()
    {
        return $this->auditing;
    }

    /**
     * Sets a new auditing
     *
     * @param \ProcessMaker\Bpmn\Model\Auditing $auditing
     * @return self
     */
    public function setAuditing(\ProcessMaker\Bpmn\Model\Auditing $auditing)
    {
        $this->auditing = $auditing;
        return $this;
    }

    /**
     * Gets as monitoring
     *
     * @return \ProcessMaker\Bpmn\Model\Monitoring
     */
    public function getMonitoring()
    {
        return $this->monitoring;
    }

    /**
     * Sets a new monitoring
     *
     * @param \ProcessMaker\Bpmn\Model\Monitoring $monitoring
     * @return self
     */
    public function setMonitoring(\ProcessMaker\Bpmn\Model\Monitoring $monitoring)
    {
        $this->monitoring = $monitoring;
        return $this;
    }

    /**
     * Adds as categoryValueRef
     *
     * @return self
     * @param string $categoryValueRef
     */
    public function addToCategoryValueRef($categoryValueRef)
    {
        $this->categoryValueRef[] = $categoryValueRef;
        return $this;
    }

    /**
     * isset categoryValueRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCategoryValueRef($index)
    {
        return isset($this->categoryValueRef[$index]);
    }

    /**
     * unset categoryValueRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCategoryValueRef($index)
    {
        unset($this->categoryValueRef[$index]);
    }

    /**
     * Gets as categoryValueRef
     *
     * @return string[]
     */
    public function getCategoryValueRef()
    {
        return $this->categoryValueRef;
    }

    /**
     * Sets a new categoryValueRef
     *
     * @param string[] $categoryValueRef
     * @return self
     */
    public function setCategoryValueRef(array $categoryValueRef)
    {
        $this->categoryValueRef = $categoryValueRef;
        return $this;
    }


}

