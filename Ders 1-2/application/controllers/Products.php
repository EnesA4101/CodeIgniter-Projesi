<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$this->load->model("Products_Model");
		$items = $this->Products_Model->getAll();


                $viewData = new stdClass();
                $viewData->items = $items;
		$this->load->view('pages/products', $viewData);
	}
}