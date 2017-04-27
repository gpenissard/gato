<?php
require_once ("common/defines.php");
require_once ("db/conn.php");
require_once ("_login.php");
$page_name = "Index";
require_once ("views/page_top.php");

if (user_is_logged()){
    require_once ("views/msg_form.php");
}

require_once ('views/afficher_message.php');

require_once ("views/page_bottom.php")
?>
