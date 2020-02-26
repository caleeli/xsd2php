<?php

namespace ProcessMaker\Bpmn\Diagram;

/**
 * Class representing DiagramType
 *
 *
 * XSD Type: Diagram
 */
class DiagramType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $documentation
     */
    private $documentation = null;

    /**
     * @property float $resolution
     */
    private $resolution = null;

    /**
     * @property string $id
     */
    private $id = null;

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
     * Gets as documentation
     *
     * @return string
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * @param string $documentation
     * @return self
     */
    public function setDocumentation($documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Gets as resolution
     *
     * @return float
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Sets a new resolution
     *
     * @param float $resolution
     * @return self
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;
        return $this;
    }

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

