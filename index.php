<?php

if(!isset($_SESSION))
{
    session_start();
}

function user_authenticate($user, $pass) {
    $users = array(
        'Elorri' => 'elo123',
        'Kevin' => 'kev123',
        'Sonya' => 'son123',
        'Carolina' => 'car123',
        'Virginie' => 'vir123',
        'Gilles' => 'gil123',
    );
    return array_key_exists($user, $users) && ($users[$user] == $pass);
}

/**
 * Indique que l'utilisateur est connecté (son username est en session et sa valeur n'est pas vide
 * @return bool
 */
function user_is_logged() {
    return array_key_exists('name-login', $_SESSION) && ( ! empty($_SESSION['name-login']));
}

//var_dump($_POST);
$username = '';
$password = '';
if (array_key_exists('login', $_POST)
    && array_key_exists('name-login', $_POST)
    && array_key_exists('password-login', $_POST)) {
    $username = trim($_POST['name-login']);
    $password = trim($_POST['password-login']);
    if ((strlen($username) > 0)
        && (strlen($password) > 0)
        && user_authenticate($username, $password)) { // Validation sommaire puis authentification
        // Utilisateur est authentifié
        $_SESSION['name-login'] = $username;
    }
    else{
        echo "Veuillez entrer un nom d'utilisateur et un mot de passe valide !";
    }
} else if (user_is_logged() && array_key_exists('logout', $_POST)){ // Demande de déconnexion
    unset($_SESSION['name-login']); // Supprimer l'élément à la clef 'username' dans la session
}?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title></title>
</head>
<body>
<form method="post" name="form-connect" id="form-connect">
    <?php if (!user_is_logged()) { ?>
        <label for="name-login">Nom d'utilisateur : </label><!--
        --><input type="text" name="name-login" id="name-login" value="" autofocus="autofocus"/><!--
        --><label for="password-login">Mot de passe : </label><!--
        --><input type="password" name="password-login" id="password-login" value="" autofocus="autofocus"/><!--
        --><!--
        --><input type="submit" name="login" id="submit-login" value="Se connecter" class="btn"/><!--
        --><?php } else { ?>
        <span><?= $_SESSION['name-login'] ?></span>
<!--        <input type="submit" value="Déconnexion" name="logout" class="btn"/>-->
    <?php } ?>
</form>


</body>
</html>