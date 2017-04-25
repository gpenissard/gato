<?php
$pas_de_message = "";
$message = "";

if (!isset($_POST['comments']) && !empty($_POST['comments'])) {
 $pas_de_message = "<p>. il nexiste pas . </p>";
} else  {
    $message = set_msg($id,$message);
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title></title>
</head>
<body>
<form method="post" action="<?= $_SERVER['PHP_SELF']?>" class="message">
<fieldset>
    <div>
        <label for="comments" class="text" class="input">Message :</label>
        <textarea name="comments" id="comments" rows="2" cols="60"></textarea>
    </div>
    <div id="submit">
        <input type='submit' value="Envoyer">
    </div>
</fieldset>
</form>
</body>
</html>
