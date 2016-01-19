<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->helper('form');
  }

  function index()
  {
    $this->data['title'] = 'Restaurant';
    
    $this->load->view('restaurant', $this->data);
  }

	function add()
	{
		$this->data['title'] = 'Add Restaurant';
		
		$this->load->view('restaurant/add', $this->data);
	}
}

/* End of file restaurant.php */
/* Location: ./application/controllers/restaurant.php */