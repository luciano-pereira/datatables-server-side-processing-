<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person_model extends CI_Model {

	function fetch(){
		$this->datatables->select('id, name, salary, age')->from('tbperson');
		$this->datatables->add_column('edit', '
												<form action="'.base_url().'welcome/editar" method="post">
												<input type="hidden" value="$1" name="id">
												<button type="submit" class="btn btn-warning btn-sm">editar</button>
											   ', 'id');
		echo $this->datatables->generate();
	}


/*
public function tableload(){
  $this->load->database();
  $this->load->library('Datatables');
  $this->datatables->select('INVENTORY_PRODUCTS.ID, INVENTORY_PRODUCTS.PRODUCTNAME, INVENTORY_PRODUCTS.MODELNUMBER, MANUFACTURER.COMPANYNAME');
  $this->datatables->from('INVENTORY_PRODUCTS');
  $this->datatables->join('MANUFACTURER', 'MANUFACTURER.ID ON INVENTORY_PRODUCTS.MANUFACTURERID', 'LEFT');
  //$this->datatables->select('COMPANYNAME');
  $this->datatables->add_column('edit', '<a href="view_inventory/inventory_info/$1">view</a>', 'ID');
  echo $this->datatables->generate();
}
*/
    
}
