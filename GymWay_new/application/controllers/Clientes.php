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


		    /*
		     * Adding a new customers_data
		     */
		    function add()
		    {
				//$this->data['today'] = date("Y/m/d");
				$this->form_validation->set_rules('customer_dni',lang('cli_dni'),'is_unique[customers_data.customer_dni]|required');
				$this->form_validation->set_rules('customer_dob', lang('cli_dob'), 'date_valid');
				$this->form_validation->set_rules('customer_first_name',lang('cli_name'),'required');
				$this->form_validation->set_rules('customer_last_name',lang('cli_last_name'),'required');
				$this->form_validation->set_rules('customer_last_name',lang('cli_last_name'),'required');
				$this->form_validation->set_rules('customer_email',lang('cli_email'),'valid_email|is_unique[customers_data.customer_email]');
				$this->form_validation->set_rules('customer_phone',lang('cli_tel'),'numeric');

				if($this->form_validation->run())
		        {
		            $params = array(
										'customer_sex' => $this->input->post('customer_sex'),
										'customer_id_plan' => $this->input->post('customer_id_plan'),
										'customer_dni' => $this->input->post('customer_dni'),
										'customer_first_name' => $this->input->post('customer_first_name'),
										'customer_last_name' => $this->input->post('customer_last_name'),
										'customer_email' => $this->input->post('customer_email'),
										'customer_phone' => $this->input->post('customer_phone'),
										'customer_dob' => $this->input->post('customer_dob'),
										'customer_dos' => time(),
										'customer_due_date' => strtotime($this->input->post('customer_due_date')),
										'customer_emer_name' => $this->input->post('customer_emer_name'),
										'customer_emer_tel' => $this->input->post('customer_emer_tel'),
										'customer_emer_rel' => $this->input->post('customer_emer_rel'),
										'customer_emer_comments' => $this->input->post('customer_emer_comments'),
										'customer_status' => $this->config->item('Activo'),
		            );

		            $customers_data_id = $this->Customers_data_model->add_customers_data($params);
								$this->session->set_flashdata('success', lang('cli_add_success'));
		            redirect('Clientes/index');
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

					if(isset($this->data['customers_data']['customer_id'])){
						//PAGOS
						$this->load->model('Plans_datum_model');
						$this->load->model('Discounts_datum_model');

						$this->data['all_plans_data'] = $this->Plans_datum_model->get_all_plans_data();
						$this->data['all_discounts_data'] = $this->Discounts_datum_model->get_all_discounts_data(array('discount_status' => $this->config->item('Activo'),'discount_start_date  <' => time(), 'discount_end_date >' => time()));
						$this->data['all_payments'] = $this->Payments_datum_model->get_all_payments_data(array('payment_customer_id' => $customer_id));
						$this->data['all_entry'] = $this->Customer_entry_model->get_all_customer_entry(array('customer_entry_customer_id' => $customer_id));

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
							'customer_first_name' => $this->input->post('customer_first_name'),
							'customer_last_name' => $this->input->post('customer_last_name'),
							'customer_email' => $this->input->post('customer_email'),
							'customer_phone' => $this->input->post('customer_phone'),
							'customer_dob' => $this->input->post('customer_dob'),
							'customer_dos' => $this->input->post('customer_dos'),
							'customer_due_date' => strtotime($this->input->post('customer_due_date')),
							'customer_emer_name' => $this->input->post('customer_emer_name'),
							'customer_emer_tel' => $this->input->post('customer_emer_tel'),
							'customer_emer_rel' => $this->input->post('customer_emer_rel'),
							'customer_emer_comments' => $this->input->post('customer_emer_comments'),
		                );

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
