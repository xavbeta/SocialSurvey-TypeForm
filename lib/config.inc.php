<?php
/**
 * Created by PhpStorm.
 * User: saver
 * Date: 24/05/2017
 * Time: 11:30
 */

// SETUP HERE
define( 'DB_USER', 'openurbi90850' );
define( 'DB_PASSWORD', 'MsWCiG%KbteY' );
define( 'DB_NAME', 'openurbi90850' );
define( 'DB_HOST', 'sql.openurbino.it' );
define( 'DB_TABLE', 'fbdata' );

define( 'TYPEFORM_SURVEY_BASEURL', 'https://dlpswr.typeform.com/to/VR4vIg?fb_id=%s' );
define( 'TYPEFORM_SURVEY_IFRAME',   '<iframe id="typeform-full" width="100%" height="100%" frameborder="0" src="%s&embed=full"></iframe>' );


function send_success($data){
    header('Content-Type: application/json');
    echo json_encode($data);
}

function send_error($data, $err_code = 400){
    //header('HTTP', true, $err_code);
    //header('Content-Type: application/json');

    $res = $data;
    if(!is_array($data)){
        $res = array('status' => 'error', 'message' => $data);
    }

    echo json_encode($res);
}

