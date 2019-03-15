<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Admin_model extends CI_Model {

    function __construct() {

        parent::__construct();

    }


    public function getRestraunt() {
        $this->db->select('*');
        $this->db->from('kitchen');
        $query = $this->db->get();
        return $query->result();

    }

    public function getNews()
    {
        $this->db->select('*');
        $this->db->from('newsletter');
        $query = $this->db->get();
        return $query->result();
    }

    public function getOwner() {
        $this->db->select('*');
        $this->db->from('owner');
        $query = $this->db->get();
        return $query->result();

    }
    public function getOrder()
    {
        $this->db->select('*');
        $this->db->from('orderfood');
        $this->db->join('user','orderfood.user_id=user.user_id');
        $this->db->join('kitchen','orderfood.kitchen_id=kitchen.kitchen_id');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getOrderDetail()
    {
              $this->db->select('*');
        $this->db->from('orderfood');
        $this->db->join('user','orderfood.user_id=user.user_id');
        $this->db->join('kitchen','orderfood.kitchen_id=kitchen.kitchen_id');
        $query = $this->db->get();
        return $query->row();
    }
    public function getUser()
    {
        $this->db->select('*');
        $this->db->from('user');
//        $this->db->join('reply','reply.q_id=question.q_id','left outer');
//        $this->db->join('student','question.s_id=student.s_id');
//        $this->db->join('teacher','question.t_id=teacher.t_id');
        $query = $this->db->get();
        return $query->result();
    }
    public function deleteQuestions($id)
    {
        $this->db->where('q_id',$id);
        $this->db->delete('question');
        $this->db->where('q_id',$id);
        $this->db->delete('reply');

    }
    public function deleteNews($id)
    {
        $this->db->where('n_id',$id);
        $this->db->delete('newsletter');


    }

    public function verify($id)
    {
        $this->db->where('t_id',$id);
        $this->db->set('t_status',"active");
        $this->db->update('teacher');

    }
    
    public function updateOrderStatus($id,$data)
    {
        $this->db->where('order_id',$id);
        
        $this->db->update('orderfood',$data); 
    }
    
    public function updateEmail($data)
    {
         $this->db->where('id',1);
        
        $this->db->update('email',$data);
    }
    public function getContactUs() {
        $this->db->select('*');
        $this->db->from('contactUs');
        $query = $this->db->get();
        return $query->result();

    }
    public function getemailText()
    {
          $this->db->select('*');
        $this->db->from('email');
        $query = $this->db->get();
        return $query->row();
    }
    public function getcat()
    {
        $this->db->select('*');
        $this->db->from('food_category');

        $query = $this->db->get();
        return $query->result();
    }
    public function getDegrees($id)
    {
        $this->db->select('*');
        $this->db->from('degree');
        $this->db->where('t_id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function getMenuCount()
    {
        $query = $this->db->select('count(*) as total')
            ->from('menu')
           // ->where('t_status',"inactive")
            ->get();
        return $query->row();
    }
    public function getOwnerCount()
    {
        $query = $this->db->select('count(*) as total')
            ->from('owner')
            ->get();
        return $query->row();
    }
    public function getUserCount()
    {
        $query = $this->db->select('count(*) as total')
            ->from('user')
            ->get();
        return $query->row();
    }
    public function getRestrauntCount()
    {
        $query = $this->db->select('count(*) as total')
            ->from('kitchen')
            ->get();
        return $query->row();
    }
    
    	public function getkitchen(){
		$query=$this->db->select('*')
		->from('kitchen')
		->join('owner','kitchen.owner_id=owner.owner_id')
		->get();
		return $query->result();


	}
	
	
	public function newKitchen($data){
	 $this->db->insert('kitchen',$data);
    //$insert_id = $this->db->insert_id();
    //return  $insert_id;
    }
    
    
    public function getEditKitchen($kitchen_id){
$query=$this->db->select('*')
	->where('kitchen_id',$kitchen_id)
	->from('kitchen')
	->join('owner','kitchen.owner_id=owner.owner_id')
	->get();
	return $query->row();
}


public function editKitchen($data,$kit_id){
$this->db->where('kitchen_id',$kit_id)
->update('kitchen',$data);
}
	

public function deleteKitchen($kitchen_id){
$this->db->where('kitchen_id',$kitchen_id)
->delete('kitchen');
}
	
	public function getTodayCompletedOrders($date)
    {
        $query=$this->db->select('*')
            ->from('orderfood')
            ->join('user','user.user_id=orderfood.user_id')
            ->where('DATE(orderfood.datetime)',$date)
            ->where('status',"completed")
            ->get();
        return $query->result();

    }
public function getDateCompletedOrders($from,$to)
{
    $query=$this->db->select('*')
        ->from('orderfood')
        ->join('user','user.user_id=orderfood.user_id')
        ->where('DATE(orderfood.datetime)>=',$from)
        ->where('DATE(orderfood.datetime)<=',$to)
        ->where('status',"completed")
        ->get();
    return $query->result();
}

    public function getTodayRejectedOrders($date)
    {
        $query=$this->db->select('*')
            ->from('orderfood')
            ->join('user','user.user_id=orderfood.user_id')
            ->where('DATE(orderfood.datetime)',$date)
            ->where('status',"reject")
            ->get();
        return $query->result();

    }
    public function getDateRejectedOrders($from,$to)
    {
        $query=$this->db->select('*')
            ->from('orderfood')
            ->join('user','user.user_id=orderfood.user_id')
            ->where('DATE(orderfood.datetime)>=',$from)
            ->where('DATE(orderfood.datetime)<=',$to)
            ->where('status',"reject")
            ->get();
        return $query->result();
    }
    public function getOrderCount($date)
    {
        $query=$this->db->select('count(*) as total')
            ->from('orderfood')
            ->where('DATE(orderfood.datetime)',$date)
            ->get();
        return $query->row();
    }

    public function getDateOrderCount($from,$to)
    {
        $query=$this->db->select('count(*) as total')
            ->from('orderfood')
            ->where('DATE(orderfood.datetime)>=',$from)
            ->where('DATE(orderfood.datetime)<=',$to)
            ->get();
        return $query->row();
    }

    public function getRejectedCount($date)
    {
        $query=$this->db->select('count(*) as total')
            ->from('orderfood')
            ->where('DATE(orderfood.datetime)',$date)
            ->where('status',"reject")
            ->get();
        return $query->row();
    }

    public function getDateRejectedCount($from,$to)
    {
        $query=$this->db->select('count(*) as total')
            ->from('orderfood')
            ->where('DATE(orderfood.datetime)>=',$from)
            ->where('DATE(orderfood.datetime)<=',$to)
            ->where('status',"reject")
            ->get();
        return $query->row();
    }
    public function getCompletedCount($date)
    {
        $query=$this->db->select('count(*) as total')
            ->from('orderfood')
            ->where('DATE(orderfood.datetime)',$date)
            ->where('status',"completed")
            ->get();
        return $query->row();
    }

    public function getDateCompletedCount($from,$to)
    {
        $query=$this->db->select('count(*) as total')
            ->from('orderfood')
            ->where('DATE(orderfood.datetime)>=',$from)
            ->where('DATE(orderfood.datetime)<=',$to)
            ->where('status',"completed")
            ->get();
        return $query->row();
    }

    public function getSalesCount($date)
    {
        $query=$this->db->select('Sum(price) as total')
            ->from('orderfood')
            ->where('DATE(orderfood.datetime)',$date)
            ->where('status',"completed")
            ->get();
        return $query->row();
    }

    public function getDateSalesCount($from,$to)
    {
        $query=$this->db->select('Sum(price) as total')
            ->from('orderfood')
            ->where('DATE(orderfood.datetime)>=',$from)
            ->where('DATE(orderfood.datetime)<=',$to)
            ->where('status',"completed")
            ->get();
        return $query->row();
    }
    public function insertNewTopping($new_topping)
    {
        $this->db->insert('menu_extras',$new_topping);
    }
    public function getTroppingDetalis()
    {
        $query = $this->db
            ->select('*')
            ->from('menu_extras')
            ->join('menu','menu.menu_id = menu_extras.menu_id')
            ->get();
        return $query->result();
    }
    public function getData($id)
    {
        $query = $this->db
            ->select('*')
            ->from('menu_extras')
            ->where('m_extra_id',$id)
            ->join('menu','menu.menu_id = menu_extras.menu_id')
            ->get();
        return $query->result();
    }
    public function updateToppingSuccess($t_id,$update)
    {
        $this->db->where('m_extra_id',$t_id)->update('menu_extras',$update);
    }
    public function deleteTopping($id)
    {
        $this->db->where('m_extra_id',$id)->delete('menu_extras');
    }
    public function kitchenid()
    {
        $query = $this->db
            ->select('*')
            ->from('kitchen')
            ->get();
        return $query->result();
    }
    public function getMenu()
    {
        $query = $this->db
            ->select('*')
            ->from('menu')
            ->get();
        return $query->result();
    }
    public function getKitchenId($menu_id)
    {
        $query = $this->db
            ->select('*')
            ->from('menu')
            ->where('menu_id',$menu_id)
            ->get();
        if($query->num_rows() == 1){

            return $query->row()->kitchen_id;
        }

    }


    public function getFoodNames()
    {
        $query = $this->db
            ->select('*')
            ->from('food_category')
            ->get();

        return $query->result();
    }
    public function getFoodSubCatNames()
    {
        $query = $this->db
            ->select('*')
            ->from('food_subcat')
            ->get();

        return $query->result();
    }
    public function insertMenu($insert_menu)
    {
        $this->db->insert('menu',$insert_menu);
    }
    public function getAll()
    {
        $query = $this->db
            ->select('*')
            ->from('menu')
            ->join('kitchen','kitchen.kitchen_id = menu.kitchen_id')
            ->join('food_category','food_category.food_cat_id = menu.food_cat_id')
            ->join('food_subcat','food_subcat.f_subcat_id = menu.f_subcat_id')
            ->get();
        return $query->result();
    }
    public function update_data($id)
    {
        $query = $this->db
            ->select('*')
            ->from('menu')
            ->where('menu_id',$id)
            ->join('kitchen','kitchen.kitchen_id = menu.kitchen_id')
            ->join('food_category','food_category.food_cat_id = menu.food_cat_id')
            ->get();
        return $query->result();
    }
    public function deleteCat($id)
    {
        $this->db->where('food_cat_id',$id)->delete('food_category');
    }
    public function updatSuccess($cat_id,$update_cat)
    {
        $this->db->where('food_cat_id',$cat_id)->update('food_category',$update_cat);
    }
    public function getFoodCategory()
    {
        $query = $this->db
            ->select('*')
            ->from('food_category')
            ->join('kitchen','food_category.kitchen_id = kitchen.kitchen_id')
            ->get();
        return $query->result();
    }
    public function updateCat($id)
    {
        $query = $this->db
            ->select('*')
            ->from('food_category')
            ->where('food_cat_id',$id)
            ->get();
        return $query->result();
    }
    public function insertFoodCat($insert_cat)
    {
        $insert = $this->db->insert('food_category',$insert_cat);
        if($insert)
        {
            return TRUE;
        }
    }
}
?>
