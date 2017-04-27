<?php

$messages = get_msg();


?>


<div id="container">

    <div id="container_message">

        <ul>
            <?php
            foreach ($messages as $c) {
                echo "<li>" . $c['content'] . "</li>";
            }

            ?>
        </ul>


    </div>

</div>

