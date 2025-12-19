<?php 

require '../utilisateur.php';


class Admin extends Utilisateur {

    public function __construct($nom='admin', $email='admin@gmail.com', $role = 'admin') {
    parent::__construct($nom, $email, $role);
}


}