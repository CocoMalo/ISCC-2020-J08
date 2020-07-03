<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <?php
        var_dump ($_GET);

            
        echo "<ul>";
        foreach ($_GET as $key => $element) {
            echo "<li> clé : ".$key. "valeur : ".$element."</li> 
                  </ul>";
         }
        
         $element = "404" ; 

        ?>
        
         <p> <?php echo $_GET ["param1"] ?> </p>
    </body>
</html>