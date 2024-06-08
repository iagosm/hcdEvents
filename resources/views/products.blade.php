@extends('layouts.main')
@section('title', 'Produtos')
@section('content')
<h1>Está é a pagina de produtos</h1>
@if($search != '')
<p>Usuário está buscando por {{$search}}</p>
@endif
<a href="/">Home</a>
<a href="/contact">Contatos</a>
<a href="/products">Productions</a>
@endsection