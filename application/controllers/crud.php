<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//Load dependencies
	}
	
	public function index(){
		$data['content'] = $this->db->get('tb_order');
		$this->load->view('w15h/index', $data);
		//Get Database
	}

	public function add(){
		$this->load->view('w15h/add');
	}
	public function action_add(){
		$data = array(
			
			'nama_c' => $this->input->post('customer'),
			'nama_sc' => $this->input->post('steam'),
			'link_sc' => $this->input->post('link'),
			'order_sc' => $this->input->post('order'),
			'harga_sc' => $this->input->post('harga'),
			'tgl_sc' => $this->input->post('tanggal'),
			'status_sc' => $this->input->post('status')
		);
		$this->db->set($data);
		$this->db->insert('tb_order');

		redirect('crud','refresh');
	}

	public function update($id = NULL){
		
		$this->db->where('id', $id);
		$data['content'] = $this->db->get('tb_order');

		$this->load->view('w15h/update', $data);


	}

	public function action_update($id =''){
		$data = array(
			
			'nama_c' => $this->input->post('customer'),
			'nama_sc' => $this->input->post('steam'),
			'link_sc' => $this->input->post('link'),
			'order_sc' => $this->input->post('order'),
			'harga_sc' => $this->input->post('harga'),
			'tgl_sc' => $this->input->post('tanggal'),
			'status_sc' => $this->input->post('status')
		);
		$this->db->where('id', $id);
		$this->db->update('tb_order', $data);

		redirect('crud','refresh');
	}

	public function delete($id = NULL){
		$this->db->where('id', $id);
		$this->db->delete('tb_order');

		redirect('crud','refresh');
	}

}
