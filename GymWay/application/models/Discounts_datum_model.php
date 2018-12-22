<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Discounts_datum_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get discounts_data by discount_id
     */
    function get_discounts_data($discount_id)
    {
        return $this->db->get_where('discounts_data',array('discount_id'=>$discount_id))->row_array();
    }

    /*
     * Get all discounts_data
     */
    function get_all_discounts_data($params = null)
    {
      if(isset($params) && !empty($params))
      {
          $this->db->where($params);
      }
        $this->db->order_by('discount_id', 'desc');
        return $this->db->get('discounts_data')->result_array();
    }

    /*
     * function to add new discounts_data
     */
    function add_discounts_data($params)
    {
        $this->db->insert('discounts_data',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update discounts_data
     */
    function update_discounts_data($discount_id,$params)
    {
        $this->db->where('discount_id',$discount_id);
        return $this->db->update('discounts_data',$params);
    }

    /*
     * function to delete discounts_data
     */
    function delete_discounts_data($discount_id)
    {
        return $this->db->delete('discounts_data',array('discount_id'=>$discount_id));
    }
}
