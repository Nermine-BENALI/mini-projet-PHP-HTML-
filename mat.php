<HTML>
    <head> <title> form </title> 
    <link rel="stylesheet" href="stylebin.css"></head> 
<BODY>
 <div id="header" >
            <h1>ISET GABES </h1>
            </div>
<div id="nav">
            <a href="bienvenuadmin.php"> Acceuil </a> <br>
           Profil <br>
           <a href="ajoutclasse.html">Ajout un  Classe </a> <br>
             <a href="matiere.html"> Matiere </a> <br>
             <a href="Listemat.php"> Liste des matiere </a> <br>
             <a href="Listeensg.php"> Liste des enseignents </a> <br>
             <a href="Listeclasse.php"> Liste des classes </a> <br>
             <a href="listeetud.php"> Liste etudiant </a> <br>
             Affectation etudiant <br> 
             Affectation Pedagogique
            </div>
<div id="section">
<?php

        $con = mysqli_connect("localhost","root","","myproject");
        if (mysqli_connect_errno()) {
           echo "Failed to connect to MySQL: " . mysqli_connect_error();
           exit();
        }
 $code= $_POST['code'];
$libelle= $_POST['lib'];
$niveau = $_POST['niv'];
$coeff = $_POST['coeff'];
           $sql = "INSERT INTO matiere (code,libelle,niveau,coeff) values ('$code','$libelle','$niveau','$coeff') ";
            $result = mysqli_query($con,$sql); ?>
            <h1> <?php echo 'Matiere '.$libelle.' bien ajoutee'; ?> </h1>
    </div>
<div id="footer">
            Copyright © psau.edu.sa
            </div>
</BODY>
</HTML>
    