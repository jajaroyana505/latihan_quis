<?php 

class Model_tiket extends CI_Controller{
    
    function simpan()
    {
        $data =[
            "nama" => $this->input->post('nama'),
            "ktp" => $this->input->post('ktp'),
            "kd_kereta" => $this->input->post('kd_kereta'),
            "jurusan" => $this->input->post('jurusan'),
            "jns_kelas" => $this->input->post('jns_kelas'),
            "jml_tiket" => $this->input->post('jml_tiket'),
        ];
        $this->db->insert("tiket", $data);
    }
}
?>