<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border="1">
        <tr>
            <th>Number 1</th>
            <th>Number 2</th>
            <th>Number 3</th>
            <th>Number 4</th>
        </tr>
        @foreach($hobbies as h)
            <tr>
                <td>{{$h->num1}}</td>
                <td>{{$h->num2}}</td>
                <td>{{$h->num3}}</td>
                <td>{{$h->num4}}</td>
            </tr>
        @endforeach
    </table>    
    
</body>
</html>