<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TicketBackendController extends Controller
{
    
    private $tickets = [
        'tickets' => [
            1 => ['id' => 1, 'name' => 'The Lord of the Rings: The Fellowship of the Ring',    'price' => 12.2, 'date' => '2020/10/18', 'time' => '09:00'],
            2 => ['id' => 2, 'name' => 'The Seven Samurai',     'price' => 22.2, 'date' => '2020/10/18', 'time' => '14:00'],
            3 => ['id' => 3, 'name' => 'Close Encounters of the Third Kind',    'price' => 18.2, 'date' => '2020/10/18', 'time' => '19:00'],
            4 => ['id' => 4, 'name' => 'Slumdog Millionaire', 'price' => 7.2,  'date' => '2020/10/18', 'time' => '10:00'],
        ]
    ];
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        return view('backend.index', $this->tickets);
    }


    public function create()
    {
        return view('backend.ticket.create');
    }


     
    public function store(Request $request)
    {
        $price = $request->get('price');
        if($price != 1) {
            $response = ['op' => 'create', 'result' => "Successfully", 'id' =>0];
            return redirect('backend')->with($response); //flash session
        }else {
            return back()->withInput(); // si falla vuelve atras para que puedas corregir en lo que haya fallado el usuario
        }
        
    }


    public function show($numeroticket)
    {
        if(isset($this->tickets['tickets'][$numeroticket]))   { 
            $datos = $this->tickets['tickets'][$numeroticket];
            return view('backend.ticket.show', $datos);
        }
        View::share('origen', 'Viene de show debiado a un error en el número de ticket');  //Si en la ruta el ticket no existe, en este caso existen 1,2,3,4 que es el id, vuelve al index y nos pinta lo escrito en el segundo parametro
        return $this->index();
    }

    public function edit($id)
    {
        $datos = $this->tickets['tickets'][$id];
        return view('backend.ticket.edit', $datos);
    }

   
    public function update(Request $request, $id)
    {
        $response = ['op' => 'update', 'result' => 1,'id' => $id];
        return redirect('backend')->with($response);
    }

    public function destroy($id)
    {
        $response = ['op' => 'delete', 'result' => 1, 'id'=> $id];

        return redirect('backend')->with($response);
        
    }
    
    function delete($id) {
        $datos = $this->tickets['tickets'][$id];
        return view('backend.ticket.delete', $datos);
    }
    
}

