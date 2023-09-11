<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SoalController extends CI_Controller {

    public function buat_uraian()
    {
        $this->load->view('buat_uraian_view');
    }

    public function simpan_uraian()
    {
        // Load model SoalModel
        $this->load->model('SoalModel');

        // Validasi input dan penyimpanan ke database
        $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan kembali halaman buat_uraian_view
            $this->load->view('buat_uraian_view');
        } else {
            // Proses menyimpan soal uraian ke database
            $pertanyaan = $this->input->post('pertanyaan');
            
            // Proses pengunggahan file (PDF/DOCX)
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'pdf|docx';
            $config['max_size'] = 2048; // Ukuran maksimal file (dalam KB)

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_soal')) {
                // Jika pengunggahan file gagal, tampilkan pesan kesalahan
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('buat_uraian_view', $error);
            } else {
                // Jika pengunggahan file berhasil, simpan data ke database
                $upload_data = $this->upload->data();
                $file_path = $upload_data['full_path'];

                // Simpan data ke database menggunakan model SoalModel
                $this->SoalModel->simpan_soal_uraian($pertanyaan, $file_path);

                // Tampilkan pesan sukses atau redirect ke halaman lain
                $data['success_msg'] = 'Soal uraian berhasil disimpan!';
                $this->load->view('buat_uraian_view', $data);
            }
        }
    }
}
