<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function quienes_somos()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }

    public function acercade()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/acercade');
        echo view('front/footer_view'); 
    }

    public function registro()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/registro');
        echo view('front/footer_view'); 
    }
    
    public function login()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/login');
        echo view('front/footer_view'); 
    }

    public function servicios()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/servicios');
        echo view('front/footer_view'); 
    }
}
