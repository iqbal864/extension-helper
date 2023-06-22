<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['extension1'] = extension(base_url('assets/tes.jpeg'), 'Ini .jpeg');
		$data['extension2'] = extension(base_url('assets/tes.png'), 'Ini .png');
		$data['extension3'] = extension(base_url('assets/tes.docx'), 'Ini .docx');
		$data['extension4'] = extension(base_url('assets/tes.xlsx'), 'Ini .xlsx');
		$data['extension5'] = extension(base_url('assets/tes.pptx'), 'Ini .pptx');
		$data['extension6'] = extension(base_url('assets/tes.pdf'), 'Ini .pdf');
		$data['extension7'] = extension(base_url('assets/tes.txt'), 'Ini .txt');
		$this->load->view('welcome_message', $data);
	}
}
