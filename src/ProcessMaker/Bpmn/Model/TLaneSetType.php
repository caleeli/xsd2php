<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TLaneSetType
 *
 *
 * XSD Type: tLaneSet
 */
class TLaneSetType extends TBaseElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\Lane[] $lane
     */
    private $lane = null;

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
     * Adds as lane
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Model\Lane $lane
     */
    public function addToLane(\ProcessMaker\Bpmn\Model\Lane $lane)
    {
        $this->lane[] = $lane;
        return $this;
    }

    /**
     * isset lane
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLane($index)
    {
        return isset($this->lane[$index]);
    }

    /**
     * unset lane
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLane($index)
    {
        unset($this->lane[$index]);
    }

    /**
     * Gets as lane
     *
     * @return \ProcessMaker\Bpmn\Model\Lane[]
     */
    public function getLane()
    {
        return $this->lane;
    }

    /**
     * Sets a new lane
     *
     * @param \ProcessMaker\Bpmn\Model\Lane[] $lane
     * @return self
     */
    public function setLane(array $lane)
    {
        $this->lane = $lane;
        return $this;
    }


}

