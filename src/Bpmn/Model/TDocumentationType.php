<?php

namespace Bpmn\Model;

/**
 * Class representing TDocumentationType
 *
 *
 * XSD Type: tDocumentation
 */
class TDocumentationType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string $textFormat
     */
    private $textFormat = null;

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
     * Gets as textFormat
     *
     * @return string
     */
    public function getTextFormat()
    {
        return $this->textFormat;
    }

    /**
     * Sets a new textFormat
     *
     * @param string $textFormat
     * @return self
     */
    public function setTextFormat($textFormat)
    {
        $this->textFormat = $textFormat;
        return $this;
    }


}

