<?php

/**
 * Created by PhpStorm.
 * User: khejit
 * Date: 2016-01-08
 * Time: 19:03
 */
class MainModel extends CI_Model {

	public function __construct()
	{
		try {
			$this->load->database();
		} catch (PDOException $e) {
			echo 'Connection failed: ' . $e->getMessage();
		}
	}

	public function add_email($email){
		date_default_timezone_set('Europe/Warsaw');

		$data = array(
			'signup_email_address' => $email,
			'signup_date'          => date('Y-m-d'),
			'signup_time'          => date('H:i:s')
		);

		$query = $this->db->insert('signups', $data);
		return $query;

	}

	public function count_existing($email){
		$query = $this->db->get_where('signups', array('signup_email_address' => $email));
		return $query->row_array();
	}

}