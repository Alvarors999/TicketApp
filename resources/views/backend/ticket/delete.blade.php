<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
</head>
<body>
    Are you sure you want to delete {{$name}} ticket that cost {{$price}} €?
     <form action="{{ url('backend/ticket/' . $id) }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="destroy"/>
        </form>
        <a href="{{ url('ticket') }}">index</a><br>
        <a href="{{ url('ticket/' . $id) }}">show</a><br>
        <a href="{{ url('ticket/' . $id . '/edit') }}">edit</a><br>
</body>
</html>