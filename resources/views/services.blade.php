@extends('layout')
@section('title','services page')
@section('content')
    
    <main class= "services">
        <h1 data-aos="fade-up"> <span>Our</span> Services</h1>
        
    </main>
    <section class= "services1st">
    <div class="card1" data-aos="flip-left" data-aos-easing="ease-out-cubic"
    data-aos-duration="1500">
        <div class="card-left">
            <h1><span class="span">C</span>harging <span class="span">N</span>etworks</h1>
            <p>
          <span class="span">E</span>lectric car charging networks like Tesla's Supercharger network,
            ChargePoint, and Electrify America provide crucial infrastructure
            for electric vehicle (EV) owners. These networks offer convenient
            and fast charging solutions, often with easy-to-use mobile apps
            for locating and accessing charging stations.
            </p>
        </div>
        <div class="card-right" style="background-image: url({{asset('images/servicecharge.jpg')}}) ;"></div>
    </div>
        
        
        
    </section>
    <section class= "services1st">
    <div class="card2" data-aos="flip-right" data-aos-easing="ease-out-cubic"
    data-aos-duration="1500">
        <div class="card-right" style="background-image: url({{asset('images/BatteryServices.jpg')}}) ;"></div>
        <div class="card-left">
            <h1><span class="span">B</span>attery<span class="span"> S</span>ervices</h1>
            <p>
            <span class="span">C</span>ompanies specializing in electric vehicle battery
             services are becoming increasingly important. Services 
             may include battery diagnostics, maintenance, and replacement. 
             Some companies, like Tesla, offer battery swap services or
              comprehensive warranties for battery performance.
            </p>
        </div>
    </div>
        
        
        
    </section>
    <section class= "services1st">
    <div class="card3" data-aos="flip-left" data-aos-easing="ease-out-cubic"
    data-aos-duration="1500">
        <div class="card-left">
            <h1><span class="span">E</span>lectric <span class="span">V</span>ehicle <span class="span"> M</span>aintenance</h1>
            <p>
          <span class="span">E</span>lectric vehicle maintenance services focus on the upkeep
           and repair of components that are unique to electric vehicles, such as electric
            motors, power electronics, and regenerative braking systems. 
            This includes routine inspections, software updates,
             and diagnostics to ensure optimal performance and efficiency.
              Regular maintenance helps extend the lifespan of electric
               vehicles and ensures safe operation on the road.
            </p>
        </div>
        <div class="card-right" style="background-image: url({{asset('images/ElectricMaintenance.png')}}) ;"></div>
    </div>
        
        
        
    </section>
    @endsection
