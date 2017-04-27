<?php
$users = get_users();
$messages = get_msg();

?>

<div id="container">

    <div id="container_message">


    <ul>
        <?php
        foreach ($messages as $c) {
            $user_id_author = $c['user_id']; // id de l'auteur du msg
            $username_author = $users[$user_id_author]['username'];
            echo
                "<li>"
                , "<p class='username'>$username_author :</p>"
                , "<p class='message'>". $c['content'] . "</p>"
                , "</li>";
        }

        ?>
    </ul>


    </div>

</div>

