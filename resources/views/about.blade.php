@extends('layouts.main')
@section('container')
    <h1>HALAMAN ABOUT</h1>
    <h3>{{ $name }}</h3>
    <P>{{ $email }}</P>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" >
    
@endsection
    
