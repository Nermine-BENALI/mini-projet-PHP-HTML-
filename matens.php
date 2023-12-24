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
             <a href="classe.html"> Classe </a> <br>        
             <a href="Listemat.php"> Liste des matiere </a> <br>
            </div>
<div id="section">
    <?php  
  $con = mysqli_connect("localhost","root","","myproject");
  if (mysqli_connect_errno()) {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     exit();
      }  
 $sql = "SELECT code, libelle, niveau ,coeff, idmat FROM matiere INNER JOIN enseignent ON matiere.code=enseignent.idmat ";
 $result = mysqli_query($con,$sql);
              if($result)
             {  ?>
              <table border=1px >
                <tr>
                <th>CODE</th>
                <th>LIBELLE</th>
                <th>NIVEAU</th>
                <th>COEFFICIENT</th>
                </tr>
                <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC) ){ ?>
                <tr>
                    <td> <?php echo $row["code"] ; ?> </td>
                    <td> <?php echo $row["libelle"] ; ?> </td>
                    <td> <?php echo $row["niveau"] ; ?> </td>
                    <td> <?php echo $row["coeff"]; ?> </td>
                </tr>
                <?php } ?>
                    <?php }else {   echo "Failed" ; }                 
mysqli_free_result($result);
mysqli_close($con); ?>         
    </BODY>
</HTML>
