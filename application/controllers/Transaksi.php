<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $id = $this->session->userdata('id');
        $this->load->library('form_validation');
        $this->load->model('Model_transaksi');
        $this->load->model('Model_kategori');
        $this->load->model('Model_barang');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Transaksi';

        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
        } else {
            $data['keyword'] = null;
        }

        $data['transaksi'] = $this->Model_transaksi->getAllTransaksi($data['keyword']);
        $data['barang'] = $this->Model_barang->getAllBarang($data['keyword']);
        $this->load->view('templates/header.php', $data);
        $this->load->view('transaksi/index.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function tambah($id)
    {
        $data['kategori'] = $this->Model_kategori->getAllKategori();
        $data['barang'] = $this->Model_barang->getBarangById($id);
        $data['user'] = $this->db->get_where('jointransaksi', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('foto', 'Foto', 'trim|required');
        $this->form_validation->set_rules('id_member', 'Id_member', 'trim|required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email'); 
        $this->form_validation->set_rules('no_hp', 'No_hp', 'trim|required|numeric');        
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');        
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');       
        $this->form_validation->set_rules('produk', 'Produk', 'trim|required');       
        $this->form_validation->set_rules('kuantitas', 'Kuantitas', 'trim|required|numeric');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required|numeric');
        $this->form_validation->set_rules('total', 'Total', 'trim|required|numeric');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
        $this->form_validation->set_rules('tanggal_transaksi', 'Tanggal_transaksi', 'trim|required|date');
        
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Transaksi';

            $this->load->view('templates/header.php', $data);
            $this->load->view('transaksi/tambah.php', $data);
            $this->load->view('templates/footer.php');
        } else {
            $this->Model_transaksi->Tambahtransaksi($id);
            redirect('transaksi');
        }          
    }

    public function ubah($id)
    {
        $data['transaksi'] = $this->Model_transaksi->getTransaksiById($id);
        $data['barang'] = $this->Model_barang->getBarangById($id);
        $data['kategori'] = $this->Model_kategori->getAllKategori();
        $this->form_validation->set_rules('id_member', 'Id_member', 'trim|required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email'); 
        $this->form_validation->set_rules('no_hp', 'No_hp', 'trim|required|numeric');        
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');        
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');       
        $this->form_validation->set_rules('produk', 'Produk', 'trim|required');       
        $this->form_validation->set_rules('kuantitas', 'Kuantitas', 'trim|required|numeric');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required|numeric');
        $this->form_validation->set_rules('total', 'Total', 'trim|required|numeric');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
        $this->form_validation->set_rules('tanggal_transaksi', 'Tanggal_transaksi', 'trim|required|date');
        

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Ubah Transaksi';

            $this->load->view('templates/header.php', $data);
            $this->load->view('transaksi/ubah.php', $data);
            $this->load->view('templates/footer.php');
        } else {
            $this->Model_transaksi->Ubahtransaksi();
            $this->session->set_flashdata('flash', 'Diubahkan');
            redirect('transaksi');
        }
    }

    public function detail($id)
    {
        $data['transaksi'] = $this->Model_transaksi->getTransaksiById($id);
        $data['barang'] = $this->Model_barang->getBarangById($id);

        $data['title'] = 'Detail Transaksi';
        $this->load->view('templates/header.php', $data);
        $this->load->view('transaksi/detail.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function hapus($id)
    {
        $data['transaksi'] = $this->Model_transaksi->getTransaksiById($id);
        $this->Model_transaksi->Hapustransaksi($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('transaksi');
    }

    public function export_excel(){
        $data['title'] = 'Data Transaksi';
        $data['transaksi'] = $this->Model_transaksi->getAllTransaksi();
        $data['barang'] = $this->Model_barang->getAllBarang();
        $this->load->view('transaksi/export_excel.php', $data);
    }
}
?>