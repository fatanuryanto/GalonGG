<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_galon', 'product');
        $this->load->model('M_order', 'order');
    }
	
	public function index(){
        $data['products']=$this->product->getGalon();
		$this->load->view('header');
		$this->load->view('order',$data);
		$this->load->view('footer');
    }

    public function saveOrder(){
        $order=array(
            'id'=>uniqid(),
            'name'=>$this->input->post('name'),
            'address'=>$this->input->post('address'),
            'phone'=>$this->input->post('phone'),
            'date'=>date('Y-m-d'),
            'status'=>"paid"
        );
		$quantity = $this->input->post('quantity');
		$id = $this->input->post('id');
        $order_list=[];
        $total=0;
		for($index=0;$index<count($quantity);$index++){
            if($quantity[$index]>=1){
                array_push($order_list,array(
                    'order_id'=>$order['id'],
                    'product_id'=>$id[$index],
                    'quantity'=>$quantity[$index],
                    'product'=>$this->order->getProduct($id[$index])
                ));
                $total=$total+($quantity[$index]*$order_list[$index]['product']->price);
            }
		}
        $order['total']=$total;
        $this->session->set_userdata('order',$order);
        $this->session->set_userdata('order_list',$order_list);

        $this->load->view('header');
		$this->load->view('confirm');
		$this->load->view('footer');
	}

    public function confirmOrder(){
        $this->order->insertOrder($this->session->userdata('order'));
        foreach($this->session->userdata('order_list') as $item){
            $data=array(
                'order_id'=>$item['order_id'],
                'product_id'=>$item['product_id'],
                'quantity'=>$item['quantity']
            );
            $this->order->insertOrderList($data);
        }
        redirect('');
    }
}