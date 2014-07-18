<?php
    
//    print_r("here");
    $str_json = file_get_contents('php://input');
//    print_r($str_json);
//    $decoded = base64_decode($_POST['json'],true);
    $jsonFile = fopen('myJson.json','w+');
    fwrite($jsonFile,$str_json);
    fclose($jsonFile);

?>