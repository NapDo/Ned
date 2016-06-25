<?php
class Search extends CI_Controller {


			public function __construct()
    {
        parent::__construct();
	
 $this->load->model('Search_mod');
		 
		

		
		
		
	}

	public function index () {
		$key = $this->input->post('search');
    $query = $this->Search_mod->search_title($key);
echo json_encode ($query);


	}
}