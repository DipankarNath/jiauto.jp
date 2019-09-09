<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("TruckModel");
        $this->load->library("pagination");
    }

    public function vehicle($id)
    {
        $count = $this->TruckModel->get_count($id);
        if($count == 1){
            $v_data = $this->TruckModel->get_vehicle($id);
            $i_data = $this->TruckModel->get_images($id);
            $data['vcs'] = $v_data;
            $data['imgs'] = $i_data;
            $this->load->view('common/header/Header');
            $this->load->view('pages/Vehicle', $data);
            $this->load->view('common/footer/Footer');
        }
        else{
            $this->load->view('common/header/Header');
            $this->load->view('pages/EmptyVehicle');
            $this->load->view('common/footer/Footer');
        }
    }


    public function category($product_id)
    {

        $this->load->library('pagination');
        $this->load->model('TruckModel');

        $config["base_url"] = base_url() . 'View/category/' . $product_id;
        $total_row = $this->TruckModel->record_count($product_id);
        $config["total_rows"] = $total_row;

        $config["per_page"] = 4;// <-----------------Per page ---------------------------

        $config["uri_segment"] = 4;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = $total_row;

        $config['full_tag_open'] = '<div ><ul class="pagination post-pagination text-center mt-50">';
        $config['full_tag_close'] = '</ul></div>';

        $config['next_link'] = '<i class="fa fa-angle-right"></i>';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<i class="fa fa-angle-left"></i>';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';


        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;

        $data['products'] = $this->TruckModel->fetch_properties($config["per_page"], $page, $product_id);

        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;', $str_links);
        $data['main_view'] = "home_view";

        $this->load->view('common/header/Header');
        $this->load->view('pages/Category', $data); // loads the page
        $this->load->view('common/footer/Footer');
    }
    public function selectall()
    {

        $this->load->library('pagination');
        $this->load->model('TruckModel');

        $config["base_url"] = base_url().'View/selectall/';
        $total_row = $this->TruckModel->count();
        $config["total_rows"] = $total_row;

        $config["per_page"] = 2;// <-----------------Per page ---------------------------

        $config["uri_segment"] = 3;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = $total_row;

        $config['full_tag_open'] = '<div ><ul class="pagination post-pagination text-center mt-50">';
        $config['full_tag_close'] = '</ul></div>';

          $config['next_link'] = '<i class="fa fa-angle-right"></i>';
          $config['next_tag_open'] = '<li class="next page">';
          $config['next_tag_close'] = '</li>';

          $config['prev_link'] = '<i class="fa fa-angle-left"></i>';
          $config['prev_tag_open'] = '<li class="prev page">';
          $config['prev_tag_close'] = '</li>';

          $config['cur_tag_open'] = '<li class="active"><a href="">';
          $config['cur_tag_close'] = '</a></li>';

          $config['num_tag_open'] = '<li class="page">';
          $config['num_tag_close'] = '</li>';
                

        $this->pagination->initialize($config);
                
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;

        $data['products'] = $this->TruckModel->fetch_data($config["per_page"], $page);
        

        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;',$str_links );
        $data['main_view'] = "home_view";
        
        $this->load->view('common/header/Header');
        $this->load->view('pages/ViewAll', $data); // loads the page
        $this->load->view('common/footer/Footer');
    }
}