<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->model("Item_model","items");
		$this->load->database();


	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['items'] = $this->items->get_items();
		$this->load->view('welcome_message',$data);
	}

	public function store(){
		$item = array(
			'name' =>  $this->input->post('name'),
			'quantity' =>  $this->input->post('quantity')
		);
		if($this->items->store_items($item)){
			redirect('/welcome/index');
		}

	}

	public function edit($item_id){

		$data['item'] = ($this->items->get_item($item_id));

		$this->load->view('edit',$data);
	}

	public function saveedit(){
		$item = array(
			'name' =>  $this->input->post('name'),
			'quantity' =>  $this->input->post('quantity')
		);

		if($this->items->edit_item($item,$this->input->post('id')))
		{
			redirect('/welcome/index');
		}
	}

	public function delete($id){
		if($this->items->delete_item($id)){
			redirect('/welcome/index');
		}
	}
}
