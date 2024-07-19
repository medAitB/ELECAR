// Get the header element
const header = document.getElementById('navbar');

let lastScroll = 0;

// Function to handle scroll event
const handleScroll = () => {
    const currentScroll = window.pageYOffset;

    // If scrolled down and past 10vh, show the header
    if (currentScroll > 0.1 * window.innerHeight) {
        header.classList.remove('hidden');
    } else {
        header.classList.add('hidden');
    }

    lastScroll = currentScroll;
};

// Listen for scroll events
window.addEventListener('scroll', () => {
    // Throttle the scroll event to improve performance
    clearTimeout(scrollTimeout);
    const scrollTimeout = setTimeout(handleScroll, 200);
});


$('.up').click( function() {
    $(`html,body`).animate({scrollTop: 0 }, 2000 );
  })


  $(function(){
    $('.count-num').rCounter({
      duration: 30
      
    });
  });

  // $(document).ready(function() {
  //   $(this).scrollTop(0);
  // })

  AOS.init({
    duration: 1000, // values from 0 to 3000, with step 50ms
    once: true, // whether animation should happen only once - while scrolling down
});

const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.querySelector('.nav-links');
const menuRight = document.querySelector('.menu-right ul');

navToggle.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    menuRight.classList.toggle('active');
});
