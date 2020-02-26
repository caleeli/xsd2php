<?php

namespace DD\DI;

/**
 * Class representing EdgeType
 *
 *
 * XSD Type: Edge
 */
class EdgeType extends DiagramElementType
{

    /**
     * @property \DD\DC\PointType[] $waypoint
     */
    private $waypoint = null;

    /**
     * Adds as waypoint
     *
     * @return self
     * @param \DD\DC\PointType $waypoint
     */
    public function addToWaypoint(\DD\DC\PointType $waypoint)
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
     * @return \DD\DC\PointType[]
     */
    public function getWaypoint()
    {
        return $this->waypoint;
    }

    /**
     * Sets a new waypoint
     *
     * @param \DD\DC\PointType[] $waypoint
     * @return self
     */
    public function setWaypoint(array $waypoint)
    {
        $this->waypoint = $waypoint;
        return $this;
    }


}

