<?php
class Matakuliah extends CI_controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
    public function cetak()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'usia' => $this->input->post('usia')
        ];

        $this->load->view('view-data-matakuliah', $data);
    }
}