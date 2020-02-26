<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TScriptTaskType
 *
 *
 * XSD Type: tScriptTask
 */
class TScriptTaskType extends TTaskType
{

    /**
     * @property string $scriptFormat
     */
    private $scriptFormat = null;

    /**
     * @property \ProcessMaker\Bpmn\Model\Script $script
     */
    private $script = null;

    /**
     * Gets as scriptFormat
     *
     * @return string
     */
    public function getScriptFormat()
    {
        return $this->scriptFormat;
    }

    /**
     * Sets a new scriptFormat
     *
     * @param string $scriptFormat
     * @return self
     */
    public function setScriptFormat($scriptFormat)
    {
        $this->scriptFormat = $scriptFormat;
        return $this;
    }

    /**
     * Gets as script
     *
     * @return \ProcessMaker\Bpmn\Model\Script
     */
    public function getScript()
    {
        return $this->script;
    }

    /**
     * Sets a new script
     *
     * @param \ProcessMaker\Bpmn\Model\Script $script
     * @return self
     */
    public function setScript(\ProcessMaker\Bpmn\Model\Script $script)
    {
        $this->script = $script;
        return $this;
    }


}

