<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->model("menu_model", 'mm');
		$this->load->helper('url');
	}

	public function index()
	{
        $data ['title'] = 'Data Arsip';
        $data['arsip'] = $this->mm->get();
		$this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('menu/index', $data);
        $this->load->view('template/footer');
	}

    public function tambah()
    {
        $data ['title'] = 'Form Menambahkan Data Arsip';
		$data ['kategori'] = ['Pengumuman', 'Undangan'];
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nomor', 'nomor', 'required');
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('kategori', 'kategori', 'required');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
			$this->load->view('menu/tambah', $data);
			$this->load->view('template/footer');
		}
		else{
            $filename = $this->input->post('nomor') . ' - ' . $this->input->post('kategori') . ' - ' . $this->input->post('judul');
            $upload = $this->mm->upload($filename);
            if ($upload['result'] == 'success') {
                $this->mm->addData($upload);
                redirect('menu');
            } else {
                echo $upload['error'];
            }
		}	
    }

    public function update($id)
    {
        $data['arsip'] = $this->mm->get($id);
        $data ['title'] = 'Form Update Data Arsip';
		$data ['kategori'] = ['Pengumuman', 'Undangan'];
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nomor', 'nomor', 'required');
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('kategori', 'kategori', 'required');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
			$this->load->view('menu/edit', $data);
			$this->load->view('template/footer');
		}
		else{
            $filename = $this->input->post('nomor') . ' - ' . $this->input->post('kategori') . ' - ' . $this->input->post('judul');
            $upload = $this->mm->upload($filename);
            if ($upload['result'] == 'success') {
                $this->mm->updateData($id, $upload);
                redirect('menu');
            } else {
                echo $upload['error'];
            }
		}	
    }

    public function show($id)
    {
        $data['arsip'] = $this->mm->get($id);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('menu/detail', $data);
        $this->load->view('template/footer');
    }


    public function delete($id)
    {
        $hapus = $this->mm->delete($id);
        if($hapus>0){
            // echo 'yey berhasil';
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('menu', 'refresh');
        }  else{
			redirect('menu', 'refresh');
        }
    }

    public function download($id)
    {
        $this->load->helper('download');
        $file = $this->mm->get($id);
        force_download(FCPATH . 'assets/uploads/pdf/' . $file[0]->file, NULL);
    }

    public function about()
    {
        $this->load->view('template/Header');
        $this->load->view('template/Sidebar');
        $this->load->view('about/index');
        $this->load->view('template/Footer');
    }
}
