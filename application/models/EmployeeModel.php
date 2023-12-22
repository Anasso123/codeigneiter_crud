<?php 

class EmployeeModel extends CI_Model {
    public function insertEmployee($data){
        return $this -> db -> insert('employee',$data);
    }

    public function fetchEmployee(){
        $query = $this -> db -> get('employee');
        return $query -> result();
    }

    public function editEmployee($id){
        $query = $this -> db -> get_where('employee',['id' => $id]);
        // that means single row will be returned
        return $query -> row();
    }

    public function updateEmployee($data,$id){
        return $this->db->update('employee', $data, ['id' => $id]);
    }

    public function deleteEmployee($id){
        return $this->db->delete('employee', ['id' => $id]);
    }
}