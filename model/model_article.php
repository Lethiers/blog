<?php
class Article{
// attribut -----------------------------------------
protected $id;
protected $name;
protected $content;
protected $date;
protected $id_cat;

// constructor  -----------------------------------
public function __constructor($name,$content,$date,$id_cat){
    $this->name = $name;
    $this->content = $content;
    $this->date = $date;
    $this->id_cat = $id_cat;
}

// getteur et setteur  --------------------

// ID Article
public function getIdArticle():int{
    return $this->id;
}
public function setIdArticle($id):void{
    $this->id = $id;
}

// ID Cat
public function getIdCat():int{
    return $this->id_cat;
}
public function setIdCat($id_cat):void{
    $this->id_cat = $id_cat;
}

// Article
public function getNameArticle():string{
    return $this->name;
}
public function setNameArticle($name):void{
    $this->name = $name;
}

// CONTENU
public function getContentArticle():string{
    return $this->content;
}
public function setContentArticle($content):void{
    $this->content = $content;
}


// DATE
public function getDateArticle():string{
    return $this->date;
}
public function setDateArticle($date):void{
    $this->date = $date;
}

// methodes ------------------------------------

// créer article
public function newArticle($bdd,$id):void{
    try {
        $req = $bdd->prepare('INSERT INTO article (name_art, content_art, date_art,id_cat) 
        VALUES(:name_art,:content_art,:date_art,:id_cat)');
        $req->execute(array(
            'name_art' => $this->getNameArticle(),
            'content_art' => $this->getContentArticle(),
            'date_art' => $this->getDateArticle(),
            'id_cat' => $id
        ));
        
    } catch (Exception $e) {
        die('Erreur :' .$e->getMessage());
    }
}


// voir article
public function showAllArticle($bdd):array{
    try {
        $req = $bdd->prepare('SELECT * FROM article');
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;

    } catch (Exception $e) {
        die('Erreur :' .$e->getMessage());
    }
}
// voir article par categorie
public function showArticleByCat($bdd,$id):array{
    try {
        $req = $bdd->prepare('SELECT * FROM article WHERE id_cat =:id_cat');
        $req->execute(array(
            'id_cat'=> $id
        ));
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;

    } catch (Exception $e) {
        die('Erreur :' .$e->getMessage());
    }
}


// voir  UN article
// public function showArticle($bdd,$id):array{
//     try {
//         $req = $bdd->prepare('SELECT * FROM article WHERE id_art=:id_art');
//         $req->execute(array(
//             'id_art'=> $id
//         ));
//         $data = $req->fetchAll(PDO::FETCH_OBJ);
//         return $data;

//     } catch (Exception $e) {
//         die('Erreur :' .$e->getMessage());
//     }
// }

// modifier un article
// public function modifyArticle($bdd,$id):void{
//     try {
//         $req = $bdd->prepare('UPDATE article SET nom_art = :nom_art, 
//         content_art = :content_art, date_art = :date_art  WHERE id_art = :id_art');
//         $req->execute(array(
//             'name_art' => $this->name,
//             'content_art' => $this->content,
//             'date_art' => $this->date,
//             'id_art' => $id
//             ));
//     } catch (Exception $e) {
//         die('Erreur :' .$e->getMessage());
//     }
// }

// supprimer un article
// public function deleteArticle($bdd,$id):void{
//     try {
//         $req = $bdd->prepare('DELETE FROM article WHERE id_art=:id_art');
//         $req->execute(array(
//             'id_art'=> $id
//         ));

//     } catch (Exception $e) {
//         die('Erreur :' .$e->getMessage());
//     }
// }



}

?>