@extends('student.layouts.myselfed')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>

    <br><br>

    <form action="{{route('register.submit')}}" method="post">
        
        <!--
        {{csrf_field()}} 
        <input type="text" placeholder="name" name="name"> <br>
        @error('name')
        <span class="text-danger"> {{$message}} </span>
        @enderror 

        <input type="text" placeholder="username" name="username"> <br>
        @error('username')
        <span class="text-danger"> {{$message}} </span>
        @enderror 

        @error('password')
        <span class="text-danger"> {{$message}} </span>
        @enderror 
        <input type="password" placeholder="password" name="password"> <br>

        @error('confirmPassword')
        <span class="text-danger"> {{$message}} </span>
        @enderror 
        <input type="confirmPassword" placeholder="Confirm password" name="confirmPassword"> <br>
        
        @error('email')
        <span class="text-danger"> {{$message}} </span>
        @enderror 
        <input type="text" placeholder="email" name="email"> <br>
        
        <input type="submit" value="Submit" name="submit"> <br> -->

        
        {{csrf_field()}}
        
        <input type="text" placeholder="name" name="name"> <br>
        @error('name')
        <span class="text-danger"> {{$message}} </span> <br>
        @enderror

        <input type="text" placeholder="username" name="username"> <br>
        @error('username')
        <span class="text-danger"> {{$message}} </span> <br>
        @enderror

        <input type="password" placeholder="password" name="password"> <br> 
        @error('password')
        <span class="text-danger"> {{$message}} </span> <br>
        @enderror

        <input type="password" placeholder="Confirmpassword" name="confirmPassword"> <br>
        @error('confirmPassword')
        <span class="text-danger"> {{$message}} </span> <br>
        @enderror

        <input type="text" placeholder="email" name="email"> <br>
        @error('email')
        <span class="text-danger"> {{$message}} </span> <br>
        @enderror

        <input type="submit" value="Submit" name="submit"> <br>
    </form>
    
</body>
</html>

<br><br>

@endsection