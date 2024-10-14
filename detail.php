<?php  
    require_once "./dota-heroes/data/logicDetail.php"
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./dota-heroes/public/images/favicon.ico" type="image/x-icon">

    <title>Dota 2 : <?php echo $localHero['localized_name']; ?> </title>

    <!-- TODO: Remove CDN link and include Bootstrap files locally -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="./dota-heroes/public/stylesheets/styles.css">
    <link rel="stylesheet" href="./dota-heroes/public/stylesheets/detail.css">

    

</head>
<body class="hero-background">
    <!-- 
        Pour cette page, il faut récupérer un paramètre de l'URL de manière à identifier le héro de manière unique (e.g. le "name" dans le JSON)
        À parti de cet identifiant, nous allons pouvoir aller chercher les données du héro pour pouvoir les afficher.

        Nous utiliserons ce site pour obtenir les données, car il contient les descriptions pour les héros.

        https://dotacoach.gg/_next/data/hQex-UdUEDib_3-cqnDNe/en/heroes/anti-mage.json

        - dota.heroes.npc_dota_hero_antimage.npedesc1
        - dota.heroes.npc_dota_hero_antimage.hype

        Vous pouvez récupérer les autres données à partir du fichier heroes.json (ou vous pouvez les lire à partir du JSON retourné par l'API).
    
    
    
        -->

    <div>
        <div class="hero-background-gradient"></div>

        <div class="container">
            <div class="row">
                <div class="col-6 gy-5">
                    <!-- FIXME: Faire que le bouton Retour soit beau -->
                    <div class="mb-5">
                        <a href="detail.php?name=<?php if($prevHeroIndex !==null){echo $heroes[$prevHeroIndex]['name'];}
                        else{echo $localHero['name'];}?>">PREVIEW</a>

                        <a href="index.php">ALL HEROES</a>
                        
                        <a href="detail.php?name=<?php if($nextHeroIndex !==null){echo $heroes[$nextHeroIndex]['name'];}
                        else{echo $localHero['name'];}?>">NEXT</a>
                    </div>
                    <div class="hero-type | mb-2">
                        <img src="./dota-heroes/public/images/<?php if($localHero['primary_attr'] == 'all'){
                            echo 'uni';
                            }else{
                                echo $localHero['primary_attr'];
                            }
                        ?>-icon.png" width="32" height="32" alt="Agility">
                        <span>
                            <?php switch($localHero['primary_attr']){
                                case 'str' : echo 'STRENGTH';
                                    break;
                                case 'agi' : echo 'AGILITY';
                                    break;
                                case 'int' : echo 'INTELLIGENCE';
                                    break;
                                case 'all' : echo 'POLYVALENT';
                                    break;
                                } 
                            ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <h1><?php echo $localHero['localized_name'];?></h1>
                        <span class="subheading"><?php echo $datasHero['pageProps']['messages']['dota.heroes.'.$heroName.'.npedesc1'];?></span>
                    </div>
                    <div>
                        
                        <p>
                            <?php
                                echo $datasHero['pageProps']['messages']['dota.heroes.'.$localHero['name'].'.hype'];
                            ?>
                        </p>
                    </div>
                    <div>
                        <div class="secondary">Attack Type</div>
                        <img src="./dota-heroes/public/images/<?php echo strtolower($localHero['attack_type'])?>.svg" width="24" height="24">
                        <span><?php echo $localHero['attack_type']?></span>
                    </div>
                </div>
                <div class="col-6">
                    <video class="hero-render" poster="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/<?php echo $heroUrlNameForVideo?>.png" muted autoplay loop>
                        <source type="video/mp4; codecs=hvc1" src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/<?php echo $heroUrlNameForVideo?>.mov">
                        <source type="video/webm" src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/<?php echo $heroUrlNameForVideo?>.webm">
                        <img src="https://cdn.akamai.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/<?php echo $heroUrlNameForVideo?>.png">
                    </video>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-stats">
        <div class="container py-5">
            <div class="row">
                <div class="col-3">
                    <img src="https://cdn.akamai.steamstatic.com/apps/dota2/images/dota_react/heroes/<?php echo $heroUrlNameForVideo?>.png">
                </div>
                <div class="col-2 d-flex flex-column align-items-start gap-2 border-end">
                    <div class="d-flex align-items-center gap-2">
                        <img src="./dota-heroes/public/images/str-icon.png" width="38" height="38" alt="Strength">
                        <span class="stat"><?php echo $localHero['base_str']?></span>
                        <span class="stat-increase">+<?php echo $localHero['str_gain']?></span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <img src="./dota-heroes/public/images/agi-icon.png" width="38" height="38" alt="Agility">
                        <span class="stat"><?php echo $localHero['base_agi']?></span>
                        <span class="stat-increase">+<?php echo $localHero['agi_gain']?></span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <img src="./dota-heroes/public/images/int-icon.png" width="38" height="38" alt="Intelligence">
                        <span class="stat"><?php echo $localHero['base_int']?></span>
                        <span class="stat-increase">+<?php echo $localHero['int_gain']?></span>
                    </div>
                </div>
                <div class="col-4 ps-5">
                    <div class="row mb-2">
                        <div class="col-4">
                            <span class="role">Carry</span>
                            <div class="role-bar 
                            <?php
                                if (in_array('Carry', $localHero['roles'])) {
                                    echo 'has-role';
                                }
                            ?>"></div>
                        </div>
                        <div class="col-4">
                            <span class="role">Support</span>
                            <div class="role-bar
                            <?php
                                if (in_array('Support', $localHero['roles'])) {
                                    echo 'has-role';
                                }
                            ?>"></div>
                        </div>
                        <div class="col-4">
                            <span class="role">Nuker</span>
                            <div class="role-bar 
                            <?php
                                if (in_array('Nuker', $localHero['roles'])) {
                                    echo 'has-role';
                                }
                            ?>"></div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4">
                            <span class="role">Disabler</span>
                            <div class="role-bar
                            <?php
                                if (in_array('Disabler', $localHero['roles'])) {
                                    echo 'has-role';
                                }
                            ?>"></div>
                        </div>
                        <div class="col-4">
                            <span class="role">Jungler</span>
                            <div class="role-bar
                            <?php
                                if (in_array('Jungler', $localHero['roles'])) {
                                    echo 'has-role';
                                }
                            ?>"></div>
                        </div>
                        <div class="col-4">
                            <span class="role">Durable</span>
                            <div class="role-bar
                            <?php
                                if (in_array('Durable', $localHero['roles'])) {
                                    echo 'has-role';
                                }
                            ?>"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <span class="role">Escape</span>
                            <div class="role-bar 
                            <?php
                                if (in_array('Escape', $localHero['roles'])) {
                                    echo 'has-role';
                                }
                            ?>"></div>
                        </div>
                        <div class="col-4">
                            <span class="role">Pusher</span>
                            <div class="role-bar
                            <?php
                                if (in_array('Pusher', $localHero['roles'])) {
                                    echo 'has-role';
                                }
                            ?>"></div>
                        </div>
                        <div class="col-4">
                            <span class="role">Initiator</span>
                            <div class="role-bar
                            <?php
                                if (in_array('Initiator', $localHero['roles'])) {
                                    echo 'has-role';
                                }
                            ?>"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
</body>

</html>