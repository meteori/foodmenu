<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');

    $this->load->model('menus');
  }

	function index()
	{
		$this->data['title'] = 'Home';

    $menus = $this->menus->get();

    $this->data['menus'] = $menus;
		
		$this->load->view('menu', $this->data);
	}

  function create()
  {
    $postData = $this->input->post();

    if ($postData) {
      $menu = array(
        'name' => $postData['food_name'],
        'price' => $postData['price'],
        'rating' => $postData['rating'],
      );

      $result = $this->menus->insert($menu);

      if ($result) {
        echo "ok";
      } else {
        echo "not ok";
      }
    }

    $this->data['title'] = 'Create Menu';


    $this->load->view('menu/create', $this->data);
  }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */