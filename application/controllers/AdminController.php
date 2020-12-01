<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('AdminModel');
		$this->load->model('Model');
	}

	public function index(){
		$this->load->view('admin/sub/head');
		$this->load->view('admin/sub/sidebar');
		$this->load->view('admin/sub/header');
		$this->load->view('admin/index');
		$this->load->view('admin/sub/footer');
		$this->load->view('admin/sub/foot');
	}

	#LEFT MENU======================================================================
	public function lawyer(){
		$data['data'] = $this->Model->get('tb_lawyer');
		$this->load->view('admin/sub/head');
		$this->load->view('admin/sub/sidebar');
		$this->load->view('admin/sub/header');
		$this->load->view('admin/lawyer',$data);
		$this->load->view('admin/sub/footer');
		$this->load->view('admin/sub/foot');
	}

	public function notaris(){
		$data['data'] = $this->AdminModel->get_notaris();
		$this->load->view('admin/sub/head');
		$this->load->view('admin/sub/sidebar');
		$this->load->view('admin/sub/header');
		$this->load->view('admin/notaris',$data);
		$this->load->view('admin/sub/footer');
		$this->load->view('admin/sub/foot');
	}

	public function client(){
		$data['data'] = $this->Model->get('tb_client');
		$this->load->view('admin/sub/head');
		$this->load->view('admin/sub/sidebar');
		$this->load->view('admin/sub/header');
		$this->load->view('admin/client',$data);
		$this->load->view('admin/sub/footer');
		$this->load->view('admin/sub/foot');
	}

	public function pesanan(){
		$data['data'] = $this->Model->get('tb_client');
		$this->load->view('admin/sub/head');
		$this->load->view('admin/sub/sidebar');
		$this->load->view('admin/sub/header');
		$this->load->view('admin/pesanan',$data);
		$this->load->view('admin/sub/footer');
		$this->load->view('admin/sub/foot');
	}

	#CRUD LAWYER======================================================================
	public function add_lawyer(){
		$upload = $this->Model->upload_lawyer();
		if ($upload['result'] == "success"){
			$data = array(
				'nama_lawyer'  => $this->input->post('nama_lawyer'),
				'email_lawyer' => $this->input->post('email_lawyer'),
				'no_hp_lawyer' => $this->input->post('no_hp_lawyer'),
				'tarif'		   => $this->input->post('tarif'),
				'spesialisasi' => $this->input->post('spesialisasi'),
				'deskripsi'    => $this->input->post('deskripsi'),
				'foto_lawyer'  => $upload['file']['file_name'],
				'pass'		   => $this->input->post('pass')
			);
			$this->db->insert('tb_lawyer',$data);
			redirect('AdminController/lawyer');
		}else{
			echo "Jiahh.. error wkwkwkwkwk (foto tidak ada/terlalu besar)";
		}
	}

	public function edit_lawyer(){
		$upload = $this->Model->upload_lawyer();
		if ($upload['result'] == "success"){
			$data = array(
				'nama_lawyer'  => $this->input->post('nama_lawyer'),
				'email_lawyer' => $this->input->post('email_lawyer'),
				'no_hp_lawyer' => $this->input->post('no_hp_lawyer'),
				'tarif'		   => $this->input->post('tarif'),
				'spesialisasi' => $this->input->post('spesialisasi'),
				'deskripsi'    => $this->input->post('deskripsi'),
				'foto_lawyer'  => $upload['file']['file_name'],
				'pass'		   => $this->input->post('pass')
			);
		}else{
			$data = array(
				'nama_lawyer'  => $this->input->post('nama_lawyer'),
				'email_lawyer' => $this->input->post('email_lawyer'),
				'no_hp_lawyer' => $this->input->post('no_hp_lawyer'),
				'tarif'		   => $this->input->post('tarif'),
				'spesialisasi' => $this->input->post('spesialisasi'),
				'deskripsi'    => $this->input->post('deskripsi'),
				'pass'		   => $this->input->post('pass')
			);
		}
		$where = array('id_lawyer'=>$this->input->post('id_lawyer'));
		$this->Model->edit($where,$data,'tb_lawyer');
		redirect('AdminController/lawyer');
	}

	public function del_lawyer($id){
		$where = array('id_lawyer'=>$id);
		$data = $this->Model->del($where,'tb_lawyer');
		redirect('AdminController/lawyer');
	}

	#CRUD NOTARIS======================================================================
	public function add_notaris(){
		$upload = $this->Model->upload_notaris();
		if ($upload['result'] == "success"){
			$data = array(
				'nama_notaris'  => $this->input->post('nama_notaris'),
				'email_notaris' => $this->input->post('email_notaris'),
				'no_hp_notaris' => $this->input->post('no_hp_notaris'),
				'foto_notaris'  => $upload['file']['file_name'],
				'pass'		   => $this->input->post('pass')
			);
			$this->db->insert('tb_notaris',$data);
			redirect('AdminController/notaris');
		}else{
			echo "Jiahh.. error wkwkwkwkwk (foto tidak ada/terlalu besar)";
		}
	}

	public function edit_notaris(){
		$upload = $this->Model->upload_notaris();
		if ($upload['result'] == "success"){
			$data = array(
				'nama_notaris'  => $this->input->post('nama_notaris'),
				'email_notaris' => $this->input->post('email_notaris'),
				'no_hp_notaris' => $this->input->post('no_hp_notaris'),
				'foto_notaris'  => $upload['file']['file_name'],
				'pass'		   => $this->input->post('pass')
			);
		}else{
			$data = array(
				'nama_notaris'  => $this->input->post('nama_notaris'),
				'email_notaris' => $this->input->post('email_notaris'),
				'no_hp_notaris' => $this->input->post('no_hp_notaris'),
				'pass'		   => $this->input->post('pass')
			);
		}
		$where = array('id_notaris'=>$this->input->post('id_notaris'));
		$this->Model->edit($where,$data,'tb_notaris');
		redirect('AdminController/notaris');
	}

	public function del_notaris($id){
		$where = array('id_notaris'=>$id);
		$data = $this->Model->del($where,'tb_notaris');
		redirect('AdminController/notaris');
	}

	#CRUD CLIENT=========================================================================
	public function add_client(){
		$upload = $this->Model->upload_client();
		if ($upload['result'] == "success"){
			$data = array(
				'nama_client'  => $this->input->post('nama_client'),
				'email' 	   => $this->input->post('email'),
				'no_hp'        => $this->input->post('no_hp'),
				'foto'         => $upload['file']['file_name'],
				'pass'		   => $this->input->post('pass')
			);
			$this->db->insert('tb_client',$data);
			redirect('AdminController/client');
		}else{
			echo "Jiahh.. error wkwkwkwkwk (foto tidak ada/terlalu besar)";
		}
	}

	public function edit_client(){
		$upload = $this->Model->upload_client();
		if ($upload['result'] == "success"){
			$data = array(
				'nama_client'  => $this->input->post('nama_client'),
				'email' 	   => $this->input->post('email'),
				'no_hp'        => $this->input->post('no_hp'),
				'foto'         => $upload['file']['file_name'],
				'pass'		   => $this->input->post('pass')
			);
		}else{
			$data = array(
				'nama_client'  => $this->input->post('nama_client'),
				'email' 	   => $this->input->post('email'),
				'no_hp'        => $this->input->post('no_hp'),
				'pass'		   => $this->input->post('pass')
			);
		}
		$where = array('id_client'=>$this->input->post('id_client'));
		$this->Model->edit($where,$data,'tb_client');
		redirect('AdminController/client');
	}

	public function del_client($id){
		$where = array('id_client'=>$id);
		$data = $this->Model->del($where,'tb_client');
		redirect('AdminController/client');
	}

	#DETAIL PESANAN======================================================================
	public function detail_pesanan($id){
		$where = array('id_client' => $id);
		$data['client'] = $this->Model->get_edit($where,'tb_client');
		$data['notaris'] = $this->AdminModel->get_notaris();
		$data['lawyer'] = $this->AdminModel->get_pesan_lawyer($id);
		$data['layanan'] = $this->AdminModel->get_pesan_layanan($id);
		$this->load->view('admin/sub/head');
		$this->load->view('admin/sub/sidebar');
		$this->load->view('admin/sub/header');
		$this->load->view('admin/detail_pesanan',$data);
		$this->load->view('admin/sub/footer');
		$this->load->view('admin/sub/foot');
	}

	public function pilih_notaris($id,$kode,$back){
		$data = array('id_notaris'  => $id);
		$where = array('id_pesan_layanan' => $kode);
		$this->Model->edit($where,$data,'tb_pesan_layanan');
		redirect('AdminController/detail_pesanan/'.$back);
	}

	public function del_pesanan_lawyer($id,$kode){
		$where = array('id_pesan_lawyer'=>$id);
		$data = $this->Model->del($where,'tb_pesan_lawyer');
		redirect('AdminController/detail_pesanan/'.$kode);
	}

	public function del_pesanan_layanan($id,$kode){
		$where = array('id_pesan_layanan'=>$id);
		$data = $this->Model->del($where,'tb_pesan_layanan');
		redirect('AdminController/detail_pesanan/'.$kode);
	}

	public function setuju_law($id,$back){
		$data = array('status'  => '4');
		$where = array('id_pesan_lawyer' => $id);
		$this->Model->edit($where,$data,'tb_pesan_lawyer');
		redirect('AdminController/detail_pesanan/'.$back);
	}

	public function tolak_law($id,$back){
		$data = array('status'  => '5');
		$where = array('id_pesan_lawyer' => $id);
		$this->Model->edit($where,$data,'tb_pesan_lawyer');
		redirect('AdminController/detail_pesanan/'.$back);
	}

	public function setuju_lay($id,$back){
		$data = array('status'  => '4');
		$where = array('id_pesan_layanan' => $id);
		$this->Model->edit($where,$data,'tb_pesan_layanan');
		redirect('AdminController/detail_pesanan/'.$back);
	}

	public function tolak_lay($id,$back){
		$data = array('status'  => '5');
		$where = array('id_pesan_layanan' => $id);
		$this->Model->edit($where,$data,'tb_pesan_layanan');
		redirect('AdminController/detail_pesanan/'.$back);
	}

}