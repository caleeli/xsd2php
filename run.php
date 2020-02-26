<?php
require_once './vendor/autoload.php';

$files = '*.xsd';
$map = [
    'http://www.omg.org/spec/BPMN/20100524/MODEL' => 'ProcessMaker/Bpmn/Model',
    'http://www.omg.org/spec/BPMN/20100524/DI' => 'ProcessMaker/Bpmn/Diagram',
    'http://www.omg.org/spec/DD/20100524/DC' => 'ProcessMaker/Bpmn/Diagram',
    'http://www.omg.org/spec/DD/20100524/DI' => 'ProcessMaker/Bpmn/Diagram',
];
$aliasMap = [
    //'http://www.omg.org/spec/BPMN/20100524/MODEL;tInterface' => 'ProcessMaker/Bpmn/Model/Interface2',
];
$nsMap = '';
foreach ($map as $xslNs => $phpNs) {
    $phpPath = 'src/'.$phpNs;
    $nsMap.=" --ns-map='$xslNs;$phpNs/' --ns-dest='$phpNs/;$phpPath'";
    if (!file_exists($phpPath)) mkdir($phpPath, 0777, true);
}
foreach($aliasMap as $source => $aliasClass) {
    $nsMap.=" --alias-map='$source;$aliasClass'";
}
$cmd = "vendor/bin/xsd2php convert:php $files "
    .$nsMap
//    . " --alias-map='http://www.opentravel.org/OTA/2003/05;CustomOTADateTimeFormat;Vendor/Project/CustomDateClass'"
;

passthru($cmd);

$cmd = "vendor/bin/xsd2php convert:jms-yaml $files "
    .$nsMap
//    . " --alias-map='http://www.opentravel.org/OTA/2003/05;CustomOTADateTimeFormat;Vendor/Project/CustomDateClass'"
;

passthru($cmd);
