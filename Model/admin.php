<?php 

require_once "connection.php";

class admin{
    public $username;
    public $pswrd;
    
    static private $table="admins";

    function __construct(){
        $this->db = new Connection();
    }

    function connect($uref){
        $result = $this->db->login($uref);
        return $result;
    }
}


?>