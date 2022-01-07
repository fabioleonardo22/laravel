
@extends('layouts.main')

@section('tittle', 'HDC Events')

@section('content')

 <h1>algum titulo</h1>
@if(10 > 5)
<p>a condicao e true</p>
@endif
        
<p>{{$nome}}</p>

@if ($nome == "pedro")
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

@endsection
