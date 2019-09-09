<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function view($page = 'Home')
    {
        if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }
        if($page === 'Home'){
            $this->load->model('TruckModel');
            $recomOne = $this->TruckModel->get_recomSetOne();
            $data['recomSetOne'] = $recomOne;
            $recomTwo = $this->TruckModel->get_recomSetTwo();
            $data['recomSetTwo'] = $recomTwo;
            $data['noticesetFirst']= $this->TruckModel->get_noticeFirst();
            $data['noticeset']= $this->TruckModel->get_notice();
            
            $data['title'] = ucfirst($page);
            $this->load->view('common/header/Header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('common/footer/Footer');
        } else {
            $data['title'] = ucfirst($page);
            $this->load->view('common/header/Header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('common/footer/Footer');
        }
    }
}
