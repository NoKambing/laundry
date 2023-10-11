<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CLaundry extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Laundry_model");
        $this->load->library('session');
    }

    public function index()
    {
        //echo "hello world";
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dashboard');
        $this->load->view('template/footer');
    }
    public function tambah_laundry() {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('form_input_laundry');
        $this->load->view('template/footer');
    }
    public function simpan_data()
    {
        $simpan_data = $this->Laundry_model;
        $hasil = $simpan_data->save();

        if($hasil){
            $this->session->set_flashdata('message','success');
            redirect('claundry/tambah_laundry');
        }else{
            $this->session->set_flashdata('message','success','error');
            redirect('claundry/tambah_laundry');
        }
    }
    public function data_laundry()
    {
        $data = $this->Laundry_model;
        $hasil ['data']= $data->select();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('data_laundry', $hasil);
        $this->load->view('template/footer');
    }
    // berfungsi mmenampilkal data yang akan di edit
    public function update_laundry()
    {
        $data = $this->Laundry_model;
        $hasil['data'] = $data->show_data();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('form_update_laundry',$hasil);
        $this->load->view('template/footer');
    }
    // berfungsi untuk menyimpan data pemesanan yang di edit
    public function update_data()
    {
        $data = $this->Laundry_model;
        $update = $data->update();
       

        if($update){
            $this->session->set_flashdata('message','success update');
            redirect('claundry/data_laundry');
        }else{
            $this->session->set_flashdata('message','success','error');
            redirect('claundry/data_laundry');
        }
    }
    //berfungsi untuk menghapus data pemesanan
    public function delete_laundry()
    {
        $data = $this->Laundry_model;
        $delete = $data->delete($this->input->get('id')); 
        if($delete){
            $this->session->set_flashdata('message','success delete');
            redirect('claundry/data_laundry');
        }else{
            $this->session->set_flashdata('message','success','error');
            redirect('claundry/data_laundry');
    }
}
}

/* End of file PEMESANAN.php and path \application\controllers\PEMESANAN\PEMESANAN.php */
