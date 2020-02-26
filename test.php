<?php
require_once './vendor/autoload.php';

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Handler\HandlerRegistryInterface;

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;

$serializerBuilder = SerializerBuilder::create();
$serializerBuilder->addMetadataDir('src/ProcessMaker/Bpmn/Model', 'ProcessMaker\\Bpmn\\Model');
$serializerBuilder->addMetadataDir('src/ProcessMaker/Bpmn/Diagram', 'ProcessMaker\\Bpmn\\Diagram');
$serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
    $serializerBuilder->addDefaultHandlers();
    $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
    $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling

    // $handler->registerSubscribingHandler(new YourhandlerHere());
});

$serializer = $serializerBuilder->setDebug(true)->build();

$xml = file_get_contents('test1.bpmn');
$dom = new DOMDocument;
$dom->loadXML($xml);
//var_dump($dom->childNodes->item(0)->childNodes->length);
// deserialize the XML into Demo\MyObject object
$object = $serializer->deserialize($xml, ProcessMaker\Bpmn\Model\Definitions::class, 'xml');

var_dump($object);
// some code ....

// serialize the Demo\MyObject back into XML
$newXml = $serializer->serialize($object, 'xml');

echo $newXml;
