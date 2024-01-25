<?php
// ce document html contient un formulaire avec un champ nommé `titre` dont les données sont envoyées par la méthode `get`
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

<form action="../ctrl/execute.php" method="POST">
    <label for="nom">nom</label>
    <input name="nom" type="text" />
	
    <label for="prenom">prenom</label>
    <input name="prenom" type="text" />
	
    <label for="sex">sex</label>
    <input name="sex" type="text" />
    <input type="submit" value="envoyer" />
</form>

</body>
</html>
