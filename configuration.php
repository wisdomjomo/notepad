<?php
session_start();
require_once("db.php");
class configuration {
    private $id;
    private $title;
    private $content;
    protected $conn;

    public function __construct($id=0, $title="",$content="") {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->conn = new PDO("mysql:host=localhost;dbname=notepad", 'root', '', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }
    public function setid($id) {
        $this->id = $id;
    }
    public function getid() {
        return $this->id;
    }
    public function settitle($title) {
        $this->title = $title;
    }
    public function gettitle() {
        return $this->title;
    }
    public function setcontent($content) {
        $this->content = $content;
    }
    public function getcontent() {
        return $this->content;
    }
    public function insertNoteDate(){
        try{
            $stmt = $this->conn->prepare("INSERT INTO notedata (title, content)
            VALUES (:title, :content)");
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':content', $this->content);
            $stmt->execute();
            echo "<script>alert('Your Note has been save successfully');document.location='viewallnote.php'</script>";
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
    public function fetchAll(){
        try{
            $stmt = $this->conn->prepare("SELECT * FROM notedata");
            $stmt->execute();
            return $stmt->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
    public function fetchOne(){
        try{
            $stmt = $this->conn->prepare("SELECT * FROM notedata WHERE id=?");
            $stmt->execute([$this->id]);
            return $stmt->fetchAll();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
    public function update() {
        try{
            $stmt = $this->conn->prepare("UPDATE notedata SET title = ?, content = ? WHERE id = ?");
            $stmt->execute([$this->title,$this->content,$this->id]);
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
    public function delete() {
        try{
            $stmt = $this->conn->prepare("DELETE FROM notedata WHERE id = ?");
            $stmt->execute([$this->id]);
            return $stmt->fetchAll();
            echo "<script>alert('Note deleted Successfully');document.location='viewallnote.php'</script>";
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
}
?>