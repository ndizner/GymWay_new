<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	function __construct()
     {
			 parent::__construct();
			 $this->data = $this->generales->imports_generales();
	 		 $this->data['active'] = 'clientes';
	 		 $this->lang->load('clientes');
			 $this->load->library('form_validation');
			 $this->load->model('Customers_data_model');

			 $this->load->model('Payments_datum_model');
			 $this->load->model('Customer_entry_model');

			}

			function test()
			{
				$this->data['title'] = lang('cli_new_user_tittle');
				$this->data['_view'] = 'customers_data/profile';
				$this->load->view('layouts/main',$this->data);
			}

			function test2()
				{
					$this->data['_view'] = 'customers_data/test2';
					$this->load->view('layouts/main',$this->data);
			}

			function index()
		    {
					$this->data['anchor'] = anchor('Clientes/Disabled_customers', lang('cli_dishabled'));
		      $this->data['customers_data'] = $this->Customers_data_model->get_all_customers_data(array('customer_status'=>$this->config->item('Activo')));
					$this->data['_view'] = 'customers_data/index';
					$this->load->view('layouts/main',$this->data);
		    }

			function Disabled_customers()
				{
					$this->data['anchor'] = anchor('Clientes/', lang('cli_enabled'));
					$this->data['customers_data'] = $this->Customers_data_model->get_all_customers_data(array('customer_status'=>$this->config->item('Inactivo')));
					$this->data['_view'] = 'customers_data/index';
					$this->load->view('layouts/main',$this->data);
				}

				// public function fetchClients()
				// {
				// 	$result = array('data' => array());
				//
				// 	$data = $this->Customer_entry_model->Get_today_entry_customers();
				//
				// 	foreach ($data as $key => $value) {
				// 	$img = '<img src="'.base_url('images/').$value['image']'" alt="'.$value['customer_first_name'].'" class="img-circle" width="50" height="50" />';
				//
				// 	$result['data'][$key] = array(
				// 			$img,
				// 			$value['customer_dni'],
			  //       $value['customer_last_name'].', '.$value['customer_first_name'],
				// 			$value['plan_name'],
				// 			date($this->config->item('query_date'),$value['customer_due_date']),
				// 			$value['customer_remaining_credits'],
				// 			$value['customer_due_date'] > time() ? '<i class="ion-checkmark-round"></i>' : '<i class="ion-close"></i>',
				// 		);
				// 	} // /foreach
				//
				// 	echo json_encode($result);
				// }


		    /*
		     * Adding a new customers_data
		     */
		    function add()
		    {
				//$this->data['today'] = date("Y/m/d");
				$this->form_validation->set_rules('customer_dni',lang('cli_dni'),'is_unique[customers_data.customer_dni]|required|is_natural|greater_than[8]|min_length[8]|max_length[8]');
				$this->form_validation->set_rules('customer_first_name',lang('cli_name'),'required');
				$this->form_validation->set_rules('customer_last_name',lang('cli_last_name'),'required');
				$this->form_validation->set_rules('customer_email',lang('cli_email'),'valid_email|is_unique[customers_data.customer_email]');
				$this->form_validation->set_rules('customer_phone',lang('cli_tel'),'numeric');

				if($this->form_validation->run())

		        {
							$upload_image = $this->upload_image();
		            $params = array(
										'customer_sex' => $this->input->post('customer_sex'),
										'customer_id_plan' => $this->input->post('customer_id_plan'),
										'customer_dni' => $this->input->post('customer_dni'),
										'customer_first_name' => ucfirst(strtolower($this->input->post('customer_first_name'))),
										'customer_last_name' => ucfirst(strtolower($this->input->post('customer_last_name'))),
										'customer_email' => $this->input->post('customer_email'),
										'customer_phone' => $this->input->post('customer_phone'),
										'customer_dob' => date($this->config->item('date_format'),$this->input->post('customer_dob')),
										'customer_dos' => time(),
										'customer_due_date' => strtotime($this->input->post('customer_due_date')),
										'customer_emer_name' => ucfirst(strtolower($this->input->post('customer_emer_name'))),
										'customer_emer_tel' => $this->input->post('customer_emer_tel'),
										'customer_emer_rel' => ucfirst(strtolower($this->input->post('customer_emer_rel'))),
										'customer_emer_comments' => $this->input->post('customer_emer_comments'),
										'customer_status' => $this->config->item('Activo'),
										'image' => $upload_image,
		            );

		            $customers_data_id = $this->Customers_data_model->add_customers_data($params);
								$this->session->set_flashdata('success', lang('cli_add_success'));
		            redirect('Clientes/');
		        }
		        else
		        {

						$this->load->model('Plans_datum_model');
						$this->data['all_plans_data'] = $this->Plans_datum_model->get_all_plans_data(array('plan_status' => $this->config->item('Activo'), 'plan_is_plan' => $this->config->item('Plan')));
						//reviso que haya planes cargados, si no hay nada, lo redirijo
							if(sizeof($this->data['all_plans_data']>=0)){
								$this->data['_view'] = 'customers_data/add';
								$this->load->view('layouts/main',$this->data);
							}else{
								$this->session->set_flashdata('error', lang('cli_no_plans').sizeof($this->data['all_plans_data']));
								redirect('Clientes/');

							}

 }
		    }

				/*
	* This function is invoked from another function to upload the image into the assets folder
	* and returns the image path
	*/
