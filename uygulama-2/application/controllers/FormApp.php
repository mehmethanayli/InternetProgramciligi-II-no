<?php

class FormApp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("formapp_model");
    }

    public function index()
    {
        $this->load->view("form");
    }
    public function insert()
    {
        $data = array(
            "name"      => $this->input->post("name"),
            "email"     => $this->input->post("email"),
            "service"   => $this->input->post("service"),
            "budget"    => $this->input->post("budget"),
            "message"   => $this->input->post("message")
        );
        /*   echo "<pre>";
        print_r($data);
        echo "</pre>"; */

        $insert = $this->formapp_model->insert($data);
        if ($insert) {
            redirect(base_url("formapp/listele"));
        } else {
            redirect(base_url());
        }
    }

    public function listele()
    {

        $items = $this->formapp_model->get_all();

        /*  echo "<pre>";
        print_r($items);
        echo "</pre>"; */


        $viewData = array(
            "items" => $items,
            "merhaba" => " merhabalar"
        );


        $this->load->view("listele", $viewData);
    }
}
