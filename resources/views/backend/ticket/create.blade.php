<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>edit</title>
    </head>
    <body>
        <h1>Create: </h1>
        <form action="{{ url('backend/ticket/') }}" method="post">
            @csrf
            <input type="text"   name=""      value="" readonly/>
            <input type="text"   name="name"  value=""/>
            <input type="number" name="price" value=""/>
            <input type="date"   name="date"  value=""/>
            <input type="time"   name="time"  value=""/>
            <input type="submit" value="edit"/>
        </form>
        <a href="{{ url('backend') }}">index</a><br>
    
         <a id="enlaceBorrar" href="#">delete javascript</a><br>
        
        <script src="{{ url('js/script.js?rand=' . uniqid()) }}"></script>
    </body>
</html>