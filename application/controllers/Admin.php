<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->helper('form');
        $this->load->model('M_admin', 'admin');
		$this->load->model('M_galon', 'product');
    }

    public function loginPage(){
		$this->load->view('header');
		$this->load->view('admin/login');
		$this->load->view('footer');
	}

    public function login() {
		$data = array(
			'username' =>$this->input->post('name'),
			'password' =>md5($this->input->post('password', TRUE))
			);
		$check = $this->admin->login($data);
		if($check > 0){
			$this->session->set_userdata('user',$data);
			redirect("");
		}else{
			$this->session->set_flashdata('error', "Username atau Password Salah");
			redirect("index.php/Admin/loginPage");
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('');
	}

	public function registerPage(){
		$this->load->view('header');
		$this->load->view('admin/register');
		$this->load->view('footer');
	}

	public function register(){
		$data = array(
			'username'=>$this->input->post('name', TRUE),
			'password'=>md5($this->input->post('password', TRUE)),
			'phone'=>$this->input->post('phone', TRUE),
			'email'=>$this->input->post('email', TRUE),
		);
		$this->admin->register($data);
		redirect(base_url('index.php/Admin/loginPage'));
	}

	public function order(){
		$data['orders']=$this->admin->getOrder();
		$this->load->view('header');
		$this->load->view('admin/order',$data);
		$this->load->view('footer');
	}

	public function deliver($id){
		$this->admin->deliver($id);
		redirect(base_url('index.php/Admin/Order'));
	}

	public function report(){
		$data['report']=$this->admin->getReport();
		$this->load->view('header');
		$this->load->view('admin/report',$data);
		$this->load->view('footer');
	}
}