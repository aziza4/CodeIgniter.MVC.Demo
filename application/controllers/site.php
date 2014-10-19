<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	
	public function index()
	{
		$this->home();
	}
	
	public function home()
	{
		$data['title'] = "Home";
		$data['var1'] = "2";
		$data['var2'] = "8";
		
		$this->load->model("math");
		$data['addTotal'] = $this->math->add($data['var1'], $data['var2']);
		$data['subTotal'] = $this->math->sub($data['var1'], $data['var2']);
		
		$this->load->view("view_home", $data);
	}
	
	public function about()
	{
		$data['title'] = "About!";
		$this->load->view("view_about", $data);
	}
	
	public function getValues()
	{
		$this->load->model("get_db");
		$data['results'] = $this->get_db->getAll();
		
		$this->load->view("view_db", $data);
	}
	
	public function insertOneRow()
	{
		$this->load->model("get_db");
		
		$newRow = array(
			'name' => 'jim'
		);
		
		$this->get_db->insert1($newRow);
		echo "one row has been added";
	}
	
	
	public function insertMultipleRows()
	{
		$this->load->model("get_db");
		
		$newRows = array(
			array(
				'name' => 'sue'
			),
			array(
				'name' => 'dylan'
			)
		);
		
		$this->get_db->insert2($newRows);
		echo "rows had been added";
	}
	
	
	public function updateOneRow()
	{
		$this->load->model("get_db");
		
		$newRow = array(
			'name' => 'steven'
		);
		
		$this->get_db->update1($newRow);
		echo "one row has been updated";
	}
	
	
	public function updateMultipleRows()
	{
		$this->load->model("get_db");
		
		$newRows = array(
			array(
				'id' => '3',
				'name' => 'marcus'
			),
			array(
				'id' => '4',
				'name' => 'bill'
			)
		);
		
		$this->get_db->update2($newRows);
		echo "rows had been updated";
	}
	
	public function DeleteOneRow()
	{
		$this->load->model("get_db");
		
		$deletedRow = array(
			'id' => '7'
		);
		
		$this->get_db->delete1($deletedRow);
		echo "one row has been deleted";
	}
	
	
		public function EmptyEntireTable()
	{
		$this->load->model("get_db");
		
		$table = "test";
		$this->get_db->empty1($table);
		echo "table has been emptied";
	}
}
