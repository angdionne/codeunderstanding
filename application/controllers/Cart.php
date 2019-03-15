<?php


if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Cart extends CI_Controller {

	public function __construct() {

		parent::__construct();
        $this->load->library('paypal_lib');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->database();
		//$this->load->library('form_validation');
		$this->load->model('Login_model');
        $this->load->model('Front_model');
		$this->load->model('Cart_model');
		$this->load->model('User_model');
        $this->load->library('stripegateway');
        $this->load->library('cart');
	}

	public function add(){
// if($this->session->userdata('user_id')!=""){
	$extra_id=null ;
 	$m_extra_id=$this->input->post('extra');
// 	//print_r($m_extra_id);
// 	//die();
 	if(!empty($m_extra_id)){
 	foreach($m_extra_id as $meid){
 		$extra_id=$extra_id.$meid.',';
		
 	}}
 	$extra_id=trim($extra_id,',');
 	$kitchen_id=$this->input->post('kitchenid');
 	$foodcat_id=$this->input->post('foodcatid');
 	  $this->session->set_userdata('foody',$this->input->post('foodcatid'));

// 		$data=array(
// 		'user_id'=>$this->session->userdata('user_id'),
// 		'menu_id'=>$this->input->post('menuid'),
// 		'menu_name'=>$this->input->post('menuname'),
// 		'comment'=>$this->input->post('comment'),
// 		'm_extra_id'=>$extra_id,
// 		'price'=>$this->input->post('menuprice'),
// 		'qty'=>$this->input->post('quantity'),
// 		'menu_image'=>$this->input->post('menuImage'),
// 		/*'ordertype'=>$this->input->post('ordertype'),
// 		'address'=>$this->input->post('address'),
// 		'datetime'=>$this->input->post('datetime'),
// 		'phone'=>$this->input->post('phone'),
// 		'description'=>$this->input->post('description'),*/
// 		'kitchen_id'=>$this->input->post('kitchenid'),
// 		'kitchen_name'=>$this->input->post('kitchenname')
// 		);
// 		$this->Cart_model->addcart($data);
		
//
//
        $kitchen=$this->session->set_userdata('kitchen',$this->input->post('kitchenid'));
 	    $items=$this->session->userdata('items');
		$items++;
		$this->session->set_userdata('items',$items);
 		$data2 = array(
         'id'      => $this->input->post('menuid'),
         'qty'     => $this->input->post('quantity'),
         'price'   => $this->input->post('menuprice'),
         'name'    => $this->input->post('menuname'),
         'options' => $extra_id,
            'comment'=>$this->input->post('comment'),
         'option'=> $kitchen,

 );

$this->cart->insert($data2);
		
		redirect('front/catfood/'.$foodcat_id.'/'.$kitchen_id);
// 	}
// 	else{
// 		redirect('user/userLogin');
// 	}
	}

	public function minusCart($cartid){
		$kitchen_id=$this->input->post('kitchenid');
	$foodcat_id=$this->input->post('foodcatid');
//		$this->Cart_model->minusCart($cartid);
//		 $items=$this->session->userdata('items');
//		$items--;
//		$this->session->set_userdata('items',$items);

			$this->cart->remove($cartid);


		//redirect('front/checkout');
		redirect('front/catfood/'.$foodcat_id.'/'.$kitchen_id);
		//echo('me');

	}

	public function orderNow()
    {

 if ($this->session->userdata('user_id')=="") { 
        $sign = array(
            'user_name' => $this->input->post('name'),
            'user_email' => $this->input->post('email'),
            'user_password' => $this->input->post('password'),
            'user_address' => $this->input->post('address'),
              'user_phone' => $this->input->post('phone'),
            'user_status' => "active",
        );
        

        $check['halo'] = $this->Cart_model->checkUser($this->input->post('email'), $this->input->post('password'));
        if ($check['halo'] == null) {
            $userid = $this->Cart_model->getSignUp($sign);
            $userid = $this->session->set_userdata('user_id', $userid);
            	$userDetails = $this->User_model->getUserDetails($this->session->userdata('user_id'));
					
					$this->session->set_userdata('user_email', $userDetails[0]->user_email);
					$this->session->set_userdata('user_name', $userDetails[0]->user_name);
		
					$this->session->set_userdata('user_phone', $userDetails[0]->user_phone);
					$this->session->set_userdata('user_address', $userDetails[0]->user_address);
					$this->session->set_userdata('pp', $userDetails[0]->user_password);

        } else {
            $userid = $this->session->set_userdata('user_id', $check['halo']->user_id);
       	$userDetails = $this->User_model->getUserDetails($this->session->userdata('user_id'));
					
					$this->session->set_userdata('user_email', $userDetails[0]->user_email);
					$this->session->set_userdata('user_name', $userDetails[0]->user_name);
			
					$this->session->set_userdata('user_phone', $userDetails[0]->user_phone);
					$this->session->set_userdata('user_address', $userDetails[0]->user_address);
					$this->session->set_userdata('pp', $userDetails[0]->user_password);
        }

}
        //$userid=$this->session->userdata('user_id');

        //$data['cart']=$this->Cart_model->getcartData($userid);
        //	print_r($data['cart']);
        //die();
        if ($this->input->post('payment') == "cash") {
            $menuid = null;
            $menu_name = null;
            $qty = null;
            $extraid = null;
            $kitchenid = null;
            $kitchenname = null;
            $comment = 0;

            $qty = trim($qty, ',');
            $menuid = trim($menuid, ',');
//echo $menuid;
            $extraid = trim($extraid, ',');
            $time = $this->input->post('timep');
            $da = date('Y-m-d');
            $datetime = $da . ' ' . $time;
            $order = array(
                'user_id' => $this->session->userdata('user_id'),
                //	'menu_id'=>$menuid,
                'status' => 'new',
                'p_status' => 'paid',
                //	'm_extra_id'=>$extraid,
                'price' => $this->input->post('price'),
                //	'qty'=>$qty,
                'payment' => $this->input->post('payment'),
                //	'email'=>$this->input->post('email'),
               'address' => $this->input->post('address'),
                'datetime' => $datetime,
                	'phone'=>$this->input->post('phone'),
                'description' => $this->input->post('description'),
                'pick' => $this->input->post('pick'),
                'kitchen_id' => $this->session->userdata('kitchen'),
                //'kitchen_name'=>$kitchenname
            );

            $insertid = $this->Cart_model->orderNow($order);


            //	foreach($data['cart'] as $dcart){
            foreach ($this->cart->contents() as $items):
                $user_id = $this->session->userdata('user_id');
                $menuid = $items['id'];
                $comment = $items['comment'];

                $extraid = $items['options'];
                $qty = $items['qty'];

                $kitchenid = $this->session->userdata('kitchen');
                //$kitchenname=$dcart->kitchen_name;


                $orderdet = array(
                    'order_id' => $insertid,
                    'menu_id' => $menuid,
                    'm_extra_id' => $extraid,
                    'qty' => $qty,
                    'comment' => $comment,
                );
                $this->Cart_model->orderDetail($orderdet);
            endforeach;
//}
            //$this->Cart_model->deleteCart($user_id);
            //$value=0;
            $this->session->unset_userdata('kitchen');
            $this->session->unset_userdata('foody');
            $this->cart->destroy();
            	    $this->load->view('frontend/thanks');
        }
        ///////////////////////////////////Cash Ends Here/////////////////////////
        if ($this->input->post('payment') == "paypal") {

            $menuid = null;
            $menu_name = null;
            $qty = null;
            $extraid = null;
            $kitchenid = null;
            $kitchenname = null;
            $comment = 0;

			$qty = trim($qty, ',');
            $menuid = trim($menuid, ',');
//echo $menuid;
            $extraid = trim($extraid, ',');
            $time = $this->input->post('timep');
            $da = date('Y-m-d');
            $datetime = $da . ' ' . $time;
            $order = array(
                'user_id' => $this->session->userdata('user_id'),
                //	'menu_id'=>$menuid,
                'status' => 'new',
                //	'm_extra_id'=>$extraid,
                'price' => $this->input->post('price'),
                //	'qty'=>$qty,
                'payment' => $this->input->post('payment'),
                //	'email'=>$this->input->post('email'),
               'address' => $this->input->post('address'),
                'datetime' => $datetime,
                	'phone'=>$this->input->post('phone'),
                'description' => $this->input->post('description'),
                'pick' => $this->input->post('pick'),
                'kitchen_id' => $this->session->userdata('kitchen'),
                //'kitchen_name'=>$kitchenname
            );

            $insertid = $this->Cart_model->orderNow($order);


            //	foreach($data['cart'] as $dcart){
            foreach ($this->cart->contents() as $items):
                $user_id = $this->session->userdata('user_id');
                $menuid = $items['id'];
                $comment = $items['comment'];

                $extraid = $items['options'];
                $qty = $items['qty'];

                $kitchenid = $this->session->userdata('kitchen');
                //$kitchenname=$dcart->kitchen_name;


                $orderdet = array(
                    'order_id' => $insertid,
                    'menu_id' => $menuid,
                    'm_extra_id' => $extraid,
                    'qty' => $qty,
                    'comment' => $comment,
                );
                $this->Cart_model->orderDetail($orderdet);
            endforeach;
//}
            //$this->Cart_model->deleteCart($user_id);
            //$value=0;
            $this->session->unset_userdata('kitchen');
            $this->session->unset_userdata('foody');
            $this->cart->destroy();

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
            $this->paypal_lib->add_field('order_id', $insertid);
            $this->paypal_lib->add_field('user_name', $this->session->userdata('user_name'));


            $this->paypal_lib->add_field('amount', $this->input->post('price'));
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
           $menuid = null;
            $menu_name = null;
            $qty = null;
            $extraid = null;
            $kitchenid = null;
            $kitchenname = null;
            $comment = 0;

			$qty = trim($qty, ',');
            $menuid = trim($menuid, ',');
//echo $menuid;
            $extraid = trim($extraid, ',');
            $time = $this->input->post('timep');
            $da = date('Y-m-d');
            $datetime = $da . ' ' . $time;
            $order = array(
                'user_id' => $this->session->userdata('user_id'),
                //	'menu_id'=>$menuid,
                'status' => 'new',
                 'p_status' => 'paid',
                //	'm_extra_id'=>$extraid,
                'price' => $this->input->post('price'),
                //	'qty'=>$qty,
                'payment' => $this->input->post('payment'),
                //	'email'=>$this->input->post('email'),
                'address' => $this->input->post('address'),
                'datetime' => $datetime,
            	'phone'=>$this->input->post('phone'),
                'description' => $this->input->post('description'),
                'pick' => $this->input->post('pick'),
                'kitchen_id' => $this->session->userdata('kitchen'),
                //'kitchen_name'=>$kitchenname
            );

            $insertid = $this->Cart_model->orderNow($order);


            //	foreach($data['cart'] as $dcart){
            foreach ($this->cart->contents() as $items):
                $user_id = $this->session->userdata('user_id');
                $menuid = $items['id'];
                $comment = $items['comment'];

                $extraid = $items['options'];
                $qty = $items['qty'];

                $kitchenid = $this->session->userdata('kitchen');
                //$kitchenname=$dcart->kitchen_name;


                $orderdet = array(
                    'order_id' => $insertid,
                    'menu_id' => $menuid,
                    'm_extra_id' => $extraid,
                    'qty' => $qty,
                    'comment' => $comment,
                );
                $this->Cart_model->orderDetail($orderdet);
            endforeach;
//}
            //$this->Cart_model->deleteCart($user_id);
            //$value=0;
            $this->session->unset_userdata('kitchen');
            $this->session->unset_userdata('foody');

            $this->cart->destroy();
             
}
          
          
          
         $this->load->view('frontend/thanks',$data); 
          
      
          
           
        }
        ////////////////////////////Stripe Ends Here//////////////////////////
	
	}


	function show(){
		$cart=$this->cart->contents();
echo"<pre>";
		print_r($cart);

	}

    public function footer() {

        $data['kitchens'] = $this->Front_model->getKitchens1();
        $data['foodcat']=$this->Front_model->getfoodcat();
        $this->load->view('frontend/footer',$data);

    }
}

?>
