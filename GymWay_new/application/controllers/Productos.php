<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Productos extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Products_datum_model');
        $this->data = $this->generales->imports_generales();
        $this->data['active'] = 'Productos';
        $this->lang->load('clientes');
        $this->load->library('form_validation');

        if($this->ion_auth->in_group(0)){
          $this->session->set_flashdata('error', 'No tiene permisos para realizar esta accion');
          redirect('/');
        }
    }

    /*
     * Listing of products_data
     */
    function index()
    {
        $this->data['anchor'] = anchor('Productos/Disabled_Products', 'Productos Desahibilitos');
        $this->data['products_data'] = $this->Products_datum_model->get_all_products_data(array('product_status'=>$this->config->item('Activo')));
        $this->data['_view'] = 'products_datum/index';
        $this->load->view('layouts/main',$this->data);
    }
    /*
     * Listing of products_data
     */
    function Disabled_Products()
    {
        $this->data['anchor'] = anchor('Productos/', 'Productos Habilitados');
        $this->data['products_data'] = $this->Products_datum_model->get_all_products_data(array('product_status'=>$this->config->item('Inactivo')));
        $this->data['_view'] = 'products_datum/index';
        $this->load->view('layouts/main',$this->data);
    }

    /*
     * Adding a new products_datum
     */
    function add()
    {


		$this->form_validation->set_rules($this->validaciones->Products());



		if($this->form_validation->run())
        {
            $params = array(
				'product_name' => $this->input->post('product_name'),
				'product_description' => $this->input->post('product_description'),
				'product_cost' => $this->input->post('product_cost'),
				'product_cost_sale' => $this->input->post('product_cost_sale'),
				'product_stock' => $this->input->post('product_stock'),
        'product_status' => $this->config->item('Activo'),
            );

            $products_datum_id = $this->Products_datum_model->add_products_datum($params);
            $this->session->set_flashdata('success', 'Producto creado correctamente!');
            redirect('Productos/');
          }
        else
        {
            $this->data['_view'] = 'products_datum/add';
            $this->load->view('layouts/main',$this->data);
        }
    }

    /*
     * Editing a products_datum
     */
    function edit($product_id)
    {
        // check if the products_datum exists before trying to edit it
        $this->data['products_datum'] = $this->Products_datum_model->get_products_datum($product_id);

        if(isset($this->data['products_datum']['product_id']))
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('product_stock','Product Stock','is_natural_no_zero');
        		$this->form_validation->set_rules('product_cost_sale','Product Cost Sale','greater_than[0]');
        		$this->form_validation->set_rules('product_cost','Product Cost','greater_than[0]');
            $this->form_validation->set_rules('product_name','Nombre del Producto','required');


			if($this->form_validation->run())
            {
                $params = array(
					'product_name' => $this->input->post('product_name'),
					'product_description' => $this->input->post('product_description'),
					'product_cost' => $this->input->post('product_cost'),
					'product_cost_sale' => $this->input->post('product_cost_sale'),
					'product_stock' => $this->input->post('product_stock'),
                );

                $this->Products_datum_model->update_products_datum($product_id,$params);
                $this->session->set_flashdata('success', 'Producto Editado correctamente!');
                redirect('Productos/index');
            }
            else
            {
                $this->data['_view'] = 'products_datum/edit';
                $this->load->view('layouts/main',$this->data);
            }
        }
        else
            show_error('The products_datum you are trying to edit does not exist.');
    }

    /*
     * Deleting products_datum
     */
    function remove()
    {
        $products_datum = $this->Products_datum_model->get_products_datum($this->input->post('product_id'));

        // check if the products_datum exists before trying to delete it
        if(isset($products_datum['product_id']))
        {
          if($products_datum['product_status']==$this->config->item('Activo')){
            $this->Products_datum_model->update_products_datum($products_datum['product_id'],array('product_status'=>$this->config->item('Inactivo')));
            echo 'Se ha deshabilito correctamente el Producto '.$products_datum['product_name'];
          }else{
            $this->Products_datum_model->update_products_datum($products_datum['product_id'],array('product_status'=>$this->config->item('Activo')));
            echo 'Se ha habilito correctamente el Producto '.$products_datum['product_name'];
          }
        }
        else
            show_error('The products_datum you are trying to delete does not exist.');
    }


}
