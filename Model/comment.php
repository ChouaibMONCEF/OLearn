<?php 


require_once "connection.php";
class comment{
    public $com;
    public $student;
    public $sid;
    public $vid;
    public $postdate;
    
    static private $table="comments";

    function __construct(){
        $this->db = new Connection();
    }

    function getById($id){
        return $this->db->selectById($id);
    }

    function Addcomment(){
        return $this->db->add(self::$table, ["com", "student", "sid", "vid", "postdate"], [$this->com, $this->student, $this->sid, $this->vid, $this->postdate]);
    }

    function update($id){
        return $this->db->update(self::$table, ["com"], [$this->com], $id);
    }

    function delete($id){
        $this->db->delete(self::$table, $id);
    }
}

?>