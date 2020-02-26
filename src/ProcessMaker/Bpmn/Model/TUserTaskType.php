<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TUserTaskType
 *
 *
 * XSD Type: tUserTask
 */
class TUserTaskType extends TTaskType
{

    /**
     * @property \ProcessMaker\Bpmn\Model\TImplementationType $implementation
     */
    private $implementation = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\Rendering[] $rendering
     */
    private $rendering = null;

    /**
     * Gets as implementation
     *
     * @return \ProcessMaker\Bpmn\Model\TImplementationType
     */
    public function getImplementation()
    {
        return $this->implementation;
    }

    /**
     * Sets a new implementation
     *
     * @param \ProcessMaker\Bpmn\Model\TImplementationType $implementation
     * @return self
     */
    public function setImplementation(\ProcessMaker\Bpmn\Model\TImplementationType $implementation)
    {
        $this->implementation = $implementation;
        return $this;
    }

    /**
     * Adds as rendering
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Model\Rendering $rendering
     */
    public function addToRendering(\ProcessMaker\Bpmn\Model\Rendering $rendering)
    {
        $this->rendering[] = $rendering;
        return $this;
    }

    /**
     * isset rendering
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRendering($index)
    {
        return isset($this->rendering[$index]);
    }

    /**
     * unset rendering
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRendering($index)
    {
        unset($this->rendering[$index]);
    }

    /**
     * Gets as rendering
     *
     * @return \ProcessMaker\Bpmn\Model\Rendering[]
     */
    public function getRendering()
    {
        return $this->rendering;
    }

    /**
     * Sets a new rendering
     *
     * @param \ProcessMaker\Bpmn\Model\Rendering[] $rendering
     * @return self
     */
    public function setRendering(array $rendering)
    {
        $this->rendering = $rendering;
        return $this;
    }


}

