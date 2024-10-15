<?php  
    require_once "./dota-heroes/data/heroes.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./dota-heroes/public/images/favicon.ico" type="image/x-icon">
    <title>Héros et héroÏnes</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    
    <link rel="stylesheet" href="./dota-heroes/public/stylesheets/styles.css">
    <link rel="stylesheet" href="./dota-heroes/public/stylesheets/heroes.css">
</head>
<body class="hero-background">


    <div class="container">
        <div class="text-center py-5">
            <h1>Choose your Hero</h1>
            <p class="h3">From magical tacticians to fierce brutes and cunning rogues, Dota 2's hero pool is massive and limitlessly diverse. Unleash incredible abilities and devastating ultimates on your way to victory.</p>
        </div>
        
            
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

                        <input class="image-checkbox" type="checkbox" name="" id="diamond1" >

                        <label for="diamond" class="image-label"></label>

                        <input class="image-checkbox" type="checkbox" name="" id="diamond2" >
                            
                        <label for="diamond" class="image-label"></label>
                        
                        <input class="image-checkbox" type="checkbox" name="" id="diamond3" >
                            
                        <label for="diamond" class="image-label"></label>
                        
                        <input class="image-checkbox" type="checkbox" name="" id="diamond4" >
                            
                        <label for="diamond" class="image-label"></label>
                        
                        
                    </div> 
                    <div>
                        <button class="custum-button " type="submit"  value="" name="submit">SEND</button>
                    </div>
                    
                    <div>
                        <div class="search-input collapse navbar-collapse">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input class="no-background" type="text" name="hero_name" id="hero_name"
                                value="" style="color: #fff;">

                                

                        </div>
                    </div>
                    
                </div>
            </form>                
            

            <div class="m-3">
                <div class="d-flex flex-wrap">
                    <?php foreach ($filteredHeroes as $hero) { ?>
                        <div class="mb-3 px-2">

                            <a class="hero-image text"  href="detail.php?name=<?php echo $hero['name'];?>" >

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