<?php 

$jsonHeroes = file_get_contents("./dota-heroes/data/heroes.json");
$heroes = json_decode($jsonHeroes, true);

$heroLocalizedName = strtolower( $_GET['localized_name']);

foreach($heroes as $hero){
    
    if(strtolower($hero['localized_name']) == $heroLocalizedName){
        $finalHero = $hero;
        break;
    }

    
}

$heroUrlName = str_replace(" ", "-", $heroLocalizedName);

if(str_contains($heroUrlName, "'")){
    $heroUrlName = $heroUrlName = str_replace("'", "", $heroUrlName);
}



$heroUrlNameForVideo = str_replace(" ", "_", $heroLocalizedName);

$heroUrlNameForVideo = str_replace("-", "", $heroUrlNameForVideo);

if($heroUrlName == "natures-prophet"){
    $heroUrlNameForVideo = 'furion';
}


$url = 'https://mapi.cegeplabs.qc.ca/web/heroes/'.$heroUrlName;

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
     
 }

 curl_close($ch);