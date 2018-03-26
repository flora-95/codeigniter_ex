<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Crudop extends CI_Controller {

public  function __construct() {
           parent::__construct();
    $this->load->model('Employee_model');
      // $this->load->model('Employee_model')
      // $this->load->helper(array('CRUDop','url'));
       //$this->load->database();
    }
//
//
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('form');
	}
//
//   public function employee_form()
//   {
//     $save=array(
//       'emp_name' =>$this->input->post('ename');
//       'dob' =>$this->input->post('dob');
//       'phno' =>$this->input->post('pnum');
//       'email' =>$this->input->post('email');
//       'joining_date' =>$this->input->post('doj');
//       'salary' =>$this->input->post('esalary');
//     );
//     $this->employee_model->saveEmployee($save);
//   }
public function select() {
  $this->Employee_model->saveEmploye($_POST);
  echo "Data inserted successfully";
}

public function fetch_data() {
//  $this->load->model('Employee_model');
$getData['arrData']= $this->Employee_model->get_data();
  $this->load->view('emploview',$getData);
}

public function update_emp() {
  $this->Employee_model->update_data();
}

public function delete_emp(){
  $this->Employee_model->delete_data();
}
}
?>
