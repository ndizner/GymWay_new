<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
     {
			 parent::__construct();
	 	 		$this->data = $this->generales->imports_generales();
				$this->data['active'] = 'dashboard';
				$this->lang->load('dashboard');
				$this->load->model('Customer_entry_model');
				$this->load->model('Customers_data_model');
				$this->load->model('Payments_datum_model');
				$this->load->helper('form');
				$this->load->library('form_validation');

				$this->load->model('Products_sale_model');


				$this->load->model('Products_datum_model');

		$this->load->model('Products_sale_model');
			}

	public function index()
	{

		$this->data['ingresos'] = $this->Customer_entry_model->Get_today_entry();
		$this->data['ingresos_clientes'] = $this->Customer_entry_model->Get_today_entry_customers();
		$this->data['clientes'] = $this->Customers_data_model->Count_Clients(array('customer_status'=>$this->config->item('Activo')));
		$this->data['productos'] = $this->Products_datum_model->Count_prodcucts(array('product_status'=>$this->config->item('Activo'),'product_stock >' => 0));
		$this->data['product_sales'] = $this->Products_datum_model->get_all_products_data(array('product_status'=>$this->config->item('Activo'),'product_stock >' => 0));
		$this->data['customers_data'] = $this->Customers_data_model->get_all_customers_data(array('customer_status'=>$this->config->item('Activo')));
		$this->data['pagos'] = $this->Payments_datum_model->get_daily_payments()['amount'] + $this->Products_sale_model->get_daily_sales()['amount'];



		$this->data['_view'] = 'dashboard/dashboard';
		$this->load->view('layouts/main',$this->data);

	}


}
