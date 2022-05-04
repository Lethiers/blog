<?php 
    include './utils/connectBdd.php';
    include './model/model_utilisateur.php';
    include './model/model_administrateur.php';
    include './model/model_role.php';
    include './view/view_modify_role_user.php';

    // if($_SESSION['admin'] == true){
        $admin = new Administrateur ("", "", "", "", "");
        $role = new Role ("");
        $tabRole = $role->showAllRole($bdd);
        $tabUser = $admin->showAllUser($bdd);

        foreach($tabUser as $value){
            echo '<p>'.$value->mail_util.'<p>';
            echo  '<p>';
            foreach($tabRole as $value2){
                echo '<a href="./controler/ctrl_threat?id_util='.$value->id_util.'&idrole='.$value2->id_role.'">'.$value2->name_role.'</a>';
            echo '</p>';
            }
        }
?>
    