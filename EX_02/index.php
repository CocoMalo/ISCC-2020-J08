<!DOCTYPE html>
<html>
    <head>
        <title> Accueil </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./vitrine.css">
    </head>

    <body>
        <header>
            <nav> 
            <?php var_dump ($_GET);

                if ($_GET ["page1"] == "Accueil" ) {
                    echo "<a href= "vitrine-accueil.html"> Accueil </a>" ;
                        }
                if ($_GET ["page2"] == "Contacts" ) {
                    echo "<a href = "vitrine-contacts.html"> Contacts </a>";
                        }
                if ($_GET ["page3"] == "Programme" ) {
                    echo "a href= "vitrine-programme.html"> Programme</a>";
                        }
            ?>
            </nav>

            <h1> Summer Code Camp </h1>
        </header>

        <main>
            <h2> ACCUEIL </h2>
            <p> Le numérique, nouvelle ère de l’humanité, source d’innovation et de performance ? Pour mieux comprendre cette révolution, venez apprendre les rudiments du code et découvrir les bases de la programmation des sites internet. Destiné aux étudiants, ce code camp vous initiera en un mois aux principaux langages de programmation
                Web (HTML-CSS et PHP), vous dévoilera le fonctionnement d’outils comme Google ou Paypal et vous éclaira sur la sécurité des sites internet. </p>
            
            <section class= "Accueil">
                <img src= "Image-1.jpg">
                <img src= "Image-2.jpg"> 
            </section>
        </main>

        <footer> 
            <a href="http://www.epitech.eu"> <img src= "logo_epitech.png"> </a>
        </footer>
    </body>
</html>