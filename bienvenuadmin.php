<HTML>
    <head> <title> form </title>
    <link rel="stylesheet" href="stylebin.css">
 </head> 
<BODY>
 <div id="header" >
            <h1>ISET GABES </h1>
            </div>
<div id="nav">
            Acceuil <br>
             Profil <br>
             <a href="ajoutclasse.html"> Ajout un Classe </a> <br>
             <a href="matiere.html"> Ajouter une matiere </a> <br>
             <a href="Listemat.php"> Liste des matiere </a> <br>
             <a href="Listeensg.php"> Liste des enseignents </a> <br>
             <a href="Listeclasse.php"> Liste des classes </a> <br>
             <a href="listeetud.php"> Liste etudiant </a> <br>
             Affectation etudiant <br> 
             <a href="affectation.php" > Affectation Pedagogique </a> 
            </div>
<div id="section">
           <?php
       $con = mysqli_connect("localhost","root","","myproject");
        if (mysqli_connect_errno()) {
           echo "Failed to connect to MySQL: " . mysqli_connect_error();
           exit();
        }
$adresse = $_POST['mail'];
$mdp = $_POST['mdp'];
 if($adresse !== "" && $mdp !== "")
 {   
 $sql = "SELECT * FROM administrateur where adresse = '$adresse' and mdp = '$mdp' ";
 $result = mysqli_query($con,$sql);
 if (mysqli_num_rows($result) >0) {
    $row = mysqli_fetch_array($result); ?>

        <h1><?php echo 'Bienvenue '.$row['nom'].' '.$row['prenom'];?> </h1>

 <?php
    
} else {
    echo "adresse e-mail ou mot de passe incorrect.";
}
} else {
echo "Veuillez remplir tous les champs.";
}

mysqli_close($con);
 ?>
            </div>
<div id="footer">
            Copyright © psau.edu.sa
            </div>
 </body>
</HTML>