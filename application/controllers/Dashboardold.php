<?php
/**
 * Created by PhpStorm.
 * User: Angela J
 * Date: 11/17/2016
 * Time: 2:41 PM
 */
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Login_model');
		$this->load->model('Owner_model');
		$this->load->library('grocery_CRUD');
		$rits = $this->session->userdata('owner_email');
		if ($rits == NULL) {
			redirect('Login');

		} else {
			//      redirect('dashboard/community');
		}
	}

	public function index() {

	}
public function owner() {
$crud = new grocery_CRUD();

		$crud->set_table('owner')
			->set_subject('owner');
			$output = $crud->render();
		$output->table = 'owner';
		$this->_display_records($output);
}
	
	public function profile($is_msg = null) {

		if ($is_msg != null) {
			$data['msg'] = $is_msg;
			$data['msg'] = "Your Profile is Updated ";
			$id = $this->session->userdata('owner_id');
			$data['profile'] = $this->Login_model->getOwnerDetail($id);
		
			$this->load->view('owner/profile', $data);
		} else {

		    $id = $this->session->userdata('owner_id');
			$data['profile'] = $this->Login_model->getOwnerDetail($id);
			$this->load->view('owner/profile', $data);

		}
	}

    public function menu(){
    	$id = $this->session->userdata('owner_id');
    	$data['menu']=$this->Owner_model->getmenu($id);
    	$this->load->view('owner/owner_menu',$data);
    }


    public function food_cat(){
    	 if($this->session->userdata('owner_id') == ""){
        redirect ('login');
        }else{ 
        
        $id=  $this->session->userdata('owner_id');
        $crud = new grocery_CRUD();
//        $crud->set_theme('datatables');
       $crud->where('owner_id',$id);
        $crud->set_table('food_category');
         $crud->columns('food_cat_id','food_cat_name');
        $crud->field_type('owner_id','hidden',$this->session->userdata('owner_id'));
                $output = $crud->render();
                $output->table = 'Food Category';
		$this->_display_records($output);
    }
}

     public function kitchen(){
    	$id = $this->session->userdata('owner_id');
    	$data['kitchen']=$this->Owner_model->getkitchen($id);
    	$this->load->view('owner/owner_kitchen',$data);
    }
    public function addmenu(){
    	$id = $this->session->userdata('owner_id');
    	$data['kitchen']=$this->Owner_model->getOwnerKitchen($id);
    	$data['foodcat']=$this->Owner_model->getOwnerfoodcat($id);
    	$this->load->view('owner/addmenu',$data);
    }


    public function addkitchen(){
    	$id = $this->session->userdata('owner_id');
    	$this->load->view('owner/addkitchen');
    }

    public function updateMenu($menu_id){
    	$id = $this->session->userdata('owner_id');
    	$data['kitchen']=$this->Owner_model->getOwnerKitchen($id);
    	$data['foodcat']=$this->Owner_model->getOwnerfoodcat($id);
        $data['menu']=$this->Owner_model->getEditMenu($menu_id);
        $this->load->view('owner/updatemenu',$data);
    }


    public function updateKitchen($kitchen_id){
    $data['kitchen']=$this->Owner_model->getEditKitchen($kitchen_id);
    $this->load->view('owner/updatekitchen',$data);
    }


    public function editMenu(){
    	$menu_id=$this->input->post('menuid');
    		$data=array(
    	'menu_name'=>$this->input->post('menuname'),
    	'kitchen_id'=>$this->input->post('kitchen'),
    	'food_cat_id'=>$this->input->post('foodcat'),
    	'menu_price'=>$this->input->post('menuprice'),
    	'menu_description'=>$this->input->post('menudescription')
    	);
    		 $menu_id = $this->Owner_model->editMenu($data,$menu_id);
    		 redirect('dashboard/menu');
    }


    public function editKitchen(){
 $kitchen_id=$this->input->post('kitchenid');
$id = $this->session->userdata('owner_id');
    	 $uploads_dir = 'assets/uploads/images/';
       
        $pic = $_FILES["file"]['name'];
        
        $pic2 = $uploads_dir.$pic;


            $tmp_name = $_FILES["file"]['tmp_name'];

            // $tmp_name = basename($_FILES["files"]["tmp_name"]);
            move_uploaded_file($tmp_name, $pic2);
        $date=date('y-m-d');
        $pic=$pic;
        if ($_FILES["file"]['name']!=""){
        
        $data=array(
        'kitchen_name'=>$this->input->post('kitchenname'),
    	'kitchen_address'=>$this->input->post('kitchenaddress'),
    	'kitchen_longi'=>$this->input->post('kitchenlocation'),
    	'owner_id'=>$id,
    	'kitchen_image'=>$pic

        );
}else{

     $data=array(
        'kitchen_name'=>$this->input->post('kitchenname'),
    	'kitchen_address'=>$this->input->post('kitchenaddress'),
    	'kitchen_longi'=>$this->input->post('kitchenlocation'),
    	'owner_id'=>$id,
 
        );
}
    $menu_id = $this->Owner_model->editKitchen($data,$kitchen_id);
    		 redirect('dashboard/kitchen');
    }

    public function deleteMenu($menu_id){
    	$this->Owner_model->deleteMenu($menu_id);
    	$this->Owner_model->deleteMenuImages($menu_id);
    	 redirect('dashboard/menu');
    }


     public function deleteKitchen($kitchen_id){
    	$this->Owner_model->deleteKitchen($kitchen_id);	
    	 redirect('dashboard/kitchen');
    }



    public function editMenuImages($menu_id){
    	$data['menu']=$this->Owner_model->getEditMenu($menu_id);
    	$data['multi'] = $this->Owner_model->getmenuImages($menu_id);
$this->load->view('owner/updatemenuimages',$data);
    }

    public function menuimageUpdate($menu_id){
$uploads_dir = 'assets/uploads/images/';
        
        $this->Owner_model->deleteMenuImages($menu_id);
        
//print_r($id);
            //print_r($_FILES['input25']['name']);
            //die();
            $data2 = array();
            for ($i=0 ; $i< count($_FILES['input25']['name']); $i++)
            {
                $pi = $_FILES["input25"]['name'][$i];
                $pi2 = $uploads_dir .time().$pi;
                $tmp_name = $_FILES["input25"]['tmp_name'][$i];
                move_uploaded_file($tmp_name, $pi2);
                $pi=time().$pi;

                $data2 = array
                (
                'menu_id' => $menu_id,
                'menu_gallery' => $pi
                );

                $this->Owner_model->updateMenuGallery($data2,$menu_id);

        }

       redirect('main/getAllClubs');
    }



