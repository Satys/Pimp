<?php

    $decoded = base64_decode($_POST['json']);
    $jsonFile = fopen('myJson.json','w+');
    fwrite($jsonFile,$decoded);
    fclose($jsonFile);

?>