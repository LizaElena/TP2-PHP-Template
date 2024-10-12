<?php

$filteredHeroes = $heroes;

if (isset($_POST['str'])) {
    foreach ($heroes as $hero) {
        if ($hero['primary_attr'] == "str") {
            $filteredHeroes[] = $hero; 
        }
    }
} elseif (isset($_POST['agi'])) {
    foreach ($heroes as $hero) {
        if ($hero['primary_attr'] == "agi") {
            $filteredHeroes[] = $hero;
        }
    }
} elseif (isset($_POST['int'])) {
    foreach ($heroes as $hero) {
        if ($hero['primary_attr'] == "int") {
            $filteredHeroes[] = $hero;
        }
    }
} elseif (isset($_POST['uni'])) {
    foreach ($heroes as $hero) {
        if ($hero['primary_attr'] == "all") {
            $filteredHeroes[] = $hero;
        }
    }
} else {
    
    $filteredHeroes = $heroes;
}

function getHeroes($heroes, $attribute) {
    $filteredHeroes = []; 
    foreach ($heroes as $hero) {
        if ($hero['primary_attr'] == $attribute) {
            $filteredHeroes[] = $hero; 
        }
    }

    return $filteredHeroes; 
}

