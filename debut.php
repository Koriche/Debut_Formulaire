<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="fin.php" method="post">
    <div>
        <label for="name">Nom :</label>
	</br>
        <input type="text" id="name" name="user_name">
    </div>
	<div>
        <label for="prenom">Prenom :</label>
	</br>
        <input type="text" id="prenom" name="user_prenom">
    </div>
    <div>
        <label for="mail">Mail :</label>
	</br>
        <input type="text" id="mail" name="user_mail">
    </div>
    <div class="button">
        <button type="submit">Envoyer les infos</button>
    </div>
</form>
</body>

</html>