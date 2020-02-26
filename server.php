<?php
require_once('lib/nusoap.php');

$server = new nusoap_server;

$server->configureWSDL('server', 'urn:server');

$server->wsdl->schemaTargetNamespace = 'urn:server';

$server->register('GetIDUser', 
            array('value' => 'xsd:string'),
            array('return' => 'xsd:string'),
            'urn:server',
            'urn:server#GetIDUser');


function GetIDUser($value){
    if($value['value'] == 'Good'){

        return "The value of the server poll resulted in good information";
    }
    else{

        return "The value of the server poll showed poor information";
    }
}
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>