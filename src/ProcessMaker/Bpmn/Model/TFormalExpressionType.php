<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TFormalExpressionType
 *
 *
 * XSD Type: tFormalExpression
 */
class TFormalExpressionType extends TExpressionType
{

    /**
     * @property string $language
     */
    private $language = null;

    /**
     * @property string $evaluatesToTypeRef
     */
    private $evaluatesToTypeRef = null;

    /**
     * Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as evaluatesToTypeRef
     *
     * @return string
     */
    public function getEvaluatesToTypeRef()
    {
        return $this->evaluatesToTypeRef;
    }

    /**
     * Sets a new evaluatesToTypeRef
     *
     * @param string $evaluatesToTypeRef
     * @return self
     */
    public function setEvaluatesToTypeRef($evaluatesToTypeRef)
    {
        $this->evaluatesToTypeRef = $evaluatesToTypeRef;
        return $this;
    }


}

