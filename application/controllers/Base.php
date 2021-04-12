<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	//---homepage---
    public function index()
	{
		$data['title'] = "Homepage";
		$data['content'] = $this->load->view('Base/Pages/homepage/home', $data, true);
		return $this->load->view('layout', $data);
		
	}

	//---errorpage---
	public function error()
	{
		$this->load->view('Base/Pages/homepage/error');
	}

}