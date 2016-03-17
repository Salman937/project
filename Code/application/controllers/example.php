<?php 
 
class Insert extends CI_Controller

{
	
	public function index()
	{
	$this->load->view('index');
	}
    
    public function savedata()

    {
       if ($this->input->post('submit'))

       {
         $hurair = array('name' => $this->input->post('Name'),
         				 'contact' => $this->input->post('contact')  
         				 'address' => $this->input->post( 'address'));
         	$query = $this->work_model->Insert('userinfo', $hurair);
            
            if($query)
            {
            	$this->index();
            }
       }


    }

}


?>