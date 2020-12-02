<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model');
	}

	public function index(){
		$data['layanan'] = $this->Model->get('tb_layanan');
		$this->load->view('sub/head');
		$this->load->view('sub/header');
		$this->load->view('index',$data);
		$this->load->view('sub/footer');
		$this->load->view('sub/foot');
	}

	public function daftar(){
		$this->load->view('sub/head');
		$this->load->view('sub/header');
		$this->load->view('daftar');
		$this->load->view('sub/footer');
		$this->load->view('sub/foot');
	}

	public function lawyer(){
		$data['lawyer'] = $this->Model->get('tb_lawyer');
		$this->load->view('sub/head');
		$this->load->view('sub/header');
		$this->load->view('lawyer',$data);
		$this->load->view('sub/footer');
		$this->load->view('sub/foot');
	}

	public function bantuan(){
		$this->load->view('sub/head');
		$this->load->view('sub/header');
		$this->load->view('bantuan');
		$this->load->view('sub/footer');
		$this->load->view('sub/foot');
	}

	public function pengaduan(){
		$data['pengaduan'] = $this->Model->get('tb_pengaduan');
		$this->load->view('sub/head');
		$this->load->view('sub/header');
		$this->load->view('pengaduan',$data);
		$this->load->view('sub/footer');
		$this->load->view('sub/foot');
	}

	#BOOKING LAYANAN==========================================================================
	public function dtl_layanan($id){
		$data['dtl_layanan'] = $this->Model->get_where_layanan($id);
		$this->load->view('sub/head');
		$this->load->view('sub/header');
		$this->load->view('detail_layanan',$data);
		$this->load->view('sub/footer');
		$this->load->view('sub/foot');
		
	}

	public function pesan_layanan($id){
		$data['dtl_layanan'] = $this->Model->get_where_layanan($id);
		$this->load->view('sub/head');
		$this->load->view('sub/header');
		$this->load->view('pesan_layanan',$data);
		$this->load->view('sub/footer');
		$this->load->view('sub/foot');
	}

	public function proses_pesan_layanan(){
		$id_client = $this->session->userdata('id');
		$data = array(
			'id_client'   => $id_client,
			'id_notaris'  => 0,
			'id_layanan'  => $this->input->post('id_layanan'),
			'ket_masalah' => $this->input->post('ket_masalah'),
			'tgl'		  => $this->input->post('tgl'),
			'jam_mulai'	  => $this->input->post('jam_mulai'),
			'jam_selesai' => $this->input->post('jam_selesai'),
			'status' 	  => '1'
		);
		$this->db->insert('tb_pesan_layanan',$data);
		redirect('Controller/pembayaran_layanan');
	}

	public function pembayaran_layanan(){
		$id_client = $this->session->userdata('id');
		$data['dtl_pesanlayanan'] = $this->Model->get_where_pesanlayanan_bayar($id_client);
		$this->load->view('sub/head');
		$this->load->view('sub/header');
		$this->load->view('pembayaran_layanan',$data);
		$this->load->view('sub/footer');
		$this->load->view('sub/foot');
	}

	public function proses_pembayaran_layanan(){
		$data = array(
			'metode_bayar' => $this->input->post('metode_bayar'),
			'status' 	   => '2'
		);
		$where = array('id_pesan_layanan' => $this->input->post('id_pesan_layanan'));
		$this->Model->edit($where,$data,'tb_pesan_layanan');
		redirect('Controller/bukti_bayar_layanan');
	}

	public function bukti_bayar_layanan(){
		$id_client = $this->session->userdata('id');
		$data['dtl_pesanlayanan'] = $this->Model->get_where_pesanlayanan_upload($id_client);
		$this->load->view('sub/head');
		$this->load->view('sub/header');
		$this->load->view('bukti_bayar_layanan',$data);
		$this->load->view('sub/footer');
		$this->load->view('sub/foot');
	}

	public function proses_bukti_layanan(){
		$upload = $this->Model->upload_bukti();
		if ($upload['result'] == "success"){
			$data = array(
				'file' 	 => $upload['file']['file_name'],
				'status' => '3'
			);
		}
		$where = array('id_pesan_layanan' => $this->input->post('id_pesan_layanan'));
		$this->Model->edit($where,$data,'tb_pesan_layanan');
		redirect('Controller/history');
	}

	#BOOKING LAWYER==========================================================================
	public function detail_lawyer($id){
		$data['lawyer'] = $this->Model->get('tb_lawyer');
		$data['dtl_lawyer'] = $this->Model->get_where_lawyer($id);
		$this->load->view('sub/head');
		$this->load->view('sub/header');
		$this->load->view('detail_lawyer',$data);
		$this->load->view('sub/footer');
		$this->load->view('sub/foot');
	}

	public function pesan_lawyer(){
		$data = array(
			'id_client'   => $this->input->post('id_client'),
			'id_lawyer'	  => $this->input->post('id_lawyer'),
			'ket_masalah' => $this->input->post('ket_masalah'),
			'tgl'		  => $this->input->post('tgl'),
			'jam_mulai'	  => $this->input->post('jam_mulai'),
			'jam_selesai' => $this->input->post('jam_selesai'),
			'status' 	  => '1'
		);
		$this->db->insert('tb_pesan_lawyer',$data);
		redirect('Controller/pembayaran');
	}

	public function pembayaran(){
		$id_client = $this->session->userdata('id');
		$data['dtl_pesanlawyer'] = $this->Model->get_where_pesanlawyer_bayar($id_client);
		$this->load->view('sub/head');
		$this->load->view('sub/header');
		$this->load->view('pembayaran',$data);
		$this->load->view('sub/footer');
		$this->load->view('sub/foot');
	}

	public function metode_bayar(){
		$data = array(
			'metode_bayar' => $this->input->post('metode_bayar'),
			'status' 	   => '2'
		);
		$where = array('id_pesan_lawyer' => $this->input->post('id_pesan_lawyer'));
		$this->Model->edit($where,$data,'tb_pesan_lawyer');
		redirect('Controller/bukti_bayar');
	}

	public function bukti_bayar(){
		$id_client = $this->session->userdata('id');
		$data['dtl_pesanlawyer'] = $this->Model->get_where_pesanlawyer_upload($id_client);
		$this->load->view('sub/head');
		$this->load->view('sub/header');
		$this->load->view('bukti_bayar',$data);
		$this->load->view('sub/footer');
		$this->load->view('sub/foot');
	}

	public function proses_bukti(){
		$upload = $this->Model->upload_bukti();
		if ($upload['result'] == "success"){
			$data = array(
				'file' 	 => $upload['file']['file_name'],
				'status' => '3'
			);
		}
		$where = array('id_pesan_lawyer' => $this->input->post('id_pesan_lawyer'));
		$this->Model->edit($where,$data,'tb_pesan_lawyer');
		redirect('Controller/history');
	}

	#HISTORY==========================================================================
	public function history(){
		$id_client = $this->session->userdata('id');
		$data['dtl_pesanlawyer'] = $this->Model->get_pesan_history($id_client);
		$data['dtl_pesanlayanan'] = $this->Model->get_pesan_history_layanan($id_client);
		$this->load->view('sub/head');
		$this->load->view('sub/header');
		$this->load->view('history',$data);
		$this->load->view('sub/footer');
		$this->load->view('sub/foot');
	}

	public function detail_history($id){
		$data['dtl_pesanlawyer'] = $this->Model->get_where_history($id);
		$this->load->view('sub/head');
		$this->load->view('sub/header');
		$this->load->view('detail_history',$data);
		$this->load->view('sub/footer');
		$this->load->view('sub/foot');
	}

	public function detail_history_layanan($id){
		$data['dtl_pesanlayanan'] = $this->Model->get_where_history_layanan($id);
		$this->load->view('sub/head');
		$this->load->view('sub/header');
		$this->load->view('detail_history_layanan',$data);
		$this->load->view('sub/footer');
		$this->load->view('sub/foot');
	}

	#LOGIN & REGISTER==========================================================================
	public function register(){
		$upload = $this->Model->upload_client();
		if ($upload['result'] == "success"){
			$data = array(
				'nama_client' => $this->input->post('nama_client'),
				'email'		  => $this->input->post('email'),
				'no_hp'		  => $this->input->post('no_hp'),
				'foto'		  => $upload['file']['file_name'],
				'pass'		  => $this->input->post('pass'));
			$this->db->insert('tb_client',$data);
			redirect('Controller');
		}else{
			redirect('Controller/daftar');
		}
	}

	public function proses_login(){
		if(isset($_POST['login'])){
			$email = $this->input->post('email',true);
			$pass  = $this->input->post('pass',true);
			$cek_admin  = $this->Model->login_admin($email, $pass);
			$cek_client = $this->Model->login_client($email, $pass);
			$cek_lawyer = $this->Model->login_lawyer($email, $pass);
			$cek_notaris= $this->Model->login_notaris($email, $pass);
			$hasil_admin = count($cek_admin);
			$hasil_client = count($cek_client);
			$hasil_lawyer = count($cek_lawyer);
			$hasil_notaris = count($cek_notaris);
			/*echo $hasil_admin;*/
			if($hasil_admin > 0){
				$in   = $this->db->get_where('tb_admin', array('email'=>$email,'pass'=>$pass))->row();
				$data = array('udhmasuk'   => true,
							  'nama'       => $in->email,
							  'id'         => $in->id_admin);
				$this->session->set_userdata($data);
				redirect(base_url('AdminController'));
			}else if($hasil_client > 0){
				$in   = $this->db->get_where('tb_client', array('email'=>$email,'pass'=>$pass))->row();
				$data = array('udhmasuk'   => true,
							  'akses'	   => 'client',
							  'id'         => $in->id_client,
							  'nama'	   => $in->nama_client,
							  'foto'       => $in->foto);
				$this->session->set_userdata($data);
				redirect(base_url('Controller'));
			}else if($hasil_lawyer > 0){
				$in   = $this->db->get_where('tb_lawyer', array('email_lawyer'=>$email,'pass'=>$pass))->row();
				$data = array('udhmasuk'   => true,
							  'akses'	   => 'lawyer',
							  'id'		   => $in->id_lawyer,
							  'nama'	   => $in->nama_lawyer,
							  'foto'       => $in->foto);
				$this->session->set_userdata($data);
				redirect(base_url('AdminController'));
			}else if($hasil_notaris > 0){
				$in   = $this->db->get_where('tb_notaris', array('email_notaris'=>$email,'pass'=>$pass))->row();
				$data = array('udhmasuk'   => true,
							  'akses'	   => 'notaris',
							  'id'		   => $in->id_notaris,
							  'nama'	   => $in->nama_notaris,
							  'foto'       => $in->foto);
				$this->session->set_userdata($data);
				redirect(base_url('AdminController'));
			}else{
				redirect('Controller');
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Controller');
	}

}