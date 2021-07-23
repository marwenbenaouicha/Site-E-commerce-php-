

 <!DOCTYPE html>

<html>
<?php // include ("entete.php");?>
<body>
 
  <style>
        body {
         background-image: url('../images/insc2.jpg');
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: cover;
		 color:white;
          }
    </style>
 <form action="../index.php" method="GET">
	<table>
		<tr><td> Titre </td><td><input type="checkbox" name = "choix1" value = "1"> M <input type = "checkbox" name = "choix2" value = "2"   />Mme</td></tr>
		<br><br><br>
		<!--<select name="titre">
                                            <option disabled="disabled" selected="selected" required>GENDER</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                      
                                        </select>-->
        <!--<tr><td> sex </td><td><input type="texte" name = "titre" size="50" /></td></tr>-->
		<tr><td> Nom </td><td><input type="texte" name = "nom" size="50"  required /></td></tr>
		<tr><td> Prenom </td><td><input type="texte" name = "prenom" size="50"  required /></td></tr>
		<tr><td> pseudo </td><td><input type="pseudo" name = "pseudo" size="50"  required /></td></tr>
		<tr><td> E-mail </td><td><input type="texte" name = "mail" size="50"  required /></td></tr>
		<tr><td> Adresse </td><td><input type="texte" name = "Adr" size="50"  required /></td></tr>
		<tr><td> Téléphone </td><td><input type="texte" name = "tel" size="50"  required /></td></tr>
		<tr><td> <label for = "pass" > Mot de passe (8 charactères minimum) : </label></td><td><input type ="password" id="pass" name = "password" minlength="8" required></td></tr>
		<tr><td><label for ="pass"> Retapper votre mot de passe (8 charactères minimum) : </label></td><td><input type ="password" id="pass" name = "password1" minlength="8" required></td></tr>
		 <input type='hidden' name='action' value='inscription'>
		<tr><td></td><td></td><td><input type="submit" name="submit" value="inscrire"></td></tr>
	</table>
</form>


</body>
</html>

