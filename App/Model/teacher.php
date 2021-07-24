<?php 

require_once "connection.php";

// -----------------------Teachers also have login and sign up like students but they should be accepted by the admin -DONE-


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
    public $active;
    
    
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

    // teachers should be accepted by this method

    function accept($id){
        return $this->db->update(self::$table, ["active"], [$this->active], $id);
    }
}


?>