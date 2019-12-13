<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_common');
		$this->load->model('Model_home');
		$this->load->model('Model_event');
	}

	public function index()
	{
		$config = array();
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close']  = '</span></li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close']  = '</span></li>';

		$config["base_url"] = base_url() . "event/index";
		$config["total_rows"] = $this->Model_event->get_total_event();
		$config['first_url'] = base_url() . 'event';
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$config['use_page_numbers'] = TRUE;
		$data['setting'] = $this->Model_common->all_setting();
		$data['social'] = $this->Model_common->all_social();
		$data['all_event'] = $this->Model_common->all_event();
		$offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['event_fetched'] = $this->Model_event->fetch_event($config["per_page"], $offset);
		$data['links'] = $this->pagination->create_links();
		$data['sliders'] = $this->Model_home->all_slider();


		$this->load->view('view_header', $data);
		$this->load->view('view_home', $data);
		$this->load->view('view_footer', $data);
	}

	public function send_email()
	{

		$data['setting'] = $this->Model_common->all_setting();

		$error = '';

		if (isset($_POST['form_contact'])) {

			$valid = 1;

			if ($_POST['pest_control'] == 'Pest Control') {
				$pest_control_status = 'Yes';
			} else {
				$pest_control_status = 'No';
			}

			if ($_POST['termite_control'] == 'Termite Control') {
				$termite_control_status = 'Yes';
			} else {
				$termite_control_status = 'No';
			}

			if ($_POST['damage_repair'] == 'Damage Repair') {
				$damage_repair_status = 'Yes';
			} else {
				$damage_repair_status = 'No';
			}

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
			$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
			$this->form_validation->set_rules('city', 'City', 'trim|required');
			$this->form_validation->set_error_delimiters('', '<br>');

			if ($this->form_validation->run() == FALSE) {
				$valid = 0;
				$error .= validation_errors();
			}

			if ($pest_control_status == 'No' && $termite_control_status == 'No' && $damage_repair_status == 'No') {
				$valid = 0;
				$error .= 'You must have to select at least one service.';
			}

			if ($valid == 1) {
				$msg = '
            		<h3>Visitor Information</h3>
					<b>Name: </b> ' . $_POST['name'] . '<br><br>
					<b>Email: </b> ' . $_POST['email'] . '<br><br>
					<b>Phone: </b> ' . $_POST['phone'] . '<br><br>
					<b>City: </b> ' . $_POST['city'] . '<br><br>
					<b>Pest Control: </b> ' . $pest_control_status . '<br><br>
					<b>Termite Control: </b> ' . $termite_control_status . '<br><br>
					<b>Damage Repair: </b> ' . $damage_repair_status . '
				';
				$this->load->library('email');

				$this->email->from($data['setting']['website_email']);
				$this->email->to($data['setting']['receive_email']);

				$this->email->subject('Contact Form Email');
				$this->email->message($msg);

				$this->email->set_mailtype("html");

				$this->email->send();

				$success = 'Thank you for sending the email. We will contact with you shortly.';
				$this->session->set_flashdata('success', $success);
			} else {
				$this->session->set_flashdata('error', $error);
			}

			redirect(base_url());
		} else {

			redirect(base_url());
		}
	}
}
