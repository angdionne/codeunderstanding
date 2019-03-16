<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class User extends CI_Controller {

	public function __construct() {

		parent::__construct();

		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->database();
		//$this->load->library('form_validation');
		$this->load->model('User_model');
        $this->load->model('Front_model');
        $this->load->model('Owner_model');
        $this->load->library('paypal_lib');
        $this->load->library('stripegateway');
	}

	public function index() {
	$rits = $this->session->userdata('user_id');
		if ($rits == NULL) {
			redirect('user/userLogin');

		} else {
			$id = $this->session->userdata('user_id');
			$this->session->set_userdata('nav2', 'profileUser');
			$data['profile']=$this->User_model->userInfo($id);
			$this->load->view('user/user.php',$data);
		}
    }
public function previousOrders()
{
    $rits = $this->session->userdata('user_id');
    if ($rits == NULL) {
        redirect('user/userLogin');

    } else {
        $id = $this->session->userdata('user_id');
        $data['orders'] = $this->User_model->getPreviousOrders($id);
        $this->load->view('user/previous', $data);
    }
}
    public function userLogin() {
	$this->load->view('frontend/login.php');
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
                                                                    

                                                                    <td>'. $od->qty.'</td>'
            ;

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
public function changePassword()
{
    $rits = $this->session->userdata('user_id');
    if ($rits == NULL) {
        redirect('user/userLogin');

    } else {
        $this->load->view('user/cp.php');
    }
}
public function reorder()
{
    if ($this->input->post('payment') == "cash") {
        $time = $this->input->post('timep');
        $da = date('Y-m-d');
        $datetime = $da . ' ' . $time;
        $id = $this->input->post('orderidd');
        $data['orderid'] = $this->User_model->getorderFood($id);
        $orderarray = array(
            'price' => $data['orderid']->price,
            'payment' => $this->input->post('payment'),
            'address' => $this->input->post('address'),
            ' phone' => $this->input->post('phone'),
            'description' => $this->input->post('description'),
            'pick' => $this->input->post('pick'),
            'user_id' => $data['orderid']->user_id,
            'kitchen_id' => $data['orderid']->kitchen_id,
            'datetime' => $datetime,
            'status' => "new",
            'p_status' => 'paid',
        );
        $orderid = $this->User_model->addorderFood($orderarray);
        $query['orderdetail'] = $this->Owner_model->getorderdetail($data['orderid']->order_id);
        foreach ($query['orderdetail'] as $orderdetail) {
            $detailarray = array(

                'order_id' => $orderid,
                'menu_id' => $orderdetail->menu_id,
                'm_extra_id' => $orderdetail->m_extra_id,
                'qty' => $orderdetail->qty,
                'comment' => $orderdetail->comment,


            );
            $this->User_model->addorderFoodDetail($detailarray);
        }
        $this->load->view('frontend/thanks');

    }

    ///////////////////////////////////Cash Ends Here/////////////////////////
    if ($this->input->post('payment') == "paypal") {

        $time = $this->input->post('timep');
        $da = date('Y-m-d');
        $datetime = $da . ' ' . $time;
        $id = $this->input->post('orderidd');
        $data['orderid'] = $this->User_model->getorderFood($id);
        $orderarray = array(
            'price' => $data['orderid']->price,
            'payment' => $this->input->post('payment'),
            'address' => $this->input->post('address'),
            ' phone' => $this->input->post('phone'),
            'description' => $this->input->post('description'),
            'pick' => $this->input->post('pick'),
            'user_id' => $data['orderid']->user_id,
            'kitchen_id' => $data['orderid']->kitchen_id,
            'datetime' => $datetime,
            'status' => "new",
            'p_status' => 'paid',
        );
        $orderid = $this->User_model->addorderFood($orderarray);
        $query['orderdetail'] = $this->Owner_model->getorderdetail($data['orderid']->order_id);
        foreach ($query['orderdetail'] as $orderdetail) {
            $detailarray = array(

                'order_id' => $orderid,
                'menu_id' => $orderdetail->menu_id,
                'm_extra_id' => $orderdetail->m_extra_id,
                'qty' => $orderdetail->qty,
                'comment' => $orderdetail->comment,


            );
            $this->User_model->addorderFoodDetail($detailarray);
        }


        $returnURL = base_url() . 'paypal/success'; //payment success url
        $cancelURL = base_url() . 'paypal/cancel'; //payment cancel url
        $notifyURL = base_url() . 'paypal/ipn'; //ipn url
        //get particular product data

        //$userID = 1; //current user id
        $logo = base_url() . 'assets/images/logo.png';

        $this->paypal_lib->add_field('return', $returnURL);
        $this->paypal_lib->add_field('cancel_return', $cancelURL);
        $this->paypal_lib->add_field('notify_url', $notifyURL);
        $this->paypal_lib->add_field('user_id', $this->session->userdata('user_id'));
        $this->paypal_lib->add_field('order_id', $orderid);
        $this->paypal_lib->add_field('user_name', $this->session->userdata('user_name'));


        $this->paypal_lib->add_field('amount', $data['orderid']->price);
        $this->paypal_lib->image($logo);

        $this->paypal_lib->paypal_auto_form();

        $this->load->view('frontend/thanks');
    }
    //////////////////////////////////Paypal Ends Here////////////////////////////////////////
    if ($this->input->post('payment') == "stripe") {

        $data["message"] = "";

        $data = array(
            'number' => $this->input->post('cardnumber'),
            'exp_month' => $this->input->post('month'),
            'exp_year'=> $this->input->post('year'),
            'amount' => $this->input->post('price')
        );
        $this->stripegateway->checkout($data);
        // print_r($data["message"]);
        // die();
        $data['message']=$this->stripegateway->checkout($data);
        if($data['message']=="succeeded")
        {
            $time = $this->input->post('timep');
            $da = date('Y-m-d');
            $datetime = $da . ' ' . $time;
            $id = $this->input->post('orderidd');
            $data['orderid'] = $this->User_model->getorderFood($id);
            $orderarray = array(
                'price' => $data['orderid']->price,
                'payment' => $this->input->post('payment'),
                'address' => $this->input->post('address'),
                ' phone' => $this->input->post('phone'),
                'description' => $this->input->post('description'),
                'pick' => $this->input->post('pick'),
                'user_id' => $data['orderid']->user_id,
                'kitchen_id' => $data['orderid']->kitchen_id,
                'datetime' => $datetime,
                'status' => "new",
                'p_status' => 'paid',
            );
            $orderid = $this->User_model->addorderFood($orderarray);
            $query['orderdetail'] = $this->Owner_model->getorderdetail($data['orderid']->order_id);
            foreach ($query['orderdetail'] as $orderdetail) {
                $detailarray = array(

                    'order_id' => $orderid,
                    'menu_id' => $orderdetail->menu_id,
                    'm_extra_id' => $orderdetail->m_extra_id,
                    'qty' => $orderdetail->qty,
                    'comment' => $orderdetail->comment,


                );
                $this->User_model->addorderFoodDetail($detailarray);
            }

        }



        $this->load->view('frontend/thanks',$data);




    }


























}

    public function register() {
	$this->load->view('frontend/register.php');
    }
    
    
    public function ologin(){
        $user_email = $this->input->post('email');
		$user_password = $this->input->post('pass');
    $usr_result = $this->User_model->get_User($user_email, $user_password);

				if ($usr_result > 0) {

					$this->session->set_userdata('user_email', $user_email);

					$userDetails = $this->User_model->getUserDetail($this->session->userdata('user_email'));
					
					$this->session->set_userdata('user_id', $userDetails[0]->user_id);
					$this->session->set_userdata('user_name', $userDetails[0]->user_name);
			
					$this->session->set_userdata('user_phone', $userDetails[0]->user_phone);
					$this->session->set_userdata('user_address', $userDetails[0]->user_address);
					$this->session->set_userdata('pp', $userDetails[0]->user_password);
					$cartCount=$this->User_model->getuserCart($this->session->userdata('user_id'));
					
					$items=$cartCount;
					
					$this->session->set_userdata('items',$items);

					//$this->input->post('user_id');

					//echo "Successfully logged in";
					
}
    }
    
    
    public function reglogin(){
        
        $data=array(
    	'user_name'=>$this->input->post('name'),
    	'user_phone'=>$this->input->post('phone'),
    	'user_email'=>$this->input->post('email'),
    	'user_password'=>$this->input->post('pass'),
    	'user_address'=>$this->input->post('address'),
    	'user_status'=>1
    	);
    	
    		$this->User_model->userSignup($data);
    		
    		
    	$user_email = $this->input->post('email');
		$user_password = $this->input->post('pass');
    $usr_result = $this->User_model->get_User($user_email, $user_password);

				if ($usr_result > 0) {

					$this->session->set_userdata('user_email', $user_email);

					$userDetails = $this->User_model->getUserDetail($this->session->userdata('user_email'));
					
					$this->session->set_userdata('user_id', $userDetails[0]->user_id);
					$this->session->set_userdata('user_name', $userDetails[0]->user_name);
					$this->session->set_userdata('dp', $userDetails[0]->user_image);
					$cartCount=$this->User_model->getuserCart($this->session->userdata('user_id'));
					
					$items=$cartCount;
					
					$this->session->set_userdata('items',$items);

					
}
    		
    }


    public function userSignup(){
    	$uploads_dir = 'assets/uploads/images/';
       
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
    	'user_name'=>$this->input->post('name'),
    	'user_phone'=>$this->input->post('phone'),
    	'user_email'=>$this->input->post('email'),
    	'user_password'=>$this->input->post('password'),
    	'user_image'=>$pic
    	);

    	$this->User_model->userSignup($data);
    	redirect('user/userLogin');

    }


    public function checkEmail()
    {
        if(isset($_POST))
        {
            $email = $this->input->post('email');
            $this->User_model->checkEmail($email);
        }
    }

public function userSignIn(){
		$user_email = $this->input->post('user_email');
		$user_password = $this->input->post('user_pass');
  $usr_result = $this->User_model->get_User($user_email, $user_password);

				if ($usr_result > 0) {

					$this->session->set_userdata('user_email', $user_email);

					$userDetails = $this->User_model->getUserDetail($this->session->userdata('user_email'));
					
					$this->session->set_userdata('user_id', $userDetails[0]->user_id);
					$this->session->set_userdata('user_name', $userDetails[0]->user_name);


                    $this->session->set_userdata('user_phone', $userDetails[0]->user_phone);
                    $this->session->set_userdata('user_address', $userDetails[0]->user_address);
                    $this->session->set_userdata('pp', $userDetails[0]->user_password);
					$cartCount=$this->User_model->getuserCart($this->session->userdata('user_id'));
					
					$items=$cartCount;
					
					$this->session->set_userdata('items',$items);

					

   redirect("user");
				} else {
					//echo "Not in";
					$this->session->set_flashdata('msg', 'Invalid Username Or Password');
					redirect('user/userLogin');

				}

			//}

		
	}

    public function newlogin(){
        $user_email = $this->input->post('email');
        $user_password = $this->input->post('pass');
        $food = $this->input->post('food');
        $kit= $this->input->post('kitchen');
       

        $usr_result = $this->User_model->get_User($user_email, $user_password);

        if ($usr_result > 0) {

            $this->session->set_userdata('user_email', $user_email);

            $userDetails = $this->User_model->getUserDetail($this->session->userdata('user_email'));

            $this->session->set_userdata('user_id', $userDetails[0]->user_id);
            $this->session->set_userdata('user_name', $userDetails[0]->user_name);


            $this->session->set_userdata('user_phone', $userDetails[0]->user_phone);
            $this->session->set_userdata('user_address', $userDetails[0]->user_address);
            $this->session->set_userdata('pp', $userDetails[0]->user_password);
            $cartCount=$this->User_model->getuserCart($this->session->userdata('user_id'));

            $items=$cartCount;

            $this->session->set_userdata('items',$items);


echo 0;
           // redirect("user");
        } else {
            echo 1;

          //  redirect('user/userLogin');

        }

        //}


    }

public function updatePassword()
{

    $userid= $this->session->userdata('user_id');

    $data=array(
        'user_password'=>$this->input->post('password'),


    );
    $this->User_model->updatepassword($userid,$data);
    $this->session->set_flashdata('cp', 'Password is Changed');
    redirect('user/changePassword');
}
	public function updateProfile(){
		$userid=$this->input->post('userid');




		$data=array(
		'user_name'=>$this->input->post('name'),
		'user_address'=>$this->input->post('address'),
		'user_phone'=>$this->input->post('phone'),

		);
		$this->User_model->updateUser($userid,$data);

		redirect('user');
	}

	


	public function logout() {
		$this->session->sess_destroy();

		redirect('user/userLogin');
	}


	public function inboxUser() {

		$rits = $this->session->userdata('user_email');

		if ($rits == NULL) {

			redirect('user/userLogin');

		} else {
			$this->load->helper('url');
			$id = $this->session->userdata('user_id');
			$this->session->set_userdata('nav2', 'inboxUser');
			$data['inboxes'] = $this->User_model->getInbox($id);

			$this->load->view('user/inboxuser.php', $data);
		}
	}

	public function chatOwner($owner_id,$kid) {
		$this->load->helper('url');
		$id = $this->session->userdata('user_id');
		$read = "read";
		$data = array(
			'read_status' => $read,
		);
		$this->User_model->updateMsgStatus($data, $owner_id, $id);
		$data['chats'] = $this->User_model->getChat($id, $owner_id,$kid);
	
		$this->load->view('user/chatowner', $data);
	}


	public function replyMsgOwner($ref = null) {

		$to = $this->input->post('owner_id');
		$msg = $this->input->post('message');
		$kitchen = $this->input->post('kitchen');
		$date = date('Y-m-d-H-i-s');
		$id = $this->session->userdata('user_id');
		$data = array(

			//'s_id' => $to,
			'message' => $msg,
			'send_date' => $date,
			'owner_id' => $to,
			'kitchen_id'=>$kitchen,
			'user_id'=>$id,
			'sender_id' => $id,
			'read_status' => 'unread',
		);
		$this->User_model->sendMsgOwner($data);
		redirect($ref);

	}
    public function footer() {

        $data['kitchens'] = $this->Front_model->getKitchens1();
        $data['foodcat']=$this->Front_model->getfoodcat();
        $this->load->view('frontend/footer',$data);

    }
}

?>
