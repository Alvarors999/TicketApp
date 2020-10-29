@extends('base')

@section('title')
    Index page
@endsection

@section('content')
    <div class="darkness"></div>
    
    <div class="container-index"></div>
           
    
    <div class="redirecciones2">   
        <a href="{{ url('showall')}}">Show All Tickets</a>
    </div>    
@endsection

