<?php

namespace Bpmn\Model;

/**
 * Class representing TMessageEventDefinitionType
 *
 *
 * XSD Type: tMessageEventDefinition
 */
class TMessageEventDefinitionType extends TEventDefinitionType
{

    /**
     * @property string $messageRef
     */
    private $messageRef = null;

    /**
     * @property string $operationRef
     */
    private $operationRef = null;

    /**
     * Gets as messageRef
     *
     * @return string
     */
    public function getMessageRef()
    {
        return $this->messageRef;
    }

    /**
     * Sets a new messageRef
     *
     * @param string $messageRef
     * @return self
     */
    public function setMessageRef($messageRef)
    {
        $this->messageRef = $messageRef;
        return $this;
    }

    /**
     * Gets as operationRef
     *
     * @return string
     */
    public function getOperationRef()
    {
        return $this->operationRef;
    }

    /**
     * Sets a new operationRef
     *
     * @param string $operationRef
     * @return self
     */
    public function setOperationRef($operationRef)
    {
        $this->operationRef = $operationRef;
        return $this;
    }


}

