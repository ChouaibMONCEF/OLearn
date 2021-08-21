<?php 

require_once "connection.php";
    // -------------------------- Admins only needs login   -DONE-
class admin{
    public $username;
    public $pswrd;
    
    static private $table="admins";

    function __construct(){
        $this->db = new Connection();
    }

    function connect($username, $pswrd){
        $result = $this->db->alogin(self::$table, $username, $pswrd);
        return $result;
    }
}


?>