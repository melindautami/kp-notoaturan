<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

	public function get_notaris(){
		$qry = $this->db->query("SELECT*FROM tb_notaris WHERE id_notaris!='0'");
		return $qry->result();
	}

	public function get_pesan_lawyer($id){
		$this->db->from('tb_pesan_lawyer');
		$this->db->join('tb_lawyer','tb_lawyer.id_lawyer=tb_pesan_lawyer.id_lawyer','inner');
		$this->db->join('tb_client','tb_client.id_client=tb_pesan_lawyer.id_client','inner');
		$this->db->where('tb_client.id_client',$id);
		return $this->db->get()->result();
	}

	public function get_pesan_layanan($id){
		$this->db->from('tb_pesan_layanan');
		$this->db->join('tb_layanan','tb_layanan.id_layanan=tb_pesan_layanan.id_layanan','inner');
		$this->db->join('tb_notaris','tb_notaris.id_notaris=tb_pesan_layanan.id_notaris','inner');
		$this->db->join('tb_client','tb_client.id_client=tb_pesan_layanan.id_client','inner');
		$this->db->where('tb_client.id_client',$id);
		return $this->db->get()->result();
	}

}