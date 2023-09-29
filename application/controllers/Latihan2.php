<?php
class Latihan2 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang..selamat belajar web programming";
        //$this->load->view('view-Latihan2');

    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->Model('Model_Latihan1');
        $hasil = $this->Model_Latihan1->jumlah($n1, $n2);
        echo "hasil penjumlahan dari". $n1 ." + ". $n2 ." = " .$hasil;

    }
    
}