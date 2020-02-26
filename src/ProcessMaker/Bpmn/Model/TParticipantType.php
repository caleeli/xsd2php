<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TParticipantType
 *
 *
 * XSD Type: tParticipant
 */
class TParticipantType extends TBaseElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $processRef
     */
    private $processRef = null;

    /**
     * @property string[] $interfaceRef
     */
    private $interfaceRef = null;

    /**
     * @property string[] $endPointRef
     */
    private $endPointRef = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\ParticipantMultiplicity
     * $participantMultiplicity
     */
    private $participantMultiplicity = null;

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
     * Gets as processRef
     *
     * @return string
     */
    public function getProcessRef()
    {
        return $this->processRef;
    }

    /**
     * Sets a new processRef
     *
     * @param string $processRef
     * @return self
     */
    public function setProcessRef($processRef)
    {
        $this->processRef = $processRef;
        return $this;
    }

    /**
     * Adds as interfaceRef
     *
     * @return self
     * @param string $interfaceRef
     */
    public function addToInterfaceRef($interfaceRef)
    {
        $this->interfaceRef[] = $interfaceRef;
        return $this;
    }

    /**
     * isset interfaceRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInterfaceRef($index)
    {
        return isset($this->interfaceRef[$index]);
    }

    /**
     * unset interfaceRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInterfaceRef($index)
    {
        unset($this->interfaceRef[$index]);
    }

    /**
     * Gets as interfaceRef
     *
     * @return string[]
     */
    public function getInterfaceRef()
    {
        return $this->interfaceRef;
    }

    /**
     * Sets a new interfaceRef
     *
     * @param string[] $interfaceRef
     * @return self
     */
    public function setInterfaceRef(array $interfaceRef)
    {
        $this->interfaceRef = $interfaceRef;
        return $this;
    }

    /**
     * Adds as endPointRef
     *
     * @return self
     * @param string $endPointRef
     */
    public function addToEndPointRef($endPointRef)
    {
        $this->endPointRef[] = $endPointRef;
        return $this;
    }

    /**
     * isset endPointRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEndPointRef($index)
    {
        return isset($this->endPointRef[$index]);
    }

    /**
     * unset endPointRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEndPointRef($index)
    {
        unset($this->endPointRef[$index]);
    }

    /**
     * Gets as endPointRef
     *
     * @return string[]
     */
    public function getEndPointRef()
    {
        return $this->endPointRef;
    }

    /**
     * Sets a new endPointRef
     *
     * @param string[] $endPointRef
     * @return self
     */
    public function setEndPointRef(array $endPointRef)
    {
        $this->endPointRef = $endPointRef;
        return $this;
    }

    /**
     * Gets as participantMultiplicity
     *
     * @return \ProcessMaker\Bpmn\Model\ParticipantMultiplicity
     */
    public function getParticipantMultiplicity()
    {
        return $this->participantMultiplicity;
    }

    /**
     * Sets a new participantMultiplicity
     *
     * @param \ProcessMaker\Bpmn\Model\ParticipantMultiplicity $participantMultiplicity
     * @return self
     */
    public function setParticipantMultiplicity(\ProcessMaker\Bpmn\Model\ParticipantMultiplicity $participantMultiplicity)
    {
        $this->participantMultiplicity = $participantMultiplicity;
        return $this;
    }


}

