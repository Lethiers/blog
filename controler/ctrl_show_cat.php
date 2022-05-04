<?php
//import
include './utils/connectBdd.php';
include './model/model_categorie.php';
include './view/view_show_cat.php';
include './model/model_article.php';

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

if (isset($_GET['categorie'])) {
  
        //instance d'un nouvel objet Article avec le constructeur
        $article = new Article(null, null, null);
        //stocke dans un tableau la liste des article de la BDD
        $tab = $article->showArticleByCat($bdd, $_GET['categorie']);
        
        foreach($tab as $value){
            echo '<p>le nom de l\'article :' .$value->name_art.'</p>';
            echo '<p>la date de l\'article :' .$value->date_art.'</p>';
            echo '<p>le contenu de l\'article :' .$value->content_art.'</p>';
        }
}





?>
