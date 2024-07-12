<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Print_model extends CI_Model {
 
	private $table = "print_setting";

	public function create($data = [])
	{	 
		return $this->db->insert($this->table,$data);
	}
 
	public function read()
	{
		 $data = $this->db->select("*")
			->from($this->table)
			->get()
			->row();
			return $data;
	} 

	  	public function update($data = [])
	{
		return $this->db->where('id',$data['id'])
			->update($this->table,$data); 
	} 
}