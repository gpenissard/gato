<?php

$user_id = null; $username = "";

if(!isset($_SESSION))
{
    session_start();
}

function get_users(){
    return array(
        '1' => array(
            'username' => 'Elorri',
            'password' => 'elo123',
        ),
        '2' => array(
            'username' => 'Kevin',
            'password' => 'kev123',
        ),
        '3' => array(
            'username' => 'Sonya',
            'password' => 'son123',
        ),
        '4' => array(
            'username' => 'Carolina',
            'password' => 'car123',
        ),
        '5' => array(
            'username' => 'Virginie',
            'password' => 'vir123',
        ),
        '6' => array(
            'username' => 'Gilles',
            'password' => 'gil123',
        ),
    );
}

function user_authenticate($username, $pass) {
    $users = get_users();

    $result = false;
    foreach($users as $id => $u){
       if($u["username"] ==$username && $u["password"] == $pass){
           $result = $id;
       }

    }

return $result;
}




/**
 * Indique que l'utilisateur est connecté (son username est en session et sa valeur n'est pas vide
 * @return bool
 */
function user_is_logged() {
    global $user_id,  $username;

    $result = array_key_exists('userid', $_SESSION);
    if ($result){
        $user_id = $_SESSION["userid"];
        $username =  get_users()[$user_id]["username"];
    }

    return array_key_exists('userid', $_SESSION);
}

//var_dump($_POST);

//var_dump($user_id);

$password = '';
if (array_key_exists('login', $_POST)
    && array_key_exists('name-login', $_POST)
    && array_key_exists('password-login', $_POST)) {
    $username = trim($_POST['name-login']);
    $password = trim($_POST['password-login']);
    if ((strlen($username) > 0)
        && (strlen($password) > 0)
        && $user_id = user_authenticate($username, $password)) { // Validation sommaire puis authentification
        // Utilisateur est authentifié
        $_SESSION['userid'] = $user_id;
      //  var_dump($user_id);
    }
    else{
        ;
    }
} else if (user_is_logged() && array_key_exists('logout', $_POST)){ // Demande de déconnexion
    unset($_SESSION['userid']); // Supprimer l'élément à la clef 'username' dans la session
}