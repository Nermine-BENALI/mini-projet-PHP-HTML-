<HTML>
    <head> <title> form </title> 
    <link rel="stylesheet" href="stylebin.css"></head> 
<BODY>
 <div id="header" >
            <h1>ISET GABES </h1>
            </div>
<div id="nav">
<a href="bienvenuadmin.php" > Acceuil </a> <br>
            Profil <br>
            <a href="ajoutclasse.html"> Ajout un classe </a> <br>
             <a href="matiere.html"> Ajouter une matiere </a> <br>
             <a href="Listemat.php"> Liste des matiere </a> <br>
             <a href="Listeensg.php"> Liste des enseignents </a> <br>
             <a href="Listeclasse.php"> Liste des classes </a> <br>
             <a href="listeetud.php"> Liste etudiant </a> <br>
             Affectation etudiant <br> 
             Affectation Pedagogique
<div id="section">
<?php

        $con = mysqli_connect("localhost","root","","myproject");
        if (mysqli_connect_errno()) {
           echo "Failed to connect to MySQL: " . mysqli_connect_error();
           exit();
        }
$codeclasse= $_POST['codecla'];
$nomclasse= $_POST['libclasse'];
$niveau = $_POST['niv'];
           $sql = "INSERT INTO classe (codeclasse,nomclasse,niveau) values ('$codeclasse','$nomclasse','$niveau') ";
            $result = mysqli_query($con,$sql); ?>
            <h1> <?php echo 'classe '.$nomclasse.' bien ajoutee'; ?> </h1>
    </div>
<div id="footer">
            Copyright © psau.edu.sa
            </div>
</BODY>
</HTML>
    