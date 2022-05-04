<?php
    //import
    include '../utils/connectBdd.php';
    include '../model/model_commentaire.php';
    include '../view/view_show_all_commentaire.php';
    //instancier un nouvel objet
    $comment = new Commentaire(null, null);
    //stocke dans un tableau la liste des articles de la BDD
    $tab = $comment->showAllComment($bdd);
    //boucle pour afficher la liste des articles (avec le nom et le prix)
    foreach($tab as $value){
        echo '<li>'.$value->content_com.', '.$value->date_com.'</li>'; 
        
        
    }
    echo '</ul>';
?>