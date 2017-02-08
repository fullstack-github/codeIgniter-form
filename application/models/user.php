<?php
 
class User extends CI_Model {
    
  function __construct() 
  {
    parent::__construct();
	  $this->load->helper(array('form', 'url'));
  }
  
  public function insertFile($filename, $title)
    {
        $data = array(
            'image'      => $filename,
            'name'         => $title
        );
        $this->db->insert('user', $data);
        return $this->db->insert_id();
    }
  
}
?>