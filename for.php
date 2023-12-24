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
$specialite = $_POST['s'];
$addresse_mail = $_POST['mail'];
$mdp = $_POST['mdp'];
           $sql = "INSERT INTO enseignent values ('$nom','$prenom','$specialite','$addresse_mail','$mdp','id') ";
            $result = mysqli_query($con,$sql); 
           ?>  
</BODY>
</HTML>
    