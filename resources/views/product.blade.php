@extends('layouts.main')
@section('title', 'Produto')
@section('content')
@if($id !== null)
<h1>Exibindo produto de id:{{ $id }}</h1>
@endif
<a href="/">Home</a>
<a href="/contact">Contatos</a>
<a href="/products">Productions</a>
@endsection