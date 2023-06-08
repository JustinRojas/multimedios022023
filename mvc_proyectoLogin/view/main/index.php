<?php
    require 'view/header.php';
    require 'view/menu.php';

    $ses = session_status();
    var_dump($ses);
?>
<div class="container-fluid" id="contendorprincipal">
<?php

    require 'cuerpomain.php';
?>
</div>
<?php
    require 'view/footer.php';
?>
