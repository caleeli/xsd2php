<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TCorrelationPropertyBindingType
 *
 *
 * XSD Type: tCorrelationPropertyBinding
 */
class TCorrelationPropertyBindingType extends TBaseElementType
{

    /**
     * @property string $correlationPropertyRef
     */
    private $correlationPropertyRef = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\TFormalExpressionType $dataPath
     */
    private $dataPath = null;

    /**
     * Gets as correlationPropertyRef
     *
     * @return string
     */
    public function getCorrelationPropertyRef()
    {
        return $this->correlationPropertyRef;
    }

    /**
     * Sets a new correlationPropertyRef
     *
     * @param string $correlationPropertyRef
     * @return self
     */
    public function setCorrelationPropertyRef($correlationPropertyRef)
    {
        $this->correlationPropertyRef = $correlationPropertyRef;
        return $this;
    }

    /**
     * Gets as dataPath
     *
     * @return \ProcessMaker\Bpmn\Model\TFormalExpressionType
     */
    public function getDataPath()
    {
        return $this->dataPath;
    }

    /**
     * Sets a new dataPath
     *
     * @param \ProcessMaker\Bpmn\Model\TFormalExpressionType $dataPath
     * @return self
     */
    public function setDataPath(\ProcessMaker\Bpmn\Model\TFormalExpressionType $dataPath)
    {
        $this->dataPath = $dataPath;
        return $this;
    }


}

