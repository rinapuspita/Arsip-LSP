<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model extends CI_model { 
    public function __construct() {
        parent::__construct();        
        $this->load->database();
    }

    public function get($id = null)
    {
      if ($id == null) {
        return $this->db->get('arsip')->result();
      } else {
        return $this->db->get_where('arsip', ['id_arsip' => $id])->result();
      }
    }

    public function addData($upload)
    {
        $data=[
			'nomor'=>$this->input->post('nomor', true),
			'kategori'=>$this->input->post('kategori', true),
			'judul'=>$this->input->post('judul', true),
			'file'=>$upload['file']['file_name'],
            'created_at' => date("Y-m-d")
		];
        $this->db->insert('arsip', $data);
        return $this->db->affected_rows();
    }

    public function updateData($id, $upload)
    {
        
        $data=[
			'nomor'=>$this->input->post('nomor', true),
			'kategori'=>$this->input->post('kategori', true),
			'judul'=>$this->input->post('judul', true),
			'file'=>$upload['file']['file_name'],
            'updated_at' => date("Y-m-d")
		];
        $this->db->where('id_arsip', $id);
        $this->db->update('arsip', $data);
    }

    public function delete($id)
    {
        $this->deleteFile($id);
        $this->db->delete('arsip', ['id_arsip' => $id]);
        return $this->db->affected_rows();
    }

    public function upload($filename)
    {
        $config['upload_path'] = './assets/uploads/pdf/';
        $config['allowed_types'] = 'pdf';
        $config['file_name'] = $filename;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file_surat')) {
        $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
        return $return;
        } else {
        $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
        return $return;
        }
    }

  private function deleteFile($id)
  {
    $file_name = $this->db->query("SELECT * FROM arsip WHERE id_arsip='$id'");
    $row = $file_name->row();
    $file_name = $row->file;
    unlink(FCPATH . "assets/uploads/pdf/" . $file_name);
  }
}
?>