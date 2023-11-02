<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_galon extends CI_Model {

    public function getGalon($id=false){
        if ($id===FALSE) {
            return $this->db->select('products.*, categories.name as category')
            ->join('categories','categories.id=products.category_id')
            ->get('products')->result_array();
        }else{
            $product=$this->db->get_where('products', array('id'=>$id));
            return $product->row();
        }
    }

    public function getCategory(){
        return $this->db->get('categories')->result_array();
    }

    public function create($filename){
        $data = array(
			'name'=>$this->input->post('name', TRUE),
			'price'=>$this->input->post('price', TRUE),
            'category_id'=>$this->input->post('category', TRUE),
			'filename'=>$filename
		);
		$this->db->insert('products', $data);
    }

    public function update($id){
		$data = array(
			'name'=>$this->input->post('name', TRUE),
			'price'=>$this->input->post('price', TRUE),
		);
		$this->db->where('id', $id);
		$this->db->update('products', $data);
	}

    public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('products');
	}

    
}