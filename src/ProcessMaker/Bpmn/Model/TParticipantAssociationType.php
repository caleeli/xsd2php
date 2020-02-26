<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TParticipantAssociationType
 *
 *
 * XSD Type: tParticipantAssociation
 */
class TParticipantAssociationType extends TBaseElementType
{

    /**
     * @property string $innerParticipantRef
     */
    private $innerParticipantRef = null;

    /**
     * @property string $outerParticipantRef
     */
    private $outerParticipantRef = null;

    /**
     * Gets as innerParticipantRef
     *
     * @return string
     */
    public function getInnerParticipantRef()
    {
        return $this->innerParticipantRef;
    }

    /**
     * Sets a new innerParticipantRef
     *
     * @param string $innerParticipantRef
     * @return self
     */
    public function setInnerParticipantRef($innerParticipantRef)
    {
        $this->innerParticipantRef = $innerParticipantRef;
        return $this;
    }

    /**
     * Gets as outerParticipantRef
     *
     * @return string
     */
    public function getOuterParticipantRef()
    {
        return $this->outerParticipantRef;
    }

    /**
     * Sets a new outerParticipantRef
     *
     * @param string $outerParticipantRef
     * @return self
     */
    public function setOuterParticipantRef($outerParticipantRef)
    {
        $this->outerParticipantRef = $outerParticipantRef;
        return $this;
    }


}

