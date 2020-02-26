<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TDataStateType
 *
 *
 * XSD Type: tDataState
 */
class TDataStateType extends TBaseElementType
{

    /**
     * @property string $name
     */
    private $name = null;

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


}

