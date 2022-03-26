<h1>List</h1>

<center>
@if(Session::has('msg'))<{{Session::get('msg')}}<br><br>@endif
</center>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Id</th>
        <th>Email</th>
        <th>Username</th>
        <th>Reg. Date</th>
        <th>Action</th>

    </tr>
    @foreach($students as $s)
        <tr>
            <td>{{$s->name}}</a></td>
            <td>{{$s->id}}</td>
            <td>{{$s->email}}</td>
            <td>{{$s->username}}</td>
            <td>{{$s->created_at}}</td>
            <td><a href="{{route('details',['id'=>$s->id])}}">Details |</a>
                <a href="{{route('edit',['id'=>$s->id])}}">Edit |</a>
                <a href="{{route('delete',['id'=>$s->id])}}">Delete</a>
            </td>
        </tr>
    @endforeach
</table>