<?php

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
		}
	}

	public function index() {
        $id = $this->session->userdata('owner_id');
        $kid = $this->Owner_model->getKitchenId($id);
        $data['menu'] = $this->Owner_model->getMenuCount($kid);
        $data['neworders'] = $this->Owner_model->getNewOrders($kid);
        $data['takeaway'] = $this->Owner_model->getTakeawayOrders($kid);
        $data['inprocess'] = $this->Owner_model->getInProcessOrders($kid);
        $data['bakingprocess'] = $this->Owner_model->getbakingProcessOrders($kid);
        $data['rejectorders'] = $this->Owner_model->getRejectOrders($kid);
        $data['completeorders'] = $this->Owner_model->getCompletedOrders($kid);
        $data['inorders'] = $this->Owner_model->getNewOrders($kid);
        $data['category'] = $this->Owner_model->getCategoryCount($kid);
        $data['delivered'] = $this->Owner_model->getDeliveredOrdersCount($kid);
        $data['undelivered'] = $this->Owner_model->getUndeliveredOrdersCount($kid);
$this->load->view('owner/dashboard',$data);
    }
    

    public function sendEmailFunction($messageContent){

        $this->load->library('email');

        $from_email = 'angdionne@aol.com'; 
		$data['email'] = $this->Owner_model->getemailText();

		$subject = 'Food';
		$message = $messageContent;
   
		$config['protocol'] = 'sendmail';
		$config['smtp_host'] = 'smtp.aol.com'; //smtp host name
		$config['smtp_port'] = '465'; //smtp port number
		$config['smtp_user'] = 'angdionne@aol.com';
		$config['smtp_pass'] = 'Dionne30#!!'; //$from_email password
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['newline'] = "\r\n"; //use double quotes
		$this->email->initialize($config);

		//send mail
		$this->email->from($from_email, 'Food');
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($message);
	     $this->email->send();

    }

    //It will accept order by email and ID
	public function accept($id,$userid)
    {
         $this->Owner_model->acceptOrder($id);
         $email=$this->Owner_model->getemail($userid);
        $emailMessage =  $data['email']->accept;
         $this->sendEmailFunction($emailMessage);
         redirect('dashboard');
    }

    public function baked($id,$userid){
         $this->Owner_model->bakedOrder($id);
        $email=$this->Owner_model->getemail($userid);
        
        $emailMessage = $data['email']->bake;
        $this->sendEmailFunction($emailMessage);
        
        
        
        redirect('dashboard');
    }
    
    //for take away order by User id and order id
    public function takeaway($id,$userid)
    {
        $this->Owner_model->takeawayOrder($id);
        $email=$this->Owner_model->getemail($userid);

        $emailMessage = $data['email']->take;
        $this->sendEmailFunction($emailMessage);
        
        
        
        redirect('dashboard');
    }
    public function delivered($id,$userid)
    {
        $this->Owner_model->deliveredOrder($id);
       $kid= $this->Owner_model->getKitchenIdy($id);
         $email=$this->Owner_model->getemail($userid);
        
         $emailMessage = $data['email']->complete."<br> <a href='". base_url().'Login/rating/".$kid';
        
         $this->sendEmailFunction($emailMessage);
        
        
        redirect('dashboard');
    }
    public function reject($id,$userid)
    {
       $reason= $this->input->post('reason');
        $this->Owner_model->rejectOrder($id,$reason);
        
        
         $email=$this->Owner_model->getemail($userid);
            $data['email'] = $this->Owner_model->getemailText();
            
            $emailMessage = $data['email']->reject;
        
            $this->sendEmailFunction($emailMessage);
        
        
        
        
        
        
        redirect('dashboard');
    }
public function owner() {
$crud = new grocery_CRUD();

		$crud->set_table('owner')
			->set_subject('owner');
			$output = $crud->render();
		$output->table = 'owner';
		$this->_display_records($output);
}
	
    //Update profile
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

//select and load menu
    public function menu(){
    	$id = $this->session->userdata('owner_id');
    	$data['menu']=$this->Owner_model->getmenu($id);
    	
    	
    	$this->load->view('owner/owner_menu',$data);
  

   }
    //Delivered orders
public function delivereds()
{
     $id = $this->session->userdata('owner_id');
        $kid = $this->Owner_model->getKitchenId($id);

        $data['completeorders'] = $this->Owner_model->getCompletedOrders($kid);
      
$this->load->view('owner/delivered',$data);
}

