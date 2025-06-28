<?php
class Model_transaksi extends CI_Model
{
    public function getAllTransaksi($keyword = null)
    {
        if ($keyword) {
            $this->db->group_start();
            $this->db->like('id_member', $keyword);
            $this->db->or_like('email', $keyword);
            $this->db->or_like('no_hp', $keyword);
            $this->db->or_like('nama', $keyword);
            $this->db->or_like('alamat', $keyword);
            $this->db->or_like('kategori', $keyword);
            $this->db->or_like('produk', $keyword);
            $this->db->or_like('kuantitas', $keyword);
            $this->db->or_like('status', $keyword);
            $this->db->or_like('keterangan', $keyword);
            $this->db->or_like('tanggal_transaksi', $keyword);
            $this->db->group_end();
            if($this->session->userdata('id_role') == 1) {
                return $query = $this->db->get('jointransaksi')->result_array();
             } else {
                return $query = $this->db->get_where('jointransaksi', ['email' => $this->session->userdata('email')])->result_array();
            }
        }

        if($this->session->userdata('id_role') == 1) {
            return $query = $this->db->get('jointransaksi')->result_array();
         } else {
            return $query = $this->db->get_where('jointransaksi', ['email' => $this->session->userdata('email')])->result_array();
        }
    }

    public function Tambahtransaksi($id)
    {
            $data = [
                "foto" => $this->input->post('foto', true),
                "id_member" => $this->input->post('id_member', true),
                "email" => $this->input->post('email', true),
                "no_hp" => $this->input->post('no_hp', true),
                "nama" => $this->input->post('nama', true),
                "alamat" => $this->input->post('alamat', true),
                "id_kategori" => $this->input->post('kategori', true),
                "produk" => $this->input->post('produk', true),
                "kuantitas" => $this->input->post('kuantitas', true),
                "status" => $this->input->post('status', true),
                "harga" => $this->input->post('harga', true),
                "total" => $this->input->post('total', true),
                "keterangan" => $this->input->post('keterangan', true),
                "tanggal_transaksi" => $this->input->post('tanggal_transaksi', true)
            ];
            
            $kuantitas = $this->input->post('kuantitas', true);
            $stok = $this->db->get_where('barang', ['id' => $id])->row('stok');
            $sisa = $stok - $kuantitas;

            if($stok < $kuantitas) {
                $this->session->set_flashdata('error', 'Jumlah yang anda pesan melebihi stok.');
            } else {
                $this->db->insert('transaksi', $data);
                
                $this->db->set('stok', $sisa);
                $this->db->where('id', $id);
                $this->db->update('barang');
                $this->session->set_flashdata('flash', 'Ditambahkan!');
            }
    }

    public function Ubahtransaksi()
    {
        $id = $this->input->post('id', true);
        $id_member = $this->input->post('id_member', true);
        $email = $this->input->post('email', true);
        $no_hp = $this->input->post('no_hp', true);
        $nama = $this->input->post('nama', true);
        $alamat = $this->input->post('alamat', true);
        $alamat = $this->input->post('alamat', true);
        $id_kategori = $this->input->post('kategori', true);
        $produk = $this->input->post('produk', true);
        $kuantitas = $this->input->post('kuantitas', true);
        $status = $this->input->post('status', true);
        $harga = $this->input->post('harga', true);
        $total = $this->input->post('total', true);
        $keterangan = $this->input->post('keterangan', true);
        $tanggal_transaksi = $this->input->post('tanggal_transaksi', true);

        $this->db->set('id_member', $id_member);
        $this->db->set('email', $email);
        $this->db->set('no_hp', $no_hp);
        $this->db->set('nama', $nama);
        $this->db->set('alamat', $alamat);
        $this->db->set('id_kategori', $id_kategori);
        $this->db->set('produk', $produk);
        $this->db->set('kuantitas', $kuantitas);
        $this->db->set('status', $status);
        $this->db->set('harga', $harga);
        $this->db->set('total', $total);
        $this->db->set('keterangan', $keterangan);
        $this->db->set('tanggal_transaksi', $tanggal_transaksi);

        $this->db->where('id', $id);
        $this->db->update('transaksi');
    }

    public function Hapustransaksi($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('transaksi');
    }

    public function getTransaksiById($id)
    {
        $jointransaksi = "SELECT    a.id,
                                    a.foto,
                                    a.id_member,
                                    a.email,
                                    a.no_hp,
                                    a.nama,
                                    a.alamat,
                                    a.id_kategori,
                                    b.kategori,
                                    a.produk,
                                    a.kuantitas,
                                    a.status,
                                    a.harga,
                                    a.total,
                                    a.keterangan,
                                    a.tanggal_transaksi
                                    FROM transaksi AS a
                                    JOIN kategori AS b
                                    ON a.id_kategori = b.id
                                    WHERE a.id = $id";
       return $query = $this->db->query($jointransaksi)->row_array();
    }

    public function Caritransaksi()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_member', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('no_hp', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('kategori', $keyword);
        $this->db->or_like('produk', $keyword);
        $this->db->or_like('kuantitas', $keyword);
        $this->db->or_like('status', $keyword);
        $this->db->or_like('keterangan', $keyword);
        $this->db->or_like('tanggal_transaksi', $keyword);
        return $this->db->get('kategori')->result_array();
    }
}