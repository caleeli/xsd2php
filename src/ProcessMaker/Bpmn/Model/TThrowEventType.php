<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TThrowEventType
 *
 *
 * XSD Type: tThrowEvent
 */
class TThrowEventType extends TEventType
{

    /**
     * @property \ProcessMaker\Bpmn\Model\DataInput[] $dataInput
     */
    private $dataInput = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\DataInputAssociation[] $dataInputAssociation
     */
    private $dataInputAssociation = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\InputSet $inputSet
     */
    private $inputSet = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\EventDefinition[] $eventDefinition
     */
    private $eventDefinition = null;

    /**
     * @property string[] $eventDefinitionRef
     */
    private $eventDefinitionRef = null;

    /**
     * Adds as dataInput
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Model\DataInput $dataInput
     */
    public function addToDataInput(\ProcessMaker\Bpmn\Model\DataInput $dataInput)
    {
        $this->dataInput[] = $dataInput;
        return $this;
    }

    /**
     * isset dataInput
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDataInput($index)
    {
        return isset($this->dataInput[$index]);
    }

    /**
     * unset dataInput
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDataInput($index)
    {
        unset($this->dataInput[$index]);
    }

    /**
     * Gets as dataInput
     *
     * @return \ProcessMaker\Bpmn\Model\DataInput[]
     */
    public function getDataInput()
    {
        return $this->dataInput;
    }

    /**
     * Sets a new dataInput
     *
     * @param \ProcessMaker\Bpmn\Model\DataInput[] $dataInput
     * @return self
     */
    public function setDataInput(array $dataInput)
    {
        $this->dataInput = $dataInput;
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
     * Gets as inputSet
     *
     * @return \ProcessMaker\Bpmn\Model\InputSet
     */
    public function getInputSet()
    {
        return $this->inputSet;
    }

    /**
     * Sets a new inputSet
     *
     * @param \ProcessMaker\Bpmn\Model\InputSet $inputSet
     * @return self
     */
    public function setInputSet(\ProcessMaker\Bpmn\Model\InputSet $inputSet)
    {
        $this->inputSet = $inputSet;
        return $this;
    }

    /**
     * Adds as eventDefinition
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Model\EventDefinition $eventDefinition
     */
    public function addToEventDefinition(\ProcessMaker\Bpmn\Model\EventDefinition $eventDefinition)
    {
        $this->eventDefinition[] = $eventDefinition;
        return $this;
    }

    /**
     * isset eventDefinition
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEventDefinition($index)
    {
        return isset($this->eventDefinition[$index]);
    }

    /**
     * unset eventDefinition
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEventDefinition($index)
    {
        unset($this->eventDefinition[$index]);
    }

    /**
     * Gets as eventDefinition
     *
     * @return \ProcessMaker\Bpmn\Model\EventDefinition[]
     */
    public function getEventDefinition()
    {
        return $this->eventDefinition;
    }

    /**
     * Sets a new eventDefinition
     *
     * @param \ProcessMaker\Bpmn\Model\EventDefinition[] $eventDefinition
     * @return self
     */
    public function setEventDefinition(array $eventDefinition)
    {
        $this->eventDefinition = $eventDefinition;
        return $this;
    }

    /**
     * Adds as eventDefinitionRef
     *
     * @return self
     * @param string $eventDefinitionRef
     */
    public function addToEventDefinitionRef($eventDefinitionRef)
    {
        $this->eventDefinitionRef[] = $eventDefinitionRef;
        return $this;
    }

    /**
     * isset eventDefinitionRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEventDefinitionRef($index)
    {
        return isset($this->eventDefinitionRef[$index]);
    }

    /**
     * unset eventDefinitionRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEventDefinitionRef($index)
    {
        unset($this->eventDefinitionRef[$index]);
    }

    /**
     * Gets as eventDefinitionRef
     *
     * @return string[]
     */
    public function getEventDefinitionRef()
    {
        return $this->eventDefinitionRef;
    }

    /**
     * Sets a new eventDefinitionRef
     *
     * @param string[] $eventDefinitionRef
     * @return self
     */
    public function setEventDefinitionRef(array $eventDefinitionRef)
    {
        $this->eventDefinitionRef = $eventDefinitionRef;
        return $this;
    }


}

