<?php

namespace DD\DI;

/**
 * Class representing DiagramElementType
 *
 *
 * XSD Type: DiagramElement
 */
class DiagramElementType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \DD\DI\DiagramElementType\ExtensionAType $extension
     */
    private $extension = null;

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

    /**
     * Gets as extension
     *
     * @return \DD\DI\DiagramElementType\ExtensionAType
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * @param \DD\DI\DiagramElementType\ExtensionAType $extension
     * @return self
     */
    public function setExtension(\DD\DI\DiagramElementType\ExtensionAType $extension)
    {
        $this->extension = $extension;
        return $this;
    }


}

