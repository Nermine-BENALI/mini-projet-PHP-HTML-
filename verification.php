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
if(isset($_POST['submit'])){
    if(isset($_POST['codemat']) && isset($_POST['nomens']) && isset($_POST['codec'])){
        $codemats = $_POST['codemat'];
        $nomens = $_POST['nomens'];
        $codecs = $_POST['codec'];
        
        if(count($codemats) > 0 && count($nomens) > 0 && count($codecs) > 0){
          ?> <h2> <?php  $message = "Vous affectez "; ?> <h2>
            <?php
            
            foreach($codemats as $codemat){
                $sql = "SELECT libelle FROM matiere WHERE code = '".$codemat."'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
                $libelle = $row['libelle'];
                
                $message .= $libelle." enseigné par ";
                
                foreach($nomens as $nomen){
                    $sql = "SELECT prenom,nom FROM enseignent WHERE nom = '".$nomen."'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $prenom = $row['prenom'];
                    $nom= $row['nom'];
                    $message .= $nom. " ".$prenom." ";

                    $sqli = "UPDATE `enseignent` SET `idmat`='$codemat' WHERE nom = '".$nomen."'";
                    $resultes = mysqli_query($con, $sqli);
                }
                
                $message .= "au classe ";
                
                foreach($codecs as $codec){
                    $sql = "SELECT nomclasse FROM classe WHERE codeclasse = '".$codec."'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $nomclasse = $row['nomclasse'];
                    
                    $message .= $nomclasse." ";
                }
            }
            
            echo $message;
        }else{
            echo "Veuillez sélectionner au moins une matière, un enseignant et une classe.";
        }
    
    }
}
?>
</div>

<div id="footer">
            Copyright © psau.edu.sa
            </div>

</body>
</HTML>