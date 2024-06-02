<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
    }


    public function index()
    {
        if ($this->session->userdata('nama') == 'ADMIN') {
            $data['title'] = 'Dashboard';

            $this->load->model('dashboard/DashboardModel');
            $data['dataVideo'] = $this->DashboardModel->LihatDataVideo()->result_array();
            $this->load->view('layout/layout_admin/header', $data);
            $this->load->view('layout/layout_admin/nav');
            $this->load->view('content/content_admin/dashboard', $data);
            $this->load->view('layout/layout_admin/footer');
        } else {
            redirect('Login');
        }
    }

    public function DeleteData($id)
    {
        $this->load->model('dashboard/DashboardModel');
        $data = $this->DashboardModel->Select($id)->row();
        unlink('./assets/File/'.$data->thumbnail);
        unlink('./assets/File/'.$data->video);
        $this->DashboardModel->hapus($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success">Video berhasil dihapus <button type="button" class="close"></button></div>');
        redirect('Dashboard');
    }

    public function TambahVideo()
    {
        if ($this->session->userdata('nama') == "ADMIN") {

            $this->form_validation->set_rules('judul', 'Judul', 'trim|required', [
                'required' => 'Judul harus diisi !'
            ]);

            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required', [
                'required' => 'Deskripsi harus diisi !'
            ]);

            //konfigurasi file yang akan diupload
            $nmfile = "file" . time();
            $config['upload_path'] = './assets/File/';
            $config['allowed_types'] = 'png|jpg|jpeg|mp4|mkv';
            $config['max_size'] = '0'; //kb
            $config['file_name'] = $nmfile;


            if ($this->form_validation->run() == false) {
                redirect('Dashboard');
            } else {
                //array yang akan di simpan ke database
                $data_video = array(
                    'judul'   => $this->input->post('judul'),
                    'kategori'  => $this->input->post('kategori'),
                    'deskripsi'      => htmlspecialchars($this->input->post('deskripsi')),
                    'tanggal'      => date('Y-m-d'),
                );
                $data['dataVideo'] = $data_video;

                $gbr = NULL;
                $iserror = false;
                $this->load->library('upload', $config);
                // jika thumbnail berhasil di upload
                if ($this->upload->do_upload('thumbnail')) {
                    $this->input->post('thumbnail');

                    //maka array thumbnail akan diambil nama file sesuai config diatas
                    $gbr = $this->upload->data();
                    $data_video['thumbnail'] = $gbr['file_name'];
                    
                } else {
                    // jika tidak berhasil diupload
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Thumbnail gagal di upload<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' .
                        '</div>');
                        redirect('Dashboard');
                    $iserror = true;
                }

                $video = NULL;
                $iserror = false;
                $this->load->library('upload', $config);
                //jika Video berhasil diupload
                if ($this->upload->do_upload('video')) {
                    $this->input->post('video');

                    //maka array Video akan diambil nama file sesuai config diatas
                    $video = $this->upload->data();
                    $data_video['video'] = $video['file_name'];

                    //dan akan di insert semua araay $data_video
                    $this->db->insert('video', $data_video);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Video Berhasil Ditambah!<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' .
                        '</div>');
                    redirect('Dashboard');
                } else {
                    //jika tidak berhasil di upload
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Video gagal di upload<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' .
                        '</div>');
                        redirect('Dashboard');
                    $iserror = true;
                }
            }
        }
    }
}
