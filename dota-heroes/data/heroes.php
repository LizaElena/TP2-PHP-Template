<?php

$jsonHeroes = file_get_contents("./dota-heroes/data/heroes.json");
$heroes = json_decode($jsonHeroes, true);

//print_r($heroes);

$url = "https://mapi.cegeplabs.qc.ca/web/heroes/anti-mage";

$ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url);       
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_HTTPGET, true);

 $response = curl_exec($ch);

 if (curl_errno($ch)) {
     echo "Error: " . curl_error($ch);
 } else {
     
     $datas = json_decode($response, true);
    
     // Affiche la structure complète des données pour voir les clés disponibles
     
    //print_r($datas);
     
 }

 curl_close($ch);


