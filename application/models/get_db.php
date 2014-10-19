<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_db extends CI_Model {

	public function getAll()
	{
		$query = $this->db->query("SELECT * FROM test");
		return $query->result();
	}

	public function Insert1($data) // add one row
	{
		$this->db->insert("test", $data);
	}
	
	public function Insert2($data) // add multiple rows
	{
		$this->db->insert_batch("test", $data);
	}
	
	public function update1($data) // update one row
	{
		$this->db->update("test", $data, "id = 2");
	}
	
	public function update2($data) // update multiple rows
	{
		$this->db->update_batch("test", $data, "id");
	}
	
	
	public function delete1($data) // delete one row
	{
		$this->db->delete("test", $data);
	}
	
	public function empty1($table) // empty entire table
	{
		$this->db->empty_table($table);
	}
}