public function upload_image()
	{
		// assets/images/product_image
			$config['upload_path'] = 'images';
			$config['file_name'] =  uniqid();
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '1000';

			// $config['max_width']  = '1024';s
			// $config['max_height']  = '768';

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('product_image'))
			{
					$error = $this->upload->display_errors();
					return 0;
			}
			else
			{
					$data = array('upload_data' => $this->upload->data());
					$type = explode('.', $_FILES['product_image']['name']);
					$type = $type[count($type) - 1];

					$path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
					return ($data == true) ? $path : false;
			}
	}

				function search(){
					$customers_data = $this->Customers_data_model->get_customers_data($this->input->post('customer_id'));

					// check if the customers_data exists before trying to delete it
					if(isset($customers_data['customer_id'])){
						redirect('Clientes/profile/'.$customers_data['customer_id']);
					}else{
						$this->session->set_flashdata('error', 'Cliente no encontrado');
					 redirect('/');
					}


				}

				function profile($customer_id){
					$this->data['customers_data'] = $this->Customers_data_model->get_customers_data($customer_id);
					//	var_dump($this->data['customers_data']);
					if(isset($this->data['customers_data']['customer_id'])){
						//PAGOS
						$this->load->model('Plans_datum_model');
						$this->load->model('Discounts_datum_model');

						$this->data['all_plans_data'] = $this->Plans_datum_model->get_all_plans_data();
						$this->data['all_discounts_data'] = $this->Discounts_datum_model->get_all_discounts_data(array('discount_status' => $this->config->item('Activo'),'discount_start_date  <' => time(), 'discount_end_date >' => time()));
						$this->data['all_payments'] = $this->Payments_datum_model->get_all_payments_data(array('payment_customer_id' => $customer_id));
						$this->data['all_entry'] = $this->Customer_entry_model->get_all_customer_entry(array('customer_entry_customer_id' => $customer_id));

						if(!$this->data['customers_data']['image']){
							$this->data['customers_data']['image'] = $this->config->item('default_image');
						}

						$this->data['_view'] = 'customers_data/profile';
						$this->load->view('layouts/main',$this->data);
					}else{

						 $this->session->set_flashdata('error', 'Cliente no encontrado');
						redirect('/Clientes');
					}
				}

		    /*
		     * Editing a customers_data
		     */
		    function edit($customer_id)
		    {
		        // check if the customers_data exists before trying to edit it
		        $this->data['customers_data'] = $this->Customers_data_model->get_customers_data($customer_id);

		        if(isset($this->data['customers_data']['customer_id']))
		        {
		            $this->load->library('form_validation');

					$this->form_validation->set_rules('customer_dni',lang('cli_dni'),'required');
					$this->form_validation->set_rules('customer_first_name','Customer First Name','required');
					$this->form_validation->set_rules('customer_last_name','Customer Last Name','required');
					$this->form_validation->set_rules('customer_id_plan','Customer Id Plan','required');

					if($this->form_validation->run())
		            {
		                $params = array(
							'customer_sex' => $this->input->post('customer_sex'),
							'customer_id_plan' => $this->input->post('customer_id_plan'),
							'customer_dni' => $this->input->post('customer_dni'),
							'customer_first_name' => ucfirst(strtolower($this->input->post('customer_first_name'))),
							'customer_last_name' => ucfirst(strtolower($this->input->post('customer_last_name'))),
							'customer_email' => $this->input->post('customer_email'),
							'customer_phone' => $this->input->post('customer_phone'),
							'customer_sex' => $this->input->post('customer_sex'),
							'customer_dob' => $this->input->post('customer_dob'),
							'customer_due_date' => strtotime($this->input->post('customer_due_date')),
							'customer_emer_name' => ucfirst(strtolower($this->input->post('customer_emer_name'))),
							'customer_emer_tel' => $this->input->post('customer_emer_tel'),
							'customer_emer_rel' => ucfirst(strtolower($this->input->post('customer_emer_rel'))),
							'customer_emer_comments' => $this->input->post('customer_emer_comments'),
		                );

//edito la imagen si fue modificada
							if($_FILES['product_image']['size'] > 0) {

								$upload_image = $this->upload_image();
								$upload_image = array('image' => $upload_image);
								$this->Customers_data_model->update_customers_data($customer_id, $upload_image);

							}

		                $this->Customers_data_model->update_customers_data($customer_id,$params);
										$this->session->set_flashdata('success', lang('cli_edit_success'));
		               redirect('Clientes/');
		            }
		            else
		            {
						$this->load->model('Plans_datum_model');
						$this->data['all_plans_data'] = $this->Plans_datum_model->get_all_plans_data(array('plan_status' => $this->config->item('Activo'), 'plan_is_plan' => $this->config->item('Plan')));



										$this->data['_view'] = 'customers_data/edit';
				            $this->load->view('layouts/main',$this->data);
		            }
		        }
		        else{
							$this->session->set_flashdata('error', lang('notif_cli_not_found'));
							redirect('/Clientes');
						}

		    }

		    /*
		    //  * Deleting customers_data
		    //  */
		     function remove()
		     {
		         $customers_data = $this->Customers_data_model->get_customers_data($this->input->post('customer_id'));

		         // check if the customers_data exists before trying to delete it
		         if(isset($customers_data['customer_id']))
		         {

							  if($customers_data['customer_status']==$this->config->item('Activo')){
									$this->Customers_data_model->update_customers_data($customers_data['customer_id'],array('customer_status'=>$this->config->item('Inactivo')));
									echo 'Se ha deshabilito correctamente a '.$customers_data['customer_last_name'].', '.$customers_data['customer_first_name'];
								}else{
									$this->Customers_data_model->update_customers_data($customers_data['customer_id'],array('customer_status'=>$this->config->item('Activo')));
									 echo 'Se ha Habilito correctamente a '.$customers_data['customer_last_name'].', '.$customers_data['customer_first_name'];
								}
		         }
		         else{
							 echo lang('notif_cli_not_found');
						 }

		     }



}