public function newKitchen(){
	    $uploads_dir = 'assets/uploads/images/';
        $id = $this->session->userdata('owner_id');
        //$pic = $_FILES["file"]['name'];
        if ($_FILES["file"]['name']=="")
        {
            $pic="sample.jpg";
        }
        else{
            $pic = $_FILES["file"]['name'];
        }

        $pic2 = $uploads_dir . time().$pic;


            $tmp_name = $_FILES["file"]['tmp_name'];

            // $tmp_name = basename($_FILES["files"]["tmp_name"]);
            move_uploaded_file($tmp_name, $pic2);
        $date=date('y-m-d');
        $pic=time().$pic;



        $data=array(
    	'kitchen_name'=>$this->input->post('kitchenname'),
    	'kitchen_address'=>$this->input->post('kitchenaddress'),
    	'kitchen_longi'=>$this->input->post('kitchenlocation'),
    	'owner_id'=>$id,
    	'kitchen_image'=>$pic
    	);
        $this->Owner_model->newKitchen($data);
redirect('dashboard/kitchen');
}





    public function newMenu(){
    	$data=array(
    	'menu_name'=>$this->input->post('menuname'),
    	'kitchen_id'=>$this->input->post('kitchen'),
    	'food_cat_id'=>$this->input->post('foodcat'),
    	'menu_price'=>$this->input->post('menuprice'),
    	'menu_description'=>$this->input->post('menudescription')
    	);



      $menu_id = $this->Owner_model->newMenu($data);

        

            $data2 = array();
            for ($i=0 ; $i< count($_FILES['input25']['name']); $i++)
            {
                $pi = $_FILES["input25"]['name'][$i];
                $pi2 = $uploads_dir . time().$pi;
                $tmp_name = $_FILES["input25"]['tmp_name'][$i];
                move_uploaded_file($tmp_name, $pi2);
                $pi= time().$pi;

                $data2 = array
                (
                'menu_id' => $menu_id,
                'menu_gallery' => $pi
                );

                $this->Owner_model->addMenuGallery($data2);
            }

redirect('dashboard/menu');
    }

	public function updateProfile() {

		$id = $this->session->userdata('admin_id');
		$pass = $this->input->post('password');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$cpass = $this->input->post('cpassword');

		if (isset($cpass) && $pass == $cpass) {
			$change =
			array(

				'owner_password' => $pass,
				'owner_name' => $name,
				'owner_email' => $email,

			);
		} else {
			$change =
			array(

				'owner_name' => $name,
				'owner_email' => $email,

			);
		}

		$this->Login_model->Update($change, $id);

		redirect('dashboard/profile/1');
	}

	function _display_records($output = null) {
		$this->load->view('owner/records.php', $output);
	}



	public function inbox() {

		$rits = $this->session->userdata('owner_email');

		if ($rits == NULL) {

			redirect('Login');

		} else {
			$this->load->helper('url');
			$id = $this->session->userdata('owner_id');
			$this->session->set_userdata('nav', 'inbox');
			$data['inboxes'] = $this->Owner_model->getInbox($id);

			$this->load->view('owner/inbox.php', $data);
		}
	}


    public function chatUser($user_id,$kid) {
        $this->load->helper('url');
        $id = $this->session->userdata('owner_id');
        $read = "read";
        $data = array(
            'read_status' => $read,
        );
        $this->Owner_model->updateMsgStatus($data, $user_id, $id);
        $data['chats'] = $this->Owner_model->getChat($id, $user_id,$kid);
        //$data['kitchen']=array('kitchen_id'=>$kid);
        //print_r($data['chats']);
        //die();
        $this->load->view('owner/chatuser', $data);
    }


        public function replyMsgUser($ref = null) {

        $to = $this->input->post('user_id');
        $msg = $this->input->post('message');
        $kitchen = $this->input->post('kitchen');
        $date = date('Y-m-d-H-i-s');
        $id = $this->session->userdata('owner_id');
        $data = array(

            //'s_id' => $to,
            'message' => $msg,
            'send_date' => $date,
            'owner_id' => $id,
            'kitchen_id'=>$kitchen,
            'user_id'=>$to,
            'sender_id' => $id,
            'read_status' => 'unread',
        );
        $this->User_model->sendMsgOwner($data);
        redirect($ref);

    }

    public function takenOrders(){
        
    }

}