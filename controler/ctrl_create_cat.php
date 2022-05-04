<?php
    //import
    include './utils/connectBdd.php';
    include './model/model_categorie.php';
    include './view/view_create_cat.php';
//variable message
$msg = "";
$categorie = new Categorie(null);
//test si le bouton ajouté est cliqué
if(isset($_POST['add'])){
    //test si les champs sont rempli
    if(isset($_POST['name_cat'])  AND 
    $_POST['name_cat'] != "" ){
        //instancier un nouvel objet Article (appel au constructeur)
        $cat = new Categorie($_POST['name_cat']);
        //appel à la méthode addCat de la classe Categorie
        $cat->addCat($bdd);
        //utiliser le getter pour afficher le nom
        $msg = ''.$_POST['name_cat'].' à été ajouté';


        ////////////////////////////// COPIER COLLER DE LA SELECTION DE CATEGORIES ////////////////////////////////

        echo '<form>';
        echo '<form action="" method="get">';
        //instancier un nouvel objet
        $cat = new Categorie(null);
        //stocke dans un tableau la liste des catégories de la BDD
        $tab = $cat->showAllCategorie($bdd);
        //boucle pour afficher la liste des catégories (avec le nom )
        foreach($tab as $value){
            echo '<option value ='.$value->id_cat.'>   '.$value->name_cat.'  </option>';
        }


        echo '</select>';

        echo '<input type="submit" value="voir">';
        echo '</form>';

        ////////////////////////////// COPIER COLLER DE LA SELECTION DE CATEGORIES ////////////////////////////////
    }
    //si vide
    else{
        $msg = 'Veuillez remplir les champs du formulaire';
    }
}    
//Affichage  Messages 
echo $msg;
?>
