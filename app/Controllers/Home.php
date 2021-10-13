<?php

namespace App\Controllers;

//exportar modelo - traida de informacion
use App\Models\miModelo;

class Home extends BaseController
{
    //utilizando constructor...
    protected $db = null;

    public function __construct()
    {
        $this->db = new miModelo();
    }
    //

    public function index()
    {
        return view('layouts/header').view('layouts/aside').view('body').view('layouts/footer');
    }


    public function prueba()
    {
        return view('layouts/header').view('layouts/aside').view('prueba').view('layouts/footer');
    }



    public function usuarios(){

        //$u = new miModelo(); //llamar a nuestro modelo sin constructor, directo

        //imprimir la funcion        

       // print_r($u->selectUsuarios());

        //En lugar de imprimir quiero una vista

        
        //$u->selectUsuarios();

        $u = $this->db->selectUsuarios();

        $user['us']=$u;


        return view('layouts/header').view('layouts/aside').view('vistas/usuarios',$user).view('layouts/footer');

    }



}
