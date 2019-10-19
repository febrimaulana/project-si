<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerDashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelMenu', 'menu');
    }


    public function index()
    {
        $data['title'] = "Dashboard";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer', $data);
    }
}

/* End of file ControllerDashboard.php */
