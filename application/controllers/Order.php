<?php


if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Order extends CI_Controller {

	public function __construct() {

		parent::__construct();

		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->database();
		//$this->load->library('form_validation');
		$this->load->model('Login_model');
		$this->load->model('Order_model');
		
		$this->load->library('cart');

	}
public function showcart()
{
$this->load->view('karo');
}
	public function add(){
if($this->session->userdata('user_id')!=""){
		$data=array(
		'user_id'=>$this->session->userdata('user_id'),
		'menu_id'=>$this->input->post('menuid'),
		'menu_name'=>$this->input->post('menuname'),
		'm_extra_id'=>$this->input->post('extra'),
		'price'=>$this->input->post('totalprice'),
		'qty'=>$this->input->post('quantity'),
		'menu_image'=>$this->input->post('menuImage'),
		'ordertype'=>$this->input->post('ordertype'),
		'address'=>$this->input->post('address'),
		'datetime'=>$this->input->post('datetime'),
		'phone'=>$this->input->post('phone'),
		'description'=>$this->input->post('description'),
		'kitchen_id'=>$this->input->post('kitchenid'),
		'kitchen_name'=>$this->input->post('kitchenname')
		);
		$this->Cart_model->addcart($data);
		
	    $items=$this->session->userdata('items');
		$items++;
		$this->session->set_userdata('items',$items);
		
		
		
		
		
		redirect('front/checkout');
	}
	}

	public function minusCart($menuid){
		$this->Cart_model->minusCart($menuid);
		 $items=$this->session->userdata('items');
		$items--;
		$this->session->set_userdata('items',$items);
		redirect('front/checkout');

	}

	public function orderNow($userid){
		$data['cart']=$this->Cart_model->orderNow($userid);
		foreach($data['cart'] as $dcart){
			$dcart->menu_id;
			$data=array(
		'user_id'=>$dcart->user_id,
		'menu_id'=>$dcart->menu_id,
		'menu_name'=>$dcart->menu_name,
		'm_extra_id'=>$dcart->m_extra_id,
		'price'=>$dcart->totalprice,
		'qty'=>$dcart->qty,
		'menu_image'=>$dcart->menu_image,
		'ordertype'=>$dcart->ordertype,
		'address'=>$dcart->address,
		'datetime'=>$dcart->datetime,
		'phone'=>$dcart->phone,
		'description'=>$dcart->description,
		'kitchen_id'=>$dcart->kitchen_id,
		'kitchen_name'=>$dcart->kitchen_name
		);



		}
	}


	function show(){
		$cart=$this->cart->contents();
echo"<pre>";
		print_r($cart);

	}


}

?>
