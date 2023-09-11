<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SoalModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        // Load library database CodeIgniter
        $this->load->database();
    }

    // Metode untuk menyimpan soal uraian ke database
    public function simpan_soal_uraian($pertanyaan, $file_path)
    {
        $data = array(
            'pertanyaan' => $pertanyaan,
            'file_path' => $file_path
        );

        // Menyimpan data ke dalam tabel 'soal_uraian' (sesuaikan dengan nama tabel Anda)
        $this->db->insert('soal_uraian', $data);
    }

    // Metode untuk mengambil data soal uraian dari database
    public function ambil_soal_uraian()
    {
        // Query untuk mengambil data soal uraian (sesuaikan dengan struktur tabel Anda)
        $query = $this->db->get('soal_uraian');
        return $query->result();
    }
}
