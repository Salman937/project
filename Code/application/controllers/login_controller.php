<?php 

class Login_controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('login');
	}
	public function in()
	{
		if ($this->input->post('login'))
		 {
			$username  =htmlentities($this->input->post('name'));
			$password  =htmlentities($this->input->post('pass'));
			$data	   = array('username'=> $username, 'password' => $password );
			$check 	   = $this->work_model->DBSelectSingleRow('login',$data);
			if ($check)
			 {
				$userdata = array('Name' => $check->username,
								  'ID'   => $check->id,
								  'login'=> true, );
				$this->session->set_userdata($userdata);
				redirect(base_url().'index.php/welcome');
			}
			else
			{
				$this->index();
			}
		}
	}
	public function logout()
	{
		$userdata = array('Name','ID','login', );
		$this->session->unset_userdata($userdata);
		$this->index();
	}
}

?>