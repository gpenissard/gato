<?php
$users = get_users();
$messages = get_msg();

?>

<div id="container">

    <div id="container_message">
        <ul>
            <?php
            foreach ($messages as $message) {
                echo
                "<li>"
                , "<p class='username'>" . $message['username'] . "</p>"
                , "<p class='message'>" . $message['content'] . "</p>"
                , "</li>";
            }
            ?>
        </ul>


    </div>

</div>

