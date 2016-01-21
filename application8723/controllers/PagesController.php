<?php
/**
 * Created by PhpStorm.
 * User: khejit
 * Date: 2015-10-17
 * Time: 15:58
 */

Class PagesController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('NewsModel');
		$this->load->helper('url_helper');
		$this->load->library('parser');
	}

	public function view ($page){
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php') || $page == 'home' )
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

        $data['header_info'] = ucfirst($page); // Capitalize the first letter

	    $this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }

}