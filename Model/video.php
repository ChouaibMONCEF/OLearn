<?php 

require_once "connection.php";

// ------------------------------- videos can be added by teachers and updated and deleted and can be accepted by the admin -DONE-

class video{
    public $video;
    public $title;
    public $dscr;
    public $grade;
    public $subject;
    public $lesson;
    public $thumbnail;
    public $adddate;
    public $active;
    public $com;
    
    static private $table="videos";

    function __construct(){
        $this->db = new Connection();
    }

    function getById($id){
        return $this->db->selectById(self::$table, $id);
    }

    function getAll(){
        return $this->db->getAll(self::$table);
    }

    function myvids($id){
        return $this->db->myvids(self::$table, $id);
    }

    function getAccepted(){
        return $this->db->getAccepted(self::$table);
    }

    function getvac($id){
        return $this->db->getvac($id);
    }

    function getcom($id){
        return $this->db->getcom($id);
    }
    

    function Addvideo(){
        return $this->db->add(self::$table, ["video", "title", "dscr", "grade", "subject", "lesson", "thumbnail", "adddate", "tid"], [$this->video, $this->title, $this->dscr, $this->grade, $this->subject, $this->lesson, $this->thumbnail, $this->adddate, $this->tid]);
    }

    function update($id){
        return $this->db->update(self::$table, ["title", "dscr"], [$this->title, $this->dscr], $id);
    }

    function accept($id){
        return $this->db->update(self::$table, ["active"], [$this->active], $id);
    }

    function delete($id){
        $this->db->delete(self::$table, $id);
    }

}

?>