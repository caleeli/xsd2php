<?php

namespace ProcessMaker\Bpmn\Diagram;

/**
 * Class representing BoundsType
 *
 *
 * XSD Type: Bounds
 */
class BoundsType
{

    /**
     * @property float $x
     */
    private $x = null;

    /**
     * @property float $y
     */
    private $y = null;

    /**
     * @property float $width
     */
    private $width = null;

    /**
     * @property float $height
     */
    private $height = null;

    /**
     * Gets as x
     *
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Sets a new x
     *
     * @param float $x
     * @return self
     */
    public function setX($x)
    {
        $this->x = $x;
        return $this;
    }

    /**
     * Gets as y
     *
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Sets a new y
     *
     * @param float $y
     * @return self
     */
    public function setY($y)
    {
        $this->y = $y;
        return $this;
    }

    /**
     * Gets as width
     *
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * @param float $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Gets as height
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * @param float $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }


}

