<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>My Table</h1>
    <a href="todo_create">Add Record</a><br><br>
    {{session('msg')}}
    <table border=1>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Created At</td>
            <td>Action</td>
        </tr>
        @foreach($todoArr as $todo)
        <tr>
            <td>{{$todo->id}}</td>
            <td>{{$todo->name}}</td>
            <td>{{$todo->created_at}}</td>
            <td><a href="todo_delete/{{$todo->id}}">Delete</a> || <a href="todo_edit/{{$todo->id}}">Edit</a></td>
        </tr>
        @endforeach
    </table>
</body>

</html>