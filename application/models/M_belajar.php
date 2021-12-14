<?php
/**
* 
*/
class M_belajar extends CI_Model
{
	
	// function save($datasensor)
	// {
	// 	$this->db->insert('sensor', $datasensor);
	// 	return TRUE;
	// }

	// function ambildata(){
	// 	$this->db->select('*');
	// 	$this->db->from('sensor');
	// 	$query = $this->db->get();
	// 	if ($query->num_rows()>0) {
	// 		return $query->result();
	// 	}
	// }

	function save($datasensor)
	{
		$this->db->insert('test', $datasensor);
		return TRUE;
	}

	function ambildata(){
		$this->db->select('*');
		$this->db->from('test');
		$this->db->order_by('id_sensor', 'DESC');
		$query = $this->db->get();
		if ($query->num_rows()>0) {
			return $query->result();
		}
	}
}

?>