<?php 

$jsonHeroes = file_get_contents("./dota-heroes/data/heroes.json");
$heroes = json_decode($jsonHeroes, true);

$heroLocalizedName = strtolower( $_GET['localized_name']);

foreach($heroes as $hero){
    
    if(strtolower($hero['localized_name']) == $heroLocalizedName){
        $finalHero = $hero;
        // echo strtolower($hero['localized_name']);
        // echo $heroLocalizedName;
        break;
    }
    
}


$url = 'https://mapi.cegeplabs.qc.ca/web/heroes/'.$heroLocalizedName;

echo $url;

$ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url);       
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_HTTPGET, true);

 $response = curl_exec($ch);

 if (curl_errno($ch)) {
     echo "Error: " . curl_error($ch);
 } else {
     
     $datasHero = json_decode($response, true);
    
     
    //print_r($datas);
     
 }

 curl_close($ch);

