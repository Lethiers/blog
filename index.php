<?php
    //session start
    session_start();
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';

    /*--------------------------ROUTER -----------------------------*/
        //test de la valeur $path dans l'URL et import de la ressource
        switch($path){
            //route /evalmvc/test -> ./test.php
            case $path === "/blog/connexion" : 
                include './controler/ctrl_connexion.php';
                break ;


        //route en cas d'erreur
            
                //route /blog/addCat -> ./controler/ctrl_create_categorie.php
            case $path === "/blog/addCat":
                include './controler/ctrl_create_cat.php';
                break ;
            //route /blog/showCat -> ./controler/ctrl_show_categorie.php
            case $path === "/blog/showCat":
                include './controler/ctrl_show_cat.php';
                break ;
                case $path !== "/blog/":
                    include './controler/ctrl_error.php';
                    break ;
            }
?>