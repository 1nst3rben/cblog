<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mkriteria extends CI_Model {
	function __constuct()
	{
		parent::__constuct();  // Call the Model constructor 
		loader::database();    // Connect to current database setting.
	}
	function getkriteriagroup(){
		$this->db->order_by('id_kriteriagroup', 'ASC');
		return $this->db->get('tb_kriteriagroup');
	}
}