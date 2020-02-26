<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TGlobalTaskType
 *
 *
 * XSD Type: tGlobalTask
 */
class TGlobalTaskType extends TCallableElementType
{

    /**
     * @property \ProcessMaker\Bpmn\Model\ResourceRole[] $resourceRole
     */
    private $resourceRole = null;

    /**
     * Adds as resourceRole
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Model\ResourceRole $resourceRole
     */
    public function addToResourceRole(\ProcessMaker\Bpmn\Model\ResourceRole $resourceRole)
    {
        $this->resourceRole[] = $resourceRole;
        return $this;
    }

    /**
     * isset resourceRole
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResourceRole($index)
    {
        return isset($this->resourceRole[$index]);
    }

    /**
     * unset resourceRole
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResourceRole($index)
    {
        unset($this->resourceRole[$index]);
    }

    /**
     * Gets as resourceRole
     *
     * @return \ProcessMaker\Bpmn\Model\ResourceRole[]
     */
    public function getResourceRole()
    {
        return $this->resourceRole;
    }

    /**
     * Sets a new resourceRole
     *
     * @param \ProcessMaker\Bpmn\Model\ResourceRole[] $resourceRole
     * @return self
     */
    public function setResourceRole(array $resourceRole)
    {
        $this->resourceRole = $resourceRole;
        return $this;
    }


}

