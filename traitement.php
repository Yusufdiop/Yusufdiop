<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="style.php">  
</head>
<body >
   <style type="text/css">
        body{
            background-color: rgb(218,235,236);
            background-position: center;
            background-size: cover;
            font-family: sans-serif;
            margin-top: 70px;
        }

    </style>
  <section class="php">
<?php


 // Vérifier si le formulaire est soumis 
   if ( isset( $_POST['envoi'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $ine = $_POST['ine_name']; 
     $nom = $_POST['nom_name']; 
     $prenom = $_POST['prenom_name']; 
     $email = $_POST['mail_name'];
     $tel = $_POST['tel_name']; 
     $genre = $_POST['genre_name']; 

     // afficher le résultat
     echo '<h3>Informations récupérées avec POST :</h3>'; 
     echo 'INE : ' . $ine . '<br> Nom : ' . $nom . '<br> Prenom : ' . $prenom . '<br> email : ' . $email . '<br> Telephone :' . $tel . ' <br> Genre: ' .$genre; 
 
 //On établit la connexion à la connexion avec le serveur et à la base

  $link = mysqli_connect("localhost", "root", "","uvs_etudiant") or

  die("Impossible de se connecter : " . mysqli_error()); //== echo puis exit

  echo '<br> Etat :Connexion au serveur et à la base de données reussies';

  // requete insertion dans la base

  $sql=" INSERT INTO `etudiant` (`INE`, `NOM`, `PRENOM`, `EMAIL`, `TELEPHONE`, `GENRE`)
  VALUES
  ('$ine','$nom','$prenom','$email','$tel','$genre') ";

  if (!mysqli_query($link,$sql))
        {
        die('impossible d’ajouter cet enregistrement : ' . mysqli_error());

        }
  
  echo "<br> L’enregistrement est ajouté ";
  echo'<br>';

    // requete affichage données de la base

  $res1="SELECT * FROM etudiant";
  $res = mysqli_query($link,$res1);
$row=mysqli_fetch_row($res);
echo " Vous venez d'enregistrer l'etudiant:";
echo "&nbsp;".$row[0]; // l'INE
echo "&nbsp;".$row[1]; // le NOM
echo "&nbsp;".$row[2];
echo "&nbsp;".$row[3];
echo "&nbsp;".$row[4];
echo "&nbsp;".$row[5];


//requete affichage toutes les enreistrements 
$result = mysqli_query($link,"SELECT * FROM etudiant");

echo " <br> Et voici la liste des étudiants :";

echo "<table border='2'>
<tr>
<th>INE</th>
<th>NOM</th>
<th>PRENOM</th>
<th>EMAIL</th>
<th>TELEPHONE</th>
<th>SEXE</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['INE'] . "</td>";
echo "<td>" . $row['NOM'] . "</td>";
echo "<td>" . $row['PRENOM'] . "</td>";
echo "<td>" . $row['EMAIL'] . "</td>";
echo "<td>" . $row['TELEPHONE'] . "</td>";
echo "<td>" . $row['GENRE'] . "</td>";
echo "</tr>";
}
echo "</table>";

// fermeture de la connexion
mysqli_close($link);


}



?>
</section>
</body>
</html>
