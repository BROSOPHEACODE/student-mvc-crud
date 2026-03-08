<?php 
    require_once 'config/database.php';
    class Student{
        
        private $conn;

        public function __construct(){
            $this->conn = Database::connection();
        }

        public function create($name,$gender,$tel){

            $stmt = $this->conn->prepare("INSERT INTO `students`( `name`, `gender`, `tel`) VALUES (?,?,?)");
            $stmt->bind_param("sss",$name,$gender,$tel);
            return $stmt->execute();
           // return $this->conn->query("INSERT INTO `students`( `name`, `gender`, `tel`) VALUES (`$name`,`$gender`,`$tel`)");

        }

        public function getById($id){
            $stmt = $this->conn->prepare("SELECT * FROM  `students` WHERE `id` = ? " );
            $stmt->bind_param("i",$id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }

        public function getAll(){
            return $this->conn->query("SELECT * FROM `students` ORDER BY `id` DESC ")->fetch_all(MYSQLI_ASSOC);
        }

        public function delete($id){

            $stmt = $this->conn->prepare("DELETE FROM `students` WHERE `id` = ?");
            $stmt->bind_param("i",$id);  //i = interger
            return $stmt->execute();
            // return $this->conn->query("INSERT INTO `students`( `name`, `gender`, `tel`) VALUES (`$name`,`$gender`,`$tel`)");
        }

        public function update($id,$name,$gender,$tel){
            $stmt = $this->conn->prepare("UPDATE `students` SET `name`=?, `gender`=?, `tel`=? WHERE `id` = ?");
            $stmt->bind_param("sssi",$name,$gender,$tel,$id);  //i = interger
            return $stmt->execute();
        }
    }
?>