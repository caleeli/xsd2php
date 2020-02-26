<?php

namespace Bpmn\Model;

/**
 * Class representing TEscalationEventDefinitionType
 *
 *
 * XSD Type: tEscalationEventDefinition
 */
class TEscalationEventDefinitionType extends TEventDefinitionType
{

    /**
     * @property string $escalationRef
     */
    private $escalationRef = null;

    /**
     * Gets as escalationRef
     *
     * @return string
     */
    public function getEscalationRef()
    {
        return $this->escalationRef;
    }

    /**
     * Sets a new escalationRef
     *
     * @param string $escalationRef
     * @return self
     */
    public function setEscalationRef($escalationRef)
    {
        $this->escalationRef = $escalationRef;
        return $this;
    }


}

