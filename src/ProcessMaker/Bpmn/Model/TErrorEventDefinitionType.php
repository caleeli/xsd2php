<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TErrorEventDefinitionType
 *
 *
 * XSD Type: tErrorEventDefinition
 */
class TErrorEventDefinitionType extends TEventDefinitionType
{

    /**
     * @property string $errorRef
     */
    private $errorRef = null;

    /**
     * Gets as errorRef
     *
     * @return string
     */
    public function getErrorRef()
    {
        return $this->errorRef;
    }

    /**
     * Sets a new errorRef
     *
     * @param string $errorRef
     * @return self
     */
    public function setErrorRef($errorRef)
    {
        $this->errorRef = $errorRef;
        return $this;
    }


}

