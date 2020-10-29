<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>edit</title>
    </head>
    <body>
        <h1>edit: {{ $name }}</h1>
        <form action="{{ url('backend/ticket/' . $id) }}" method="post">
            @method('put')
            @csrf
            <input type="text"   name=""      value="{{ $id    }}" readonly/>
            <input type="text"   name="name"  value="{{ $name  }}"/>
            <input type="number" name="price" value="{{ $price }}"/>
            <input type="date"   name="date"  value="{{ $date  }}"/>
            <input type="time"   name="time"  value="{{ $time  }}"/>
            <input type="submit" value="edit"/>
        </form>
        <a href="{{ url('backend') }}">index</a><br>
        <a href="{{ url('backend/ticket/' . $id) }}">show</a><br>
        <script src="{{ url('js/script.js?rand=' . uniqid()) }}"></script>
    </body>
</html>