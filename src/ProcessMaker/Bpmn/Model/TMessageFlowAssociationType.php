<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TMessageFlowAssociationType
 *
 *
 * XSD Type: tMessageFlowAssociation
 */
class TMessageFlowAssociationType extends TBaseElementType
{

    /**
     * @property string $innerMessageFlowRef
     */
    private $innerMessageFlowRef = null;

    /**
     * @property string $outerMessageFlowRef
     */
    private $outerMessageFlowRef = null;

    /**
     * Gets as innerMessageFlowRef
     *
     * @return string
     */
    public function getInnerMessageFlowRef()
    {
        return $this->innerMessageFlowRef;
    }

    /**
     * Sets a new innerMessageFlowRef
     *
     * @param string $innerMessageFlowRef
     * @return self
     */
    public function setInnerMessageFlowRef($innerMessageFlowRef)
    {
        $this->innerMessageFlowRef = $innerMessageFlowRef;
        return $this;
    }

    /**
     * Gets as outerMessageFlowRef
     *
     * @return string
     */
    public function getOuterMessageFlowRef()
    {
        return $this->outerMessageFlowRef;
    }

    /**
     * Sets a new outerMessageFlowRef
     *
     * @param string $outerMessageFlowRef
     * @return self
     */
    public function setOuterMessageFlowRef($outerMessageFlowRef)
    {
        $this->outerMessageFlowRef = $outerMessageFlowRef;
        return $this;
    }


}

