<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class User_model extends CI_Model {

	function __construct() {

		parent::__construct();

	}


    public function checkEmail($email){
        $query = $this->db->select('*')
        ->from('user')
        ->where('user_email', $email)
        ->get();
        if ($query->num_rows() > 0){
        echo '1';
        }
        else {
        echo '0';
        }
    }


    public function userSignup($data){
    	$this->db->insert('user',$data);
    }
  
	public function get_User($user_email, $user_password) {

		$this->db->where('user_email', $user_email);
		$this->db->where('user_password', $user_password);
		$sql = $this->db->get('user');
		return $sql->num_rows();

	}
	

	public function getUserDetail($email) {
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where("user_email", $email);
		$query = $this->db->get();
		return $query->result();

	}
		public function getUserDetails($email) {
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where("user_id", $email);
		$query = $this->db->get();
		return $query->result();

	}


	public function userInfo($id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where("user_id", $id);
		$query = $this->db->get();
		return $query->row();

	}
public function getPreviousOrders($id)

{
    $this->db->select('*');
    $this->db->from('orderfood');
    $this->db->where("orderfood.user_id", $id);

    $this->db->join('kitchen','orderfood.kitchen_id=kitchen.kitchen_id');
    $query = $this->db->get();
    return $query->result();
}
public function getorderFood($id)
{
    $this->db->select('*');
    $this->db->from('orderfood');
    $this->db->where("orderfood.order_id", $id);
    $query = $this->db->get();
    return $query->row();
}
public function addorderFood($orderarray)
{
	$this->db->insert('orderfood',$orderarray);
    $insert_id = $this->db->insert_id();

    return  $insert_id;

}

public function addorderFoodDetail($detailarray)
{
    $this->db->insert('order_details',$detailarray);
}
	public function updateUser($userid,$data){
		$this->db->where('user_id',$userid);
		$this->db->update('user',$data);
	}
	public function updatepassword($userid,$data)
	{
        $this->db->where('user_id',$userid);
        $this->db->update('user',$data);
	}

	
	public function getJob() {
		$this->db->select('*');
		$this->db->from('job');
		$query = $this->db->get();
		return $query->result();
	}
	

	public function getOwnerDetail($id) {
		$this->db->select('*');
		$this->db->from('owner');
		$this->db->where("owner_id", $id);
		$query = $this->db->get();
		return $query->row();
	}
	

	public function Update($change, $id) {
		$this->db->update('owner', $change);
		$this->db->where("owner_id", $id);

	}


	public function getInbox($id)
    {

        $query = $this->db->select('*')
            ->from('chat')
            ->join('user', 'chat.user_id = user.user_id')
            ->join('kitchen','kitchen.owner_id=chat.owner_id')
//            ->join('items', 'orders.item_id = items.item_id', 'inner')
            ->where('chat.user_id', $id)
            ->group_by('chat.owner_id')
           
            ->get();
        return $query->result();
    }


    public function updateMsgStatus($data,$owner_id,$id)
    {

        $this->db->where('user_id', $id);
        $this->db->where('owner_id', $owner_id);
        $this->db->update('chat', $data);
    }


     public function getChat($id, $owner_id,$kid) {
        $query = $this->db->select('chat.*,kitchen.*,user.*')
            ->from('chat')
            ->join('kitchen','kitchen.kitchen_id='.$kid)
            ->join('user', 'user.user_id=chat.user_id');
            

            $where = "((chat.sender_id=$id AND chat.owner_id = $owner_id) OR (chat.sender_id=$owner_id AND chat.user_id=$id))";
        $query = $this->db->where($where)
            ->order_by('chat.send_date')
            ->get();
        return $query->result();
    }


    public function sendMsgOwner($data)
    {

        $this->db->insert('chat', $data);

    }


    public function getuserCart($userid){
    	$query=$this->db->select('*')
    	->where('user_id',$userid)
    	->from('cart')
    	->get();
    	return count($query->result());
    }
}
?>
