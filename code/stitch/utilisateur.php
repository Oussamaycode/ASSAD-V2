<?php

include_once 'database.php'; 

class Utilisateur extends Database{

    private $nom;
    private $email;
    private $role;
    private $statut;
    private $motpasse_hash;
    static $countvisitor=0;
    static $countguide=0;

    public function __construct($nom,$email,$role,$statut){
        $this->nom=$nom;
        $this->email=$email;
        $this->role=$role;
        $this->statut=$statut;
    }

    public function getNom(){return $this->nom;}
    public function getEmail(){return $this->email;}
    public function getRole(){return $this->role;}
     

    public function setNom($nom){$this->nom=$nom;}
    public function setEmail($email){$this->email=$email;}
    public function setRole($role){$this->role=$role;}

    public function setPassword($password){
        $this->motpasse_hash = password_hash($password, PASSWORD_DEFAULT);
    }


    public function inscription(){
        try{
            $sql1="SELECT COUNT(*) AS TOTAL  from utilisateurs where nom=? OR email=? ";
            $stmt1=$this->connect()->prepare($sql1);
            $stmt1->execute([$this->nom,$this->email]);
            $row=$stmt1->fetch();
            if($row['TOTAL']>0){
                throw new Exception("Nom ou email déjà utilisé");
                return;
            }
            if($this->role=='visitor'){
                $staut='active';
                $sql2="INSERT INTO utilisateurs (nom,email,`rôle`,motpasse_hash,statut) VALUES(?,?,?,?,?)";
                $stmt2=$this->connect()->prepare($sql2);
                $stmt2->execute([$this->nom,$this->email,$this->role,$this->motpasse_hash,$this->statut]);
            }
            elseif($this->role=='guide'){
                $staut='pending';
                $sql3="INSERT INTO utilisateurs (nom,email,`rôle`,motpasse_hash,statut) VALUES(?,?,?,?,?)";
                $stmt3=$this->connect()->prepare($sql3);
                $stmt3->execute([$this->nom,$this->email,$this->role,$this->motpasse_hash,$this->statut]);
            }

        }
        catch(PDOException $e){
            echo "ERREUR PDO : " . $e->getMessage() . 
             " in : " . $e->getFile() . 
            " line : " . $e->getLine();
            return;
        }
        catch(Exception $e){
            echo $e->getMessage();
        }

        
    }

    public function Login($username,$password){
        try{
           $sql="SELECT * FROM utilisateurs WHERE nom=?";
           $stmt=$this->connect()->prepare($sql);
           $stmt->execute([$username]);
           $user=$stmt->fetch();

           if (!$user) {
            echo "Utilisateur introuvable";
            return;
        }

         }

        catch(PDOException $e){
            echo "ERREUR PDO : " . $e->getMessage() . 
             " in : " . $e->getFile() . 
            " line : " . $e->getLine();
            return;
        }

        session_start();

        if(password_verify($password,$user['motpasse_hash'])){

            $_SESSION['username']=$username;
            $_SESSION['role']=$user['rôle'];

            if ($user['rôle']=='visitor'){
                if($user['statut']=='banned')
                {   echo "<p style='color:red';>Vous n'êtes pas autorisé à accéder à la plateforme </p>";
                    

                }else{
                    header('Location: ../animals_list/code.php');
                    exit;
                }

            }
            elseif ($user['rôle']=='guide'){
                if($user['statut']=='approved'){
                header('Location: ../guide_dashbord_1/code.html');
                exit;
                }
                else{
                    echo "<p style='color:red';>Vous n'êtes pas autorisé à accéder à la plateforme pour le moment</p>";
                }
            }
                elseif ($user['rôle']=='admin'){
                header('Location: ../admin_dashboard/code.php');
                exit;
            }

        }
        else{
            echo "<p style='color:red';>Mot de passe incorrect</p>";
        }

    }

    public function afficher(){
        try{
        $sql="SELECT * FROM utilisateurs";
        $stmt=$this->connect()->query($sql);
        return $stmt->fetchAll();
        }
        catch (PDOException $e){
            echo "ERREUR PDO :"  .$e->getMessage(). "in : " .$e->getFile() ."line : " . $e->getLine();
        }
 
    }

    public function banuser($id){
    $sql = "UPDATE utilisateurs SET statut = 'banned' WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    return $stmt->execute([$id]); 
}


}