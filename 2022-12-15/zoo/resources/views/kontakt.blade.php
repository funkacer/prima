<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontakt</title>
</head>
<body>
    <h1>Napište nám</h1>

    <ul>
        @foreach ($kontaktniUdaje AS $klic=>$hodnota)
        <li>{{$klic}} : {{$hodnota}}</li>
        @endforeach
    </ul>

    <a href="{{route('homepageRoute')}}">Zpět na homepage</a>
    
</body>
</html>