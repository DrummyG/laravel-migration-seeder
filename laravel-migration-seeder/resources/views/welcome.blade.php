<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @foreach($vacations as $vacation)
       <div>
            <h1>{{$vacation['name']}}</h1>
            <p>{{$vacation['description']}}</p>
            <h3>A soli: {{$vacation['price']}} $</h3>
            <h2>Partenza il: {{$vacation['dateDeparture']}}</h2>
            <h2>Ritorno il: {{$vacation['dateReturn']}}</h2>
            <p>Offerto da: {{$vacation['offered']}}</p>
       </div>
    @endforeach
</body>
</html>