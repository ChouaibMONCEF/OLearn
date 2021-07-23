<?php 

require_once "connection.php";

class teacher{
    public $fullname;
    public $email;
    public $phonenumber;
    public $birthdate;
    public $pswrd;
    public $picture;
    public $subject;
    public $school;
    public $experience;
    public $proof;
    public $letter;
    public $applydate = date("Y/m/d");
    
    static private $table="teachers";

    function __construct(){
        $this->db = new Connection();
    }


    function register(){
        return $this->db->add(self::$table, ["fullname", "email", "phonenumber", "birthdate", "pswrd", "picture", "subject", "school", "experience", "proof", "letter", "applydate"], [$this->fullname, $this->email, $this->phonenumber, $this->birthdate, $this->pswrd, $this->picture, $this->subject, $this->school, $this->experience, $this->proof, $this->letter, $this->applydate]);
    }

    function connect($email, $pswrd){
        $result = $this->db->login($email, $pswrd);
        return $result;
    }
}


?>