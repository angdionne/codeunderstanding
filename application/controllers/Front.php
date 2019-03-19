<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Front extends CI_Controller {

	public function __construct() {

		parent::__construct();

		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->database();
		//$this->load->library('form_validation');
		$this->load->model('Front_model');
        $this->load->library('cart');

	}

	public function index() {
	
		$data['menu']=$this->Front_model->getfrontmenus();
		$data['kitchen']=$this->Front_model->getfrontkitchens();
        $data['kit']=$this->Front_model->getkitchens();
        $data['foodcat']=$this->Front_model->getfoodcat();
          $data['foods']=$this->Front_model->getfoody();
	$this->load->view('frontend/index.php',$data);
    
    }
    
    
    public function ourFood() {
		$data['foodcat']=$this->Front_model->getOurfood();
	    $data['kit']=$this->Front_model->getkitchens();
    $this->load->view('frontend/ourFood.php',$data);
    
    }


    public function menuDetail($id){
        $data['menu1']=$this->Front_model->menuDetail($id);
        $data['menuImage']=$this->Front_model->menuDetailImages($id);
        $data['menuExtra']=$this->Front_model->menuDetailExtras($id);
        $data['menus']=$this->Front_model->getmenus();
        $this->load->view('frontend/order.php',$data);

    }

    public function popularResturant(){
    	$data['kitchen']=$this->Front_model->getkitchens();
	    $this->load->view('frontend/popular-Restaurents.php',$data);
    }


     public function kitchenDetail($kid){
        $data['kitchen']=$this->Front_model->getfood($kid);
        $this->load->view('frontend/Restaurents-Menu.php',$data);
    }


    public function kitchenMenus($fcid,$kid){
        $user_id=$this->session->userdata('user_id');
        $data['kitcat']=$this->Front_model->kitFoodCat($kid,$fcid);
        $this->load->view('frontend/orders-list.php',$data);
    }


    public function getExtraPrice(){
        $eprice=$this->input->post('extraprice');
         $ep=$this->Front_model->getExtraPrice($eprice);
         echo json_encode($ep);

    }


    public function checkout(){
        $userid=$this->session->userdata('user_id');
        $data['cartdata']=$this->Front_model->cartCheckOut($userid);

        $this->load->view('frontend/checkout.php',$data);
    }


    public function getFoodType()
    {
        $this->load->helper('url');
        $id = $_POST['id'];
        $query['food'] = $this->Front_model->getfood($id);
        echo json_encode($query['food']);
    }


    public function kitFoodCat(){
        $kid=$this->input->get('kitchen');
        $fcid=$this->input->get('foodcat');
        $user_id=$this->session->userdata('user_id');
        $data['kitname']=$this->Front_model->kitname($kid);
        $data['allcat']=$this->Front_model->allCat();
        $data['catname']=$this->Front_model->foodCatName($fcid);
        $data['kitcat']=$this->Front_model->kitFoodCat($kid,$fcid);
        $data['cartcount']=$this->Front_model->checkCart($kid,$user_id);
        $userid=$this->session->userdata('user_id');
        $data['cartdata']=$this->Front_model->cartCheckOut($userid);
        $data['idy']=$this->Front_model->getKitchenDetail($kid);

        $data['foody']=$fcid;

        $data['foody']=$fcid;
        $this->load->view('frontend/orders-list.php',$data);


    }
public function contact()
{
    $this->load->view('frontend/contact');
}
public function sendmessage()
{
    $data= array(
        
        'name'=>$this->input->post('name'),
        'email'=>$this->input->post('email'),
        'subject'=>$this->input->post('subject'),
        'message'=>$this->input->post('message'),
        
        
        );
        $this->Front_model->sendmessage($data);
        $this->session->set_flashdata('message', 'Message Sent Succesfully.');
        redirect('Front/contact');
        
        
}

    public function catfood($fcid,$kid){
        $user_id=$this->session->userdata('user_id');
        $data['allcat']=$this->Front_model->allCat();
        $data['kitname']=$this->Front_model->kitname($kid);
        $data['catname']=$this->Front_model->foodCatName($fcid);
        $data['kitcat']=$this->Front_model->kitFoodCat($kid,$fcid);
        $data['cartcount']=$this->Front_model->checkCart($kid,$user_id);
        $userid=$this->session->userdata('user_id');
        $data['cartdata']=$this->Front_model->cartCheckOut($userid);
        $data['idy']=$this->Front_model->getKitchenDetail($kid);
        $data['foody']=$fcid;

 
        $this->load->view('frontend/orders-list.php',$data);

    }
    public function search($fcid,$kid){
        $user_id=$this->session->userdata('user_id');
        $data['allcat']=$this->Front_model->allCat();
        $data['kitname']=$this->Front_model->kitname($kid);
        $data['catname']=$this->Front_model->foodCatName($fcid);
        $data['kitcat']=$this->Front_model->kitFoodCat($kid,$fcid);
        $data['cartcount']=$this->Front_model->checkCart($kid,$user_id);
        $userid=$this->session->userdata('user_id');
        $data['cartdata']=$this->Front_model->cartCheckOut($userid);
        $data['idy']=$this->Front_model->getKitchenDetail($kid);
        $data['foody']=$fcid;
        $data['sss']="halo";
        $this->load->view('frontend/orders-list.php',$data);

    }


    public function getFSubcat()
    {
        $this->load->helper('url');
        $id = $_POST['id'];
        $query['fsub'] = $this->Front_model->getfSubcat($id);

        echo json_encode($query['fsub']);
    }
    
    
        public function getmenuExtra()
    {
        $this->load->helper('url');
        $id = $_POST['id'];
        $query['extra'] = $this->Front_model->getMenuExtra($id);
        echo json_encode($query['extra']);
    }


public function footer() {

    $data['kitchens'] = $this->Front_model->getKitchens1();
      $data['foodcat']=$this->Front_model->getfoodcat();
    $this->load->view('frontend/footer',$data);

}

public function newsletter()
{
    $email = $_POST['email'];
    $data=array(
        'email'=>$email

    );
     $this->Front_model->insertNewsEmail($data);
}
public function gift(){
   
  $this->load->view('frontend/gift/gift.php'); 
}
public function saveGift(){
    print_r($_POST);
   $amount= $this->input->post('amount');
   $name= $this->input->post('name');
   $recipient= $this->input->post('recipient');
   $email= $this->input->post('email');
   $message= $this->input->post('message');
   
   $array_gift=array(
        'gift_amount'=>$amount,
        'gift_email'=>$email,
        'gift_recipient'=>$recipient,
        'personal_message'=>$message,
        
        );
   $result=$this->db->insert('gifts',$array_gift);
   if ($result) {
       $this->session->set_flashdata('message', 'Gift Sent Succesfully.');
        redirect('Front/gift');
   }
}
public function events(){
   
  $this->load->view('frontend/private.php'); 
}

}

?>
