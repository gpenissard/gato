<?php
$message = "";

if (isset($_POST['comments']) && !empty($_POST['comments'])) {
    $message = set_msg($user_id,$msg);
}
?>

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

