@extends('student.layouts.myselfed')
@section('content')

<br><br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friend</title>
</head>
<body>

    <ol>
        @for($i=0; $i<count($friends); $i++)
            <li>{{$friends[$i]}}</li>
        @endfor
    </ol>
    <br><br>
    <ul>
        @foreach($friends as $f)
            <li>({{$loop->iteration}}) {{$f}}</li>
        @endforeach
    </ul>
    
</body>
</html>
<br>
@endsection