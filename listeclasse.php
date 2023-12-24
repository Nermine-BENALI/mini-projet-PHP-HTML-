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
            <a href="ajoutclasse.html"> Ajout un classe </a> <br>
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
 $sql = "SELECT codeclasse,nomclasse,niveau FROM classe";
 $result = mysqli_query($con,$sql);
 
              if($result)
             {  ?>
              <table border=1px >
                <tr>
                <th>CODE CLASSE</th>
                <th>NOM CLASSE</th>
                <th>NIVEAU</th>
                </tr>
                <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC) ){ ?>
                <tr>
                    <td> <?php echo $row["codeclasse"] ; ?> </td>
                    <td> <?php echo $row["nomclasse"] ;?> </td>
                    <td> <?php echo $row["niveau"] ;?> </td>
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