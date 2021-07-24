<?php 

require_once "connection.php";

 // ----------------------------- students will need to sign up and login -DONE-

class student{
    public $fullname;
    public $email;
    public $phonenumber;
    public $birthdate;
    public $pswrd;
    
    static private $table="students";

    function __construct(){
        $this->db = new Connection();
    }


    function register(){
        return $this->db->add(self::$table, ["fullname", "email", "phonenumber", "birthdate", "pswrd"], [$this->fullname, $this->email, $this->phonenumber, $this->birthdate, $this->pswrd]);
    }

    function connect($email, $pswrd){
        $result = $this->db->login($email, $pswrd);
        return $result;
    }
}


?>