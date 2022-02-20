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
        {{csrf_field()}}
        <input type="text" placeholder="username" name="username"> <br>
        <input type="password" placeholder="password" name="password"> <br>
        <input type="confirmPassword" placeholder="Confirm password" name="confirmPassword"> <br>
        <input type="text" placeholder="email" name="email"> <br>
        
        <input type="submit" value="Submit" name="submit"> <br>
    </form>
    
</body>
</html>