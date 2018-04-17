<?php
include 'Database.php';
/*
 * @author Enrique Marenco
 */
class Usuarios {
    private $idUser;
    private $username;
    private $password;
    
    function __construct($idUser = null, $username = null, $password = null) {
        $this->idUser = $idUser;
        $this->username = $username;
        $this->password = $password;
    }
    
    public function validateUser(){
        $db = Database::conectar();
        $db->setAttribute(PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $stm = $db->prepare('validateUser :us, :ps');
        $stm->setFetchMode(PDO::FETCH_CLASS,'usuarios');
        $stm->execute(array('us'=> $this->username,'ps'=> $this->password));
        return $stm->fetchAll(PDO::FETCH_CLASS);
    }
}
