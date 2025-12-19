<?php

include_once 'database.php';

class Habitats extends Database{

    private $nom;
    private $typeclimat;
    private $description;
    private $zonezoo;

    public function __construct($nom,$typeclimat,$description,$zonezoo){
        $this->nom=$nom;
        $this->typeclimat=$typeclimat;
        $this->description=$description;
        $this->zonezoo=$zonezoo;
    }

    public function getNom(){return $this->nom}
    public function getTypeClimat(){return $this->typeclimat}
    public function getDescription(){return $this->description}
    public function getZoneZoo(){return $this->zonezoo}

    public function setNom($nom){$this->nom=$nom}
    public function setTypeClimat($typeclimat){$this->typeclimat=$typeclimat}
    public function setDescription($description){$this->description=$description}
    public function setZoneZoo($zonezoo){$this->zonezoo=$zonezoo}
    
    public function ajouter(){
        try{
        $sql="INSERT INTO habitats (nom,typeclimat,description,zonezoo)
            VALUES(?,?,?,?)";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$this->nom,$this->typeclimat,$this->description,$this->zonezoo]);
        }
        catch(PDOException $e){
            echo "ERREUR SQL : " . $e->getMessage() . 
             " in : " . $e->getFile() . 
            " line : " . $e->getLine();
        }
    }

    public function modifier($column,$value,$id){
        try{
        $sql="UPDATE habitats SET $column=? where id=? ";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$value,$id]);
        }
        catch(PDOException $e){
            echo "ERREUR SQL : " . $e->getMessage() . 
             " in : " . $e->getFile() . 
            " line : " . $e->getLine();
        }
    }


    public function supprimer($id){
        try{
        $sql="DELETE FROM habitats where id=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$id]);
        }
        catch(PDOException $e){
            echo "ERREUR SQL : " . $e->getMessage() . 
             " in : " . $e->getFile() . 
            " line : " . $e->getLine();
        }
    }


    public function afficher(){
        $sql="SELECT FROM habitats";
        $stmt=$this->connect()->query($sql);
        return $stmt->fetchall;
    }
}