<?php
set_msg();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title></title>
</head>
<body>
<h1>Chat</h1>
<form method="post" action="<?= $_SERVER['PHP_SELF']?>">
<fieldset>
    <div>
        <label for="comments" class="text" class="input">Message:</label>
        <textarea name="comments" id="comments" rows="2" cols="60"></textarea>
    </div>
    <div id="submit">
        <input type='submit' value="Envoyer">
    </div>
</fieldset>
</form>
</body>
</html>
