<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TGlobalChoreographyTaskType
 *
 *
 * XSD Type: tGlobalChoreographyTask
 */
class TGlobalChoreographyTaskType extends TChoreographyType
{

    /**
     * @property string $initiatingParticipantRef
     */
    private $initiatingParticipantRef = null;

    /**
     * Gets as initiatingParticipantRef
     *
     * @return string
     */
    public function getInitiatingParticipantRef()
    {
        return $this->initiatingParticipantRef;
    }

    /**
     * Sets a new initiatingParticipantRef
     *
     * @param string $initiatingParticipantRef
     * @return self
     */
    public function setInitiatingParticipantRef($initiatingParticipantRef)
    {
        $this->initiatingParticipantRef = $initiatingParticipantRef;
        return $this;
    }


}

