<?php

namespace Bpmn\Model;

/**
 * Class representing TCorrelationPropertyRetrievalExpressionType
 *
 *
 * XSD Type: tCorrelationPropertyRetrievalExpression
 */
class TCorrelationPropertyRetrievalExpressionType extends TBaseElementType
{

    /**
     * @property string $messageRef
     */
    private $messageRef = null;

    /**
     * @property \Bpmn\Model\TFormalExpressionType $messagePath
     */
    private $messagePath = null;

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
     * Gets as messagePath
     *
     * @return \Bpmn\Model\TFormalExpressionType
     */
    public function getMessagePath()
    {
        return $this->messagePath;
    }

    /**
     * Sets a new messagePath
     *
     * @param \Bpmn\Model\TFormalExpressionType $messagePath
     * @return self
     */
    public function setMessagePath(\Bpmn\Model\TFormalExpressionType $messagePath)
    {
        $this->messagePath = $messagePath;
        return $this;
    }


}

