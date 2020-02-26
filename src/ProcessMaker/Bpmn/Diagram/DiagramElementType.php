<?php

namespace ProcessMaker\Bpmn\Diagram;

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
     * @property \ProcessMaker\Bpmn\Diagram\DiagramElementType\ExtensionAType $extension
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
     * @return \ProcessMaker\Bpmn\Diagram\DiagramElementType\ExtensionAType
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * @param \ProcessMaker\Bpmn\Diagram\DiagramElementType\ExtensionAType $extension
     * @return self
     */
    public function setExtension(\ProcessMaker\Bpmn\Diagram\DiagramElementType\ExtensionAType $extension)
    {
        $this->extension = $extension;
        return $this;
    }


}

