<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TActivityType
 *
 *
 * XSD Type: tActivity
 */
class TActivityType extends TFlowNodeType
{

    /**
     * @property boolean $isForCompensation
     */
    private $isForCompensation = null;

    /**
     * @property integer $startQuantity
     */
    private $startQuantity = null;

    /**
     * @property integer $completionQuantity
     */
    private $completionQuantity = null;

    /**
     * @property string $default
     */
    private $default = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\IoSpecification $ioSpecification
     */
    private $ioSpecification = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\Property[] $property
     */
    private $property = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\DataInputAssociation[] $dataInputAssociation
     */
    private $dataInputAssociation = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\DataOutputAssociation[]
     * $dataOutputAssociation
     */
    private $dataOutputAssociation = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\ResourceRole[] $resourceRole
     */
    private $resourceRole = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\LoopCharacteristics $loopCharacteristics
     */
    private $loopCharacteristics = null;

    /**
     * Gets as isForCompensation
     *
     * @return boolean
     */
    public function getIsForCompensation()
    {
        return $this->isForCompensation;
    }

    /**
     * Sets a new isForCompensation
     *
     * @param boolean $isForCompensation
     * @return self
     */
    public function setIsForCompensation($isForCompensation)
    {
        $this->isForCompensation = $isForCompensation;
        return $this;
    }

    /**
     * Gets as startQuantity
     *
     * @return integer
     */
    public function getStartQuantity()
    {
        return $this->startQuantity;
    }

    /**
     * Sets a new startQuantity
     *
     * @param integer $startQuantity
     * @return self
     */
    public function setStartQuantity($startQuantity)
    {
        $this->startQuantity = $startQuantity;
        return $this;
    }

    /**
     * Gets as completionQuantity
     *
     * @return integer
     */
    public function getCompletionQuantity()
    {
        return $this->completionQuantity;
    }

    /**
     * Sets a new completionQuantity
     *
     * @param integer $completionQuantity
     * @return self
     */
    public function setCompletionQuantity($completionQuantity)
    {
        $this->completionQuantity = $completionQuantity;
        return $this;
    }

    /**
     * Gets as default
     *
     * @return string
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Sets a new default
     *
     * @param string $default
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }

    /**
     * Gets as ioSpecification
     *
     * @return \ProcessMaker\Bpmn\Model\IoSpecification
     */
    public function getIoSpecification()
    {
        return $this->ioSpecification;
    }

    /**
     * Sets a new ioSpecification
     *
     * @param \ProcessMaker\Bpmn\Model\IoSpecification $ioSpecification
     * @return self
     */
    public function setIoSpecification(\ProcessMaker\Bpmn\Model\IoSpecification $ioSpecification)
    {
        $this->ioSpecification = $ioSpecification;
        return $this;
    }

    /**
     * Adds as property
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Model\Property $property
     */
    public function addToProperty(\ProcessMaker\Bpmn\Model\Property $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProperty($index)
    {
        return isset($this->property[$index]);
    }

    /**
     * unset property
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProperty($index)
    {
        unset($this->property[$index]);
    }

    /**
     * Gets as property
     *
     * @return \ProcessMaker\Bpmn\Model\Property[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * @param \ProcessMaker\Bpmn\Model\Property[] $property
     * @return self
     */
    public function setProperty(array $property)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Adds as dataInputAssociation
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Model\DataInputAssociation $dataInputAssociation
     */
    public function addToDataInputAssociation(\ProcessMaker\Bpmn\Model\DataInputAssociation $dataInputAssociation)
    {
        $this->dataInputAssociation[] = $dataInputAssociation;
        return $this;
    }

    /**
     * isset dataInputAssociation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDataInputAssociation($index)
    {
        return isset($this->dataInputAssociation[$index]);
    }

    /**
     * unset dataInputAssociation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDataInputAssociation($index)
    {
        unset($this->dataInputAssociation[$index]);
    }

    /**
     * Gets as dataInputAssociation
     *
     * @return \ProcessMaker\Bpmn\Model\DataInputAssociation[]
     */
    public function getDataInputAssociation()
    {
        return $this->dataInputAssociation;
    }

    /**
     * Sets a new dataInputAssociation
     *
     * @param \ProcessMaker\Bpmn\Model\DataInputAssociation[] $dataInputAssociation
     * @return self
     */
    public function setDataInputAssociation(array $dataInputAssociation)
    {
        $this->dataInputAssociation = $dataInputAssociation;
        return $this;
    }

    /**
     * Adds as dataOutputAssociation
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Model\DataOutputAssociation $dataOutputAssociation
     */
    public function addToDataOutputAssociation(\ProcessMaker\Bpmn\Model\DataOutputAssociation $dataOutputAssociation)
    {
        $this->dataOutputAssociation[] = $dataOutputAssociation;
        return $this;
    }

    /**
     * isset dataOutputAssociation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDataOutputAssociation($index)
    {
        return isset($this->dataOutputAssociation[$index]);
    }

    /**
     * unset dataOutputAssociation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDataOutputAssociation($index)
    {
        unset($this->dataOutputAssociation[$index]);
    }

    /**
     * Gets as dataOutputAssociation
     *
     * @return \ProcessMaker\Bpmn\Model\DataOutputAssociation[]
     */
    public function getDataOutputAssociation()
    {
        return $this->dataOutputAssociation;
    }

    /**
     * Sets a new dataOutputAssociation
     *
     * @param \ProcessMaker\Bpmn\Model\DataOutputAssociation[] $dataOutputAssociation
     * @return self
     */
    public function setDataOutputAssociation(array $dataOutputAssociation)
    {
        $this->dataOutputAssociation = $dataOutputAssociation;
        return $this;
    }

    /**
     * Adds as resourceRole
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Model\ResourceRole $resourceRole
     */
    public function addToResourceRole(\ProcessMaker\Bpmn\Model\ResourceRole $resourceRole)
    {
        $this->resourceRole[] = $resourceRole;
        return $this;
    }

    /**
     * isset resourceRole
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResourceRole($index)
    {
        return isset($this->resourceRole[$index]);
    }

    /**
     * unset resourceRole
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResourceRole($index)
    {
        unset($this->resourceRole[$index]);
    }

    /**
     * Gets as resourceRole
     *
     * @return \ProcessMaker\Bpmn\Model\ResourceRole[]
     */
    public function getResourceRole()
    {
        return $this->resourceRole;
    }

    /**
     * Sets a new resourceRole
     *
     * @param \ProcessMaker\Bpmn\Model\ResourceRole[] $resourceRole
     * @return self
     */
    public function setResourceRole(array $resourceRole)
    {
        $this->resourceRole = $resourceRole;
        return $this;
    }

    /**
     * Gets as loopCharacteristics
     *
     * @return \ProcessMaker\Bpmn\Model\LoopCharacteristics
     */
    public function getLoopCharacteristics()
    {
        return $this->loopCharacteristics;
    }

    /**
     * Sets a new loopCharacteristics
     *
     * @param \ProcessMaker\Bpmn\Model\LoopCharacteristics $loopCharacteristics
     * @return self
     */
    public function setLoopCharacteristics(\ProcessMaker\Bpmn\Model\LoopCharacteristics $loopCharacteristics)
    {
        $this->loopCharacteristics = $loopCharacteristics;
        return $this;
    }


}

