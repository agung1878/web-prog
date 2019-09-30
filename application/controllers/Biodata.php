<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Biodata extends CI_Controller
{
    public function index()
    {
        $data['nim'] = '12182774';
        $data['nama'] = 'Abdul Rahman Agung';
        $data['kelas'] = '12.3C.11';
        $data['matkul'] = 'WEB PROGRAMMING 2';
        $this->load->view('biodata/index', $data);
    }
}