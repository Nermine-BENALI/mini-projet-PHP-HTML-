<HTML>
    <head> <title> form </title>
    <link rel="stylesheet" href="stylebin.css">
 </head> 
 <BODY>

 <?php  
  $con = mysqli_connect("localhost","root","","myproject");
  if (mysqli_connect_errno()) {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     exit();
     
   }     
 $sql = "SELECT nom, prenom, addresse_mail , specialite,mdp FROM enseignent";
 $result = $con->query($sql);
 
 
 if ($result->num_rows > 0) {

     while ($row = $result->fetch_assoc()) {
         $nom = $row["nom"];
         $prenom = $row["prenom"];
         $addresse_mail = $row["addresse_mail"];
         $specialite = $row["specialite"];
         $mdp = $row["mdp"];
      
     }
 } else {
     echo "Aucun résultat trouvé";
 }
 
 $con->close();
 ?>
    <div id="header" >
            <h1>ISET GABES </h1>
            </div>
<div id="nav">
            <a href="binevenu.php"> Acceuil </a> <br>
            Profil <br>
             Emploi de temp <br>
             Reclamation <br>
             Déconnexion 
            </div>
<div>
<div id="section">
<h1> PROFIL </h1>

    <div  id="info">
    <table>
                    <tbody  >
                        <tr>
                            <td>NOM</td>
                            <td>:</td>
                            <td> <?php echo  $nom ; ?> </td>
                        </tr>
                        <tr>
                            <td>PRENOM</td>
                            <td>:</td>
                            <td><?php echo  $prenom; ?></td>
                        </tr>
                        <tr>
                            <td>SPECILATITE</td>
                            <td>:</td>
                            <td><?php echo  $specialite; ?></td>
                        </tr>
                        <tr>
                            <td>Addresse e-mail</td>
                            <td>:</td>
                            <td><?php echo  $addresse_mail;?></td>
                        </tr>
                        <tr>
                            <td>Votre mot de passe</td>
                            <td>:</td>
                            <td><?php echo  $mdp; ?></td>
                        </tr>
                       
                    </tbody>
                </table>
</div>
</div>
<div id="footer">
            Copyright © psau.edu.sa
            </div>



</div>
 </body>
 </html>