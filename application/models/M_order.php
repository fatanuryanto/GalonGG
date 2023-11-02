<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_order extends CI_Model {
    public function getProduct($id){
        $product=$this->db->get_where('products', array('id'=>$id));
        return $product->row();
    }
    
    public function insertOrder($order){
        $data = array(
			'id'=>$order['id'],
			'name'=>$order['name'],
            'address'=>$order['address'],
			'phone'=>$order['phone'],
            'date'=>date('Y-m-d'),
            'status'=>'Paid'
		);
		$this->db->insert('orders', $data);
    }

    public function insertOrderList($data){
        $this->db->insert('order_lists', $data);
    }
}
