<HTML>
    <head> <title> form </title>
    <link rel="stylesheet" href="stylebin.css">
 </head> 
<BODY>
 <div id="header" >
            <h1>ISET GABES </h1>
            </div>
<div id="nav">
            <a href="bienvenuadmin.php" > Acceuil </a> <br>
            Profil <br>
            <a href="ajoutclasse.html"> Ajout un Classe </a> <br>
             <a href="matiere.html"> Ajouter une matiere </a> <br>
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
 $sql =  "SELECT e.nom, e.prenom, e.specialite, e.addresse_mail, m.libelle
 FROM enseignent e
 INNER JOIN matiere m ON e.idmat = m.code";
 
 $result = mysqli_query($con,$sql);
 
              if($result)
             {  ?>
              <table border=1px >
                <tr>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>SPECILATITE</th>
                <th>ADRESSE E-MAIL</th>
                <th>MATIERE</th>
                </tr>
                <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC) ){ ?>
                <tr>
                    <td> <?php echo $row["nom"] ; ?> </td>
                    <td> <?php echo $row["prenom"] ;?> </td>
                    <td> <?php echo $row["specialite"] ;?> </td>
                    <td> <?php echo $row["addresse_mail"]; ?> </td>
                    <td> <?php echo $row["libelle"]; ?> </td>

                </tr>
                <?php } ?>
                    <?php }else {   echo "Failed" ; } 
                    

                
mysqli_free_result($result);
mysqli_close($con);
 
?>        
</table> 
</div>
<div id="footer">
            Copyright © psau.edu.sa
 </div>




 </body>
 </html>