<?php

class Uyeler extends CI_Controller
{
    /* 
    Uyeler isimli bir cont. oluşturunuz.
    Cont içerisine uyelistele isimli fonk. 
    oluşturarak dizi içeriğini aşağıdaki
    gibi ekrana yazdırınız.
        uyeler {
            id => "1",
            adi=> "ahmet",
            soyadi=> "Gül",
            email => "asd@asd.com"
        }
    */
    public function index()
    {
        echo "index içeriği";
    }

    public function uyelistele()
    {
        $uyeler = array(
            "id"    =>  1,
            "adi"   =>  "Ahmet",
            "soyadi" =>  "Gül",
            "email" =>  "asd@asd.com"
        );

        echo "<pre>";
        print_r($uyeler);
        echo "</pre>";
    }
}
