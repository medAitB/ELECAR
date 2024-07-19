<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    
</head>
<body>

  <div class="mainp" >

  <header id="navbar" class="hidden" data-aos="fade-down">
    <a href="{{ route('home.index') }}"><img class="lgimage" src="{{ asset('/images/logo.png') }}" alt="user"></a>
    <nav>
        <ul>
            <a href="{{ route('home.index') }}">Home</a>
            <a href="{{ route('home.about') }}">About</a>
            <a href="{{ route('cars.index') }}">Cars</a>
            <a href="{{ route('home.services') }}">Services</a>
            <a href="{{ route('contact.show') }}">Contact</a>
        </ul>
    </nav>
    <div class="menu-right">
        <ul>
            @auth
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">{{ Auth::user()->name }}</a>
                <ul class="dropdown-menu">
                    @if (Auth::user()->utype === 'ADM')
                    <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
                    @endif
                    <li><a href="{{ route('user.index') }}">My Account</a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('frmlogout').submit();">
                            Logout
                        </a>
                        <form id="frmlogout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
            @else
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            @endauth
        </ul>
    </div>
</header>

    @yield('content')

    <footer>
    
         <div class="footer-item1">
            <div class="footer-item1-child">
                <div class="footer-item1-child-left">
                    <div class="footer-item1-child-left-cicle"><i class="fa-solid fa-location-dot"></i></div>
                </div>
                <div class="footer-item1-child-right">
                    <h1 class="footer-item1-child-right-title">Location</h1>
                    <p class="footer-item1-child-right-p">55 Main Street, USA</p>
                </div>

            </div>
            <div class="footer-item1-child">
                <div class="footer-item1-child-left">
                    <div class="footer-item1-child-left-cicle"><i class="fa-solid fa-envelope"></i></div>
                </div>
                <div class="footer-item1-child-right">
                    <h1 class="footer-item1-child-right-title">Email</h1>
                    <a href="" class="footer-item1-child-right-p-click">support@gmail.com</a>
                </div>

            </div>
            <div class="footer-item1-child">
                <div class="footer-item1-child-left">
                    <div class="footer-item1-child-left-cicle"><i class="fa-solid fa-phone"></i></div>
                </div>
                <div class="footer-item1-child-right">
                    <h1 class="footer-item1-child-right-title">Hotline</h1>
                    <a href="" class="footer-item1-child-right-p-click">+000 (123) 456 898</a>
                </div>

            </div>
            <section class="mt-5">
        <div class="social-buttons d-flex justify-content-center">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </section>
         </div>
         <div class="footer-item2">
            <div class="footer-item2-child1">
                <h1 class="footer-item2-child1-title">About</h1>
                <p class="footer-item2-child1-p">Electric cars offer eco-friendly, efficient transportation, reducing emissions and dependency on fossil fuels.</p>
                      <a class="logoclick1" href="">
                        <img src="/images/WhiteLogo.png" alt="">
                        
                    </a>
            </div>
            <div class="footer-item2-child2">
                <h1 class="footer-item2-child2-title">Services</h1>
                <div class="footer-item2-child2-click">
                
                    <a href="">Electric Vehicle Charging<br>Stations Installation</a>
                    <a href="">Battery Replacement</a>
                    <a href="">Electric Vehicle Repair<br>and Diagnostic Services</a>
                    <a href="">Electric Vehicle Conversion<br>Services</a>
                    <a href="">EV Fleet Management Solutions</a>
                   <!--  <a href="">Renewable Energy<br>Integration for EV Charging</a>
                    <a href="">Electric Vehicle Financing<br>and Leasing Options</a>
                    <a href="">EV Charging Network<br>Subscriptions and Membership</a>
                    <a href="">Electric Vehicle Software<br>Updates and Performance Enhancements</a> -->
                </div>
                
            </div>
            <div class="footer-item2-child3">
                <h1 class="footer-item2-child3-title">Newsletter</h1>
                <p class="footer-item2-child3-p">Stay updated on latest electric car news and innovations. <br>
                     physical exercise except obtain </p>
                     <input  type="text" placeholder="Email Address">
            </div>
         </div>
         <div class="footer-item3">
            <div class="footer-item3-right">
            <p class="footer-item3-p">Created by 
                <span class="footer-item3-p-name">" mohamed ait benssalih & ayman bouayour "</span> </p>
                <p class="footer-item3-p"> Copy@ 2024 <span class="footer-item3-p-web">ELECAR</span> , All Right Reserved</p>
            </div>
            <ul class="footer-item3-l">
                <li><a href="">Setting & privacy</a></li>
                <li><a href="">Faqs</a></li>
                <li><a href="">Support</a></li>
            
            </ul>
            <button class="up" id="scrollButton" onclick="scrollToTop()">  <i class="fa-solid fa-angle-up"></i>  </button>

            <script>
  // Function to scroll to the top of the page
  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }

  // Function to toggle the visibility of the scroll button
  function toggleScrollButton() {
    const scrollButton = document.getElementById('scrollButton');
    if (window.scrollY > 100) { // Show the button when scrolled down 100px
      scrollButton.classList.add('show');
    } else {
      scrollButton.classList.remove('show');
    }
  }

  // Attach the toggle function to the window's scroll event
  window.addEventListener('scroll', toggleScrollButton);
</script>


         </div>
         
         
     </footer>

     <script>

</script>


    <script src="https://kit.fontawesome.com/d826d40ac7.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Bundle JS (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1000, // values from 0 to 3000, with step 50ms
        once: true, // whether animation should happen only once - while scrolling down
    });
</script>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

