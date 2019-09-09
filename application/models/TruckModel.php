<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: dipan
 * Date: 20-08-2017
 * Time: 10:51
 */
class TruckModel extends CI_Model{

    public function get_recomSetOne(){
        $query = $this->db->query("SELECT * FROM product P,images I where P.Id = I.Prod_Id AND I.Lead=1 AND P.Status=1 AND P.Recommended=1 LIMIT 3");
        $result = $query->result();
        return $result;
         /*echo "<pre>";             
        print_r($result);
        exit;*/
    }
    public function get_recomSetTwo(){
        $query = $this->db->query("SELECT * FROM product P,images I where P.Id = I.Prod_Id AND I.Lead=1 AND P.Status=1 AND P.Recommended=1 LIMIT 3 OFFSET 3");
        $result = $query->result();
        return $result;
    }
    public function get_noticeFirst(){
        $query = $this->db->query("SELECT * FROM notice Limit 1 offset 0");
        $result = $query->result();
        return $result;
    }
    public function get_notice(){
        $query = $this->db->query("SELECT * FROM notice limit 5 offset 1");
        $result = $query->result();
        return $result;
    }
    
    public function get_category($limit, $start, $cat_id) {
//        $this->db->limit($limit, $start);
//        $query = $this->db->get("Product");
//        $query = $this->db->query('SELECT * FROM Product WHERE CatId=');
        $query = $this->db->query("select * from product p, images i where 
                                    p.CatId = '.$cat_id.' AND
                                    i.Status = 1 AND 
                                    i.Lead = 1 AND
                                    i.Prod_Id = p.Id");


        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    public function get_vehicle($id) {
        $query = $this->db->query('SELECT * FROM product WHERE Id='.$id.' AND Status=1');
        $result = $query->result();
        return $result;
    }
    public function get_images($id) {
        $this->db->limit(9);
        $query = $this->db->query('SELECT * FROM images WHERE Prod_Id='.$id.' AND Status=1');
        $result = $query->result();
        return $result;
    }
    public function get_count($id) {
        $query = $this->db->query("SELECT * FROM product P where P.Status=1 AND P.Id=$id");
        $row_count = $query->num_rows();
        return $row_count;
    }
    public function record_count($pr_id)
    {
        $query = $this->db->query('SELECT * FROM product WHERE CatId='.$pr_id.' AND Status=1');
        $row_count = $query->num_rows();
        return $row_count;
    }

    public function fetch_properties($limit, $start, $pr_id)
    {
        $results = array();
        //if (!$start) { $start = 1; }
        $start_from = ($start-1) * $limit;

        $query = $this->db->query("select * from product p, images i where p.CatId =$pr_id AND p.Status = 1 AND i.Lead = 1 AND i.Prod_Id = p.Id LIMIT $limit OFFSET $start_from ");
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;

            }
           // echo "<pre>";
             return $data;
           // print_r($data);
           // exit;
        }
        return false;
    }
    public function count() 
    {
        $query = $this->db->query("select * from product p WHERE p.Status=1");
        $row_count = $query->num_rows();
        return $row_count;
    }      

    public function fetch_data($limit, $start)
    {
      $results = array();
      //if (!$start) { $start = 1; }
        $start_from = ($start-1) * $limit;      
 
        $query = $this->db->query("select * from product p, images i where p.Status=1 AND i.Status = 1 AND i.Lead = 1 AND i.Prod_Id = p.Id order by p.Id LIMIT $limit OFFSET $start_from");
                
         if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;

            }
            return $data;
        }
        return false;
    }
}