<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galon extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_galon', 'product');
    }
	
	public function index(){
        if(null !== $this->session->userdata('user')){
			$data['categories']=$this->product->getCategory();
            $data['products']=$this->product->getGalon();
            $this->load->view('header');
            $this->load->view('admin/home',$data);
            $this->load->view('footer');
		}else{
			$data['products']=$this->product->getGalon();
            $this->load->view('header');
            $this->load->view('home',$data);
            $this->load->view('footer');
		}
	}

	public function insert(){
			$id = uniqid();
            $config['upload_path'] = './asset/img/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '1000000';
            $config['file_name'] = str_replace('.', '_', $id);

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('');
            } else {
                $filename = $this->upload->data('file_name');
                $this->product->create($filename);
				redirect('');
			}
	}

	public function update($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name', 'required|max_length[30]');
        $this->form_validation->set_rules('price', 'Price', 'required');
		$this->form_validation->set_rules('image', 'Image');


        if ($this->form_validation->run() === false) {
			$data['product'] = $this->product->getGalon($id);
            $this->load->view('header');
            $this->load->view('admin/update',$data);
            $this->load->view('footer');
        } else {
            if($this->input->post('file')){
				$galon=$this->product->getGalon($id);
				$config['upload_path'] = './asset/img/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = '100000';
				$config['file_ext_tolower'] = true;
				$config['overwrite']  = TRUE;
				$config['file_name'] = $galon->filename;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('image')) {
					$this->session->set_flashdata('error', $this->upload->display_errors());
					redirect(base_url('index.php/Galon/update/'.$galon->id));
				} else {
					$this->product->update($id);
					redirect('');
				}
            }else{
                $this->product->update($id);
				redirect('');
            }
                 
        }
    }

	public function delete($id){
        $product = $this->product->getGalon($id);
        $this->product->delete($id);
        unlink('./asset/img/'.$product->filename);
        redirect('');
    }
}
