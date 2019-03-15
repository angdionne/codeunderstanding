<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Cart_model extends CI_Model {

	function __construct() {

		parent::__construct();

	}

	function addcart($data){
		$this->db->insert('cart',$data);
	}

	function minusCart($cartid){
		$this->db->where('cart_id',$cartid)
		->delete('cart');
	}

	function getcartData($userid){
		$query=$this->db->select('*')
		->from('cart')
		->where('user_id',$userid)
		->get();
		return $query->result();

	}
public function getSignUp($data)
{
    $this->db->insert('user',$data);
    $insert_id = $this->db->insert_id();

    return  $insert_id;
}
	function orderNow($data){
		$this->db->insert('orderfood',$data);
		$insert_id = $this->db->insert_id();

   return  $insert_id;

	}
	public function checkUser($email,$pass)
	{
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where("user_email", $email);
        $this->db->where("user_password", $pass);
        $query = $this->db->get();
        if ($query->num_rows()>0)
		{
            return $query->row();
		}
		else{
            return null;
		}

	}
	function orderDetail($data){
	    $this->db->insert('order_details',$data);
	}

	function deleteCart($user_id){
		$this->db->where('user_id',$user_id)
		->delete('cart');

	}


}
?>
