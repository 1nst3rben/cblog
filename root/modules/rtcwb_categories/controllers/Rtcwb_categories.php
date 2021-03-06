<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rtcwb_categories extends MX_Controller {
	public $data = array(
			'title'     => 'CL-System || Categories',
			'header'	=> 'Categories',
			'text'      => 'CL-System',
			'author'    => 'ADW',
			'filejs'	=>	'categories.js',
		);
	public function __construct(){
        parent::__construct();
        if(!is_logged_in()){ // if you add in constructor no need write each function in above controller. 
			redirect('mailworm/login');
        }
		$this->load->model('rtcwb_categories/mrtcwb_categories', 'categories');
    }
	public function index(){
		//if($this->session->userdata('admin')==TRUE){
			//$this->data['css']='../';
			//$this->data['filejs']='admin.js';
			$view='rtcwb_categories/trt_categories';
			$this->mlib->template_rt($view, $this->data);
		//}else if($this->session->userdata('admin')==FALSE){
		//	redirect('login');
		//}
	}
	function ajax_list() {
	        $list = $this->categories->get_datatables();
	        $data = array();
	        $no = $_POST['start']+1;
	        foreach ($list as $person) {
	            
	            $row = array();
	            $row[] = $no++;
	            $row[] = $person->name;
	            $row[] = $person->emmail;
	            $row[] = $person->dt_c;
	 
	            //add html for action
	            $row[] = '<div class="btn-group">
	                <button type="button" class="btn btn-sm btn-success">Option</button>
	                <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                  <span class="caret"></span>&nbsp;
	                  <span class="sr-only">Toggle Dropdown</span>
	                </button>
	                <ul class="dropdown-menu dropdown-menu-right">
	                  <li ><span class="drop-menu" onclick=javascript:edit_modalt('.$person->num.') ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit Tag</span></li>
	                  <li ><span class="drop-menu" onclick=javascript:del_t('.$person->num.',"delete-tag")><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete Tag</span></li>
	                </ul>
	              </div>  ';
	 
	            $data[] = $row;
	        }
	 
	        $output = array(
	                        "draw" => $_POST['draw'],
	                        "recordsTotal" => $this->categories->count_all($this->data),
	                        "recordsFiltered" => $this->categories->count_filtered($this->data),
	                        "data" => $data,
	                );
	        //output to json format
	        echo json_encode($output);
	    
    }
}