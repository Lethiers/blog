<?php
    include '.utils/connectBdd.php';
    include '.view/view_modify_utilisateur.php';
    include './model_utilisateur.php';

    $util = new Utilisateur ("", "", "", "", "");
    $util->setIdUtil($_SESSION['id_util'])

    $tab = $util->showUserById($bdd);

    foreach($tab as $value){
        echo '<p><input type="texte" name="mail_util" value="'.$value->mail_util.'"> votre addresse Email</p>'
    }
    echo '<p><input type="submit" name="change_mail">change</p>'

    if(isset($_POST['modifPass'])){
        if($tab[0]['mdp_util'] == $_POST['passOld']{
            $util->setPwdUser($_POST['passNew']);
            $util->modifyMdpUser($bdd,$_SESSION['id_util']);
        }
    }

    if(isset($_POST['change_mail'])){
        $util->setMailUser($_POST['mail_util']);
        $util->modifyEmailUser($bdd,$_SESSION['id_util']);
    }



?>