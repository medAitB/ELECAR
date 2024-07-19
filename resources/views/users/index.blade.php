@extends('layout')

@section('content')
<div class= "hiUser">
<h1 data-aos="fade-up">Welcome <span class= "clr">{{ Auth::user()->name }} !</span></h1>
</div>

@endsection