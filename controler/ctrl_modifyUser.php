<?php
    include '.utils/connectBdd.php';

    $util = new Utilisateur ("", "", "", "", "");
    $util->setIdUtil($_SESSION['id_util'])

    $tab = $util->showUserById($bdd);

    foreach($tab as $value){
        echo '<p><input type="texte" name="mail_util" value="'.$value->mail_util.'"> votre addresse Email</p>'
    }



?>