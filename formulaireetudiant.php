<html>
<head> <title> formulaire php</title></head>
     <link rel="stylesheet" type="text/css" href="style.css"/>
    <body>
          
    <?php
        $con = mysqli_connect("localhost","root","","myproject");
            if (mysqli_connect_error())
            {
               echo "failed to connect to MySQL:" . mysqli_connect_error();
                exit();}

        if(!empty($_POST)){
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $id=$_POST['id'];
            $email=$_POST['Adresse_email'];
            $motspasse=$_POST['Mot_Passe'];
            $adresse=$_POST['Adresse'];
            $telephone=$_POST['Telephone'];
            $departement=$_POST['Departement'];


          $sql="INSERT INTO `etudiant`(`Nom`, `Prenom`, `id`, `adresse_email`, `mot_de_passe`, `adresse`, `telephone`, `departement`) values ('$nom','$prenom','$id','$email','$motspasse', '$adresse','$telephone', '$departement')";
          $result = mysqli_query($con,$sql);
            if (!$result) {
                echo "Insertion a été échoué <br />";

                echo $sql;
                exit;
            }
            echo "Profil étudiant ajouté avec succés";
            
        
    ?>
        <table border="1">
            <tr>
                <td>Nom </td>
                <td><?php echo $nom; ?></td>
            </tr>
            <tr>
                <td>Prénom</td>
                <td><?php echo $nom; ?></td>
            </tr>
            <tr>
                <td>ID</td>
                <td><?php echo $id; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Mots de passe</td>
                <td><?php echo $motspasse; ?></td>
            </tr>
            <tr>
                <td>Adresse</td>
                <td><?php echo $adresse; ?></td>
            </tr>
            <tr>
                <td>Telephone</td>
                <td><?php echo $telephone; ?></td>
            </tr>
        </table>
        
        <a href="index.html"> Connectez-vous </a> <br>

        <?php
            }
        ?>
        
 </body>
</html>