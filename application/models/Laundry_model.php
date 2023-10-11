<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Laundry_model extends CI_Model 
{
    // ini deklarasi nama table
    private $table = 'pemesanan';
    public function select()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    } 
    //ini penyimpanan data laundry
    public function save()
    {
        $data = array(
            "nama_pelanggan"=> $this->input->post('nama_pelanggan'),
            "berat_barang"=> $this->input->post('berat_barang'),
            "jenis_pelayanan"=> $this->input->post('jenis_pelayanan'),
            "tanggal_pemesanan" =>$this->input->post('tanggal_pemesanan'),
            "jam_pemesanan" => $this->input->post('jam_pemesanan'),
             
        );
        return $this->db->insert($this->table, $data);
    }
    public function show_data()
    {
        $id = $this->input->get('id');
        $this->db->from($this->table)->where('id_laundry',$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function update()
    {
        $data = array(
            "nama_pelanggan"=> $this->input->post('nama_pelanggan'),
            "berat_barang"=> $this->input->post('berat_barang'),
            "jenis_pelayanan"=> $this->input->post('jenis_pelayanan'),
            "tanggal_pemesanan" =>$this->input->post('tanggal_pemesanan'),
            "jam_pemesanan" => $this->input->post('jam_pemesanan'),
        );
        $this->db->where('id_laundry',$this->input->post('id_laundry'));
        return $this->db->update($this->table, $data);
    }
    //berfungsi untuk menghapus data
    public function delete($id)
    {
        $this->db->where('id_laundry', $id);
        return $this->db->delete($this->table);
    }
                           
                        
}


/* End of file Laundry_model.php and path \application\models\pemesanan\Laundry_model.php */
