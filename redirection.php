<?php
if(isset($_POST['niv'])){
    $niveau = $_POST['niv'];
    
    if($niveau === "niv1") {
        header('Location: affectniv1.php');
    } else if($niveau === "niv2") {
        header('Location: affectniv2.php');
    } else if($niveau === "niv3") {
        header('Location: affectniv3.php');
    }
}?>