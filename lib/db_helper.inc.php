<?php
/**
 * Created by PhpStorm.
 * User: saver
 * Date: 24/05/2017
 * Time: 11:37
 */

DB::$user = DB_USER;
DB::$password = DB_PASSWORD;
DB::$dbName = DB_NAME;
DB::$host = DB_HOST;
//DB::debugMode(true);

function insertFBData($fb_id, $fb_data) {

    DB::insert('fbdata', array(
        'id' => $fb_id,
        'data' => $fb_data
    ));
}

function userHasAlreadyResponded($fb_id) {

    DB::query("SELECT * FROM fbdata WHERE id=%s", $fb_id);
    $counter = DB::count();

    return ($counter > 0);
}