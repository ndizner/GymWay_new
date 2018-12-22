<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Customer_entry_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function Get_today_entry(){

      $this->db->where('DATE(customer_entry_date)',date($this->config->item('query_date')));
      $this->db->from('customer_entry');
      return $this->db->count_all_results();
        }

    



  function get_all_customer_entry_count($params){
    $this->db->where($params);
    $this->db->from('customer_entry');
    return $this->db->count_all_results();
      }



  // function get_all_customer_entry_count(){
  //   $this->db->select('COUNT(customer_entry_date), WEEKDAY(customer_entry_date)');
  //   $this->db->group_by('WEEKDAY(customer_entry_date)');
  //   return $this->db->get('customer_entry');
  //     }



    function Get_today_entry_customers(){
      $this->db->select('customer_id, customer_id_plan, customer_due_date, customer_first_name, customer_last_name, customer_dni, customer_remaining_credits,customer_id_plan, plan_name');

      $this->db->where('DATE(customer_entry_date)',date($this->config->item('query_date')));
      $this->db->join('customers_data', 'customers_data.customer_id = customer_entry.customer_entry_customer_id');
        $this->db->join('plans_data', 'customers_data.customer_id_plan = plans_data.plan_id');
      return $this->db->get('customer_entry')->result_array();
        }

    /*
     * Get customer_entry by customer_entry_id
     */
    function get_customer_entry($customer_entry_id)
    {
        return $this->db->get_where('customer_entry',array('customer_entry_id'=>$customer_entry_id))->row_array();
    }

    /*
     * Get all customer_entry
     */
    function get_all_customer_entry($params =  null)
    {
      if(isset($params) && !empty($params))
      {
          $this->db->where($params);
      }
      $this->db->join('customers_data', 'customers_data.customer_id = customer_entry.customer_entry_customer_id');
        $this->db->order_by('customer_entry_id', 'desc');
        return $this->db->get('customer_entry')->result_array();
    }

    /*
     * function to add new customer_entry
     */
    function add_customer_entry($params)
    {
        $this->db->insert('customer_entry',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update customer_entry
     */
    function update_customer_entry($customer_entry_id,$params)
    {
        $this->db->where('customer_entry_id',$customer_entry_id);
        return $this->db->update('customer_entry',$params);
    }

    /*
     * function to delete customer_entry
     */
    function delete_customer_entry($customer_entry_id)
    {
        return $this->db->delete('customer_entry',array('customer_entry_id'=>$customer_entry_id));
    }
}