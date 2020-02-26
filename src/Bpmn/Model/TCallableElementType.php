<?php

namespace Bpmn\Model;

/**
 * Class representing TCallableElementType
 *
 *
 * XSD Type: tCallableElement
 */
class TCallableElementType extends TRootElementType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string[] $supportedInterfaceRef
     */
    private $supportedInterfaceRef = null;

    /**
     * @property \Bpmn\Model\IoSpecification $ioSpecification
     */
    private $ioSpecification = null;

    /**
     * @property \Bpmn\Model\IoBinding[] $ioBinding
     */
    private $ioBinding = null;

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
     * Adds as supportedInterfaceRef
     *
     * @return self
     * @param string $supportedInterfaceRef
     */
    public function addToSupportedInterfaceRef($supportedInterfaceRef)
    {
        $this->supportedInterfaceRef[] = $supportedInterfaceRef;
        return $this;
    }

    /**
     * isset supportedInterfaceRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSupportedInterfaceRef($index)
    {
        return isset($this->supportedInterfaceRef[$index]);
    }

    /**
     * unset supportedInterfaceRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSupportedInterfaceRef($index)
    {
        unset($this->supportedInterfaceRef[$index]);
    }

    /**
     * Gets as supportedInterfaceRef
     *
     * @return string[]
     */
    public function getSupportedInterfaceRef()
    {
        return $this->supportedInterfaceRef;
    }

    /**
     * Sets a new supportedInterfaceRef
     *
     * @param string[] $supportedInterfaceRef
     * @return self
     */
    public function setSupportedInterfaceRef(array $supportedInterfaceRef)
    {
        $this->supportedInterfaceRef = $supportedInterfaceRef;
        return $this;
    }

    /**
     * Gets as ioSpecification
     *
     * @return \Bpmn\Model\IoSpecification
     */
    public function getIoSpecification()
    {
        return $this->ioSpecification;
    }

    /**
     * Sets a new ioSpecification
     *
     * @param \Bpmn\Model\IoSpecification $ioSpecification
     * @return self
     */
    public function setIoSpecification(\Bpmn\Model\IoSpecification $ioSpecification)
    {
        $this->ioSpecification = $ioSpecification;
        return $this;
    }

    /**
     * Adds as ioBinding
     *
     * @return self
     * @param \Bpmn\Model\IoBinding $ioBinding
     */
    public function addToIoBinding(\Bpmn\Model\IoBinding $ioBinding)
    {
        $this->ioBinding[] = $ioBinding;
        return $this;
    }

    /**
     * isset ioBinding
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetIoBinding($index)
    {
        return isset($this->ioBinding[$index]);
    }

    /**
     * unset ioBinding
     *
     * @param scalar $index
     * @return void
     */
    public function unsetIoBinding($index)
    {
        unset($this->ioBinding[$index]);
    }

    /**
     * Gets as ioBinding
     *
     * @return \Bpmn\Model\IoBinding[]
     */
    public function getIoBinding()
    {
        return $this->ioBinding;
    }

    /**
     * Sets a new ioBinding
     *
     * @param \Bpmn\Model\IoBinding[] $ioBinding
     * @return self
     */
    public function setIoBinding(array $ioBinding)
    {
        $this->ioBinding = $ioBinding;
        return $this;
    }


}

