<?php

$mysqli = new mysqli(CONN_HOST, CONN_USER, CONN_PWD, DBNAME);
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

/**
 * function pour selectionner les champs de la table gato
 * C'est function est pour afficher dans le mur.
 * @return array
 */
function get_msg($where = '') {
    global $mysqli;
    $query_str = "SELECT * FROM gato" . $where; // Contruction de la requète SQL
    $res = $mysqli->query($query_str); // Lancement de la requète
    $result = array(); // Créer un tableau vide pour mettre toutes les data
    if ($res && ($res->num_rows > 0)) { // la requete a marché et il y a des enregistrements
        while ($gato_data = $res->fetch_assoc()) {
            $result[$gato_data['id']] = $gato_data; // Stocker l'enregistrement dans les data
        }
    }
    return $result;
}

function set_msg($user_id, $content) {
    global $mysqli;
    $query_str = "INSERT INTO msg ('user_id','content') VALUES ($user_id,$content)";
    $res = $mysqli->query($query_str); // Lancement de la requète
}
