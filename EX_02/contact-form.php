<!DOCTYPE html> 
<html>
    <head>
    </head>

    <body>
    <form action= "contact-form.php" method="post">
    <p>
        <input type="text" frt_name_name="nom prenom"/>
        <input type="text" e_mail="e-mail"/>
        <input type="text" message="message"/>
        <input type="submit" value="Valider"/>
    </p>
    </form>
        <?php

            if ($post = 0) {
                echo "Aucune donnés reçut.";
             }
            else  {
                echo " "; 
            }

        ?>
    </body>
</html>