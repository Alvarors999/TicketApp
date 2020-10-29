<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontController extends Controller
{
    
    private $tickets = [
        'tickets' => [
            1 => ['id' =>  1, 'name' => 'The Lord of the Rings: The Fellowship of the Ring', 'price' => 12.2, 'date' => '2020/10/18', 'time' => '09:00'],
            2 => ['id' => 2, 'name' => 'The Seven Samurai', 'price' => 22.2, 'date' => '2020/10/18', 'time' => '14:00'],
            3 => ['id' => 3, 'name' => 'Slumdog Millionaire', 'price' => 18.2, 'date' => '2020/10/18', 'time' => '19:00'],
            4 => ['id' => 4, 'name' => 'Avatar', 'price' => 7.2,  'date' => '2020/10/18', 'time' => '10:00'],
        ]
    ];
    
    
  
    
    public function index() {
        return view('index', $this->tickets);
    }
    
    public function showall() {
        return view('showall',$this->tickets);
    }
    
     public function show($numeroticket)
    {
        if(isset($this->tickets['tickets'][$numeroticket]))   { 
            $datos = $this->tickets['tickets'][$numeroticket];
            return view('show', $datos);
        }
        View::share('origen', 'Viene de show debiado a un error en el número de ticket');  //Si en la ruta el ticket no existe, en este caso existen 1,2,3,4 que es el id, vuelve al index y nos pinta lo escrito en el segundo parametro
        return $this->index();
    }
 
}
