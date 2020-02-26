<?php

namespace Bpmn\Model;

/**
 * Class representing TDefinitionsType
 *
 *
 * XSD Type: tDefinitions
 */
class TDefinitionsType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $targetNamespace
     */
    private $targetNamespace = null;

    /**
     * @property string $expressionLanguage
     */
    private $expressionLanguage = null;

    /**
     * @property string $typeLanguage
     */
    private $typeLanguage = null;

    /**
     * @property string $exporter
     */
    private $exporter = null;

    /**
     * @property string $exporterVersion
     */
    private $exporterVersion = null;

    /**
     * @property \Bpmn\Model\Import[] $import
     */
    private $import = null;

    /**
     * @property \Bpmn\Model\Extension[] $extension
     */
    private $extension = null;

    /**
     * @property \Bpmn\Model\RootElement[] $rootElement
     */
    private $rootElement = null;

    /**
     * @property \Bpmn\DI\BPMNDiagram[] $bPMNDiagram
     */
    private $bPMNDiagram = null;

    /**
     * @property \Bpmn\Model\Relationship[] $relationship
     */
    private $relationship = null;

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
     * Gets as targetNamespace
     *
     * @return string
     */
    public function getTargetNamespace()
    {
        return $this->targetNamespace;
    }

    /**
     * Sets a new targetNamespace
     *
     * @param string $targetNamespace
     * @return self
     */
    public function setTargetNamespace($targetNamespace)
    {
        $this->targetNamespace = $targetNamespace;
        return $this;
    }

    /**
     * Gets as expressionLanguage
     *
     * @return string
     */
    public function getExpressionLanguage()
    {
        return $this->expressionLanguage;
    }

    /**
     * Sets a new expressionLanguage
     *
     * @param string $expressionLanguage
     * @return self
     */
    public function setExpressionLanguage($expressionLanguage)
    {
        $this->expressionLanguage = $expressionLanguage;
        return $this;
    }

    /**
     * Gets as typeLanguage
     *
     * @return string
     */
    public function getTypeLanguage()
    {
        return $this->typeLanguage;
    }

    /**
     * Sets a new typeLanguage
     *
     * @param string $typeLanguage
     * @return self
     */
    public function setTypeLanguage($typeLanguage)
    {
        $this->typeLanguage = $typeLanguage;
        return $this;
    }

    /**
     * Gets as exporter
     *
     * @return string
     */
    public function getExporter()
    {
        return $this->exporter;
    }

    /**
     * Sets a new exporter
     *
     * @param string $exporter
     * @return self
     */
    public function setExporter($exporter)
    {
        $this->exporter = $exporter;
        return $this;
    }

    /**
     * Gets as exporterVersion
     *
     * @return string
     */
    public function getExporterVersion()
    {
        return $this->exporterVersion;
    }

    /**
     * Sets a new exporterVersion
     *
     * @param string $exporterVersion
     * @return self
     */
    public function setExporterVersion($exporterVersion)
    {
        $this->exporterVersion = $exporterVersion;
        return $this;
    }

    /**
     * Adds as import
     *
     * @return self
     * @param \Bpmn\Model\Import $import
     */
    public function addToImport(\Bpmn\Model\Import $import)
    {
        $this->import[] = $import;
        return $this;
    }

    /**
     * isset import
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetImport($index)
    {
        return isset($this->import[$index]);
    }

    /**
     * unset import
     *
     * @param scalar $index
     * @return void
     */
    public function unsetImport($index)
    {
        unset($this->import[$index]);
    }

    /**
     * Gets as import
     *
     * @return \Bpmn\Model\Import[]
     */
    public function getImport()
    {
        return $this->import;
    }

    /**
     * Sets a new import
     *
     * @param \Bpmn\Model\Import[] $import
     * @return self
     */
    public function setImport(array $import)
    {
        $this->import = $import;
        return $this;
    }

    /**
     * Adds as extension
     *
     * @return self
     * @param \Bpmn\Model\Extension $extension
     */
    public function addToExtension(\Bpmn\Model\Extension $extension)
    {
        $this->extension[] = $extension;
        return $this;
    }

    /**
     * isset extension
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExtension($index)
    {
        return isset($this->extension[$index]);
    }

    /**
     * unset extension
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExtension($index)
    {
        unset($this->extension[$index]);
    }

    /**
     * Gets as extension
     *
     * @return \Bpmn\Model\Extension[]
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * @param \Bpmn\Model\Extension[] $extension
     * @return self
     */
    public function setExtension(array $extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * Adds as rootElement
     *
     * @return self
     * @param \Bpmn\Model\RootElement $rootElement
     */
    public function addToRootElement(\Bpmn\Model\RootElement $rootElement)
    {
        $this->rootElement[] = $rootElement;
        return $this;
    }

    /**
     * isset rootElement
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRootElement($index)
    {
        return isset($this->rootElement[$index]);
    }

    /**
     * unset rootElement
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRootElement($index)
    {
        unset($this->rootElement[$index]);
    }

    /**
     * Gets as rootElement
     *
     * @return \Bpmn\Model\RootElement[]
     */
    public function getRootElement()
    {
        return $this->rootElement;
    }

    /**
     * Sets a new rootElement
     *
     * @param \Bpmn\Model\RootElement[] $rootElement
     * @return self
     */
    public function setRootElement(array $rootElement)
    {
        $this->rootElement = $rootElement;
        return $this;
    }

    /**
     * Adds as bPMNDiagram
     *
     * @return self
     * @param \Bpmn\DI\BPMNDiagram $bPMNDiagram
     */
    public function addToBPMNDiagram(\Bpmn\DI\BPMNDiagram $bPMNDiagram)
    {
        $this->bPMNDiagram[] = $bPMNDiagram;
        return $this;
    }

    /**
     * isset bPMNDiagram
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBPMNDiagram($index)
    {
        return isset($this->bPMNDiagram[$index]);
    }

    /**
     * unset bPMNDiagram
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBPMNDiagram($index)
    {
        unset($this->bPMNDiagram[$index]);
    }

    /**
     * Gets as bPMNDiagram
     *
     * @return \Bpmn\DI\BPMNDiagram[]
     */
    public function getBPMNDiagram()
    {
        return $this->bPMNDiagram;
    }

    /**
     * Sets a new bPMNDiagram
     *
     * @param \Bpmn\DI\BPMNDiagram[] $bPMNDiagram
     * @return self
     */
    public function setBPMNDiagram(array $bPMNDiagram)
    {
        $this->bPMNDiagram = $bPMNDiagram;
        return $this;
    }

    /**
     * Adds as relationship
     *
     * @return self
     * @param \Bpmn\Model\Relationship $relationship
     */
    public function addToRelationship(\Bpmn\Model\Relationship $relationship)
    {
        $this->relationship[] = $relationship;
        return $this;
    }

    /**
     * isset relationship
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRelationship($index)
    {
        return isset($this->relationship[$index]);
    }

    /**
     * unset relationship
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRelationship($index)
    {
        unset($this->relationship[$index]);
    }

    /**
     * Gets as relationship
     *
     * @return \Bpmn\Model\Relationship[]
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * Sets a new relationship
     *
     * @param \Bpmn\Model\Relationship[] $relationship
     * @return self
     */
    public function setRelationship(array $relationship)
    {
        $this->relationship = $relationship;
        return $this;
    }


}

