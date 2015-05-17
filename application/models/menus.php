<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Menus extends CI_Model
{
  
  function __construct()
  {
    parent::__construct();

    $this->load->database();
  }

  function get()
  {
    $this->db->select('*');
    $this->db->from('menus');

    $result = $this->db->get()->result();

    return $result;
  }

  function insert($menu)
  {
    $this->db->insert('menus', $menu);

    $menu_id = $this->db->insert_id();

    if ($menu_id > 0) {
      return true;
    }

    return false;
  }
}