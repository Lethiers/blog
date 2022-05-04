<?php
// import -------------------

// bdd
include './utils/connectBdd.php';

// model article 
include './model/model_article.php';

// model categorie 
include './model/model_categorie.php';

// view add article
include './view/view_add_article.php';



        ////////////////////////////// COPIER COLLER DE LA SELECTION DE CATEGORIES ////////////////////////////////

        
        // echo '<form action="" method="post">';
        echo "<select name='categorie'>";
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

        // var_dump($_GET['categorie']);
        // ------------------- logic -----------------

// --------message d'erreur
$message = "";


if (isset($_POST['create_art'])) {
    if (isset($_POST['name_art'])&& !empty($_POST['name_art'])&&
    isset($_POST['content_art'])&& !empty($_POST['content_art']) &&
    isset($_POST['date_art'])&& !empty($_POST['date_art'])) {
        
        $art = new Article (null,null,null);

        $art->setNameArticle($_POST['name_art']);
        $art->setContentArticle($_POST['content_art']);
        $art->setDateArticle($_POST['date_art']);

       

        $art->newArticle($bdd,$_POST['categorie']);

        $message = 'l\'article '.$art->getNameArticle().' est créé';

    }else {
        $message = "merci de remplir tout les champs";
    }
}else {
    $message = "merci de remplir les champs";
}

// ----- impression erreur
echo $message;

?>