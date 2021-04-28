<?php
require 'conn.php';
?>

<?php
    if(isset($_POST['bt_save'])){
        $resultat=insert_user($nom,$prenom,$adresse,$tel);
        if($resultat){
            header('location:list.php');
        }
    }
    
    if(isset($_POST['bt_update'])){
        $resultat=update_user($_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['tel']);
        if($resultat){
            header('location:list.php');
        }
    }
    
    if(isset($_POST['bt_delete'])){
        $resultat=delete_user($id_users);
        if($resultat){
            header('location:list.php');
        }
    }
?>