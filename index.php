<?php  
    require_once "./dota-heroes/data/heroes.php"
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./public/images/favicon.ico" type="image/x-icon">
    <title>Dota 2 Heroes</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- TODO: Remove CDN link and include Bootstrap files locally -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="./dota-heroes/public/stylesheets/styles.css">
    <link rel="stylesheet" href="./dota-heroes/public/stylesheets/modif.css">
</head>
<body class="hero-background">

    

        <div class="white mt-3 ">
            <div class="nav d-flex justify-content-around ">
                <div class="nav-item">
                    <img src="./dota-heroes/public/images/dota2_logo_horiz.png" width="200">
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">JEU</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="#">HÉROS ET HÉROÏNES</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="#">ACTUALITÉS</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="#">E-SPORT</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="#">CONNEXION</a>
                    <a class="nav-link" href="#">LANGUE</a>
                </div>
                <div class="nav-item d-flex ">
                    <i class="fa-brands fa-steam" style="color: #232323;"></i>
                    <a class="nav-link" href="#">JOUER (GRATUITEMENT)</a>
                </div>
            </div>
        </div>

    

    <div class="container">
        <div class="text-center py-5">
            <h1>Choose your Hero</h1>
            <p class="h3">From magical tacticians to fierce brutes and cunning rogues, Dota 2's hero pool is massive and limitlessly diverse. Unleash incredible abilities and devastating ultimates on your way to victory.</p>
        </div>
        <!--
            Pour cette page, refaite un layout similaire à: https://www.dota2.com/heroes
                1) Titre Choose your Hero
                2) Paragraphe de texte
                3) La barre de filtres
                4) La liste des héros
                5) Un effet de hover pour afficher le nom et l'attribut principal du héro (Force, Agilité, Intelligence, Universel)
        -->

        <!--
            Pour les filtres, il faudra ajouter un formulaire contenant :
                1) Des cases à cocher (checkbox) pour les attributs (Force, Agilité, Intelligence, Universel)
                2) Un champ de texte pour pouvoir entre du texte (e.g. le nom d'un héro)
                3) Un bouton pour pouvoir faire la recherche
            La recherche se fera côté serveur en PHP. Il faudra récupérer les attributs qu'on veut filtrer (Force, Agilité, Intelligence, Universel) et le nom du héro à filter.
                1) Si aucun filtre n'est sélectionné et que rien n'est entré dans le champ de texte, on affiche tous les héros (affichage par défaut)
                2) Si un ou plusieurs filtres sont sélectionnés, nous faisons le filtre sur ces éléments :
                    - Si nous avons une valeur dans le champ de texte, nous filtrons sur le nom des héros et affichons tous les héros ayant la valeur dans leur nom (e.g. ard ==> Arc Warden)
                    - Si nous sélectionnons un ou des attributs, nous faisons un filtre par OU (e.g. si on choisit Force et Intelligence, nous affichons les héros sont de type Force ou Intelligence)
                    - Les deux filtres se combinent (e.g. le nom et les attributs).
            ATTENTION: Toute la logique des filtres doit fonctionner sans aucun JavaScript! Tout doit être fait côté serveur en PHP.
            Une fois le fonctionnement est fait sans le JavaScript, nous pouvons intégrer la librairie HTMX pour un côté dynamique pour un rafraichissement partiel de la page.
        
        
            https://cdn.akamai.steamstatic.com//apps/dota2/images/dota_react/heroes/axe.png?
        
            -->

            <?php
                
                $checkboxes = [
                    ['id' => 'str', 'label' => 'Image 1'],
                    ['id' => 'agi', 'label' => 'Image 2'],
                    ['id' => 'int', 'label' => 'Image 3'],
                    ['id' => 'uni', 'label' => 'Image 4'],
                    ['id' => 'diamond1', 'label' => 'Image 5'],
                    ['id' => 'diamond2', 'label' => 'Image 6'],
                    ['id' => 'diamond3', 'label' => 'Image 7'],
                    ['id' => 'diamond4', 'label' => 'Image 8']
                ];

            ?>

            
        <div class="container ">
            
            

            <form method="POST" action="index.php" autocomplete="off">
                
                <div class="navbar navbar-expand-lg navbar-custom mx-4">
                    <div class="collapse navbar-collapse ">
                        <div>FILTRER</div>
                    </div>

                    

                    <div class="collapse navbar-collapse">
                        <div class="px-3">ATTRIBUTS</div>
                        
                        
                        
                        <input class="image-checkbox" type="checkbox" name="str"  id="str" >
                            
                        <label for="str" class="image-label"></label>
                        
                        <input class="image-checkbox" type="checkbox" name="agi"  id="agi" >
                        
                        <label for="agi" class="image-label"></label>
                        
                        <input class="image-checkbox" type="checkbox" name="int"  id="int" >
                        
                        <label for="int" class="image-label"></label>
                        
                        <input class="image-checkbox" type="checkbox" name="uni"  id="uni" >
                        
                        <label for="uni" class="image-label"></label>

                        
                    </div>

                    

                    <div class="collapse navbar-collapse">
                        <div class="px-3 ">COMPLEXITÉ</div>

                        <input class="image-checkbox" type="checkbox" name="attribute[]" value="" id="diamond1" >

                        <label for="diamond" class="image-label"></label>

                        <input class="image-checkbox" type="checkbox" name="attribute[]" value="" id="diamond2" >
                            
                        <label for="diamond" class="image-label"></label>
                        
                        <input class="image-checkbox" type="checkbox" name="attribute[]" value="" id="diamond3" >
                            
                        <label for="diamond" class="image-label"></label>
                        
                        <input class="image-checkbox" type="checkbox" name="attribute[]" value="" id="diamond4" >
                            
                        <label for="diamond" class="image-label"></label>
                        
                        
                    </div> 
                    <div>
                        <button class="custum-button " type="submit"  value="" name="submit">SEND</button>
                    </div>
                    
                    <div>
                        <div class="search-input collapse navbar-collapse">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input class="no-background" type="text" name="hero_name"
                                value="">

                        </div>
                    </div>
                    
                </div>
            </form>                
            

            <div class="m-3">
                <div class="d-flex flex-wrap">
                    <?php foreach ($filteredHeroes as $hero) { ?>
                        <div class="mb-3 px-2">

                            <a class="hero-image text"  href="detail.php" >

                                <img class="hover-hidde" src="https://cdn.akamai.steamstatic.com/<?php echo $hero['img']?>" width="230" height="120">
                                
                                <div class="attribut-hero ">

                                    <img src="./dota-heroes/public/images/<?php echo ($hero['primary_attr'] == "all") ? "uni" : $hero['primary_attr']; ?>-icon.png" alt="" width="30" height="30">
                                    
                                    <div class="px-3 ">
                                        <?php echo $hero['localized_name']?> 
                                    </div>

                                </div>
                            </a>

                        </div>
                    <?php } ?>
                    
                </div>
            </div>


    
    </div>
</body>
</html>