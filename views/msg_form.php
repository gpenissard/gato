<?php
if (array_key_exists('mag', $_POST)) {
    $url = str_replace('mag_form.php', 'mur.php', $_SERVER['PHP_SELF']);
// Ajout du paramètre
    $url .= '?msg=' . urlencode($msg);
//    var_dump($url);
    header('Location:' . $url);
    exit;
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
