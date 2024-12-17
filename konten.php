<?php
defined('BASEPATH') or exit('No direct script access allowed');

class konten extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        if ($this->session->userdata('level') == NULL) {
            redirect('auth');
        }
    }
    public function index()
    {
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori', 'ASC');
        $kategori = $this->db->get()->result_array();

        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','life');
        $this->db->join('user c','a.username=c.username','life');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array();


        $data = array(
            'judul_halaman' => 'halaman konten',
            'kategori'          => $kategori,
            'konten'    => $konten
        );
        $this->template->load('template_admin', 'admin/konten_index', $data);
    }
    public function simpan(){
        $namafoto = date('YmdHis') . '.jpg';
        $config['upload_path']   = 'assets/upload/konten/';
        $config['max_size']      = 500 * 1024; // 3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['allowed_types'] = '*';
        $config['file_name']     = $namafoto;
        $this->load->library('upload', $config);

        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '
        <div class="alert alert-danger alert-dismissible" role="alert">
        Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
            redirect('admin/produk/foto/' . $this->input->post('kode_produk'));
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }

        $this->db->from('konten');
        $this->db->where('judul', $this->input->post('judul'));
        $cek = $this->db->get()->result_array();
        if ($cek <> NULL) {

            $this->session->set_flashdata('alert', '
            <div class="alert alert-dark alert-dismissible mb-0" role="alert">
            judul konten sudah di ada.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        ');
            redirect('admin/konten');
        }
        $data = array(
            'judul'   => $this->input->post('judul'),
            'id_kategori'   => $this->input->post('id_kategori'),
            'keterangan'   => $this->input->post('keterangan'),
            'tanggal'   => date('Y-m-d'),
            'foto'   => $namafoto,
            'username'   => $this->session->userdata('username'),
            'slug'   => str_replace(' ','-',  $this->input->post('judul')),
        );
        $this->db->insert('konten', $data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
        berhasil menambahkan konten
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/konten');
    }
    public function delete_data($id)
    {
        $filename=FCPATH.'/assets/upload/konten/produk/'.$id;
        if(file($filename)){
            unlink("./assets/upload/konten/produk/".$id);
        }


        $where = array(
            'foto' => $id
        );
        $this->db->delete('konten', $where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
        berhasil menghapus knten
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/konten');
    }
    public function update(){
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path']   = 'assets/upload/konten/';
        $config['max_size']      = 500 * 1024; // 3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['allowed_types'] = '*';
        $config['file_name']     = $namafoto;
        $config['overwrite']     = true;
        $this->load->library('upload', $config);

        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '
        <div class="alert alert-danger alert-dismissible" role="alert">
        Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
            redirect('admin/produk/foto/' . $this->input->post('kode_produk'));
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }

        $data = array(
            'judul'   => $this->input->post('judul'),
            'id_kategori'   => $this->input->post('id_kategori'),
            'keterangan'   => $this->input->post('keterangan'),
            'tanggal'   => date('Y-m-d'),
            'slug'   => str_replace(' ','-',  $this->input->post('judul')),
        );
        $where = array(
            'foto'        => $this->input->post('nama_foto')
        );
        $this->db->update('konten', $data,$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
        berhasil memperbarui konten
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/konten');
    }
    
}
