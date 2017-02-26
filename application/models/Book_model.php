<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Book_model extends CI_model {
    public function showBooks(){
        //// Get all details ehich store in "book" table in database.
        $this->db->select('*');
        $this->db->from('book');
        return $this->db->get()->result_array();
        }

        // Insert customer details in "customer" table.
        public function insert_customer($data)
        {
            $this->db->insert('customers', $data);
            $id = $this->db->insert_id();
            return (isset($id)) ? $id : FALSE;	// check whether a variable is set or not	
        }
        
            // Insert order date with customer id in "orders" table .
        public function insert_order($data)
        {
            $this->db->insert('orders', $data);
            $id = $this->db->insert_id();
            return (isset($id)) ? $id : FALSE; //  check whether a variable is set or not
        }
        
            // Insert order detail in "order_detail" table .
        public function insert_order_detail($data)
        {
            $this->db->insert('order_detail', $data);
        }
       
        
         public function insert_feedback($data)
        {
            $this->db->insert('feedback', $data);
            $id = $this->db->insert_id();
            return (isset($id)) ? $id : FALSE;
        }
        public function showFeedbacks(){
            $this->db->select('*');
            $this->db->from('feedback');
            return $this->db->get()->result_array();
        }

        public function showLogin(){
        $this->db->select('*');
		$this->db->from('login');
		return $this->db->get()->result_array();
        }
        public function getBook(){
		$this->db->select('*');
		$this->db->from('book');
		return $this->db->get()->result_array();
	}
	    public function addBook($insert_data){
		$this->db->insert('book',$insert_data); 
		if($this->db->affected_rows() > 0){ 
			return true;
		}
		else{
			return false;
		}
	}
        public function deleteBook($id){
		$this->db->where('id', $id); //need to be correct name in database
		$this->db->delete('book');
	
	}
	
	
}
