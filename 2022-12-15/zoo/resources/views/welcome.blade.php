<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zoo</title>
</head>
<body>
    <h1>Zoo</h1>

    {{-- @if($jeOtevreno == true) --}}
    @if($aktualniHodina > 6 && $aktualniHodina < 19)
        <div>Zoo je otevřené, je {{$aktualniHodina}} hodin</div>
    @elseif($aktualniHodina >= 19 && $aktualniHodina < 20)
        <div>Zoo je otevřené, ale brzy zavře</div>
    @else
        <div>Zoo je zavřené</div>  
    @endif

    {{-- tento div se vypíše jen když je aktuální teplota --}}
    @isset($teplota)
        <div>Aktuální teplota je {{$teplota}}</div>
    @endisset

    <br />
    <div>Zvířata v zoo:</div>
    <table border = "1px">
        <tr>
            <th>Jméno</th>
            <th>Výběh</th>
            <th>Pohlaví</th>
            <th>Popis</th>
            <th>Je živý?</th>
        </tr>
        @foreach ($poleObjektuZvire as $zvire)
            <tr>
                <td>{{$zvire->jmeno}}</td>
                <td>{{$zvire->cislo_vybehu}}</td>
                <td>{{$zvire->pohlavi}}</td>
                <td>{{$zvire->popis}}</td>
                <td>{{$zvire->je_zivy}}</td>
            </tr>
        @endforeach
    </table>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolorem reprehenderit ut accusamus blanditiis nihil ullam saepe praesentium dolore! Perspiciatis inventore fuga magnam distinctio. Aspernatur velit ullam odio fugit necessitatibus.</p>

    {{-- toto nefunguje: {{$poleZvirat}} --}}

    {{-- totj je mnohem hezčí než bylo v php --}}

    <ul>
    @foreach($poleZvirat AS $zvire)
        <li>{{$zvire}}</li>
    @endforeach
    </ul>

    <div>Počet návštěvníků je: {{$pocetNavstevniku}}</div>
    {{-- toto je blade komentář --}}
    {{-- 2 chlupaté závorky v blade znamenají echo --}}
    <h2>Dnešní datum je: {{$datum}}</h2>
    {{-- <h2>Dnešní datum je: php echo $datum </h2> --}}

    <h2>Zvíře dne je: {{$zvireDne}}</h2>    

    {{-- pokud by bylo statické tak OK --}}
    {{-- <a href="./kontakt">Přejít na kontakt</a> --}}

    {{-- lépe se odkazovat přes funkci route --}}
    <a href="{{route('contactRoute')}}">Přejít na kontakt</a>
    
</body>
</html>