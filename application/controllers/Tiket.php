<?php 
class Tiket extends CI_Controller{


    public function index()
    {
        $this->load->view('home');
    }
    
    function form_tiket()
    {
        $this->load->view('form_tiket'); 
    }

    public function simpan_tiket()
    {
        // load model
        $this->load->model('Model_tiket', 'tiket');

        // menyimpan ke database
        $this->tiket->simpan();

        // menangkap data output
        $data =[
            "nama" => $this->input->post('nama'),
            "ktp" => $this->input->post('ktp'),
            "kd_kereta" => $this->input->post('kd_kereta'),
            "jurusan" => $this->input->post('jurusan'),
            "jns_kelas" => $this->input->post('jns_kelas'),
            "jml_tiket" => $this->input->post('jml_tiket'),
        ];

        // menampilkan output
        $this->load->view('output', $data);
    }
    public function output()
    {
    }
}
?>