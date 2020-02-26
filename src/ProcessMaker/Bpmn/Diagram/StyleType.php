<?php

namespace ProcessMaker\Bpmn\Diagram;

/**
 * Class representing StyleType
 *
 *
 * XSD Type: Style
 */
class StyleType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }


}

