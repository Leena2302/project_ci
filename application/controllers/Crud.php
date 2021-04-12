<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends CI_Controller
{

  public function showBlog()
  {
    $userId = $this->session->userdata('id');

    $this->load->model('Crud_Model');
    $blogData = $this->Crud_Model->show($userId);

    $data = array();
    $data['blogData'] = $blogData;
    $this->load->view('userHome/index', $data);
  }

  public function __construct()
  {
    parent::__construct();
  }

  // public function custom_view()
  // {
  //   $this->load->view('auth/signup', array('error' => ' '));
  // }

  // public function do_upload()
  // {
  //   $config = array(
  //     'upload_path' => "./uploads/",
  //     'allowed_types' => "gif|jpg|png|jpeg|pdf",
  //     'overwrite' => TRUE,
  //     'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
  //     'max_height' => "768",
  //     'max_width' => "1024"
  //   );
  //   $this->load->library('upload', $config);
  //   if ($this->upload->do_upload()) {
  //     $data = array('upload_data' => $this->upload->data());
  //     $this->load->view('formsuccess', $data);
  //   }
  // }
}