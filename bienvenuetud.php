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
            <a href="profil.php"> Profil </a> <br>
             Emploi de temp <br>
             Reclamation <br>
             Déconnexion 
            </div>
<div id="section">
    
           <?php
       $con = mysqli_connect("localhost","root","","myproject");
        if (mysqli_connect_errno()) {
           echo "Failed to connect to MySQL: " . mysqli_connect_error();
           exit();
        }
  

$mail = $_POST['mail'];
$mdp = $_POST['mdp'];

 if($mail !== "" && $mdp !== "" )
 {   
 $sql = "SELECT * FROM etudiant where mail = '$mail' and mdp = '$mdp' ";
 $result = mysqli_query($con,$sql);
 if (mysqli_num_rows($result) >0) {
    $row = mysqli_fetch_array($result); ?>

        <h1><?php echo 'Bienvenue '.$row['nom'].' '.$row['prenom'];?> </h1>
 <?php
 } else {
   echo '<script> alert("adresse e-mail ou mot de passe incorrect."); 
   window.location.href = "index.html"  </script>';
} 
} else {
   echo '<script> alert("Veuillez remplir tous les champs."); 
   window.location.href = "index.html"  </script>';

} 
mysqli_close($con);
?>
            </div>
<div id="footer">
            Copyright © psau.edu.sa
            </div>
 </body>
</HTML>