@extends('layout')
@section('title', 'Show Car')
@section('content')

<main class="show1">
    <section class="showCar">
        <div class="elecart1">
            <h2>{{ $car->name }}</h2>
            <p>{{ $car->paragraph }}</p> 
        </div>

        
        <div class="elecar" style="background-image: url('{{ asset($car['image_url']) }}');">  

        </div>
    </section>
</main>

@endsection
