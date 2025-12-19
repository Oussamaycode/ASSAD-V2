<?php

class Visite {

    private $titre;
    private $date;
    private $heure;
    private $langue;
    private $capaciteMax;
    private $statut;
    private $duree;
    private $prix;
    private $id_guide;

    public function __construct($titre,$date,$heure,$langue,$capaciteMax,$statut,$duree,$prix,$id_guide){

        $this->titre=$titre;
        $this->date=$date;
        $this->heure=$heure;
        $this->langue=$langue;
        $this->capaciteMax=$capaciteMax;
        $this->statut=$statut;
        $this->duree=$duree;
        $this->prix=$prix;
        $this->id_guide=$id_guide;

    }

    public function getTitre(){return $this->titre;}
    public function getDate(){return $this->date;}
    public function getHeure(){return $this->heure;}
    public function getLangue(){return $this->langue;}
    public function getCapaciteMax(){return $this->capaciteMax;}
    public function getStatut(){return $this->statut;}
    public function getDuree(){return $this->duree;}
    public function getPrix(){return $this->prix;}
    public function getIdguide(){return $this->id_guide;}

    public function setTitre($titre){$this->titre=$titre;}
    public function setDate($date){$this->date=$date;}
    public function setHeure($heure){$this->heure=$heure;}
    public function setLangue($langue){$this->langue=$langue;}
    public function setCapaciteMax($capaciteMax){$this->capaciteMax=$capaciteMax;}
    public function setStatut($statut){$this->statut=$statut;}
    public function setDuree($duree){$this->duree=$duree;}
    public function setPrix($prix){$this->prix=$prix;}
    public function setIdguide($id_guide){$this->id_guide=$id_guide;}


    public function ajouter(){

        try{

        $sql="INSERT INTO visiteguidees (titre,dateheure,langue,capacite_max,statut,duree,prix,id_guide) 
        VALUES (?,?,?,?,?,?,?,?)";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$this->titre,$this->date,$this->heure,$this->langue,$this->capaciteMax,$this->statut,$this->duree,$this->prix,$this->id_guide]);
        echo "Visite succesfully added";

        }

        catch(PDOException $e){

        echo "ERREUR SQL : " . $e->getMessage() . 
             " in : " . $e->getFile() . 
            " line : " . $e->getLine();
      }
        
    
    }


    public function modifier($column,$value,$id){

        try {

        $sql="UPDATE  visiteguidees SET $column=? WHERE id=? ";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$value,$id]);

         
        }

        catch (PDOException $e){

            echo "ERREUR SQL : " . $e->getMessage() . 
             " in : " . $e->getFile() . 
            " line : " . $e->getLine();

        }


        
    }

    public function annuler($id){

        try {

        $sql="UPDATE  visiteguidees SET $statut=1 WHERE id=? ";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$id]);

         
        }

        catch (PDOException $e){

            echo "ERREUR SQL : " . $e->getMessage() . 
             " in : " . $e->getFile() . 
            " line : " . $e->getLine();

        }


    }

    public function afficher(){
        try{

        }
        $sql="SELECT FROM visitesguidees";
        $stmt=$this->connect()->query($sql);
        return $stmt->fetchall;*
        
    }

    
}