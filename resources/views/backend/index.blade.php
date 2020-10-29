  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/assets/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('/assets/backend/dist/css/adminlte.min.css')}}">

@extends('backend.base')

@section('content')

        <div class="container">
        <h1>Tickets</h1>
        @if(Session::get('op') !== null)
            <h2>
                Resultado de la operación:
                {{ Session::get('op') }}
                {{ Session::get('result') }}
            </h2>
        @endif
        <br><br>
        <table class="container" border="1">
            <tr>
                <th>id #</th>
                <th>name</th>
                <th>price</th>
                <th>show</th>
                <th>edit</th>
                <th>delete</th>
                
            </tr>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket['id'] }}</td>
                    <td>{{ $ticket['name'] }}</td>
                    <td>{{ $ticket['price'] }}</td>
                    <td><a href="{{ url('backend/ticket/' . $ticket['id']) }}">show</a></td>
                    <td><a href="{{ url('backend/ticket/' . $ticket['id'] . '/edit') }}">edit</a></td>
                    <td><a href="{{ url('backend/ticket/' . $ticket['id'] . '/delete') }}">delete</a></td><br>
                    
                    
                    
                </tr>
            @endforeach
        </table>
        
        <a href="{{ url('backend/ticket/create') }}">create</a>
        </div>
@endsection