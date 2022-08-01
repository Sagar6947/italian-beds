	<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Home extends CI_Controller
	{

		public function index()
		{
			$data['title']= "Home - Italian Beds";

			$this->load->view('home', $data);
		}

		public function collection()
		{
			$data['title']= "Our collections - Italian Beds";

			$this->load->view('collection', $data);
		}
	}
