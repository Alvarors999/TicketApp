@extends('base')

@section('title')
    Index page
@endsection

@section('content')
    <div class="container">
        
        @foreach ($tickets as $ticket)
        <div class="firstticket">
            <div class="firstbackground imagen{{$ticket['id']}}">
            </div>
            
            <div class="firstticketinfo">
                <div class="info">
                    <p id="title"> {{$ticket['name']}}</p>
                    <a href="{{ url('show/' . $ticket['id']) }}">
                    <div class="buy">
                        <p class="buyshow">Show</p>
                        <p id="price">{{$ticket['price']}}</p>
                    </div>
                    </a>
                </div>
    
            </div>
            
            
        </div>
    @endforeach
    
    </div>
    <div class="redirecciones">   
        <a id="enlaceTicket" href="{{ url('/') }}">Initial Page</a>
    </div>  
    <div class="whitespace"></div>
@endsection

