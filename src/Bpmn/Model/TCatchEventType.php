<?php

namespace Bpmn\Model;

/**
 * Class representing TCatchEventType
 *
 *
 * XSD Type: tCatchEvent
 */
class TCatchEventType extends TEventType
{

    /**
     * @property boolean $parallelMultiple
     */
    private $parallelMultiple = null;

    /**
     * @property \Bpmn\Model\DataOutput[] $dataOutput
     */
    private $dataOutput = null;

    /**
     * @property \Bpmn\Model\DataOutputAssociation[] $dataOutputAssociation
     */
    private $dataOutputAssociation = null;

    /**
     * @property \Bpmn\Model\OutputSet $outputSet
     */
    private $outputSet = null;

    /**
     * @property \Bpmn\Model\EventDefinition[] $eventDefinition
     */
    private $eventDefinition = null;

    /**
     * @property string[] $eventDefinitionRef
     */
    private $eventDefinitionRef = null;

    /**
     * Gets as parallelMultiple
     *
     * @return boolean
     */
    public function getParallelMultiple()
    {
        return $this->parallelMultiple;
    }

    /**
     * Sets a new parallelMultiple
     *
     * @param boolean $parallelMultiple
     * @return self
     */
    public function setParallelMultiple($parallelMultiple)
    {
        $this->parallelMultiple = $parallelMultiple;
        return $this;
    }

    /**
     * Adds as dataOutput
     *
     * @return self
     * @param \Bpmn\Model\DataOutput $dataOutput
     */
    public function addToDataOutput(\Bpmn\Model\DataOutput $dataOutput)
    {
        $this->dataOutput[] = $dataOutput;
        return $this;
    }

    /**
     * isset dataOutput
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDataOutput($index)
    {
        return isset($this->dataOutput[$index]);
    }

    /**
     * unset dataOutput
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDataOutput($index)
    {
        unset($this->dataOutput[$index]);
    }

    /**
     * Gets as dataOutput
     *
     * @return \Bpmn\Model\DataOutput[]
     */
    public function getDataOutput()
    {
        return $this->dataOutput;
    }

    /**
     * Sets a new dataOutput
     *
     * @param \Bpmn\Model\DataOutput[] $dataOutput
     * @return self
     */
    public function setDataOutput(array $dataOutput)
    {
        $this->dataOutput = $dataOutput;
        return $this;
    }

    /**
     * Adds as dataOutputAssociation
     *
     * @return self
     * @param \Bpmn\Model\DataOutputAssociation $dataOutputAssociation
     */
    public function addToDataOutputAssociation(\Bpmn\Model\DataOutputAssociation $dataOutputAssociation)
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
     * @return \Bpmn\Model\DataOutputAssociation[]
     */
    public function getDataOutputAssociation()
    {
        return $this->dataOutputAssociation;
    }

    /**
     * Sets a new dataOutputAssociation
     *
     * @param \Bpmn\Model\DataOutputAssociation[] $dataOutputAssociation
     * @return self
     */
    public function setDataOutputAssociation(array $dataOutputAssociation)
    {
        $this->dataOutputAssociation = $dataOutputAssociation;
        return $this;
    }

    /**
     * Gets as outputSet
     *
     * @return \Bpmn\Model\OutputSet
     */
    public function getOutputSet()
    {
        return $this->outputSet;
    }

    /**
     * Sets a new outputSet
     *
     * @param \Bpmn\Model\OutputSet $outputSet
     * @return self
     */
    public function setOutputSet(\Bpmn\Model\OutputSet $outputSet)
    {
        $this->outputSet = $outputSet;
        return $this;
    }

    /**
     * Adds as eventDefinition
     *
     * @return self
     * @param \Bpmn\Model\EventDefinition $eventDefinition
     */
    public function addToEventDefinition(\Bpmn\Model\EventDefinition $eventDefinition)
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
     * @return \Bpmn\Model\EventDefinition[]
     */
    public function getEventDefinition()
    {
        return $this->eventDefinition;
    }

    /**
     * Sets a new eventDefinition
     *
     * @param \Bpmn\Model\EventDefinition[] $eventDefinition
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

