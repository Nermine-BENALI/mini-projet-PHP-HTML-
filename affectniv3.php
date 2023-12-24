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
	<h1> NIVEAU 3 </h1>
   <?php   
  $con = mysqli_connect("localhost","root","","myproject");
  if (mysqli_connect_errno()) {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     exit();
     
   }     
   
 $sql = "SELECT code, libelle, niveau ,coeff FROM matiere where niveau=3";
 $result = mysqli_query($con,$sql);
 
              if($result)
             {  ?>
             <h2>Selectionne une matiere :</h2>
	
	<form method="POST" action="verification.php">
	<table border="1">
		<thead>
			<th> </th>
			<th>Code </th>
			<th>Libelle</th>
			<th>Coefficient</th>
		</thead>
		<tbody>			
					   
                        <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC) ){ ?>   
					<tr>	<td><input type="checkbox" value="<?php echo $row['code']; ?>" name="codemat[]"></td>
                        <td><?php echo $row['code']; ?></td>
						<td><?php echo $row['libelle']; ?></td>
						<td><?php echo $row['coeff']; ?></td>
					</tr>
					<?php
				}
			?>
 
		</tbody>
	</table>
	<?php
	$sql = "SELECT nom, prenom, specialite ,addresse_mail FROM enseignent";
 $result = mysqli_query($con,$sql);
 
              if($result)
             {  ?>
             <h2>Selectionne un enseignent :</h2>
	<div>
	<table border="1">
		<thead>
			<th> </th>
			<th>nom </th>
			<th>prenom</th>
			<th>specialite</th>
		</thead>
		<tbody>			
					  
                        <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC) ){ ?>   
					<tr> 	<td><input type="checkbox" value="<?php echo $row['nom']; ?>" name="nomens[]"></td>
                        <td><?php echo $row['nom']; ?></td>
						<td><?php echo $row['prenom']; ?></td>
						<td><?php echo $row['specialite']; ?></td>
					</tr>
					<?php
				}
			?>
 
		</tbody>
	</table>
	 </form>
                  <?php 
$sql = "SELECT codeclasse,nomclasse FROM classe where niveau=3";
 $result = mysqli_query($con,$sql);
 
              if($result)
             {  ?>
             <h2>Selectionne une classe :</h2>
	<div>
	<table border="1">
		<thead>
			<th> </th>
			<th>Code de classe </th>
			<th>Nom de classe</th>
		</thead>
		<tbody>			
					 
                        <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC) ){ ?>   
					<tr>  	<td><input type="checkbox" value="<?php echo $row['codeclasse']; ?>" name="codec[]"></td>
                        <td><?php echo $row['codeclasse']; ?></td>
						<td><?php echo $row['nomclasse']; ?></td>
						
					</tr>
					<?php
				}
			
 }
}else {   echo "Failed" ; } 
                    ?>
		</tbody>
	</table>
    <p> <input class="login-btn" type="submit" value="CHOISIR" name="submit" />   </p>    
    <p>    <input class="login-btn" type="reset" value="ANNULER" />  </p> 

	</form>
            </div> 
               
		
	</div>
<?php }
?> 
<div id="footer">
            Copyright © psau.edu.sa
            </div>

</body>
</HTML>