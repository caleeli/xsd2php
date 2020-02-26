<?php

namespace DD\DI;

/**
 * Class representing ShapeType
 *
 *
 * XSD Type: Shape
 */
class ShapeType extends NodeType
{

    /**
     * @property \DD\DC\Bounds $bounds
     */
    private $bounds = null;

    /**
     * Gets as bounds
     *
     * @return \DD\DC\Bounds
     */
    public function getBounds()
    {
        return $this->bounds;
    }

    /**
     * Sets a new bounds
     *
     * @param \DD\DC\Bounds $bounds
     * @return self
     */
    public function setBounds(\DD\DC\Bounds $bounds)
    {
        $this->bounds = $bounds;
        return $this;
    }


}

