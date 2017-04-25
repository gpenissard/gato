<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= SITE_NAME.' - '.$page_name; ?></title>
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<div id="container">

   <?php if (user_is_logged()){
    require_once ("msg_form.php");

    get_msg();

    }?>
