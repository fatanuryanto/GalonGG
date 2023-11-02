<?php
class M_admin extends CI_Model{
    function login($where){		
		return $this->db->get_where('users',$where)->num_rows();
	}

	public function register($data){	
		$this->db->insert('users', $data);
	}

	public function getOrder(){
        return $this->db->select('orders.id as id,orders.name as name, address, phone, products.name as item, quantity,status')
						->join('orders','orders.id=order_lists.order_id')
                        ->join('products','products.id=order_lists.product_id')
                        ->where('status','paid')->get('order_lists')->result_array();
    }
	
	public function deliver($id){
		$this->db->set('status','Delivered')->where('id',$id)->update('orders');
	}
	
	public function cancel($id){
		$this->db->set('status','Cancel')->where('id',$id)->update('orders');
	}

	public function getReport(){
        return $this->db->select('orders.id as id,orders.name as name, address, phone, products.name as item, quantity,status')
						->join('orders','orders.id=order_lists.order_id')
                        ->join('products','products.id=order_lists.product_id')
                        ->get('order_lists')->result_array();
    }
}