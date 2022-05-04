<?php 

        class Administrateur extends utilisateur{

        public function showAllUser($bdd){
            try {
                $req = $bdd->prepare('SELECT * FROM utilisateur');
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                return $data;
        
            } catch (Exception $e) {
                die('Erreur :' .$e->getMessage());
            }
        }

        public function setRoleUserById($bdd, $id, $role){
            try{   
                $req =$bdd->prepare('UPDATE utilisateur SET id_role = :id_role WHERE id_util = :id_util');
                    $req->execute(array(
                        'id_role' => $role,
                        'id_util' => $id
                    ));

            }
            catch (Exception $e) {
                die('Erreur :' .$e->getMessage());
            }
        }
    }
?>