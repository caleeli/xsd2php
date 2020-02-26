<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TTextAnnotationType
 *
 *
 * XSD Type: tTextAnnotation
 */
class TTextAnnotationType extends TArtifactType
{

    /**
     * @property string $textFormat
     */
    private $textFormat = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\Text $text
     */
    private $text = null;

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

    /**
     * Gets as text
     *
     * @return \ProcessMaker\Bpmn\Model\Text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * @param \ProcessMaker\Bpmn\Model\Text $text
     * @return self
     */
    public function setText(\ProcessMaker\Bpmn\Model\Text $text)
    {
        $this->text = $text;
        return $this;
    }


}

