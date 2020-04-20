<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="description" content="site milhie creation, presentation de bijoux, arbres de vie, decorations en fil d'aluminium, perles, pierres de litotherapie. Tout est fait main par moi-même.">    
    <title>Milhie Création bijoux, décoration en fil d'aluminium.</title>    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="side-menu.css">
    <link rel="stylesheet" type="text/css" href="styleAccueil.css">
    <link rel="stylesheet" type="text/css" href="stylebase.css">
    <link rel="stylesheet" type="text/css" href="stylediapo.css">

</head>

<body>
    <section id="page">
        <div id="element">
            <header id="title"> <!--Désigne l'en-tête, il peux y avoir plusieurs en-têtes dans une même page-->
                <?php include("tete_de_page.php"); ?>

            </header>   

            <nav>
                <?php include("menu.php"); ?>
            </nav>
        </div>

        <section id="main">
            <h2 class="titre">Créations en perle et fil d'aluminium, bijoux, décorations, pièges à rêves, arbres de vie , lytothérapie. </h2>
            <article class="content">
                <header>
                    <h2 class="epingle"> <img src="images/ico_epingle.png" alt="Milhiecreation" class="ico_categorie" /> Accueil </h2>

                    <p class="introduction"><span class="salutations">Bienvenue</span> sur mon site!</p> 
                    <p>Ce site est fait pour vous présenter mes créations en fil d'aluminium... </p> 
                    <p>Je crée également des bijoux ou décorations sur mesure, n'hésitez pas à me contacter <a href="#Contact">->ici</a> 
                    </p>
                </header>

        
        
                <nav>
                    <ul id="index">
                        <li id="bijoux" class="item"><p> <a href="bijoux.php" class="bouton">Bijoux <img src="images/flecheblanchedroite.png" alt="" class="fleche" /></a></p></li>
                            
                        <li id="arbres_de_vie" class="item"> <p><a href="arbres_de_vie.php" class="bouton">Arbres de vie  <img src="images/flecheblanchedroite.png" alt="" class="fleche"/></a> </p></li>

                        <li id="decorations_murales_chambre_enfant" class="item"><p> <a href="decos.php" class="bouton">Décos murales <img src="images/flecheblanchedroite.png" alt="" class="fleche"/></a></p></li>
            
                        <li id="decos_mariage" class="item"><p> <a href="decos_mariage.php" class="bouton">Décos mariage <img src="images/flecheblanchedroite.png" alt="" class="fleche" /></a></p></li>
                            
                        <li id="pieges_reves" class="item"><p> <a href="pieges_reves.php" class="bouton">Pièges à rêves <img src="images/flecheblanchedroite.png" alt="" class="fleche"/></a></p></li>

                        <li id="autresDecos" class="item"><p> <a href="autresDecorations.php" class="bouton">Autres décorations <img src="images/flecheblanchedroite.png" alt="" class="fleche"/></a></p></li>
                    </ul>
                </nav>
            </article>

        </section>

        <footer>
 

            <?php include("pied_de_page.php"); ?>    
            <?php include("compteur/compteur.php"); ?>    

        </footer>

    </section>

<script src="ui.js"></script>

</body>
</html>