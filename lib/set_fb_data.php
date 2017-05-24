<?php
/**
 * Created by PhpStorm.
 * User: saver
 * Date: 24/05/2017
 * Time: 11:29
 */
include_once '../vendor/autoload.php';
require_once 'config.inc.php';
require_once 'db_helper.inc.php';


$fb_id = $_POST['id'];
$fb_data = $_POST['data'];

//echo "FBID = ".$fb_id.PHP_EOL;
//echo "FBDATA length = ".strlen($fb_data).PHP_EOL;


if($fb_id == null){
    send_error("No proper Facebook ID received");
}

if($fb_data == null){
    send_error("No proper Facebook DATA received");
}

$response = array(
    'url' => sprintf(TYPEFORM_SURVEY_BASEURL,$fb_id),
    'completed' => userHasAlreadyResponded($fb_id)
);

$response['iframe'] = sprintf(TYPEFORM_SURVEY_IFRAME,$response['url']);

insertFBData($fb_id, $fb_data);

send_success($response);


