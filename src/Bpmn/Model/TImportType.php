<?php

namespace Bpmn\Model;

/**
 * Class representing TImportType
 *
 *
 * XSD Type: tImport
 */
class TImportType
{

    /**
     * @property string $namespace
     */
    private $namespace = null;

    /**
     * @property string $location
     */
    private $location = null;

    /**
     * @property string $importType
     */
    private $importType = null;

    /**
     * Gets as namespace
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Sets a new namespace
     *
     * @param string $namespace
     * @return self
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }

    /**
     * Gets as location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as importType
     *
     * @return string
     */
    public function getImportType()
    {
        return $this->importType;
    }

    /**
     * Sets a new importType
     *
     * @param string $importType
     * @return self
     */
    public function setImportType($importType)
    {
        $this->importType = $importType;
        return $this;
    }


}

