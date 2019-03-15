<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Order_model extends CI_Model {

	function __construct() {

		parent::__construct();

	}

	function addcart($data){
		$this->db->insert('cart',$data);
	}

	function minusCart($menuid){
		$this->db->where('menu_id',$menuid)
		->delete('cart');
	}

	function orderNow($userid){
		$query=$this->db->select('*')
		->from('cart')
		->where('user_id',$userid)
		->get();
		return $query->result();

	}
}
?>
