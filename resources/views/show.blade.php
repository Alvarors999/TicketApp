<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Show</title>
        <link rel="stylesheet" href="../css/style-2.css" type="text/css" />
    </head>
    <body>
        <div class="containershow">
            <div class="contain">    
                <h1>{{ $id }} : {{ $name }}</h1>
                
                <p id="price">{{ $price }} €</p>
                <p id="date">{{ $date  }} {{ $time }}</p>
                
            </div>
            <div class="redirecciones">   
                <a href="{{ url('showall')}}">Show All Tickets</a>
                <a id="enlaceTicket" href="{{ url('/') }}">Initial Page</a>
            </div>    
        </div>
        
    </body>
</html>