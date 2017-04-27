<form method="post" name="form-connect" id="form-connect">
    <?php if (!user_is_logged()) { ?>
        <label for="name-login">Nom d'utilisateur : </label><!--
        --><input type="text" name="name-login" id="name-login" value="" autofocus="autofocus"/><!--
        --><label for="password-login">Mot de passe : </label><!--
        --><input type="password" name="password-login" id="password-login" value="" autofocus="autofocus"/><!--
        --><!--
        --><input type="submit" name="login" id="submit-login" value="Se connecter" class="btn"/><!--
        --><?php } else { ?>
        <span><?= $username ?></span>
                <input type="submit" value="Déconnexion" name="logout" class="btn"/>
    <?php } ?>
</form>