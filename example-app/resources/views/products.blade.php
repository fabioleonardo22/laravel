@extends('layouts.main')  

@section('tittle', 'produtos')

@section('content')\  
 <h1>tela de produtos</h1>
 @if($busca != '')
 <p>o usuario esta buscando por: {{ $busca }}</p>
 @endif
@endsection