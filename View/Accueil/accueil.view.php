<h4>Bonjour <?php echo $_SESSION['user']['nom'] ?? "" ;
?></h4>
<?php

echo "Bonjour" .( $_SESSION['user']['mail'] ?? "")
;


