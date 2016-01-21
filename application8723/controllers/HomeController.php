<?php

/**
 * Created by PhpStorm.
 * User: khejit
 * Date: 2016-01-08
 * Time: 18:56
 */
class HomeController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('MainModel');
		$this->load->library('parser');
	}

	public function main(){

		$model = $this->MainModel;

		if ( ! file_exists(APPPATH.'/views/pages/home.php')) {
			show_404();
		}

		if((isset($_GET['action']))&&($_GET['action'] == 'signup')){

			$email = ($_POST['signup-email']);

			if(empty($email)){
				$status = 'error';
				$message = 'Wpisz adres!';
			}
			else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$status = 'error';
				$message = 'Adres niepoprawny!';
			}
			else {

				if($model->count_existing($email) < 1 ){

					if($model->add_email($email)){
						$status = "success";
						$message = "Zapisano!";
					}
					else {
						$status = "error";
						$message = "Błąd!";
					}

				} else {
					$status = 'error';
					$message = 'Już dodano!';
				}

			};

			$data = array(
				'status' => $status,
				'message' => $message
			);

			echo json_encode($data);

			exit;

		}

		$this->load->helper('url');

		$this->load->view('templates/header');
		$this->load->view('pages/home');
		$this->load->view('templates/footer');
	}

}