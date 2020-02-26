<?php

namespace Bpmn\Model;

/**
 * Class representing TPartnerRoleType
 *
 *
 * XSD Type: tPartnerRole
 */
class TPartnerRoleType extends TRootElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string[] $participantRef
     */
    private $participantRef = null;

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
     * Adds as participantRef
     *
     * @return self
     * @param string $participantRef
     */
    public function addToParticipantRef($participantRef)
    {
        $this->participantRef[] = $participantRef;
        return $this;
    }

    /**
     * isset participantRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetParticipantRef($index)
    {
        return isset($this->participantRef[$index]);
    }

    /**
     * unset participantRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetParticipantRef($index)
    {
        unset($this->participantRef[$index]);
    }

    /**
     * Gets as participantRef
     *
     * @return string[]
     */
    public function getParticipantRef()
    {
        return $this->participantRef;
    }

    /**
     * Sets a new participantRef
     *
     * @param string[] $participantRef
     * @return self
     */
    public function setParticipantRef(array $participantRef)
    {
        $this->participantRef = $participantRef;
        return $this;
    }


}