//undelivered orders
public function undelivereds()
{
     $id = $this->session->userdata('owner_id');
        $kid = $this->Owner_model->getKitchenId($id);

        $data['completeorders'] = $this->Owner_model->getUnCompletedOrders($kid);
      
$this->load->view('owner/undelivered',$data);
}

    public function food_cat(){
    	 if($this->session->userdata('owner_id') == ""){
        redirect ('login');
        }else{ 
        
        $id=  $this->session->userdata('owner_id');
             $kid = $this->Owner_model->getKitchenId($id);
        $crud = new grocery_CRUD();
        $crud->set_table('food_category');
         $crud->columns('food_cat_id','food_cat_name','food_cat_image');
             $crud->set_field_upload('food_cat_image', 'assets/uploads/files')->display_as('food_cat_image', 'Image')->display_as('food_cat_name', 'Name');
        $crud->field_type('kitchen_id','hidden',$kid);
                $output = $crud->render();
                $output->table = 'Food Category';
		$this->_display_records($output);
    }
}


    public function food_subcat(){
         if($this->session->userdata('owner_id') == ""){
        redirect ('login');
        }else{ 
        
        $id=  $this->session->userdata('owner_id');
             $kid = $this->Owner_model->getKitchenId($id);
        $crud = new grocery_CRUD();
//        $crud->set_theme('datatables');
      
        $crud->set_table('food_subcat');
         $crud->columns('f_subcat_id','f_subcat_name','food_cat_id');
            
             $crud->set_relation('food_cat_id','food_category','food_cat_name');
        
        $crud->display_as('f_subcat_name','Subcategory Name');
             $crud->display_as('food_cat_id', 'Food Category');
                $output = $crud->render();
                $output->table = 'Food Sub Category';
        $this->_display_records($output);
    }
}


     public function menu_extras()
     {
        $this->load->model('Admin_model');
        $details['details'] = $this->Admin_model->getTroppingDetalis();
        $this->load->view('owner/menu_extras',$details);
     }
     public function addtoping()
     {
        $this->load->model('Admin_model');
        $menu['menu'] = $this->Admin_model->getMenu();
        $this->load->view('owner/addtoping',$menu);
     }
     public function newToping()
     {
        $menu_id = $this->input->post('menu_name');
        foreach($menu_id as $id){

        $this->load->model('Admin_model');
        $kitchen_id = $this->Admin_model->getKitchenId($id);
        $new_topping = array(
                                 'menu_id'       =>   $id,
                                 'm_extra_name'  =>   $this->input->post('topping_name'),
                                 'm_extra_price' =>   $this->input->post('menu_price'),
                                 'kitchen_id'    =>   $kitchen_id,
                            );
        $this->Admin_model->insertNewTopping($new_topping);
        
         }
            redirect('Dashboard/menu_extras');
     }
     public function updateTopping($id)
     {
        $this->load->model('Admin_model');
        $data['d'] = $this->Admin_model->getData($id);
        $this->load->view('owner/updateTopping',$data);
     }
     public function updateToppingSuccess()
     {
        $t_id     = $this->input->post('id');
        $t_name   = $this->input->post('topping_name');
        $t_price  = $this->input->post('topping_price');
        $update = array(
                              'm_extra_name'  =>  $t_name,
                              'm_extra_price' =>  $t_price
                       );

        $this->load->model('Admin_model');
        $this->Admin_model->updateToppingSuccess($t_id,$update);
        redirect('Dashboard/menu_extras');
     }
     public function deleteTopping($id)
     {
        $this->load->model('Admin_model');
        $this->Admin_model->deleteTopping($id);
        redirect('Dashboard/menu_extras');
     }


     public function kitchen(){
    	$id = $this->session->userdata('owner_id');
    	$data['kitchen']=$this->Owner_model->getkitchen($id);
    	$this->load->view('owner/owner_kitchen',$data);
    }
    public function addmenu(){
    	$id = $this->session->userdata('owner_id');
        $kid = $this->Owner_model->getKitchenId($id);
    	$data['kitchen']=$this->Owner_model->getOwnerKitchen($id);
    	$data['foodcat']=$this->Owner_model->getOwnerfoodcat($kid);
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
        $kitchen_id=$this->input->post('kitchen');
        foreach ($kitchen_id as $kitchen) {
            $data = array(
                'menu_name' => $this->input->post('menuname'),
                'kitchen_id' => $kitchen,
                'food_cat_id' => $this->input->post('foodcat'),
                'f_subcat_id' => $this->input->post('fsubcat'),
                'menu_price' => $this->input->post('menuprice'),
                'menu_description' => $this->input->post('menudescription')
            );
            $menu_id = $this->Owner_model->newMenu($data);
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
    
    
    public function orderdetail(){
        $orderid=$this->input->post('id');
        
        $query['orderdetail']=$this->Owner_model->getorderdetail($orderid);
        $section=0;
        $section='<table class="table table-stripped">
		         <tr>
     <th>Menus:</th> <th>Quantity:</th><th>Topping</th><th>Comment</th>
     </tr>';
        foreach($query['orderdetail'] as $od){
            $section.='<tr>

     <td>'. $od->menu_name.'</td>
                                                                    
     <td>'. $od->qty.'</td>';
                                                                        
        $section.='<td>'; 
            if(!empty($od->m_extra_id)){
        $array=array();
        $array=explode(',',$od->m_extra_id);                                                               
           foreach($array as $menu)
          {
            $menu =MenuEx($menu);
            $menu= rtrim($menu, ",");
            $section.=  $menu .",";
         }
  }
      $section.='</td>';
                                                                
      $section.='</td>
      <td>'.  $od->comment .'</td></tr>';
      
        }
        $section.='</table>';
        
       echo $section;
    }

}
