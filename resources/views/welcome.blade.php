
@extends('layout')
@section('title','Home page')
@section('content')
   
    <main>
        <div class="welcomer">
                <h1 class="welcomeTitle animate__animated animate__fadeInDown">Electric <span class="span">Cars</span> <br> for a Sustainable <br><span class="span">Future</span></h1>
                <p class="animate__animated animate__fadeInLeft">Welcome to ELECAR, where innovation meets sustainability. Discover the latest in electric vehicle technology, designed to provide an eco-friendly and efficient driving experience. Join us in driving towards a greener future with style and performance.</p>
        
                <a href="{{ route('cars.index') }}" class="btnN animate__animated animate__fadeInUp">Learn More</a>
        </div>
    </main>

    <section>
    <div class="countdown" data-aos="fade-up">
  <h2>Upcoming Event: Launch of the New ELECAR Model</h2>
  <div id="timer"></div>
  <p>Stay tuned for the most innovative electric car launch. Sign up now for updates!</p>
  <a href="{{ route('register') }}" class="btnNS">Sign Up</a>
</div>

<script>
  // Countdown timer script
  const countDownDate = new Date("Jul 31, 2024 00:00:00").getTime();

  const x = setInterval(function() {
    const now = new Date().getTime();
    const distance = countDownDate - now;
    
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    document.getElementById("timer").innerHTML = days + "d " + hours + "h " +
    minutes + "m " + seconds + "s ";
    
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("timer").innerHTML = "EXPIRED";
    }
  }, 1000);
</script>



    </section>
    <section>
        <div class="home-view " data-aos="fade-right">
            <div class="home-view-left" style="background-image: url({{asset('images/chargeHome.jpg')}}) ;"></div>
            <div class="home-view-right">
                <h2>SAVE NATURE</h2>
                <h1>Sustainability is Our <br> Main Advantage</h1>
                <p>At ELECAR, we believe in driving the future with sustainable and eco-friendly solutions. <br> Our commitment to sustainability is at the heart of everything we do, <br> from the design of our electric vehicles to our manufacturing processes.</p>
                <h5><i class="fa-solid fa-check" style="color: #fa0000; margin: 0 10px 10px 0;" ></i>Efficient Energy Usage</h5>
                <h5><i class="fa-solid fa-check" style="color: #fa0000; margin: 0 10px 10px 0;"></i>Renewable Energy Integration</h5>
                <h5><i class="fa-solid fa-check" style="color: #fa0000; margin: 0 10px 10px 0;"></i>Recycling and Reuse</h5>
                <a href="{{ route('home.about') }}" class="homeButton">About Us</a>
            </div>
            
        </div>
    </section>
    <section class="app-div" style="background-size: cover; background-image: url({{asset('images/appBG.jpg')}}) ; background-attachment: fixed;" data-aos="fade-left">
    <div class="app-view">
            <div class="app-view-left">
                <h2>NEW TECHNOLOGY</h2>
                <h1>Control Your Charger <br> with Our App</h1>
                <p>Take charge of your electric vehicle with ease. Control your charger effortlessly using our intuitive app.</p>
                
            </div>
        <div class="app-view-right" style="background-size: contain; background-image: url({{asset('images/phoneApp.png')}}) ; background-repeat: no-repeat; background-position: center; ">


        </div>
    </div>
</section>

  <section id="statistics" data-aos="fade-right">

    <div class="stat-item">
      <i class="fas fa-battery-full"></i>
      <h2 id="stat1">80</h2>
      <p>Battery Life (kWh)</p>
    </div>

    <div class="stat-item">
      <i class="fas fa-road"></i>
      <h2 id="stat2">300</h2>
      <p>Mileage (Miles)</p>
    </div>

    <div class="stat-item">
      <i class="fas fa-charging-station"></i>
      <h2 id="stat3">50</h2>
      <p>Charging Stations</p>

<script>

