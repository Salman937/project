<?php 

class Insert extends CI_Controller
{

    public function index()
    {
        $Data['Student'] = $this->work_model->DBSelect('userinfo');
    	$this->load->view('index',$Data);
    }

    public function insertdata()
    {
    	if 
    		(
    			$this->input->post('saveinfo'))
    	        {

    		    $data = array ('first' => $this->input->post('first'), 
    		    			  'last'=> $this->input->post('last'),
    		    			  'state'=> $this->input->post('country'),	
    		    			   );

    		    $query = $this->work_model->insert('userinfo',$data);

    		    if($query)
    		    {
    		    	$this->index();
    		    }
    		}
    }
    public function deldata()
    {
        $Where = array ('id' => $this->uri->segment(3));
        $query = $this->work_model->DBdelete('userinfo',$Where);
        if($query)
        {
            $this->index();
        }
    }
    
    public function edit()
    {
        $where = array('id' => $this->uri->segment(3));
        $query ['edit'] = $this->work_model->DBSelectsingleRow('userinfo',$where);
        $this->load->view('edit',$query);
    }

    public function updatedata()
    {
        if 
            (
                $this->input->post('updateinfo'))
                {

                 $wherecondition = array('id' => $this->input->post('ID') );       
                 $data = array ('first' => $this->input->post('first'), 
                              'last'=> $this->input->post('last'),
                              'state'=> $this->input->post('country'),  
                               );

                $query = $this->work_model->DBupdate('userinfo',$data,$wherecondition);

                if($query)
                {
                    $this->index();
                }
            }
    }


}

?>