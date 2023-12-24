<html>
<head>
    
     <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>


</html>
<?php

if(!empty($_POST)){
    $con = mysqli_connect("localhost","root","","myproject");
    if (mysqli_connect_error())
    {
       echo "failed to connect to MySQL:" . mysqli_connect_error();
        exit();
    }
    
    $adresse_email = $_POST['Adresse_email'];
    $mdp = $_POST['Mot_Passe'];

    $sql = "SELECT * FROM etudiant where adresse_email = '$adresse_email' AND mot_de_passe ='$mdp'; ";

    $result = mysqli_query($con,$sql);
    if (!$result) {
        echo "Connexion a été échoué <br />";

        echo $sql;
        exit;
    }
    $row = mysqli_fetch_array($result);

    if($row == NULL){
        echo 'Etudiant introuvable';
?>
        <br />
        <a href="pageinscription.html"> créez un compte </a> <br>

<?php
        exit;
    }
    
    echo 'Bienvenue '.$row['Nom'].' '.$row['Prenom'];
}

?>