function animateValue(id, start, end, duration) {
  const obj = document.getElementById(id);
  const range = end - start;
  const minTimer = 50;
  let stepTime = Math.abs(Math.floor(duration / range));

  stepTime = Math.max(stepTime, minTimer);

  let startTime = new Date().getTime();
  let endTime = startTime + duration;
  let timer;

  function run() {
    const now = new Date().getTime();
    const remaining = Math.max((endTime - now) / duration, 0);
    const value = Math.round(end - (remaining * range));
    obj.innerHTML = value;
    if (value == end) {
      clearInterval(timer);
    }
  }

  timer = setInterval(run, stepTime);
  run();
}


function handleIntersection(entries, observer) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      animateValue("stat1", 0, 80, 2000);
      animateValue("stat2", 0, 300, 2000);
      animateValue("stat3", 0, 50, 2000);
      observer.disconnect();
    }
  });
}


const observer = new IntersectionObserver(handleIntersection);


observer.observe(document.getElementById("statistics"));

</script>
</section>
        <section class="video-section" data-aos="fade-left">
            <div class="video-content">
                <div class="video-text">
                    <h2>Experience the Future of Driving</h2>
                    <p>Discover the latest in electric car technology and innovation with ELECAR. Drive into the future with style and sustainability.</p>
                </div>
                <div class="video-container">
                    <video class="background-video" autoplay muted loop>
                        <source src="{{ asset('videos/ELECAR.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </section>
<section id="gallery-slider" data-aos="fade-right">
    <div class="slider">
      <div class="slides">
        <!-- Radio buttons for navigation -->
        <input type="radio" name="radio-btn" id="radio1" checked>
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">

        <!-- Slide content -->
        <div class="slide first" style="background-size: cover; background-image: url({{asset('images/gallery1.jpg')}}) ;">
          <div class="content">
            <h2>Benefits of Electric Cars</h2>
            <p>Electric cars offer numerous benefits including lower emissions, reduced fuel costs, and a quieter ride. They are powered by electricity, which can be sourced from renewable energy, making them an environmentally friendly choice.</p>
          </div>
        </div>
        <div class="slide" style=" background-size: cover; background-image: url({{asset('images/gallery2.jpg')}}) ;">
          <div class="content">
            <h2>Innovative Technology</h2>
            <p>Electric cars are equipped with cutting-edge technology such as regenerative braking, advanced battery management systems, and smart connectivity features. These technologies enhance performance, efficiency, and driving experience.</p>
          </div>
        </div>
        <div class="slide" style="background-size: cover; background-image: url({{asset('images/gallery3.jpg')}}) ;">
          <div class="content">
            <h2>Environmental Impact</h2>
            <p>By choosing electric cars, you contribute to a reduction in air pollution and greenhouse gas emissions. Electric vehicles help in mitigating climate change and promoting a sustainable future.</p>
          </div>
        </div>
        <div class="slide" style="background-size: cover; background-image: url({{asset('images/gallery4.jpg')}}) ;">
          <div class="content">
            <h2>Charging Infrastructure</h2>
            <p>The charging infrastructure for electric cars is rapidly expanding, with more public and private charging stations being installed. Fast charging technology allows you to charge your car quickly and conveniently.</p>
          </div>
        </div>

        <!-- Automatic navigation -->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
      </div>

      <!-- Manual navigation -->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>

      <button class="nav-btn prev" onclick="prevSlide()">&#10094;</button>
      <button class="nav-btn next" onclick="nextSlide()">&#10095;</button>

    </div>
    <script>
let counter = 1;
setInterval(() => {
  document.getElementById('radio' + counter).checked = true;
  counter++;
  if (counter > 4) {
    counter = 1;
  }
}, 5000);

function nextSlide() {
  counter++;
  if (counter > totalSlides) {
    counter = 1;
  }
  document.getElementById('radio' + counter).checked = true;
}

function prevSlide() {
  counter--;
  if (counter < 1) {
    counter = totalSlides;
  }
  document.getElementById('radio' + counter).checked = true;
}

    </script>
  </section>
    @endsection
