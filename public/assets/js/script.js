"use strict"

AOS.init();

const triggerTabList = document.querySelectorAll('#banner-tabbing button');
triggerTabList.forEach(triggerEl => {
  const tabTrigger = new bootstrap.Tab(triggerEl);

  triggerEl.addEventListener('mouseover', event => {
    event.preventDefault()
    tabTrigger.show()
  });
});

const triggerTabListroom = document.querySelectorAll('#room-Tab button');
triggerTabListroom.forEach(triggerEl => {
  const tabTrigger = new bootstrap.Tab(triggerEl);

  triggerEl.addEventListener('mouseover', event => {
    event.preventDefault();
    tabTrigger.show();
  });
});

const triggerTabListroom2 = document.querySelectorAll('#room-Tab2 button');
triggerTabListroom2.forEach(triggerEl => {
  const tabTrigger = new bootstrap.Tab(triggerEl);

  triggerEl.addEventListener('mouseover', event => {
    event.preventDefault();
    tabTrigger.show();
  });
});


const triggerTabListroom3 = document.querySelectorAll('#room-Tab3 button');
triggerTabListroom3.forEach(triggerEl => {
  const tabTrigger = new bootstrap.Tab(triggerEl);

  triggerEl.addEventListener('mouseover', event => {
    event.preventDefault();
    tabTrigger.show();
  });
});


const triggerTabListroom4 = document.querySelectorAll('#room-Tab4 button');
triggerTabListroom3.forEach(triggerEl => {
  const tabTrigger = new bootstrap.Tab(triggerEl);

  triggerEl.addEventListener('mouseover', event => {
    event.preventDefault();
    tabTrigger.show();
  });
});


const header = document.querySelector("header");
const headerLogo = document.querySelector(".header-logo");
window.addEventListener("scroll", () => {
  window.scrollY > 450 ?
    header.classList.add("header-fixed") :
    header.classList.remove("header-fixed")
});

$('.room-slider').owlCarousel({
  loop: false,
  margin: 45,
  nav: false,
  dots: false,
  center: false,
  autoplay: false,
  // autoplayTimeout: 5000,
  // smartSpeed: 1000,
  navText: ["<img src='assets/icons/prev-arrow.svg'>", "<img src='assets/icons/next-arrow.svg'>"],
  responsive: {
    0: {
      items: 1,
      nav: true
    },
    576: {
      items: 2
    },
    1000: {
      items: 2
    }
  }
});

$('.wedding-slider').owlCarousel({
  loop: false,
  margin: 15,
  nav: true,
  dots: false,
  center: false,
  autoplay: false,
  autoplayTimeout: 4000,
  smartSpeed: 1000,
  navText: ["<img src='assets/icons/prev-arrow.svg'>", "<img src='assets/icons/next-arrow.svg'>"],
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
});
$('.offer-slider').owlCarousel({
  loop: true,
  margin: 5,
  nav: true,
  dots: false,
  center: true,
  autoplay: true,
  autoplayTimeout: 4000,
  smartSpeed: 1000,
  navText: ["<img src='assets/icons/prev-arrow.svg'>", "<img src='assets/icons/next-arrow.svg'>"],
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
});

$('.wellness-slider').owlCarousel({
  loop: true,
  margin: 15,
  nav: true,
  dots: false,
  center: true,
  autoplay: false,
  // autoplayTimeout: 4000,
  smartSpeed: 1000,
  navText: ["<img src='assets/icons/prev-arrow.svg'>", "<img src='assets/icons/next-arrow.svg'>"],
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
});

$('.home-offer-slider').owlCarousel({
  loop: false,
  margin: 20,
  nav: true,
  dots: false,
  center: false,
  autoplay: false,
  autoplayTimeout: 4000,
  smartSpeed: 1000,
  navText: ["<img src='assets/icons/prev-arrow.svg'>", "<img src='assets/icons/next-arrow.svg'>"],
  responsive: {
    0: {
      items: 1
    },
    768: {
      items: 2
    },
    992: {
      items: 3
    }
  }
});

$('.room-page-slider').owlCarousel({
  loop: false,
  margin: 0,
  nav: true,
  dots: false,
  center: false,
  autoplay: false,
  autoplayTimeout: 4000,
  smartSpeed: 1000,
  navText: ["<img src='assets/icons/prev-arrow.svg'>", "<img src='assets/icons/next-arrow.svg'>"],
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
});


$('.home-gallery-slider').owlCarousel({
  loop: true,
  margin: 15,
  nav: true,
  dots: false,
  center: false,
  autoplay: false,
  autoplayTimeout: 3000,
  smartSpeed: 3500,
  navText: ["<img src='assets/icons/prev-arrow.svg'>", "<img src='assets/icons/next-arrow.svg'>"],
  responsive: {
    0: {
      items: 1
    },
    575: {
      items: 2
    },
    768: {
      items: 3
    },
    992: {
      items: 5
    }
  }
});

$('.wellness_slider').owlCarousel({
  items: 1,
  loop: true,
  margin: 0,
  nav: false,
  dots: true,
  center: true,
  autoplay: true,
  autoplayTimeout: 4000,
  // smartSpeed: 3500,
  navText: ["<img src='assets/icons/prev-arrow.svg'>", "<img src='assets/icons/next-arrow.svg'>"],
  animateOut: 'fadeOut'
});

$('.teamSlider').owlCarousel({
  loop: false,
  margin: 30,
  nav: false,
  dots: true,
  center: false,
  autoplay: false,
  autoplayTimeout: 3000,
  // smartSpeed: 3500,
  navText: ["<img src='assets/icons/prev-arrow.svg'>", "<img src='assets/icons/next-arrow.svg'>"],
  responsive: {
    0: {items: 1,margin: 0},
    576: {items: 2,margin: 15},
    768: {items: 2},
    992: {items: 2}
  }
});


$(document).ready(function(){
  $(".menuBtn").click(function(){
    $(".side-bar").addClass("active");
  });
  $(".close-btn").click(function(){
    $(".side-bar").removeClass("active");
  });


  $('#check-in').datepicker({
    minDate: new Date(),
    dateFormat: 'yy-mm-dd',
    onSelect: function(selectedDate){
      var d = $('#check-in').datepicker('getDate');
      d.setDate(d.getDate() + 1); 
      $('#check-out').datepicker('option', 'minDate', d);
      $('#check-out').datepicker('setDate', d);
    }
  });

  $('#check-out').datepicker({
      minDate: new Date(),
      dateFormat: 'yy-mm-dd'
  });

  if($('#check-in').length) {
      $('#check-in').datepicker('setDate', new Date());
      var d2 = $('#check-in').datepicker('getDate');
      d2.setDate(d2.getDate() + 1);
      $('#check-out').datepicker('option', 'minDate', d2);
      $('#check-out').datepicker( 'setDate', d2);
  }

});


