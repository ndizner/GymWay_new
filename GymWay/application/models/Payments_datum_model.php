<?php

class Payments_datum_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get payments_datum by payment_id
     */
    function get_payments_datum($payment_id)
    {
        return $this->db->get_where('payments_data',array('payment_id'=>$payment_id))->row_array();
    }

function get_daily_payments(){


  $this->db->select('SUM(payment_amount) AS amount', FALSE);
  $this->db->where(array('DATE(payment_date)' => date($this->config->item('query_date'))));
  return $this->db->get('payments_data')->row_array();

}

function sum_ingresos($params =  null, $plans_id = null){
  if(isset($params) && !empty($params))
  {
      $this->db->where($params);
  }
  if(isset($plans_id) && !empty($plans_id))
  {
      $this->db->where_in('payment_plan_id', $plans_id);
  }
  $this->db->join('plans_data', 'payments_data.payment_plan_id = plans_data.plan_id');
  $this->db->join('discounts_data', 'payments_data.payment_discuount_id = discounts_data.discount_id', 'left');
  $this->db->select_sum('payment_amount');
  $this->db->select('plan_name, COUNT(payment_amount) AS Cantidad, plan_cost AS CostoUnitario');
  $this->db->group_by('payment_plan_id');
return $this->db->get('payments_data')->result_array();

}

    /*
     * Get all payments_data
     */
    function get_all_payments_data($params = null)
    {
      if(isset($params) && !empty($params))
      {
          $this->db->where($params);
      }
      $this->db->join('customers_data', 'payments_data.payment_customer_id = customers_data.customer_id');
      $this->db->join('users', 'payments_data.payment_user_id = users.id');
      $this->db->join('plans_data', 'payments_data.payment_plan_id = plans_data.plan_id');
      $this->db->join('discounts_data', 'payments_data.payment_discuount_id = discounts_data.discount_id', 'left');

        $this->db->order_by('payment_id', 'desc');
        return $this->db->get('payments_data')->result_array();
    }

    /*
     * function to add new payments_datum
     */
    function add_payments_datum($params)
    {
        $this->db->insert('payments_data',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update payments_datum
     */
    function update_payments_datum($payment_id,$params)
    {
        $this->db->where('payment_id',$payment_id);
        return $this->db->update('payments_data',$params);
    }

    /*
     * function to delete payments_datum
     */
    function delete_payments_datum($payment_id)
    {
        return $this->db->delete('payments_data',array('payment_id'=>$payment_id));
    }
}
