@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
    <h1>Olá iago</h1>
    @for($i = 0; $i < count($arr); $i++)
    <p> {{ $arr[$i] }} - {{ $i }}</p>
    @if($i == 2)
    <p>O $i é igual a 2</p>
    {{-- teste --}}
    @endif
    @endfor
@endsection