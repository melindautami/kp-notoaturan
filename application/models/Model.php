<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	#CRUD======================================================================================
	public function get($table){
		return $this->db->get($table)->result();
	}

	public function get_edit($where,$table){		
		return $this->db->get_where($table,$where)->result();
	}

	public function edit($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function del($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	#BOOKING LAWYER=============================================================================
	public function get_where_lawyer($id){
		$this->db->where('id_lawyer',$id);
		return $this->db->get('tb_lawyer')->result();
	}

	public function get_where_layanan($id){
		$this->db->where('id_layanan',$id);
		return $this->db->get('tb_layanan')->result();
	}

	public function get_where_pesanlawyer($id){
		$this->db->from('tb_pesan_lawyer');
		$this->db->join('tb_lawyer','tb_lawyer.id_lawyer=tb_pesan_lawyer.id_lawyer','inner');
		$this->db->join('tb_client','tb_client.id_client=tb_pesan_lawyer.id_client','inner');
		$this->db->where('tb_client.id_client',$id);
		$this->db->where('status','3');
		return $this->db->get()->result();
	}

	public function get_where_pesanlawyer_bayar($id){
		$this->db->from('tb_pesan_lawyer');
		$this->db->join('tb_lawyer','tb_lawyer.id_lawyer=tb_pesan_lawyer.id_lawyer','inner');
		$this->db->join('tb_client','tb_client.id_client=tb_pesan_lawyer.id_client','inner');
		$this->db->where('tb_client.id_client',$id);
		$this->db->where('status','1');
		return $this->db->get()->result();
	}

	public function get_where_pesanlawyer_upload($id){
		$this->db->from('tb_pesan_lawyer');
		$this->db->join('tb_lawyer','tb_lawyer.id_lawyer=tb_pesan_lawyer.id_lawyer','inner');
		$this->db->join('tb_client','tb_client.id_client=tb_pesan_lawyer.id_client','inner');
		$this->db->where('tb_client.id_client',$id);
		$this->db->where('status','2');
		return $this->db->get()->result();
	}

	#BOOKING LAYANAN=============================================================================
	public function get_where_pesanlayanan_bayar($id){
		$this->db->from('tb_pesan_layanan');
		$this->db->join('tb_layanan','tb_layanan.id_layanan=tb_pesan_layanan.id_layanan','inner');
		$this->db->join('tb_client','tb_client.id_client=tb_pesan_layanan.id_client','inner');
		$this->db->where('tb_client.id_client',$id);
		$this->db->where('status','1');
		return $this->db->get()->result();
	}

	public function get_where_pesanlayanan_upload($id){
		$this->db->from('tb_pesan_layanan');
		$this->db->join('tb_layanan','tb_layanan.id_layanan=tb_pesan_layanan.id_layanan','inner');
		$this->db->join('tb_client','tb_client.id_client=tb_pesan_layanan.id_client','inner');
		$this->db->where('tb_client.id_client',$id);
		$this->db->where('status','2');
		return $this->db->get()->result();
	}

	#HISTORY=====================================================================================
	public function get_pesan_history($id){
		$this->db->from('tb_pesan_lawyer');
		$this->db->join('tb_lawyer','tb_lawyer.id_lawyer=tb_pesan_lawyer.id_lawyer','inner');
		$this->db->join('tb_client','tb_client.id_client=tb_pesan_lawyer.id_client','inner');
		$this->db->where('tb_client.id_client',$id);
		return $this->db->get()->result();
	}

	public function get_where_history($id){
		$this->db->from('tb_pesan_lawyer');
		$this->db->join('tb_lawyer','tb_lawyer.id_lawyer=tb_pesan_lawyer.id_lawyer','inner');
		$this->db->join('tb_client','tb_client.id_client=tb_pesan_lawyer.id_client','inner');
		$this->db->where('id_pesan_lawyer',$id);
		return $this->db->get()->result();
	}

	public function get_pesan_history_layanan($id){
		$this->db->from('tb_pesan_layanan');
		$this->db->join('tb_layanan','tb_layanan.id_layanan=tb_pesan_layanan.id_layanan','inner');
		$this->db->join('tb_client','tb_client.id_client=tb_pesan_layanan.id_client','inner');
		$this->db->where('tb_client.id_client',$id);
		return $this->db->get()->result();
	}

	public function get_where_history_layanan($id){
		$this->db->from('tb_pesan_layanan');
		$this->db->join('tb_layanan','tb_layanan.id_layanan=tb_pesan_layanan.id_layanan','inner');
		$this->db->join('tb_client','tb_client.id_client=tb_pesan_layanan.id_client','inner');
		$this->db->where('id_pesan_layanan',$id);
		return $this->db->get()->result();
	}

	#UPLOAD ==================================================================================
	public function upload_client(){
		$config['upload_path'] = './assets/foto/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '2048';
		$config['remove_space'] = true;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file')) {
			$return = array('result' => 'success','file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function upload_lawyer(){
		$config['upload_path'] = './assets/lawyer/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		#$config['max_size'] = '2048';
		$config['remove_space'] = true;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file')) {
			$return = array('result' => 'success','file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function upload_notaris(){
		$config['upload_path'] = './assets/notaris/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '2048';
		$config['remove_space'] = true;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file')) {
			$return = array('result' => 'success','file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function upload_bukti(){
		$config['upload_path'] = './assets/bukti/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '2048';
		$config['remove_space'] = true;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file')) {
			$return = array('result' => 'success','file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	#LOGIN =======================================================================================
	public function login_admin($email,$pass){
		$this->db->where('email',$email);
		$this->db->where('pass',$pass);
		return $this->db->get('tb_admin')->row();
	}

	public function login_client($email,$pass){
		$this->db->where('email',$email);
		$this->db->where('pass',$pass);
		return $this->db->get('tb_client')->row();
	}

	public function login_lawyer($email,$pass){
		$this->db->where('email_lawyer',$email);
		$this->db->where('pass',$pass);
		return $this->db->get('tb_lawyer')->row();
	}

	public function login_notaris($email,$pass){
		$this->db->where('email_notaris',$email);
		$this->db->where('pass',$pass);
		return $this->db->get('tb_notaris')->row();
	}

}	