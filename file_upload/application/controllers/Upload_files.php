<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Upload_files extends CI_Controller
{
	function  __construct() {
		parent::__construct();
		$this->load->model('file');
		$this->load->library('ion_auth');
		$this->load->view('header');
	}

	function index(){
		$user = $this->ion_auth->user()->row();
            if($this->ion_auth->loginCheck()){
			$data = array();
			$data['usuario'] = $user;
			if($this->input->post('fileSubmit') && !empty($_FILES['userFiles']['name'])){
				$filesCount = count($_FILES['userFiles']['name']);
				for($i = 0; $i < $filesCount; $i++){
					$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
					$_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
					$_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
					$_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
					$_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

					$uploadPath = 'uploads/files/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = '*';
					//$config['max_size']	= '100';
					//$config['max_width'] = '1024';
					//$config['max_height'] = '768';

					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('userFile')){
						$fileData = $this->upload->data();
						//$uploadData[$i]['file_name'] = $this->file->lastid();
						$uploadData[$i]['file_name'] = $fileData['file_name'];
						$uploadData[$i]['created'] = date("Y-m-d H:i:s");
						$uploadData[$i]['modified'] = date("Y-m-d H:i:s");
					}
				}
				if(!empty($uploadData)){
					//Insert files data into the database
					if($this->file->insert($uploadData)){
							$this->session->set_flashdata('success','Se Subio correctamente el archivo.');
					}else{
						$this->session->set_flashdata('error','Error al Subir Archivo');
					}
				}
			}
			//get files data from database
	        $data['files'] = $this->file->getRows();

			//pass the files data to view
			$this->load->view('upload_files/index', $data);
		}
	}

	function delete($id){
		if($this->ion_auth->loginCheck()){
			if($this->file->Existe($id)){
				$a = $this->file->GetName($id);
				$string = 'uploads/files/'.$a['file_name'];
						unlink($string);
						$this->file->delete($id);
						$this->session->set_flashdata('success','Archivo '.$a['file_name'].' Eliminado correctamente');
					}else{
						$this->session->set_flashdata('error','Error Eliminar Archivo');
					}
					redirect('upload_files');
		}
	}
}
