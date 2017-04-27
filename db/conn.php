<?php
define('MAX_COUNT_MESSAGES', 25);

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


if ($_SERVER['HTTP_HOST'] == 'localhost') {
    require_once('defines_local.php');
} else { //  $_SERVER['HTTP_HOST'] == "gato.projetisi.com"
    require_once('defines_sentora.php');
}

$mysqli = new mysqli(CONN_HOST, CONN_USER, CONN_PWD, DBNAME);
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

/**
 * function pour selectionner les champs de la table gato
 * C'est function est pour afficher dans le mur.
 * @return array
 */
function get_msg() {
    global $mysqli;
    $query_str = "SELECT * FROM msg ORDER BY `msg`.`date_heure` DESC LIMIT 0 ," . MAX_COUNT_MESSAGES; // Contruction de la requète SQL
    $res = $mysqli->query($query_str); // Lancement de la requète
    $result = array(); // Créer un tableau vide pour mettre toutes les data
    if ($res && ($res->num_rows > 0)) { // la requete a marché et il y a des enregistrements
        $users = get_users();
        while ($gato_data = $res->fetch_assoc()) {
            $gato_data['username'] = $users[$gato_data['user_id']]['username'];
            $result[$gato_data['id']] = $gato_data; // Stocker l'enregistrement dans les data
        }
    }
    return $result;
}

/**function pour ajouter de users dans la base de données.
 * @param $user_id
 * @param $content
 */
function set_msg($user_id, $content) {
    global $mysqli;
    $result = false;
    $today = date("Y-m-d H:i:s"); // Donne la date et l'heure dans le système
    $query_str = "INSERT INTO `msg` (`user_id`,`date_heure`,`content`) VALUES ('$user_id', '$today', '$content')";
//    var_dump($query_str);
    if ($mysqli->query($query_str) === TRUE) {
        $result = $mysqli->insert_id;
    } else {
        echo "Error: " . $query_str . "<br>" . $mysqli->error;
    }
    return $result;
}

// Pour lire les messages
//$msgs = get_msg();
//var_dump($msgs);

// Pour écrire un message
//$id_msg = set_msg(1, 'hola');
//var_dump($id_msg);