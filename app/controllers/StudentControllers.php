<?php 

    require_once 'app/model/Students.php';

    class StudentControllers{

        private $model;

        public function __construct(){
            $this->model = new Student();
        }

        public function index(){
            $student = $this->model->getAll();
            $title = 'Student List';
            $views  = 'app/views/index.php';
            include 'app/views/layout.php';
        }
        
         public function create(){
            
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $name = $_POST['name'];
                $gender = $_POST['gender'];
                $tel = $_POST['tel'];

                $this->model->create($name,$gender,$tel);

                //echo "Your Insert To Database is  success....";
                 header("location: index.php");

            }else{
                $title = 'Create Student ';
                $views  = 'app/views/create.php';
                include 'app/views/layout.php';
            }
            
        }

        public function update($id){

            if($_SERVER["REQUEST_METHOD"] === "POST"){
                
                $name = $_POST['name'];
                $gender = $_POST['gender'];
                $tel = $_POST['tel'];

                $this->model->update($id,$name,$gender,$tel);

                header("location: index.php");
            }else{
                  $student = $this->model->getById($id);
                  $title = 'Update Student ';
                  $views  = 'app/views/edit.php';
                  include 'app/views/layout.php';
            }
          
        }

        public function destroy($id){
            $this->model->delete($id);
           header("location: index.php");
            
        }
        
    }
?>