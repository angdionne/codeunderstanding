<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Login extends CI_Controller {

	public function __construct() {

		parent::__construct();

		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->database();
		//$this->load->library('form_validation');
		$this->load->model('Login_model');
			$this->load->model('Front_model');

	}

	public function index() {
	$this->load->view('owner/login_view');
}
    public function admin() {
        $this->load->view('admin/login_view');
    }
//$username = $this->input->post("post_username");
		//$password = $this->input->post("post_password");
public function sign(){
		$owner_email = $this->input->post('owner_email');
		$owner_password = $this->input->post('owner_password');
        //$num=$this->login_model->get_Owner($owner_email, $owner_password)
		//$this->form_validation->set_rules("owner_email", "owner_email", "trim|required");
		//$this->form_validation->set_rules("owner_password", "owner_password", "trim|required");


			//if ($this->input->post('btn_login') == "Login") {

				$usr_result = $this->Login_model->get_Owner($owner_email, $owner_password);

				if ($usr_result > 0) {

					$this->session->set_userdata('owner_email', $owner_email);

					$ownerDetails = $this->Login_model->getDetail($this->session->userdata('owner_email'));

					$this->session->set_userdata('owner_id', $ownerDetails[0]->owner_id);
					$this->session->set_userdata('owner_name', $ownerDetails[0]->owner_name);
                    //$kid = $this->Login_model->get_kitchenofowner($ownerDetails[0]->owner_id);
					$this->input->post('owner_id');

					//echo "Successfully logged in";
					
 
  redirect("dashboard");
				} else {
					//echo "Not in";
					$this->session->set_flashdata('msg', 'Invalid Username Or Password');
					redirect('Login/index');

				}

			//}


	}
    public function signAdmin(){
        $owner_email = $this->input->post('admin_email');
        $owner_password = $this->input->post('admin_password');
        //$num=$this->login_model->get_Owner($owner_email, $owner_password)
        //$this->form_validation->set_rules("owner_email", "owner_email", "trim|required");
        //$this->form_validation->set_rules("owner_password", "owner_password", "trim|required");


        //if ($this->input->post('btn_login') == "Login") {

        $usr_result = $this->Login_model->get_Admin($owner_email, $owner_password);

        if ($usr_result > 0) {

            $this->session->set_userdata('admin_email', $owner_email);

            $ownerDetails = $this->Login_model->getDetailAdmin($this->session->userdata('admin_email'));

            $this->session->set_userdata('admin_id', $ownerDetails[0]->admin_id);
            $this->session->set_userdata('admin_name', $ownerDetails[0]->admin_name);

            //$this->input->post('owner_id');

            //echo "Successfully logged in";
            
          
             redirect("admin");
        } else {
            //echo "Not in";
            $this->session->set_flashdata('msg', 'Invalid Username Or Password');
            redirect('Login/admin');

        }

        //}


    }
	public function signOut() {
		$this->session->sess_destroy();
		redirect('Login');
	}
    public function signOutAdmin() {
        $this->session->sess_destroy();
        redirect('Login/admin');
    }
    public function rating($id=5)
    {
        $data['idy']=$id;
           $this->load->view('frontend/rating',$data);
    }
    public function footer() {

    $data['kitchens'] = $this->Front_model->getKitchens1();
      $data['foodcat']=$this->Front_model->getfoodcat();
    $this->load->view('frontend/footer',$data);

}
public function putRating()
{
    $rating=$this->input->post('rate');
    $k_id=$this->input->post('id');
    
    $data= array(
    'k_id'=> $k_id,
    'rate'=>$rating
    
    
    );
    $this->Login_model->putRating($data);
}

}

?>
