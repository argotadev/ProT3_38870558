<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='pagina principal';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function quienes_somos()
    {
        $data['titulo']='quienes somos';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }

    public function acercade()
    {
        $data['titulo']='acerca de';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/acercade');
        echo view('front/footer_view'); 
    }

    public function registro()
    {
        $data['titulo']='registro';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view'); 
    }
    
    public function login()
    {
        $data['titulo']='login';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view'); 
    }

    public function servicios()
    {
        $data['titulo']='servicios';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/servicios');
        echo view('front/footer_view'); 
    }

    public function bienvenida_view()
    {
        $data['titulo']='Bienvenido';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/bienvenida_view', $data);
        echo view('front/footer_view');

    }


}
