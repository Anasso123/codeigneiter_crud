<?php 

class StudentController extends CI_Controller{
    public function index(){
        // The stud is a shotcut or a short name of the StudentModel class 
        $this -> load -> model('StudentModel','stud');
        // To call the student_data() function we have 2 roads
        // $student = $this -> StudentModel -> student_data();
        // We can access with the StudentModel shortcut called stud
        // $student = $this -> stud -> student_data();
        // or call the class like that
        $student = new StudentModel;
        $student = $student -> student_data();
        echo "Student name " . $student;
    }

    public function show($id){
        $this -> load -> model('StudentModel','stud');
        $user = $this -> stud -> showStudent($id);
        echo $user;
    }

    public function passingParams(){
        $this -> load ->model('StudentModel','stud');
        $student = $this -> stud -> pass();
        $data['pass'] = $student;
        $data['title'] = "anass";
        $data['body'] = "hassan";
        $this -> load -> view('passing_data',$data);
    }
}