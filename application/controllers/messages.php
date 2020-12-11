<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends CI_Controller {
	//reloads partials each time it's updated/deleted 
	public function index_html(){
		$this->load->model("Message");
		$data['msg'] = $this->Message->get_all_notes();
		$this->load->view("partials/messages", $data);
	}

	public function update_msg($id){
		$data = array('id' => $id, 'msg' => $this->input->post('text'));
		$this->load->model("Message");
		$this->Message->update($data);

		$data['msg'] = $this->Message->get_all_notes();
		$this->load->view("partials/messages", $data);
	}
	
	public function delete_msg($id){
		$this->load->model("Message");
		$this->Message->delete($id);

		$data['msg'] = $this->Message->get_all_notes();
		$this->load->view("partials/messages", $data);
	}

	public function create_note(){
		$this->load->model("Message");
		$this->Message->new_note($this->input->post());
		// $result['notes'] = $this->Message->get_all_notes();

		$data['msg'] = $this->Message->get_all_notes();
		$this->load->view("partials/messages", $data);
	}

	public function index()
	{
		$this->load->view("index");	
	}
}

//end of main controller