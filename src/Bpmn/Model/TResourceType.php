<?php

namespace Bpmn\Model;

/**
 * Class representing TResourceType
 *
 *
 * XSD Type: tResource
 */
class TResourceType extends TRootElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \Bpmn\Model\ResourceParameter[] $resourceParameter
     */
    private $resourceParameter = null;

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
     * Adds as resourceParameter
     *
     * @return self
     * @param \Bpmn\Model\ResourceParameter $resourceParameter
     */
    public function addToResourceParameter(\Bpmn\Model\ResourceParameter $resourceParameter)
    {
        $this->resourceParameter[] = $resourceParameter;
        return $this;
    }

    /**
     * isset resourceParameter
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResourceParameter($index)
    {
        return isset($this->resourceParameter[$index]);
    }

    /**
     * unset resourceParameter
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResourceParameter($index)
    {
        unset($this->resourceParameter[$index]);
    }

    /**
     * Gets as resourceParameter
     *
     * @return \Bpmn\Model\ResourceParameter[]
     */
    public function getResourceParameter()
    {
        return $this->resourceParameter;
    }

    /**
     * Sets a new resourceParameter
     *
     * @param \Bpmn\Model\ResourceParameter[] $resourceParameter
     * @return self
     */
    public function setResourceParameter(array $resourceParameter)
    {
        $this->resourceParameter = $resourceParameter;
        return $this;
    }


}

