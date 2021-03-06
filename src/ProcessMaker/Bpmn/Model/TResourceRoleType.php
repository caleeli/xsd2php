<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TResourceRoleType
 *
 *
 * XSD Type: tResourceRole
 */
class TResourceRoleType extends TBaseElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $resourceRef
     */
    private $resourceRef = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\ResourceParameterBinding[]
     * $resourceParameterBinding
     */
    private $resourceParameterBinding = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\ResourceAssignmentExpression
     * $resourceAssignmentExpression
     */
    private $resourceAssignmentExpression = null;

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
     * Gets as resourceRef
     *
     * @return string
     */
    public function getResourceRef()
    {
        return $this->resourceRef;
    }

    /**
     * Sets a new resourceRef
     *
     * @param string $resourceRef
     * @return self
     */
    public function setResourceRef($resourceRef)
    {
        $this->resourceRef = $resourceRef;
        return $this;
    }

    /**
     * Adds as resourceParameterBinding
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Model\ResourceParameterBinding
     * $resourceParameterBinding
     */
    public function addToResourceParameterBinding(\ProcessMaker\Bpmn\Model\ResourceParameterBinding $resourceParameterBinding)
    {
        $this->resourceParameterBinding[] = $resourceParameterBinding;
        return $this;
    }

    /**
     * isset resourceParameterBinding
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResourceParameterBinding($index)
    {
        return isset($this->resourceParameterBinding[$index]);
    }

    /**
     * unset resourceParameterBinding
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResourceParameterBinding($index)
    {
        unset($this->resourceParameterBinding[$index]);
    }

    /**
     * Gets as resourceParameterBinding
     *
     * @return \ProcessMaker\Bpmn\Model\ResourceParameterBinding[]
     */
    public function getResourceParameterBinding()
    {
        return $this->resourceParameterBinding;
    }

    /**
     * Sets a new resourceParameterBinding
     *
     * @param \ProcessMaker\Bpmn\Model\ResourceParameterBinding[]
     * $resourceParameterBinding
     * @return self
     */
    public function setResourceParameterBinding(array $resourceParameterBinding)
    {
        $this->resourceParameterBinding = $resourceParameterBinding;
        return $this;
    }

    /**
     * Gets as resourceAssignmentExpression
     *
     * @return \ProcessMaker\Bpmn\Model\ResourceAssignmentExpression
     */
    public function getResourceAssignmentExpression()
    {
        return $this->resourceAssignmentExpression;
    }

    /**
     * Sets a new resourceAssignmentExpression
     *
     * @param \ProcessMaker\Bpmn\Model\ResourceAssignmentExpression
     * $resourceAssignmentExpression
     * @return self
     */
    public function setResourceAssignmentExpression(\ProcessMaker\Bpmn\Model\ResourceAssignmentExpression $resourceAssignmentExpression)
    {
        $this->resourceAssignmentExpression = $resourceAssignmentExpression;
        return $this;
    }


}

