<?php

include_once 'database.php';

class  Animal extends Database {

    private $nom;
    private $espece;
    private $alimentation;
    private $image;
    private $paysorigine;
    private $descriptioncourte;
    private $id_hab;

    public function __construct($nom,$espece,$alimentation,$image,$paysorigine,$descriptioncourte,$id_hab){
        $this->nom=$nom;
        $this->espece=$espece;
        $this->alimentation=$alimentation;
        $this->image=$image;
        $this->paysorigine=$paysorigine;
        $this->descriptioncourte=$descriptioncourte;
        $this->id_hab=$id_hab;
    }


    public function getNom() { return $this->nom; }
    public function getEspece() { return $this->espece; }
    public function getAlimentation() { return $this->alimentation; }
    public function getImage() { return $this->image; }
    public function getPaysOrigine() { return $this->paysorigine; }
    public function getDescriptionCourte() { return $this->descriptioncourte; }

    public function setNom($nom) { $this->nom=$nom; }
    public function setEspece($espece) { $this->espece=$espece; }
    public function setAlimentation($alimentation) {$this->alimentation=$alimentation; }
    public function setImage($image) { $this->image=$image; }
    public function setPaysOrigine($paysorigine) {$this->paysorigine=$paysorigine; }
    public function setDescriptionCourte($descriptioncourte) { $this->descriptioncourte=$descriptioncourte; }

    public function ajouter(){
        try{

        $sql="INSERT INTO animaux (nom,espece,alimentation,image,paysorigine,descriptioncourte) 
        VALUES (?,?,?,?,?,?)";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$this->nom,$this->espece,$this->alimentation,$this->image,$this->paysorigine,$this->descriptioncourte]);
        echo "Animal succesfully added";

        }

        catch(PDOException $e){

        echo "ERREUR SQL : " . $e->getMessage() . 
             " in : " . $e->getFile() . 
            " line : " . $e->getLine();
      }
        
    }

    public function modifier($column,$value,$id){

        try {

        $sql="UPDATE animaux  SET $column=? WHERE id=? ";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$value,$id]);

         
        }

        catch (PDOException $e){

            echo "ERREUR SQL : " . $e->getMessage() . 
             " in : " . $e->getFile() . 
            " line : " . $e->getLine();

        }


        
    }

    public function delete($id){

        try{

        $sql="DELETE FROM animaux where id='?'";
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
        $sql="SELECT FROM animaux";
        $stmt=$this->connect()->query($sql);
        return $stmt->fetchall;
    }

} 
