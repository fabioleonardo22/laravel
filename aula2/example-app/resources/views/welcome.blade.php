<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/style.css">
        <script scr="/js/scripts.js"></script>
       
    </head>
    <body>

        <h1>algum titulo</h1>
        @if(10 > 5)
            <p>a condicao e true</p>
        @endif
        
        <p>{{$nome}}</p>

        @if ($nome == "pedro")
        <p>o nome e pedro</p>
        @elseif($nome == "fabio")
        <p>o nome e {{ $nome }} e ele tem {{ $idade }} anos, e trabalha {{$profissao}}</p>
        @else
        <p>o nome nao e pedro</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{ $i }}</p>
            @if($i == 2)
            <p>o i e 2</p>
            @endif
        @endfor

        @foreach($nomes as $nome)
            <p> {{ $loop-> index }} </p>
            <p> {{ $nome }} </p>
        @endforeach
            

        @php
            $name = "fabio";
            echo $name;
        @endphp

<!-- comentario do html -->

    </body>
</html>
