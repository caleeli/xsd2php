<?php

namespace ProcessMaker\Bpmn\Diagram;

/**
 * Class representing EdgeType
 *
 *
 * XSD Type: Edge
 */
class EdgeType extends DiagramElementType
{

    /**
     * @property \ProcessMaker\Bpmn\Diagram\PointType[] $waypoint
     */
    private $waypoint = null;

    /**
     * Adds as waypoint
     *
     * @return self
     * @param \ProcessMaker\Bpmn\Diagram\PointType $waypoint
     */
    public function addToWaypoint(\ProcessMaker\Bpmn\Diagram\PointType $waypoint)
    {
        $this->waypoint[] = $waypoint;
        return $this;
    }

    /**
     * isset waypoint
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWaypoint($index)
    {
        return isset($this->waypoint[$index]);
    }

    /**
     * unset waypoint
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWaypoint($index)
    {
        unset($this->waypoint[$index]);
    }

    /**
     * Gets as waypoint
     *
     * @return \ProcessMaker\Bpmn\Diagram\PointType[]
     */
    public function getWaypoint()
    {
        return $this->waypoint;
    }

    /**
     * Sets a new waypoint
     *
     * @param \ProcessMaker\Bpmn\Diagram\PointType[] $waypoint
     * @return self
     */
    public function setWaypoint(array $waypoint)
    {
        $this->waypoint = $waypoint;
        return $this;
    }


}

