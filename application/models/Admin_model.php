<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Owner_model extends CI_Model {

	function __construct() {

		parent::__construct();

	}

	public function getmenu($id){
		$query=$this->db->select('*')
		->from('menu')
		->join('kitchen','kitchen.kitchen_id=menu.kitchen_id')
		->join('owner','owner.owner_id=kitchen.owner_id')
		->join('food_category','food_category.food_cat_id=menu.food_cat_id')
		->group_by('menu.menu_id')
		->where('owner.owner_id',$id)
		->get();
		return $query->result();


	}
public function getKitchenId($id)
{
    $query=$this->db->select('*')
        ->from('kitchen')
        ->where('owner_id',$id)
        ->get();
    return $query->row()->kitchen_id;
}
public function getemailText()
{
       $query=$this->db->select('*')
        ->from('email')
        
        ->get();
    return $query->row();
}

public function getemail($email)
{
  $query=$this->db->select('*')
        ->from('user')
        ->where('user_id',$email)
        ->get();
    return $query->row()->user_email;  
}
public function getMenuCount($id)
{
    $query = $this->db->select('count(*) as total')
        ->from('menu')
        ->where('kitchen_id',$id)
        ->get();
    return $query->row();
}
public function getMenuk($kid)
{
    $query=$this->db->select('*')
        ->from('menu')

        ->where('kitchen_id',$kid)

        ->get();
    return $query->result();
}
    public function getkitmenu($id){

        $query=$this->db->select('menu_name')
            ->from('menu')

//            ->join('menu','orderfood.menu_id=menu.menu_id')
            ->where('menu_id',$id)
//			$this->db->where("FIND_IN_SET('".$_GET['category']."',main_cat)>0");

            ->get();
        return $query->row()->menu_name;
    }
    public function getRejectOrders($kid)
	{
        $query=$this->db->select('*')
            ->from('orderfood')
            ->join('user','user.user_id=orderfood.user_id')
//        ->join('menu','orderfood.menu_id=menu.menu_id')
//        ->join('menu_extras','orderfood.m_extra_id=menu_extras.m_extra_id')
            ->where('orderfood.kitchen_id',$kid)
            ->where('status',"reject")
            ->get();
        return $query->result();
	}
	public function getTakeawayOrders($kid)
	{
        $query=$this->db->select('*')
            ->from('orderfood')
            ->join('user','user.user_id=orderfood.user_id')
//        ->join('menu','orderfood.menu_id=menu.menu_id')
//        ->join('menu_extras','orderfood.m_extra_id=menu_extras.m_extra_id')
            ->where('orderfood.kitchen_id',$kid)
            ->where('status',"takeaway")
            ->get();
        return $query->result();
	}
    public function getCompletedOrders($kid)
    {
        $query=$this->db->select('*')
            ->from('orderfood')
            ->join('user','user.user_id=orderfood.user_id')
//        ->join('menu','orderfood.menu_id=menu.menu_id')
//        ->join('menu_extras','orderfood.m_extra_id=menu_extras.m_extra_id')
            ->where('orderfood.kitchen_id',$kid)
            ->where('status',"completed")
            ->get();
        return $query->result();
    }
    public function getUnCompletedOrders($kid)
    {
             $query=$this->db->select('*')
            ->from('orderfood')
            ->join('user','user.user_id=orderfood.user_id')
//        ->join('menu','orderfood.menu_id=menu.menu_id')
//        ->join('menu_extras','orderfood.m_extra_id=menu_extras.m_extra_id')
            ->where('orderfood.kitchen_id',$kid)
           
           ->where("status = 'accept' OR status = 'new' OR status = 'takeaway' OR status = 'baked'")
            
            ->get();
        return $query->result();  
    }
    public function getInProcessOrders($kid)
	{
        $query=$this->db->select('*')
            ->from('orderfood')
            ->join('user','user.user_id=orderfood.user_id')
//        ->join('menu','orderfood.menu_id=menu.menu_id')
//        ->join('menu_extras','orderfood.m_extra_id=menu_extras.m_extra_id')
            ->where('orderfood.kitchen_id',$kid)
            ->where('status',"baked")
            ->get();
        return $query->result();
	}
	 public function getbakingProcessOrders($kid)
	{
        $query=$this->db->select('*')
            ->from('orderfood')
            ->join('user','user.user_id=orderfood.user_id')
//        ->join('menu','orderfood.menu_id=menu.menu_id')
//        ->join('menu_extras','orderfood.m_extra_id=menu_extras.m_extra_id')
            ->where('orderfood.kitchen_id',$kid)
            ->where('status',"accept")
            ->get();
        return $query->result();
	}
    public function acceptOrder($id)
	{
        $this->db->where('order_id', $id);
        $this->db->set('status', "accept");
        $this->db->update('orderfood');
	}
	 public function bakedOrder($id)
	{
        $this->db->where('order_id', $id);
        $this->db->set('status', "baked");
        $this->db->update('orderfood');
	}
	public function getKitchenIdy($id)
	{
	     $query=$this->db->select('*')
            ->from('orderfood')

//            ->join('menu','orderfood.menu_id=menu.menu_id')
            ->where('order_id',$id)
//			$this->db->where("FIND_IN_SET('".$_GET['category']."',main_cat)>0");

            ->get();
        return $query->row()->k_id;   
	}
	public function deliveredOrder($id)
	{
        $this->db->where('order_id', $id);
        $this->db->set('status', "completed");
        $this->db->update('orderfood');
	}
	public function takeawayOrder($id)
	{
        $this->db->where('order_id', $id);
        $this->db->set('status', "takeaway");
        $this->db->update('orderfood');
	}
    public function rejectOrder($id,$reason)
    {
        $this->db->where('order_id', $id);
        $this->db->set('status', "reject");
        $this->db->set('reason', $reason);
        $this->db->update('orderfood');
    }
    public function getkitmenuEx($id){

        $query=$this->db->select('m_extra_name')
            ->from('menu_extras')

//            ->join('menu','orderfood.menu_id=menu.menu_id')
            ->where('m_extra_id',$id)
//			$this->db->where("FIND_IN_SET('".$_GET['category']."',main_cat)>0");

            ->get();
        return $query->row()->m_extra_name;
    }
public function getNewOrders($kid)
{
    $query=$this->db->select('*')
        ->from('orderfood')
        ->join('user','user.user_id=orderfood.user_id')
       // ->join('payment','payment.order_id=order_food.order_id')
       // ->join('menu_extras','order_details.m_extra_id=menu_extras.m_extra_id')
        ->where('orderfood.kitchen_id',$kid)
        ->where('p_status',"paid")
        ->where('status',"new")
        ->get();
    return $query->result();
}
    public function getCategoryCount($id)
    {
        $query = $this->db->select('count(*) as total')
            ->from('food_category')
            ->where('kitchen_id',$id)
            ->get();
        return $query->row();
    }public function getDeliveredOrdersCount($id)
{
    $query = $this->db->select('count(*) as total')
        ->from('orderfood')
        ->where('kitchen_id',$id)
        ->where('status',"completed")
        ->get();
    return $query->row();
}public function getUndeliveredOrdersCount($id)
{
    $query = $this->db->select('count(*) as total')
        ->from('orderfood')
        ->where('kitchen_id',$id)
        ->where('status',"new")
        ->get();
    return $query->row();
}

	public function getkitchen($id){
		$query=$this->db->select('*')
		->from('kitchen')
		->join('owner','owner.owner_id=kitchen.owner_id')
		->where('kitchen.owner_id',$id)
		->get();
		return $query->result();


	}

	public function newMenu($data){
	 $this->db->insert('menu',$data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
}


public function newKitchen($data){
	 $this->db->insert('kitchen',$data);
    //$insert_id = $this->db->insert_id();
    //return  $insert_id;
}


public function getOwnerKitchen($id){
	$query=$this->db->select('*')
	->where('owner_id',$id)
	->from('kitchen')
	->get();
	return $query->result();
}


public function getOwnerfoodcat($id){
	$query=$this->db->select('*')
	->where('kitchen_id',$id)
	->from('food_category')
	->get();
	return $query->result();
}



public function addMenuGallery($data2)
{
    $this->db->insert('menu_gallery',$data2);
}
public function getEditMenu($menu_id){
$query=$this->db->select('*')
	->where('menu_id',$menu_id)
	->from('menu')
	->join('kitchen','kitchen.kitchen_id=menu.kitchen_id')
	->join('food_category','food_category.food_cat_id=menu.food_cat_id')
	->get();
	return $query->row();
}



public function getEditKitchen($kitchen_id){
$query=$this->db->select('*')
	->where('kitchen_id',$kitchen_id)
	->from('kitchen')
	->get();
	return $query->row();
}


public function editMenu($data,$menu_id){
$this->db->where('menu_id',$menu_id)
->update('menu',$data);
}


public function editKitchen($data,$kit_id){
$this->db->where('kitchen_id',$kit_id)
->update('kitchen',$data);
}


public function deleteMenu($menu_id){
$this->db->where('menu_id',$menu_id)
->delete('menu');
}


public function deleteKitchen($kitchen_id){
$this->db->where('kitchen_id',$kitchen_id)
->delete('kitchen');
}


public function deleteMenuImages($menu_id){
$this->db->where('menu_id',$menu_id)
->delete('menu_gallery');
} 

public function updateMenuGallery($data2,$menu_id){
	$this->db->where('menu_id',$menu_id)
->update('menu_gallery',$data2);
}

public function getmenuImages($menu_id){
$query=$this->db->select('*')
	->where('menu_id',$menu_id)
	->from('menu_gallery')

	->get();
	return $query->result();
}


public function getInbox($id)
    {

        $query = $this->db->select('*')
            ->from('chat')
            ->join('user', 'chat.user_id = user.user_id')
            ->join('kitchen','kitchen.kitchen_id=chat.kitchen_id')
//            ->join('items', 'orders.item_id = items.item_id', 'inner')
            ->where('chat.owner_id', $id)
            ->group_by('chat.user_id')
           
            ->get();
        return $query->result();
    }



    public function updateMsgStatus($data,$user_id,$id)
    {

        $this->db->where('owner_id', $id);
        $this->db->where('user_id', $user_id);
        $this->db->update('chat', $data);
    }



    public function getChat($id, $user_id,$kid) {
        $query = $this->db->select('chat.*,kitchen.*,user.*')
            ->from('chat')
            ->join('kitchen','kitchen.kitchen_id='.$kid)
            ->join('user', 'user.user_id=chat.user_id');
            

            $where = "((chat.sender_id=$id AND chat.user_id = $user_id) OR (chat.sender_id=$user_id AND chat.owner_id=$id))";
        $query = $this->db->where($where)
            ->order_by('chat.send_date')
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


}
?>
