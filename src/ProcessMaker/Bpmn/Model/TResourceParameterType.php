<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TResourceParameterType
 *
 *
 * XSD Type: tResourceParameter
 */
class TResourceParameterType extends TBaseElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property boolean $isRequired
     */
    private $isRequired = null;

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
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as isRequired
     *
     * @return boolean
     */
    public function getIsRequired()
    {
        return $this->isRequired;
    }

    /**
     * Sets a new isRequired
     *
     * @param boolean $isRequired
     * @return self
     */
    public function setIsRequired($isRequired)
    {
        $this->isRequired = $isRequired;
        return $this;
    }


}

