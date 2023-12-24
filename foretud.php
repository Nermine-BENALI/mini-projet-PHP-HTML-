<HTML>
    <head> <title> form </title> </head> 
<BODY>
<?php

        $con = mysqli_connect("localhost","root","","myproject");
        if (mysqli_connect_errno()) {
           echo "Failed to connect to MySQL: " . mysqli_connect_error();
           exit();
        }
$nom = $_POST['n'];
$prenom = $_POST['p'];
$mail = $_POST['mail'];
$mdp = $_POST['mdp'];
$telephone = $_POST['tlph'];
$adresse = $_POST['add'];


           $sql = "INSERT INTO etudiant values ('id','$nom','$prenom','$mail','$mdp','$adresse','$telephone') ";
            $result = mysqli_query($con,$sql); 
           ?>  
</BODY>
</HTML>
    