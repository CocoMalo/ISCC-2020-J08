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
                      <li> clé : ".$key. "valeur : ".$element."</li>
                      </ul>";
             }
            
            echo $_GET ["param1"] . $_GET ["param2"] ;
        ?>
    </body>
</hatml>