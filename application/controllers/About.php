<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['social'] = $this->Model_common->all_social();
		$this->load->view('view_header',$data);
		$this->load->view('view_about',$data);
		$this->load->view('view_footer',$data);
	}
}