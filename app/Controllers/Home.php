<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {   
        /*
        echo view('header.php', ['title' => 'CloverCD']);
        echo view('principal.php');
        echo view('footer.php');*/
        echo view('index', ['title' => 'CloverCD - Inicio']);
    }
    public function inicio()
    {
        return view('index', ['title' => 'CloverCD - Inicio']);
    }

    public function QuienesSomos(){
        echo view('QuienesSomos', ['title' => 'CloverCD - Quienes Somos']);
    }
    public function comercializacion(){
        echo view('comercializacion', ['title' => 'CloverCD - Comercialización']);
    }
    public function contacto(){
        echo view('contacto', ['title' => 'CloverCD - Contacto']);
    }
    public function terminos(){
        echo view('terminos', ['title' => 'CloverCD - Terminos y Condiciones']);
    }

}
