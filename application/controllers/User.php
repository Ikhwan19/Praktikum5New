<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');

class User extends CI_Controller{
    public function index(){
        $data['konten']="home";
        $this->load->view('template',$data);
    }
    public function data_diri(){
        $data['konten']="data_diri";
        $this->load->view('template',$data);
    }
    public function gallery(){
        $data['konten']="gallery";
        $this->load->view('template',$data);
    }
    public function tujuan(){
        $data['konten']="tujuan";
        $this->load->view('template',$data);
    }
    public function akhir(){
        $data['konten']="akhir";
        $this->load->view('template',$data);
    }
}
?>