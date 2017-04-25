
<?php

$messages = get_msg();



?>


<div id="container">


<ul>
    <?php
    foreach ($messages as $c){
echo "<li>". $c['content']. "</li>";
    }

    ?>
</ul>




</div>

