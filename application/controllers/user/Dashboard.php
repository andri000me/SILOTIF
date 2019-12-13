<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        // $this->load->model('user/Model_common');
        $this->load->model('user/Model_dashboard');
    }
	public function index()
	{
		// $data['setting'] = $this->Model_common->get_setting_data();
		$data['total_event'] = $this->Model_dashboard->show_total_event();
		$data['total_photo'] = $this->Model_dashboard->show_total_photo();	

		$this->load->view('user/view_header',$data);
		$this->load->view('user/view_dashboard',$data);
		$this->load->view('user/view_footer');
	}
}
