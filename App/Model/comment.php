<?php 

// ------------------------------------comments can be crud by students 


require_once "connection.php";
class comment{
    public $com;
    public $student;
    public $postdate = date("Y/m/d");
    
    static private $table="comments";

    function __construct(){
        $this->db = new Connection();
    }

    function getById($id){
        return $this->db->selectById($id);
    }

    function Addcomment(){
        return $this->db->add(self::$table, ["com", "student", "postdate"], [$this->com, $this->student, $this->postdate]);
    }

    function update($id){
        return $this->db->update(self::$table, ["com"], [$this->com], $id);
    }

    function delete($id){
        $this->db->delete(self::$table, $id);
    }
}

?>