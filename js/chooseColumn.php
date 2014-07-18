<?php
    
    print_r("here");
    print_r($_POST['json']);
    $decoded = base64_decode($_POST['json'],true);
    $jsonFile = fopen('myJson.json','w+');
    fwrite($jsonFile,$decoded);
    fclose($jsonFile);

?>