@extends('layout')
@section('title','About page')
@section('content')
    
    <section class= "about">
        <h1 data-aos="fade-up">About <span>Us</span></h1>
        
        </section>
    
    <section class="About2ndT">
    <div class="About2ndT1">
          <h2> <span class= "TTT">D</span>riving the <span class= "TTT">F</span>uture of <span class= "TTT">E</span>lectric <span class= "TTT">M</span>obility</h2>
        
        </div>
        <div class="About2nd">
    <div class="About2nd-left" style="background-image: url({{asset('images/image-rtv.jpg')}}) ;" data-aos="fade-up-right"></div>

      <div class="About2nd-right" data-aos="fade-up-left">
        <div class="About2nd-right-child1">
          <h1><span class= "clr">S</span>eamless, <span class= "clr">L</span>imitless<br> <span class= "clr">T</span>echnology</h1>
          <p>Unlock the future with our seamless, limitless technology<br> solutions. Experience innovation without boundaries,<br> designed to empower and elevate your digital journey.<br> Join us in redefining what's possible.</p>
        </div>
        <div class="About2nd-right-child2">
          <a href="{{ route('cars.index') }}" class="AboutBtnLeft ">View More</a>
          <a href="{{ route('contact.show') }}" class="AboutBtnRight ">Contact Us</a>
        </div>

      </div>
      </div>
      
    </section>

    <section class= "About1st">
        
        <div class="About1stP" data-aos="fade-down-left">
            <h2>We Are More Than <br> An <span>E</span>lectric <span>C</span>ar Company</h2>
            
        <p>At ELECAR, we go beyond simply manufacturing electric vehicles. We are committed to creating a sustainable future with cutting-edge technology and innovative solutions. Our passion drives us to deliver excellence in every aspect, from design to performance.</p>
          
              <div class="About1stB">
                <div class="About1stC">
                    <i class="fa-solid fa-check"></i>
                </div>
                <p> We offer multiple services</p>
              </div>
              <div class="About1stB2">
                <div class="About1stC">
                    <i class="fa-solid fa-check"></i>
                </div>
                <p> All you need to know about electric cars</p>
              </div>
              
            
            
            
            
            
            </div>
            <div class="About1stImg" data-aos="fade-down-right">
                
            </div>


    </section>
    
    <section class= "AboutImg" data-aos="fade-up">

           <div class= "AboutImg-left" style="background-image: url({{asset('images/gallery1.jpg')}}) ;"></div>
           <div class= "AboutImg-right" >
            <div style="background-image: url({{asset('images/gallery2.jpg')}}) ;"></div>
            <div style="background-image: url({{asset('images/gallery3.jpg')}}) ;"></div>
            <div style="background-image: url({{asset('images/gallery5.jpg')}}) ;"></div>
            <div style="background-image: url({{asset('images/gallery4.jpg')}}) ;"></div>
           </div>
           
    </section>
    @endsection
    