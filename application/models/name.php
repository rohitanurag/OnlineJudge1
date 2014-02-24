<?php
class Film_model extends CI_Model{
	//reult query
	function search()
	{
	$q=$this->db->select('username','email_address')
	->from('membership')
	$ret['rows']=$q->get()->results();
	$q=$this->db->select('COUNT(*) as count',FALSE)
	->from('membership');
	$tmp=$q->get()->result();
	$ret['num_rows']=$temp[0]->count;
	return $ret;
}
}