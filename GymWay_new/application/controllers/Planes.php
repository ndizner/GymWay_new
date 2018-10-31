<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Planes extends CI_Controller{
    function __construct()
    {
        parent::__construct();
            $this->data = $this->generales->imports_generales();
            $this->data['active'] = 'Planes';
            $this->lang->load('clientes');
            $this->load->library('form_validation');
            $this->load->model('Plans_datum_model');
            $this->load->model('Discounts_datum_model');

            if($this->ion_auth->in_group(0)){
              $this->session->set_flashdata('error', 'No tiene permisos para realizar esta accion');
              redirect('/');
            }
    }

    /*
     * Listing of plans_data
     */
    function index()
    {
        $this->data['anchor'] = anchor('Planes/Disabled_plans', lang('plan_disabled'));

        $this->data['discounts_data'] = $this->Discounts_datum_model->get_all_discounts_data(array('discount_status'=>$this->config->item('Activo')));
        $this->data['plans_data'] = $this->Plans_datum_model->get_all_plans_data(array('plan_status'=>$this->config->item('Activo')));
        $this->data['_view'] = 'plans_datum/index';
        $this->load->view('layouts/main',$this->data);
    }
    /*
     * Listing of disabled plans
     */
    function Disabled_plans()
    {
        $this->data['anchor'] = anchor('Planes/', lang('plan_enabled'));
        $this->data['discounts_data'] = $this->Discounts_datum_model->get_all_discounts_data(array('discount_status'=>$this->config->item('Inactivo')));
        $this->data['plans_data'] = $this->Plans_datum_model->get_all_plans_data(array('plan_status'=>$this->config->item('Inactivo')));
        $this->data['_view'] = 'plans_datum/index';
        $this->load->view('layouts/main',$this->data);
    }

    /*
     * Adding a new PLAN
     */
    function add()
    {

      $this->form_validation->set_rules($this->validaciones->PlansAdd());

      if($this->form_validation->run()){
        if($this->input->post('plan_is_plan') == $this->config->item('Arancel')){
          $creditos = 0;
        }else{
          $creditos = $this->input->post('plan_credits');
        }
        $params = array(
            'plan_name' => $this->input->post('plan_name'),
            'plan_description' => $this->input->post('plan_description'),
            'plan_cost' => $this->input->post('plan_cost'),
            'plan_credits' => $creditos,
            'plan_is_plan' => $this->input->post('plan_is_plan'),
            'plan_status' => $this->config->item('Activo')
        );


        $plans_datum_id = $this->Plans_datum_model->add_plans_datum($params);
        $this->session->set_flashdata('success', lang('plan_created'));
        redirect('Planes/');
      }else{
        $this->data['_view'] = 'plans_datum/add';
        $this->load->view('layouts/main',$this->data);
      }
    }

public function username_check($str){
  if($this->input->post('is_plan') == $this->config->item('Plan')){
      if($str > 0){
         $this->form_validation->set_message('plan_credits', 'The 1111 field can not be the word "test"');
        return TRUE;
      }else{
         $this->form_validation->set_message('plan_credits', 'The ssssfield can not be the word "test"');
        return FALSE;
      }
  }
}

    /*
     * Editing a plans_datum
     */
    function edit($plan_id)
    {

        // check if the plans_datum exists before trying to edit it
        $this->data['plans_datum'] = $this->Plans_datum_model->get_plans_datum($plan_id);

        if(isset($this->data['plans_datum']['plan_id']))
        {

          $this->form_validation->set_rules($this->validaciones->PlansAdd());

            if($this->form_validation->run()){
              $params = array(
                  'plan_name' => $this->input->post('plan_name'),
                  'plan_description' => $this->input->post('plan_description'),
                  'plan_cost' => $this->input->post('plan_cost'),
                  'plan_credits' => $this->input->post('plan_credits'),
                  'plan_is_plan' => $this->input->post('is_plan')
              );
              if($this->Plans_datum_model->update_plans_datum($this->input->post('plan_id'),$params)){
                echo "ok";
              }else{
                echo "ha ocurrido un error, GIL";
              }
            }else{
              $this->data['_view'] = 'plans_datum/edit';
              $this->load->view('layouts/main',$this->data);
            }
        }
        else{
          $this->session->set_flashdata('error', lang('notif_plan_not_found'));
          redirect('/Planes');
        }

    }

    /*
     * Deleting plans_datum
     */
    function remove()
    {
        $plans_datum = $this->Plans_datum_model->get_plans_datum($this->input->post('plan_id'));

        // check if the plans_datum exists before trying to delete it
        if(isset($plans_datum['plan_id']))
        {
          if($plans_datum['plan_status']==$this->config->item('Activo')){
            $this->Plans_datum_model->update_plans_datum($plans_datum['plan_id'],array('plan_status'=>$this->config->item('Inactivo')));
            echo 'Se ha deshabilito correctamente el plan '.$plans_datum['plan_name'];
          }else{
            $this->Plans_datum_model->update_plans_datum($plans_datum['plan_id'],array('plan_status'=>$this->config->item('Activo')));
            echo 'Se ha habilito correctamente el plan '.$plans_datum['plan_name'];
          }
        }
        else
            echo lang('notif_cli_not_found');
    }


}
