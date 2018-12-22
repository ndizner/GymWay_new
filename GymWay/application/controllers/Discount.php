<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Discount extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->data = $this->generales->imports_generales();
        $this->data['active'] = 'Planes';
        $this->lang->load('clientes');
        $this->load->library('form_validation');
        $this->load->model('Discounts_datum_model');
        $this->load->model('Plans_datum_model');


        if($this->ion_auth->in_group(0)){
          $this->session->set_flashdata('error', 'No tiene permisos para realizar esta accion');
          redirect('/');
        }
    }

    /*
     * Listing of discounts_data
     */
    function index()
    {
      redirect('Planes/');
    }

    function calcularDesc(){
      $discount = $this->Discounts_datum_model->get_discounts_data($this->input->post('discount_id'));
      $plan = $this->Plans_datum_model->get_plans_datum($this->input->post('plan_id'));

      $percentage = $discount['discount_amount'];
      $totalWidth = $plan['plan_cost'];
      $new_width = ($percentage / 100) * $totalWidth;

      if($discount['discount_type'] == $this->config->item('Descuento')){
        //Descuento
         echo $totalWidth - $new_width;

      }else{
        //Recargo
        echo $totalWidth + $new_width;
      }
    }
    /*
     * Adding a new discounts_data
     */
    function add()
    {

    $this->form_validation->set_rules($this->validaciones->Discounts());
  		if($this->form_validation->run()){

        $dates = explode(' - ', $this->input->post('discount_date'));

              $params = array(
  				'discount_amount' => $this->input->post('discount_amount'),
  				'discount_start_date' => strtotime($dates[0]),
  				'discount_end_date' => strtotime($dates[1]),
  				'discount_status' => $this->config->item('Activo'),
  				'discount_name' => $this->input->post('discount_name'),
          'discount_type' => $this->input->post('discount_type'),
              );

              $discounts_data_id = $this->Discounts_datum_model->add_discounts_data($params);
              $this->session->set_flashdata('success', lang('discount_created'));
             redirect('Planes/');
          }
          else
          {
              $this->data['_view'] = 'discounts_datum/add';
              $this->load->view('layouts/main',$this->data);
          }
    }

    /*
     * Editing a discounts_data
     */
    function edit($discount_id)
    {
        // check if the discounts_data exists before trying to edit it
        $this->data['discounts_data'] = $this->Discounts_datum_model->get_discounts_data($discount_id);

          if(isset($this->data['discounts_data']['discount_id']))
            {

                  $this->form_validation->set_rules($this->validaciones->Discounts());


                  if($this->form_validation->run())
                      {
                        $dates = explode(' - ', $this->input->post('discount_date'));
                        $params = array(
                            'discount_amount' => $this->input->post('discount_amount'),
                            'discount_start_date' => strtotime($dates[0]),
                    				'discount_end_date' => strtotime($dates[1]),
                            'discount_name' => $this->input->post('discount_name'),
                            'discount_type' => $this->input->post('discount_type'),
                        );


                          $this->Discounts_datum_model->update_discounts_data($discount_id,$params);
                          $this->session->set_flashdata('success', lang('discount_updated'));
                          redirect('Planes/');

                      }
                      else
                        {
                          $this->data['_view'] = 'discounts_datum/edit';
                          $this->load->view('layouts/main',$this->data);
                        }
          }
          else{
            $this->session->set_flashdata('error', lang('notif_discount_not_found'));
            redirect('/Planes');
          }
          }

          function remove()
          {
              $discounts_data = $this->Discounts_datum_model->get_discounts_data($this->input->post('discount_id'));

              // check if the plans_datum exists before trying to delete it
              if(isset($discounts_data['discount_id']))
              {
                if($discounts_data['discount_status']==$this->config->item('Activo')){
                  $this->Discounts_datum_model->update_discounts_data($discounts_data['discount_id'],array('discount_status'=>$this->config->item('Inactivo')));
                  echo 'Se ha deshabilito correctamente el Descuento o recargo '.$discounts_data['discount_name'];
                }else{
                  $this->Discounts_datum_model->update_discounts_data($discounts_data['discount_id'],array('discount_status'=>$this->config->item('Activo')));
                  echo 'Se ha habilito correctamente el  Descuento o recargo '.$discounts_data['discount_name'];
                }
              }
              else
                  echo lang('notif_cli_not_found');
          }
}
