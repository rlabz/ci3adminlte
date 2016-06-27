<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();

	}
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function upload_img(){
        $config = array(
            'upload_path' => './assets/files/img/',
            'allowed_types' => 'gif|jpg|png',
            'file_name' => 'file_'.date('dmYHis'),
            'file_ext_tolower' => TRUE,
            'overwrite' => FALSE,
            'max_size' => 100,
            'max_width' => 2048,
            'max_height' => 2048,           
            'min_width' => 10,
            'min_height' => 7,     
            'max_filename' => 0,
            'remove_spaces' => TRUE
        );		
		
		$this->load->library('upload', $config);
 
        if (!$this->upload->do_upload('myfile')){
            $hasil = $this->upload->display_errors();
            ?>
            <div class="alert alert-danger" style="margin:10px;">
            <?php echo "<strong>".$hasil."</strong>";?>
            </div>
            <?php
        }else{
            $hasil = $this->upload->data(); 
        	?>        	
			<p class="alert alert-success msg" style="margin:10px;">Upload file berhasil</p>
			<div class="col-md-3">
				<img data-url="<?php echo base_url('assets/files/img/'.$hasil['orig_name']);?>" src="<?php echo base_url('assets/files/img/'.$hasil['orig_name']);?>" class="j-pick-img one-img img-thumbnail"/>
			</div>
            <?php
        }        
	}
}
