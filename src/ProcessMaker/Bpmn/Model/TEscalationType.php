<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TEscalationType
 *
 *
 * XSD Type: tEscalation
 */
class TEscalationType extends TRootElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $escalationCode
     */
    private $escalationCode = null;

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
     * Gets as escalationCode
     *
     * @return string
     */
    public function getEscalationCode()
    {
        return $this->escalationCode;
    }

    /**
     * Sets a new escalationCode
     *
     * @param string $escalationCode
     * @return self
     */
    public function setEscalationCode($escalationCode)
    {
        $this->escalationCode = $escalationCode;
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

