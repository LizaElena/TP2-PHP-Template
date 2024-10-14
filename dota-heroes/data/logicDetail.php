<?php 

$jsonHeroes = file_get_contents("./dota-heroes/data/heroes.json");
$heroes = json_decode($jsonHeroes, true);



$heroName =  $_GET['name'];

$heroLocalizedName = substr($heroName, 14);


foreach($heroes as $hero){
    
    if($hero['name'] == $heroName){
        $localHero = $hero;

        break;
    }

    
}

$heroUrlName = str_replace("_", "-", $heroLocalizedName);

if(str_contains($heroUrlName, "'")){
    $heroUrlName = str_replace("'", "", $heroUrlName);
}



$heroUrlNameForVideo = $heroLocalizedName;

$heroUrlNameForVideo = str_replace("-", "", $heroUrlNameForVideo); // pour la video de l'anti-mage


switch($heroLocalizedName){
    case 'antimage' : $heroUrlName = 'anti-mage';
        break;
    case 'furion' : $heroUrlName = 'natures-prophet';
        break;
    case 'nevermore' : $heroUrlName = 'shadow-fiend';
        break;
    case 'windrunner' : $heroUrlName = 'windranger';
        break;
    case 'vengefulspirit' : $heroUrlName = 'vengeful-spirit';
        break;
    case 'zuus' : $heroUrlName = 'zeus';
        break;
    case 'necrolyte' : $heroUrlName = 'necrophos';
        break;
    case 'queenofpain' : $heroUrlName = 'queen-of-pain';
        break;
    case 'skeleton_king' : $heroUrlName = 'wraith-king';
        break;
    case 'life_stealer' : $heroUrlName = 'lifestealer';
        break;
    case 'doom_bringer' : $heroUrlName = 'doom';
        break;
    case 'treant' : $heroUrlName = 'treant-protector';
        break;
    case 'wisp' : $heroUrlName = 'io';
        break;
    case 'centaur' : $heroUrlName = 'centaur-warrunner';
        break;
    case 'magnataur' : $heroUrlName = 'magnus';
        break;
    case 'shredder' : $heroUrlName = 'timbersaw';
        break;
    case 'abyssal_underlord' : $heroUrlName = 'underlord';
        break;
        
}


$url = 'https://mapi.cegeplabs.qc.ca/web/heroes/'.$heroUrlName;

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