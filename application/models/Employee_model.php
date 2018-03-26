<?php
class Employee_model extends CI_Model{

// public $emname;
// public $emname;
// public $emname;
// public $emname;
// public $emname;
// public $emname;

public function __construct(){
  parent::__construct();
}

public function insertVal(){


}
  public function saveEmploye($data)
  {
    //print_r($data);
   //  $arrDetails= array();
   //  $arrDetails['']=$data[''];
   $q=$this->db->insert('employees',$data);
   //print_r($q);
   // $empid=$this->db->insert_id();
   // return $empid;
  //$this->load->database();    $this->load->model('Employee_model');
  //$q=$this->db->query("select * from employees");
  //$query=$this->db->get('employees');
  //print_r($q);
  //return $q->result_array();
  }

  public function get_data(){
      $q=$this->db->query("select * from employees");
      $query=$this->db->get('employees');
      return $q->result_array();
  }

  public function update_data(){

    $datau=array(
      'empname'=>'Malvika',
      'dob'=>'1994-04-17',
      'email'=>'malvika@gmail.com'

    );
    $this->db->where('empid','386');
    $this->db->update('employees',$datau);
    echo "Updated successfully";

  }


public function delete_data(){
  $this->db->where('empid','389');
  $this->db->delete('employees');
  echo "deleted Successfully";
}

}
?>
