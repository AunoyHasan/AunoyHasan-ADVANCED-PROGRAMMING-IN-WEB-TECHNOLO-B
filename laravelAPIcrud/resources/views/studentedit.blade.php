<center>   
    <h3>Edit Student</h3> 
    <form action="{{route('edit.submit')}}" method="post">
    <div class="col-md-4">
        {{csrf_field()}}

       
        <input type="hidden" name="id" class="form-control" value="{{$product->id}}"><br>

        <input type="text" name="name" class="form-control" value="{{$product->pname}}"><br>
       
        <input type="text" name="username" class="form-control" value="{{$product->quantity}}"><br>

        <input type="text" name="email" class="form-control" value="{{$product->price}}"><br>

        <br>
        <input type="reset" class="btn btn-primary" value="Reset">
        <input type="submit" class="btn btn-primary" value="Update">

</div>    

    </form>
</center>    