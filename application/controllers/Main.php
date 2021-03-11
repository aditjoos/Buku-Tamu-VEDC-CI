<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index() {
        $this->load->model('BukuTamu_Model');
        $data = [
            "tamu" => $this->BukuTamu_Model->ambilDataTamu(),
        ];
        
		$this->load->view("tamu", $data);
	}

    public function kunjungan() {
        $this->load->view("kunjungan");
    }

    public function tambah_tamu() {
        $this->load->view("tambah_tamu");
    }
}
