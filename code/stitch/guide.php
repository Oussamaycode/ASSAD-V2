<?php


include_once 'utilisateur.php'

class Guide extends Utilisateur

{
    private $statut;


    public function __construct($nom, $email, $role,$statut='pending') {
    parent::__construct($nom, $email, $role);
    $this->statut=$staut;
}


    public function getStaut(){
        return $this->statut;
    }

    public setStatut(){
        $this->statut=$statut;
    }

    public function approuverguide($id){

        try{
        $sql="UPDATE utilisateurs SET statut='approved' where id=? and rôle='guide'"
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$id]);
        }
        if(!$sql){
            throw new Exception('Guide Non trouvé');
        }
        catch(PDOException $e){
            echo "ERREUR PDO :" . $e->getMessage()."in:". $e->getFile() ."Line:". $e->getLine();
        }
        catch(Exception $e){
            echo $e->$getMessage();
        }
    }

}