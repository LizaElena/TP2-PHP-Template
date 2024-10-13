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
    elseif(isset($_POST['hero_name'])){
        $heroName = $_POST['hero_name']; 
        if(strpos($hero['localized_name'], $heroName) !== false && $heroName!=null) {
            $filteredHeroes[] = $hero;
            
        }
        
    }

    
}

if (empty($filteredHeroes)) {
    $filteredHeroes = $heroes;
}






