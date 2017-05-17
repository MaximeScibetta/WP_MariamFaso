<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title();?></title>
    <link rel="stylesheet" href="<?= dw_asset('css/styles.css');?>">
</head>
<body>
     <header class="header">
        <button id="menu" type="button">
            <span class="navbar-toggler-icon"> </span>
        </button>
        
        <!--<li class="menu__home" id="logo">
            <a href="./index.html"></a>
        </li>-->
        <nav class="sidebar">
            <h2 class="visuallyhidden">Menu de navigation</h2>
            <ul class="menu">
                <li class="menu__home"><a href="./index.html">Accueil</a></li>
                <?php foreach(dw_get_nav_items('header') as $item):?>
                    <li class="menu__agenda">
                        <a href="<?php echo $item->link;?>" class="menu__link"> <?php echo $item->label;?> </a>
                        <?php if($item->children):?>
                            <ul class="menu__agenda__submenu">
                            <?php foreach($item->children as $item) :?>
                                <li class="menu__agenda--hover">
                                <a href="<?php echo $item->link;?>" class="menu__link"><?php echo $item->label;?></a>
                                </li>
                            <?php endforeach;?>
                            </ul>
                        <?php endif;?>
                    </li>
                <?php endforeach;?>
                

                
                
                <!--<li class="menu__home"><a href="./index.html">Accueil</a></li>
                <li class="menu__agenda menu__agenda"><a href="./html/agenda.html">Agenda</a>
                    <ul class="menu__agenda__submenu">
                        <li class=" menu__agenda--hover"><a href="./html/event.html">Événements</a></li>
                        <li class=" menu__agenda--hover"><a href="./html/project.html">Projets</a></li>
                        <li class=" menu__agenda--hover"><a href="./html/travel.html">Voyages</a></li>
                    </ul>
                </li>
                <li class="menu__don menu__don"><a href="./dons.html">Dons</a>
                    <ul class="menu__don__submenu">
                        <li class="menu__don--hover"><a href="./html/dons_financier.html">Dons financier</a></li>
                        <li class="menu__don--hover"><a href="./html/dons_materiel.html">Donc matériel</a></li>
                        <li class="menu__don--hover"><a href="./html/dons_parrainer.html">Parrainer</a></li>
                        <li class="menu__don--hover"><a href="./html/dons_fiscaux.html">Avantages fiscaux</a></li>
                    </ul>
                </li>
                <li class="menu__actu menu__actu"><a href="./html/actu.html">Actualités</a>
                    <ul class="menu__actu__submenu">
                        <li class="menu__actu--hover"><a href="./html/press.html">Presse</a></li>
                        <li class="menu__actu--hover"><a href="# ">Blog</a></li>
                    </ul>
                </li>
                <li class="menu__contact menu__contact"><a href="./html/contact.html">Contact</a>
                    <ul class="menu__contact__submenu">
                        <li class="menu__contact--hover"><a href="./html/contact.html">Nous contacter</a></li>
                        <li class="menu__contact--hover"><a href="./html/faq.html">F.A.Q.</a></li>
                    </ul>
                </li>-->
            </ul>
        </nav>
    </header>
