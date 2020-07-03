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
                if ($_GET ["page4"] == "404" ) {
                    echo "a href= "http://localhost/iscc/ISCC- 2020-J08/Exo_02/index.php?page=contact-form
                    "> 404</a>";
                        }
            ?>
            </nav>

            <h1> Summer Code Camp </h1>
        </header>

        <main>
            <h2> ACCUEIL </h2>
        </main>

        <footer> 
            <a href="http://www.epitech.eu"> <img src= "logo_epitech.png"> </a>
        </footer>
    </body>
</html>