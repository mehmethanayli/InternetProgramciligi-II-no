<?php

class Socials extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->viewFolder = "socials_v";
        $this->load->model("social_model");
    }


    public function index()
    {

        echo "Sosyal Medya Modülü";
        die();



        /* Tablodan verilerin getirilmesi */
        $items = $this->social_model->get_all();
        /* Verinin incelenmesi */
        //print_r($items);

        /* View yapısının kurulması */

        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subviewFolder = "list";
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subviewFolder}/index", $viewData);
    }

    public function newForm()
    {

        /* View yapısının kurulması */
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subviewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subviewFolder}/index", $viewData);
    }


    public function delete($id)
    {
        $delete = $this->social_model->delete(array(
            "id" => $id
        ));
        if ($delete) {

            echo "Silme Başarılı";
        } else {
            echo "Silinemedi";
        }
    }
}
