<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Front_model extends CI_Model {

	function __construct() {

		parent::__construct();

	}

	public function getmenus(){
		$query=$this->db->select('*')
		->from('menu')
		->join('menu_gallery','menu_gallery.menu_id=menu.menu_id')
		->group_by('menu.menu_id')
		->get();
		return $query->result();
	}
		public function getfoody(){
		$query=$this->db->select('*')
		->from('menu')
		->join('menu_gallery','menu_gallery.menu_id=menu.menu_id')
		->group_by('menu.menu_id')
		->limit(3)
		->get();
		return $query->result();
	}
	public function sendmessage($data)
	{
	    $this->db->insert('contactUs',$data);
	}
		public function getRating($id){
		$query=$this->db->select('SUM(rate) as total')
		->from('rating')
	->where('k_id',$id)
	
		->get();
		return $query->row()->total;
	}
		public function getRatingCount($id){
		$query=$this->db->select('COUNT(*) as total')
		->from('rating')
	->where('k_id',$id)
	
		->get();
		return $query->row()->total;
	}


	public function getfrontmenus(){
		$query=$this->db->select('*')
		->from('menu')
		->join('menu_gallery','menu_gallery.menu_id=menu.menu_id')
		->group_by('menu.menu_id')
		->limit(8)
		->get();
		return $query->result();
	}


	public function menuDetail($id){
		$query=$this->db->select('*')
		->from('menu')
		->join('kitchen','kitchen.kitchen_id=menu.kitchen_id')
		->join('menu_gallery','menu_gallery.menu_id=menu.menu_id')
		->group_by('menu.menu_id')
		->where('menu.menu_id',$id)
		->get();
		return $query->row();

	}

	public function menuDetailImages($id){
		$query=$this->db->select('*')
		->from('menu_gallery')
		->where('menu_id',$id)
		->get();
		return $query->result();

	}


	public function menuDetailExtras($id){
		$query=$this->db->select('*')
		->from('menu_extras')
		->where('menu_id',$id)
		->get();
		return $query->result();

	}


	public function getkitchens(){

		$query=$this->db->select('*')
		->from('kitchen')
		->get();
		return $query->result();
	}
    public function getkitchens1(){

        $query=$this->db->select('*')
            ->from('kitchen')
			->limit(6)
            ->get();
        return $query->result();
    }


	public function getfrontkitchens(){

		$query=$this->db->select('*')
		->from('kitchen')
		->limit(4)
		->get();
		return $query->result();
	}
	
	
	public function getorderdetail($orderid){
	    $query=$this->db->select('*')
		->from('order_details')
		->join('menu','menu.menu_id=order_details.menu_id')
        //->join('menu_extras','order_details.m_extra_id=menu_extras.m_extra_id')
        ->where('order_details.order_id',$orderid)
		->get();
		return $query->result();
	}
	


	public function getkitFood($kid){

		$query=$this->db->select('food_category.food_cat_id,food_category.food_cat_name,menu.kitchen_id')
		->from('food_category')
		->join('menu','menu.food_cat_id=food_category.food_cat_id')
		->join('kitchen','kitchen.kitchen_id=menu.kitchen_id')
		->where('menu.kitchen_id',$kid)
		->group_by('menu.food_cat_id')
		->get();
		return $query->result();
	}


	public function kitFoodCat($kid,$fcid){
		$query=$this->db->select('*')
		->from('food_category')
		->join('food_subcat','food_subcat.food_cat_id=food_category.food_cat_id')
        ->join('kitchen','food_category.kitchen_id=kitchen.kitchen_id')
		->where('kitchen.kitchen_id',$kid)
		->where('food_category.food_cat_id',$fcid)
		->get();
		return $query->result();
	}
	public function foodCatName($fcid){
		$query=$this->db->select('*')
		->from('food_category')
		->where('food_category.food_cat_id',$fcid)
		->get();
		return $query->row();
	}


	public function allCat(){
		$query=$this->db->select('*')
		->from('food_category')
		->join('kitchen','food_category.kitchen_id=kitchen.kitchen_id')
		->get();
		return $query->result();
	}


	public function getkitmenu($id,$fsid,$kid){

		$query=$this->db->select('*')
		->from('menu')
		->join('food_category','food_category.food_cat_id=menu.food_cat_id')
		->join('kitchen','menu.kitchen_id=kitchen.kitchen_id')
		->where('menu.f_subcat_id',$fsid)
		->where('menu.food_cat_id',$id)
		->where('menu.kitchen_id',$kid)
		->get();
		return $query->result();
	}


	public function getExtraPrice($menu){
		$query=$this->db->select('*')
		->from('menu_extras')
		->where('m_extra_id',$menu)
		->get();
        return $query->result();
	}


	public function cartCheckOut($userid){
		$query=$this->db->select('*')
		->from('cart')
		->where('user_id',$userid)
		->get();
		return $query->result();
	} 


	public function getfood($id){
		$query=$this->db->select('*')
		->where('kitchen_id',$id)
		->from('food_category')
		->get();
		return $query->result();
	}


	public function getMenuExtra($mid){
		$query=$this->db->select('*')
		->where('menu_id',$mid)
		->from('menu_extras')
		->get();
		return $query->result();

	}



	public function foodcat($fcid){
		$query=$this->db->select('*')
		->where('food_cat_id',$fcid)
		->from('food_category')
		->get();
		return $query->row();

	}


	public function checkCart($kitchenid,$user_id){
		$query=$this->db->select('*')
		->where('user_id',$user_id)
		->from('cart')
		->limit(1)
		->get();
		return $query->row();
	}


	public function getfSubcat($id){
		$query=$this->db->select('*')
		->where('food_cat_id',$id)
		->from('food_subcat')
		->get();
		return $query->result();
	}


	public function getfoodcat(){
		$query=$this->db->select('*')
		->from('food_category')

		->limit(6)
		->get();
		return $query->result();
	}
	public function getKitchenDetail($id)
	{
        $query=$this->db->select('*')
            ->from('kitchen')

            ->where('kitchen_id',$id)
            ->get();
        return $query->row();
	}
	public function insertNewsEmail($data)
	{
		$this->db->insert('newsletter',$data);
	}
	public function insertTransaction($data,$id)
{
    $this->db->where('order_id',$id);
$this->db->update('orderfood',$data);


}
		public function getOurfood(){
		$query=$this->db->select('*')
		->from('food_category')
		->get();
		return $query->result();
	}
	
	
	public function kitname($kid){
		$query=$this->db->select('*')
		->where('kitchen_id',$kid)
		->from('kitchen')
		->get();
		return $query->row();
	}








}
?>
