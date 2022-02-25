@extends('student.layouts.myselfed')
@section('content')
<h1>List</h1>
<table border="1">
    <tr>
        
        <th>Id</th>
        <th>Email</th>
        <th>Username</th>
        <th>Reg. Date</th>

    </tr>
    @foreach($students as $s)
        <tr>
            
            <td>{{$s->id}}</td>
            <td>{{$s->email}}</td>
            <td>{{$s->username}}</td>
            <td>{{$s->created_at}}</td>
            
        </tr>
    @endforeach
</table>
@endsection