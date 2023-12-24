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
$role=$_POST['role'];;       
$addresse_mail = $_POST['mail'];
$mdp = $_POST['mdp'];
$adresse = $_POST['mail'];
$mdp = $_POST['mdp'];
$mail = $_POST['mail'];
$mdp = $_POST['mdp'];

 if($addresse_mail !== "" && $mdp !== "" )
 {   if ($role=="ensg") {
 $sql = "SELECT * FROM enseignent where addresse_mail = '$addresse_mail' and mdp = '$mdp' ";
 $result = mysqli_query($con,$sql);
  include('bienvenueens.php');
  if (mysqli_num_rows($result) >0) {
    $rowens = mysqli_fetch_array($result); 
    
} 
} elseif  ($role=="admin") {
      $sql = "SELECT * FROM administrateur where adresse = '$adresse' and mdp = '$mdp' ";
    $result = mysqli_query($con,$sql) ;
    include('bienvenuadmin.php');
   
    if (mysqli_num_rows($result) >0) {
       $rowadm = mysqli_fetch_array($result); 
       
          } 
   }     
     if ($role=="etud") {
    $sql = "SELECT * FROM etudiant where mail = '$mail' and mdp = '$mdp' ";
    $result = mysqli_query($con,$sql);
     include('bienvenuetud.php');
     if (mysqli_num_rows($result) >0) {
       $rowens = mysqli_fetch_array($result); 
     }
    }   
    else {  
   echo '<script> alert("adresse e-mail ou mot de passe incorrect."); 
   window.location.href = "index.html"  </script>';
} 
}else {
   echo '<script> alert("Veuillez remplir tous les champs."); 
   window.location.href = "index.html"  </script>';
 }



?>
 </body>
</HTML>