<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Login_model extends CI_Model {

	function __construct() {

		parent::__construct();

	}

	function get_Owner($owner_email, $owner_password) {

		$this->db->where('owner_email', $owner_email);
		$this->db->where('owner_password', $owner_password);

		$sql = $this->db->get('owner');

		return $sql->num_rows();

	}
	public function putRating($data)
	{
	    $this->db->insert('rating',$data);
	}
    function get_Admin($owner_email, $owner_password) {

        $this->db->where('admin_email', $owner_email);
        $this->db->where('password', $owner_password);

        $sql = $this->db->get('admin');

        return $sql->num_rows();

    }
	public function getDetail($email) {
		$this->db->select('*');
		$this->db->from('owner');
		$this->db->where("owner_email", $email);
		$query = $this->db->get();
		return $query->result();

	}
    public function getDetailAdmin($email) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where("admin_email", $email);
        $query = $this->db->get();
        return $query->result();

    }
    
   public function getAdminDetail($id) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where("admin_id", $id);
        $query = $this->db->get();
        return $query->row();

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
		public function UpdateAdmin($change, $id) {
		    	$this->db->where("admin_id", $id);
		$this->db->update('admin', $change);
	

	}

}
?>
