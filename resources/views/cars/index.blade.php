@extends('layout')
@section('title', 'Cars')
@section('content')
    
        
<main class= "cars">
        <h1 data-aos="fade-up">Top <span>Cars</span></h1>
        
    </main>
    <main class= "show">
        
   
        <div class= "mainbox animate__animated animate__zoomIn">
        @if(count($cars) > 0)
        @foreach($cars as $car)
      
      <a href="{{ route('cars.show', ['car' => $car['id']])}}"> 
      <div class="box" style="background-image: url('{{ asset($car['image_url']) }}');">
      <div class="titleCAR">{{$car['name']}}</div>
    </div>
     </a>

        
        @endforeach
        @else
                <p>Out of stock</p>
            @endif
        
    
        
      </div>
      
      

    </main>
@endsection


