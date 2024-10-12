<?php

$jsonHeroes = file_get_contents("./dota-heroes/data/heroes.json");
$heroes = json_decode($jsonHeroes, true);


$filteredHeroes = []; 
$selectedAttributes = [];

if(isset($_POST['hero_name'])){
    $heroName = $_POST['hero_name']; 
    
}

if (isset($_POST['str'])) {
    $selectedAttributes[] = "str";
}
if (isset($_POST['agi'])) {
    $selectedAttributes[] = "agi";
}
if (isset($_POST['int'])) {
    $selectedAttributes[] = "int";
}
if (isset($_POST['uni'])) {
    $selectedAttributes[] = "all"; 
}


foreach ($heroes as $hero) {
    if (in_array($hero['primary_attr'], $selectedAttributes)) {
        $filteredHeroes[] = $hero;
    }
    elseif(strpos($hero['localized_name'], $heroName) !== false) {
        $filteredHeroes[] = $hero;
    }
}

if (empty($filteredHeroes)) {
    $filteredHeroes = $heroes;
}





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


