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
		->join('menu_gallery','menu_gallery.menu_id=menu.menu_id')
		->join('food_category','food_category.food_cat_id=menu.food_cat_id')
		->group_by('menu.menu_id')
		->where('owner.owner_id',$id)
		->get();
		return $query->result();


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
	->where('owner_id',$id)
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


}
?>
