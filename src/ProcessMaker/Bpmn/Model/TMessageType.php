<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TMessageType
 *
 *
 * XSD Type: tMessage
 */
class TMessageType extends TRootElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $itemRef
     */
    private $itemRef = null;

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
     * Gets as itemRef
     *
     * @return string
     */
    public function getItemRef()
    {
        return $this->itemRef;
    }

    /**
     * Sets a new itemRef
     *
     * @param string $itemRef
     * @return self
     */
    public function setItemRef($itemRef)
    {
        $this->itemRef = $itemRef;
        return $this;
    }


}

