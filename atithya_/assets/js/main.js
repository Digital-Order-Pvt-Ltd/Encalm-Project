(function() {

  "use strict";



  /**

   * Easy selector helper function

   */

  const select = (el, all = false) => {

    el = el.trim()

    if (all) {

      return [...document.querySelectorAll(el)]

    } else {

      return document.querySelector(el)

    }

  }



  /**

   * Easy event listener function

   */

  const on = (type, el, listener, all = false) => {

    let selectEl = select(el, all)

    if (selectEl) {

      if (all) {

        selectEl.forEach(e => e.addEventListener(type, listener))

      } else {

        selectEl.addEventListener(type, listener)

      }

    }

  }



  /**

   * Easy on scroll event listener 

   */

  const onscroll = (el, listener) => {

    el.addEventListener('scroll', listener)

  }



  /**

   * Navbar links active state on scroll

   */

  let navbarlinks = select('#navbar .scrollto', true)

  const navbarlinksActive = () => {

    let position = window.scrollY + 200

    navbarlinks.forEach(navbarlink => {

      if (!navbarlink.hash) return

      let section = select(navbarlink.hash)

      if (!section) return

      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {

        navbarlink.classList.add('active')

      } else {

        navbarlink.classList.remove('active')

      }

    })

  }

  window.addEventListener('load', navbarlinksActive)

  onscroll(document, navbarlinksActive)



  /**

   * Scrolls to an element with header offset

   */

  const scrollto = (el) => {

    let header = select('#header')

    let offset = header.offsetHeight



    let elementPos = select(el).offsetTop

    window.scrollTo({

      top: elementPos - offset,

      behavior: 'smooth'

    })

  }



  /**

   * Toggle .header-scrolled class to #header when page is scrolled

   */

  let selectHeader = select('#header')

  let selectTopbar = select('#topbar')

  if (selectHeader) {

    const headerScrolled = () => {

      if (window.scrollY > 100) {

        selectHeader.classList.add('header-scrolled')

        if (selectTopbar) {

          selectTopbar.classList.add('topbar-scrolled')

        }

      } else {

        selectHeader.classList.remove('header-scrolled')

        if (selectTopbar) {

          selectTopbar.classList.remove('topbar-scrolled')

        }

      }

    }

    window.addEventListener('load', headerScrolled)

    onscroll(document, headerScrolled)

  }



  /**

   * Back to top button

   */

  let backtotop = select('.back-to-top')

  if (backtotop) {

    const toggleBacktotop = () => {

      if (window.scrollY > 100) {

        backtotop.classList.add('active')

      } else {

        backtotop.classList.remove('active')

      }

    }

    window.addEventListener('load', toggleBacktotop)

    onscroll(document, toggleBacktotop)

  }



  /**

   * Mobile nav toggle

   */

  on('click', '.mobile-nav-toggle', function(e) {

    select('#navbar').classList.toggle('navbar-mobile')

    this.classList.toggle('bi-list')

    this.classList.toggle('bi-x')

  })



  /**

   * Mobile nav dropdowns activate

   */

  on('click', '.navbar .dropdown > a', function(e) {

    if (select('#navbar').classList.contains('navbar-mobile')) {

      e.preventDefault()

      this.nextElementSibling.classList.toggle('dropdown-active')

    }

  }, true)



  /**

   * Scrool with ofset on links with a class name .scrollto

   */

  on('click', '.scrollto', function(e) {

    if (select(this.hash)) {

      e.preventDefault()



      let navbar = select('#navbar')

      if (navbar.classList.contains('navbar-mobile')) {

        navbar.classList.remove('navbar-mobile')

        let navbarToggle = select('.mobile-nav-toggle')

        navbarToggle.classList.toggle('bi-list')

        navbarToggle.classList.toggle('bi-x')

      }

      scrollto(this.hash)

    }

  }, true)



  /**

   * Scroll with ofset on page load with hash links in the url

   */

  window.addEventListener('load', () => {

    if (window.location.hash) {

      if (select(window.location.hash)) {

        scrollto(window.location.hash)

      }

    }

  });



  /**

   * Preloader

   */

  let preloader = select('#preloader');

  if (preloader) {

    window.addEventListener('load', () => {

      preloader.remove()

    });

  }



  /**

   * Menu isotope and filter

   */

  window.addEventListener('load', () => {

    let menuContainer = select('.menu-container');

    if (menuContainer) {

      let menuIsotope = new Isotope(menuContainer, {

        itemSelector: '.menu-item',

        layoutMode: 'fitRows'

      });



      let menuFilters = select('#menu-flters li', true);



      on('click', '#menu-flters li', function(e) {

        e.preventDefault();

        menuFilters.forEach(function(el) {

          el.classList.remove('filter-active');

        });

        this.classList.add('filter-active');



        menuIsotope.arrange({

          filter: this.getAttribute('data-filter')

        });

        menuIsotope.on('arrangeComplete', function() {

          AOS.refresh()

        });

      }, true);

    }



  });



  /**

   * Initiate glightbox 

   */

  const glightbox = GLightbox({

    selector: '.glightbox'

  });



  /**

   * Events slider

   */

  new Swiper('.events-slider', {

    speed: 600,

    loop: true,

    autoplay: {

      delay: 5000,

      disableOnInteraction: false

    },

    slidesPerView: 'auto',

    pagination: {

      el: '.swiper-pagination',

      type: 'bullets',

      clickable: true

    }

  });



  /**

   * Testimonials slider

   */

  new Swiper('.testimonials-slider', {

    speed: 600,

    loop: true,

    autoplay: {

      delay: 5000,

      disableOnInteraction: false

    },

    slidesPerView: 'auto',

    pagination: {

      el: '.swiper-pagination',

      type: 'bullets',

      clickable: true

    },

    breakpoints: {

      320: {

        slidesPerView: 1,

        spaceBetween: 20

      },



      1200: {

        slidesPerView: 3,

        spaceBetween: 20

      }

    }

  });



  /**

   * Initiate gallery lightbox 

   */

  const galleryLightbox = GLightbox({

    selector: '.gallery-lightbox'

  });



  /**

   * Animation on scroll

   */

  window.addEventListener('load', () => {

    AOS.init({

      duration: 1000,

      easing: 'ease-in-out',

      once: true,

      mirror: false

    })

  });

if($('.mytimepicker').length)
$('.mytimepicker').timepicker({
  timeFormat: 'HH:mm',
  stepMinute: 5
});

$('.datepicker').on('click', function(e) {
  e.preventDefault();
  $(this).attr("autocomplete", "off");  
});
$('.datepicker').attr("autocomplete", "off");  

$('body').on('change', '.mytimepicker', function() {
console.log($(this).val());
});

if($('.areadata').length) {
  $('.areadata').height($(window).height()-250);
}

$('.guestlist').click(function() {
  $('.formfloats input[type="text"], .formfloats input[type="password"], .formfloats input[type="email"]').each(function() {
    if($(this).val()=='') {
      $(this).siblings('.floating-label').removeClass('values');
    }
    else {
      $(this).siblings('.floating-label').addClass('values');
    }
  });
});

if($('.formfloats').length) {
  $('.formfloats input[type="text"], .formfloats input[type="password"], .formfloats input[type="email"]').each(function() {
    if($(this).val()=='') {
      $(this).siblings('.floating-label').removeClass('values');
    }
    else {
      $(this).siblings('.floating-label').addClass('values');
    }
  });
  $('body').on('focus click', '.formfloats input[type="text"], .formfloats input[type="password"], .formfloats input[type="email"]', function() {
    $(this).siblings('.floating-label').addClass('values');
  });
  $('body').on('focusout', '.formfloats input[type="text"], .formfloats input[type="password"], .formfloats input[type="email"]', function() {
    if($(this).val()=='') {
      $(this).siblings('.floating-label').removeClass('values');
    }
    else {
      $(this).siblings('.floating-label').addClass('values');
    }
  });
  $('body').on('change', '.formfloats select, .formfloats input', function() {
    console.log('change');
    $('.formfloats input[type="text"], .formfloats input[type="password"], .formfloats input[type="email"]').each(function() {
      if($(this).val()=='') {
        console.log('if');
        $(this).siblings('.floating-label').removeClass('values');
      }
      else {
        console.log('else');
        $(this).siblings('.floating-label').addClass('values');
      }
    });
  });
}

$('body').on('change', '.focus', function() {
  if($(this).val())
    $(this).removeClass('focus');
});

$('body').on('change', '.select2-single', function() {
  if($(this).val())
    $(this).siblings('.select2').children().children().removeClass('focus');
});

$('body').on('click', '.ctabs a', function(event) {
  event.preventDefault();
  $('.ccontent > div').hide();
  $($(this).attr('href')).show();
  $('.ctabs a').removeClass('active');
  $(this).addClass('active');
});

$('.openmodal').click(function(event) {
  event.preventDefault();
  $($(this).attr('data-target')).modal('show');
});
$('.dobpicker').datepicker({
  maxDate: '0'
});

$('.purchasehistory').click(function() {
  $(this).siblings('div.row').toggleClass('d-none');
});

if($('#country_code').length) {
  var selectList = $('#country_code option');
  
  selectList.sort(function(a,b){
      a = a.value;
      b = b.value;
  
      return a-b;
  });
  
  $('#country_code').html(selectList);
}

if($('#billing_country_code').length) {
  var selectList = $('#billing_country_code option');
  
  selectList.sort(function(a,b){
      a = a.value;
      b = b.value;
  
      return a-b;
  });
  
  $('#billing_country_code').html(selectList);
}

if($('#placard_country_code').length) {
  var selectList = $('#placard_country_code option');
  
  selectList.sort(function(a,b){
      a = a.value;
      b = b.value;
  
      return a-b;
  });
  
  $('#placard_country_code').html(selectList);
}


})()

function dobpicker() {
  console.log('datetimepicker');
  $('.dobpicker').datetimepicker({
    maxDate: '0'
  });
}

function convertFromStringToDate(responseDate) {
  let dateComponents = responseDate.split('T');
  let datePieces = dateComponents[0].split("-");
  let timePieces = dateComponents[1].split(":");
  return(new Date(datePieces[2], (datePieces[1] - 1), datePieces[0],
                          timePieces[0], timePieces[1], timePieces[2]))
}