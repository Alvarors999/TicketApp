<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
     private $tickets = [
        'tickets' => [
            1 => ['id' => 1, 'name' => 'The Lord of the Rings: The Fellowship of the Ring', 'price' => 12.2, 'date' => '2020/10/18', 'time' => '09:00'],
            2 => ['id' => 2, 'name' => 'The Seven Samurai', 'price' => 22.2, 'date' => '2020/10/18', 'time' => '14:00'],
            3 => ['id' => 3, 'name' => 'Slumdog Millionaire', 'price' => 18.2, 'date' => '2020/10/18', 'time' => '19:00'],
            4 => ['id' => 4, 'name' => 'Avatar', 'price' => 7.2,  'date' => '2020/10/18', 'time' => '10:00'],
        ]
    ];
    
    function index() {
        return view('backend/index', $this->tickets);
    }
}
