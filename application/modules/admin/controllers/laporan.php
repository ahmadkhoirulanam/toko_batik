<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

  public function index()
  {
    $this->load->library('mypdf');
    $data['data'] = array(
      ['nim'=>'123456789','name'=>'example name 1','jurusan'=>'Teknik Informatika'],
      ['nim'=>'123456789', 'name'=>'example name 2', 'jurusan'=>'Jaringan']
    );
    $this->mypdf->generate('Laporan/dompdf', $data, 'laporan-mahasiswa', 'A4', 'landscape');
  }

}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */