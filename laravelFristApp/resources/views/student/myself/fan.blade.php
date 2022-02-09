@extends('student.layouts.myselfed')
@section('content')
<br><br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fan</title>
</head>
<body>
<table border="1">
        <tr>
            <th>Number</th>
            <th>Football</th>
            <th>Club</th>
            <th>Cricket</th>
        </tr>
        @foreach($fans as $f)
            <tr>
                <td>{{$f->number}}</td>
                <td>{{$f->football}}</td>
                <td>{{$f->club}}</td>
                <td>{{$f->cricket}}</td>
            </tr>
        @endforeach
    </table>   
</body>
</html>

@endsection