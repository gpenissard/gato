<?php
/* set out document type to text/javascript instead of text/html */
header("Content-type: text/javascript");
header("Access-Control-Allow-Origin: *");

require_once '../db/conn.php';
$messages = get_msg();
foreach ($messages as $msg) {

}
echo json_encode();