<?php
    //import
    include '../utils/connectBdd.php';
    include '../model/model_commentaire.php';
    include '../view/view_add_commentaire.php';
    //variable message
    $date = date('Y-m-d');
    $msg = "";
    //test si le bouton ajouté est cliqué
    if(isset($_POST['add'])){
        //test si les champs sont rempli
        if(isset($_POST['add_commentaire']) AND $_POST['add_commentaire'] !=""){
            //instancier un nouvel objet Commentaire (appel au constructeur)
            $comment = new Commentaire($_POST['add_commentaire'],$date);
            //appel à la méthode addComment de la classe Commentaire
            $comment->addComment($bdd,null,null);
            //utiliser le getter pour afficher le nom
            $msg = 'Le commentaire à été ajouté';
            
        }
        //si vide
        else{
            echo 'Veuillez remplir les champs du formulaire';

        }
    }    
    //Affichage en JS des Messages 
    echo $msg;
?>