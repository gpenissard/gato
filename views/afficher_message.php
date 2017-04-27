
<?php

$users = get_users();
$messages = get_msg();
//var_dump($users);
//var_dump($messages);


?>


<div id="container">


<ul>
    <?php
    foreach ($messages as $c){
        $user_id_author = $c['user_id']; // id de l'auteur du msg
        $username_author = $users[$user_id_author]['username'];
echo "<li>" . $username_author . $c['content'] . "</li>";
    }

    ?>
</ul>




</div>

