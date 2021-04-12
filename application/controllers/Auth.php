<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  //----for login----
  public function login()
  {
    $data['title'] = "loginpage";
    $data['content'] = $this->load->view('auth/login', $data, true);
    return $this->load->view('layout', $data);
  }

  //----for signup----
  public function signup()
  {
    $data['title'] = "sign Up Page";
    $data['content'] = $this->load->view('auth/signup', $data, true);
    return $this->load->view('layout', $data);
  }

  //----for homepage----
  public function index()
  {
    $data['title'] = "Homepage";
    $data['content'] = $this->load->view('Base/Pages/homepage/home', $data, true);
    return $this->load->view('layout', $data);
  }

  public function show()
  {

    $this->load->model('user_model');
    $data['user'] = $this->user_model->getData();
    // print_r($data);
    $this->load->view('auth/table', $data);
  }

  public function validlogin()
  {
    $this->form_validation->set_rules('email', 'Email', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $this->login();
    } else {


      $Email = $this->input->post('email');
      $Pass = $this->input->post('password');

      $this->load->model('user_model');
      $Check = $this->user_model->loginModel($Email, $Pass);

      if ($Check) {
        redirect('homepage');
      } else {
        $this->login();
      }
    }
  }

  public function validsignup()
  {
    $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[5]|max_length[12]');
    $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]|max_length[12]');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('mobile_no', 'Phone No.', 'trim|required|regex_match[/^[6-9]{1}[0-9]{9}$/]');
    $this->form_validation->set_rules('address', 'Address', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    // $this->form_validation->set_rules('image', 'image to upload', 'required');


    if ($this->form_validation->run() == FALSE) {

      $this->signup();
      // } else {
      //   $data = $this->security->xss_clean($this->input->post());
    } else {


      if ($_FILES['userfile']['name'] != "") {
        $fname = $this->input->post('first_name');
        $lname = $this->input->post('last_name');
        $email = $this->input->post('email');
        $phoneno = $this->input->post('mobile_no');
        $address = $this->input->post('address');
        $pswd = $this->input->post('password');


        $config = array(
          'upload_path' => './uploads',
          'allowed_types' => 'jpg|png|jpeg'
          // 'overwrite' => TRUE,

        );
        $this->load->library('upload', $config);
        // $test = $this->upload->do_upload('userfile');
        // var_dump($test);
        // die();
        // if (!$this->upload->do_upload('userfile')) {
        //   echo $this->upload->display_errors();
        // } else {
        //   $data = array('upload_data' => $this->upload->data());
        // }
        if ($this->upload->do_upload('userfile')) {
          $fileData = $this->upload->data();
          $fileName = $fileData['name'];
        } else {
          echo $this->upload->display_errors();
        }

        $formData = array(
          'first_name' =>  $fname,
          'last_name' => $lname,
          'email' =>  $email,
          'address' => $address,
          'mobile_no' => $phoneno,
          'password' =>  password_hash($pswd, PASSWORD_DEFAULT, ['cost' => 12]),
          'image' => $_FILES['userfile']['name']
        );

        $this->load->model('user_model');
        $InsertionCheck = $this->user_model->registerModel($formData);
        // return redirect('showdata');

        if ($InsertionCheck) {
          $this->session->set_flashdata('sucess', 'User registration sucessful.');
          redirect('user-login');
        } else {
          $this->session->set_flashdata('fail', 'User registration failed. Try Again.');
          redirect('user-signUp');
        }
      }
    }
  }
}