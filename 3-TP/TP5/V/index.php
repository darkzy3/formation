<?php
// ce document html contient un formulaire avec un champ nommé `titre` dont les données sont 
// envoyées par la méthode `post`
?>
<!DOCTYPE html>
<html>
    <!-- set head of page-->
    <head>
        <meta charset="utf-8" />
        <title>TP-3</title>
        <link rel="stylesheet" href="..\V\style\style.css">
    </head>
            <!-- set the body of page-->
        <body>
        <div class="parent">
                <div class="index1"> 
                    <!-- ask another file for action in controle floder-->
                    <form action="../C/displayShuffle.action.php" method="POST">
                        <!-- submit bouton for validation of operation-->
                        <input type="submit" value="SHUFFLE" />
                    </form>
                </div>
   
            </div> 
            </div>             
            <div class="index2">
                <div class="formulaire">   
                    <form enctype="multipart/form-data" action="..\C\getCSV.action.php" method="post">
                    <input class="file" name="file" type="file" /> 
                        <div class="button">
                        <input class="submit" name="submit" type="submit" value="valider" />
                    </form>
                </div>
        </body>
</html>
