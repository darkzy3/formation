<?php
// ce document html contient un formulaire avec un champ nommé `titre` dont les données sont 
// envoyées par la méthode `post`
?>
<!DOCTYPE html>
<html>
    <!-- set head of page-->
    <head>
        <meta charset="utf-8" />
        <title>TP-7</title>
        <link rel="stylesheet" href="..\V\style\style.css">
    </head>
            <!-- set the body of page-->
        <body>
        <!-- <div class="parent">
                <div class="index1"> 
                     ask another file for action in controle floder
                    <form action="../C/displayShuffle.action.php" method="POST">
                         submit bouton for validation of operation
                        <input type="submit" value="SHUFFLE" />
                    </form>
                </div>
            </div>  -->
            <!-- set form for add to the data base -->
            <div class='index3'>
                <form action="../C/insertDBStudents.action.php" method="POST">
                    <label for="name">Name</label>
                    <input name="name" type="text" required/>
                    
                    <label for="firstName">Firstname</label>
                    <input name="firstName" type="text" required/>
                    
                    <label for="gender">Gender</label>
                    <input name="gender" type="text" required/>
                    <input type="submit" value="envoyer" />
                </form>
            </div>

            <!-- set option to take the Data base for display -->
            <div class="index3"> 
                    <!-- ask another file for action in controle floder to display data base list-->
                    <form action="../C/readDBStudents.action.php" method="POST">
                        <!-- submit bouton for validation of operation -->
                        <input type="submit" value="display" />
                    </form>
                </div>
                <div class="index3">
                    <form action="../C/deleteStudents.action.php" method="post">
                        <label for="delete"> ID de l'éléve a suprimer</label>
                        <input name="delete" type="text"/>
                        <input type="submit" value="envoyer"/>
                    </form>
                </div>
                <div class="index3">
                    <form action="../C/updateStudent.action.php" method="post">
                        <label for="id"> ID de l'éléve a modifier</label>
                        <input name="id" type="text"/>
                        <label for="firstname"> prénom de l'éléve modifier</label>
                        <input name="firstname" type="text"/>
                        <input type="submit" value="envoyer"/>
                    </form>
                </div>
            <!-- ask document for take value in ther            
            <div class="index2">
                <div class="formulaire">   
                    <form enctype="multipart/form-data" action="..\C\getCSV.action.php" method="post">
                    <input class="file" name="file" type="file" /> 
                        <div class="button">
                        <input class="submit" name="submit" type="submit" value="valider" />
                    </form>
                </div> -->
<!-- <div class="parent">
        </div>
        <div>
             ask another file for action in controle floder
            <form enctype="multipart/form-data" action="../C/loadStudentsFromCSV.action.php" method="POST">
             set bouton radio style 
                <fieldset>
                     set title or short description 
                    <legend>colone number wanted</legend>
                
                     first div assigneted to first colomun 
                    <div>
                        <input type="radio" id="first" name="col" value="1" />
                        <label for="first colomun">first colomun</label>
                    </div>
                    <div>
                        <input type="radio" id="second" name="col" value="2" />
                        <label for="second colomun">second colomun</label>
                    </div>
                    <div>
                        <input type="radio" id="third" name="col" value="3" />
                        <label for="third colomun">third colomun</label>
                    </div>
                    <div>
                         submit bouton for validation of operation 
                         <input type="submit" value="validation" /> 
                        <input class="file" name="file" type="file" /> 
                                <div class="button">
                            <input class="submit" name="submit" type="submit" value="valider" />
                    </div>
                </fieldset>
            </form>
        </div> -->
    </body>
</html>
