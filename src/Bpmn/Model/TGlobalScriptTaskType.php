<?php

namespace Bpmn\Model;

/**
 * Class representing TGlobalScriptTaskType
 *
 *
 * XSD Type: tGlobalScriptTask
 */
class TGlobalScriptTaskType extends TGlobalTaskType
{

    /**
     * @property string $scriptLanguage
     */
    private $scriptLanguage = null;

    /**
     * @property \Bpmn\Model\Script $script
     */
    private $script = null;

    /**
     * Gets as scriptLanguage
     *
     * @return string
     */
    public function getScriptLanguage()
    {
        return $this->scriptLanguage;
    }

    /**
     * Sets a new scriptLanguage
     *
     * @param string $scriptLanguage
     * @return self
     */
    public function setScriptLanguage($scriptLanguage)
    {
        $this->scriptLanguage = $scriptLanguage;
        return $this;
    }

    /**
     * Gets as script
     *
     * @return \Bpmn\Model\Script
     */
    public function getScript()
    {
        return $this->script;
    }

    /**
     * Sets a new script
     *
     * @param \Bpmn\Model\Script $script
     * @return self
     */
    public function setScript(\Bpmn\Model\Script $script)
    {
        $this->script = $script;
        return $this;
    }


}

