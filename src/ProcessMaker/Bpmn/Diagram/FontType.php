<?php

namespace ProcessMaker\Bpmn\Diagram;

/**
 * Class representing FontType
 *
 *
 * XSD Type: Font
 */
class FontType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property float $size
     */
    private $size = null;

    /**
     * @property boolean $isBold
     */
    private $isBold = null;

    /**
     * @property boolean $isItalic
     */
    private $isItalic = null;

    /**
     * @property boolean $isUnderline
     */
    private $isUnderline = null;

    /**
     * @property boolean $isStrikeThrough
     */
    private $isStrikeThrough = null;

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
     * Gets as size
     *
     * @return float
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * @param float $size
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * Gets as isBold
     *
     * @return boolean
     */
    public function getIsBold()
    {
        return $this->isBold;
    }

    /**
     * Sets a new isBold
     *
     * @param boolean $isBold
     * @return self
     */
    public function setIsBold($isBold)
    {
        $this->isBold = $isBold;
        return $this;
    }

    /**
     * Gets as isItalic
     *
     * @return boolean
     */
    public function getIsItalic()
    {
        return $this->isItalic;
    }

    /**
     * Sets a new isItalic
     *
     * @param boolean $isItalic
     * @return self
     */
    public function setIsItalic($isItalic)
    {
        $this->isItalic = $isItalic;
        return $this;
    }

    /**
     * Gets as isUnderline
     *
     * @return boolean
     */
    public function getIsUnderline()
    {
        return $this->isUnderline;
    }

    /**
     * Sets a new isUnderline
     *
     * @param boolean $isUnderline
     * @return self
     */
    public function setIsUnderline($isUnderline)
    {
        $this->isUnderline = $isUnderline;
        return $this;
    }

    /**
     * Gets as isStrikeThrough
     *
     * @return boolean
     */
    public function getIsStrikeThrough()
    {
        return $this->isStrikeThrough;
    }

    /**
     * Sets a new isStrikeThrough
     *
     * @param boolean $isStrikeThrough
     * @return self
     */
    public function setIsStrikeThrough($isStrikeThrough)
    {
        $this->isStrikeThrough = $isStrikeThrough;
        return $this;
    }


}

