import $ from 'jquery';
window.jQuery = $;
require('bootstrap');
var _ = require('lodash');
import slick from 'slick-carousel';
import AOS from 'aos';

$(document).ready(function(){
  // Full menu.
  function openFullMenu(openFull) { $('#fullmenu').toggleClass('open', openFull); $('#navigation-full ul:first').toggleClass('open', openFull); $('#header').toggleClass('open', openFull); }
  var openFull = false;
  $('#fullmenu').on('click', function() { openFull = !openFull; openFullMenu(openFull); });

  // Burger menu.
  function openMobileMenu(openBurger) { $('#burger').toggleClass('open', openBurger); $('#navigation-mobile ul:first').toggleClass('open', openBurger); $('#header').toggleClass('open', openBurger); }
  var openBurger = false;
  $('#burger').on('click', function() { openBurger = !openBurger; openMobileMenu(openBurger); });

  // Active class.
  // $('#header .nav > li > a[href]').each(function() { if (this.href == window.location.href) { $(this).addClass('active'); } });

  // Scroll check.
  function scrollCheck() {
    var header = $('#header').outerHeight();
    header = header / 2;
    if ($(document).scrollTop() > header) {
      $('#header').addClass('scroll');
    } else {
      $('#header').removeClass('scroll');
    }
  }
  $(document).on('ready', function(){ scrollCheck(); });
  $(window).on('scroll', function(){ scrollCheck(); });


  // Submenu.

  $(".submenu-toggle").on("click", function () {
    var toggle = $(this);
    toggle.toggleClass("open");
    $(this).prev(".parent-item").toggleClass("open");
    var submenu = $(this).next(".submenu");
    submenu.toggleClass("open");
  });

  // Mortgage Calculator.
  function formatNumber(num) { return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') }

  if ($('#calculator').length) {
    var price_slider = document.getElementById('price');
    var price_output = document.getElementById('price-value');

    var deposit_slider = document.getElementById('deposit');
    var deposit_output = document.getElementById('deposit-value');
    var deposit_percent = document.getElementById('deposit-percent');

    var terms_slider = document.getElementById('terms');
    var terms_output = document.getElementById('terms-value');

    // Interest rate 

    // var fixed = document.getElementById('fixed-rate');
    // var variable = document.getElementById('variable-rate');
    // var interest_fixed = fixed.value;
    // var interest_variable = variable.value;

    price_output.innerHTML = "Amount";
    // price_output.innerHTML = price_slider.value;
    price_output.innerHTML = formatNumber(price_output.innerHTML);
    price_slider.oninput = function() {
      price_output.innerHTML = this.value;
      price_output.innerHTML = formatNumber(price_output.innerHTML);
      price_slider.setAttribute('value', price_slider.value);

      deposit_slider.setAttribute('value', 0);
      deposit_slider.setAttribute('min', 0);
      deposit_slider.setAttribute('max', 0);
      deposit_slider.setAttribute('max', price_slider.value);
      deposit_output.innerHTML = 0;
      deposit_percent.innerHTML = '(0%)';
    }

    deposit_output.innerHTML = "Amount";
    // deposit_output.innerHTML = deposit_slider.value;
    deposit_output.innerHTML = formatNumber(deposit_output.innerHTML);
    deposit_slider.oninput = function() {
      deposit_output.innerHTML = this.value;
      deposit_output.innerHTML = formatNumber(deposit_output.innerHTML);
      deposit_slider.setAttribute('value', deposit_slider.value);

      deposit_percent.innerHTML = '(' + ((deposit_slider.value/price_slider.value) * 100).toFixed(0) + '%)';
    }

    terms_output.innerHTML = terms_slider.value;
    terms_output.innerHTML = formatNumber(terms_output.innerHTML);
    terms_slider.oninput = function() {
      terms_output.innerHTML = this.value;
      terms_output.innerHTML = formatNumber(terms_output.innerHTML);
      terms_slider.setAttribute('value', terms_slider.value);
    }

    // Reset the output to the users selected amount 
    // do maths
    // put output of these into the right side sections (maybe more maths)
  }

  // Hero carousel.
  $('.carousel-images').slick({
    arrows: false,
    fade: true,
  });
  $('.carousel-hero').slick({
    asNavFor: '.carousel-images',
    dots: true,
    fade: true,
    infinite: false,
    nextArrow: '<button class="slick-arrow slick-next"><i class="far fa-arrow-right"></i></button>',
    prevArrow: '<button class="slick-arrow slick-prev"><i class="far fa-arrow-left"></i></button>',
  });

  function propertySlick() {
    $('.carousel-featured').slick({
      arrows: true,
      fade: true,
      infinite: false,
      mobileFirst: true,
      nextArrow: '<button class="slick-arrow slick-next"><i class="far fa-arrow-right"></i></button>',
      prevArrow: '<button class="slick-arrow slick-prev"><i class="far fa-arrow-left"></i></button>',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: true,
            fade: false,
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 992,
          settings: {
            arrows: true,
            fade: false,
            slidesToShow: 3,
          }
        },
      ],
    });
    $('.carousel-gallery').slick({
      accessibility: false,
      dots: true,
      draggable: false,
      infinite: false,
      nextArrow: '<button class="slick-arrow slick-next"><i class="far fa-arrow-right"></i></button>',
      prevArrow: '<button class="slick-arrow slick-prev"><i class="far fa-arrow-left"></i></button>',
      swipe: false,
      swipeToSlide: false,
      touchMove: false,
    });
  }
  propertySlick();
  jQuery('button[data-bs-toggle="pill"]').on('shown.bs.tab', function(e) {
    $('.carousel-featured').slick('unslick');
    $('.carousel-gallery').slick('unslick');
    propertySlick();
  });

  // Items carousel.
  $('.carousel-items').slick({
    infinite: false,
    mobileFirst: true,
    nextArrow: '<button class="slick-arrow slick-next"><i class="far fa-arrow-right"></i></button>',
    prevArrow: '<button class="slick-arrow slick-prev"><i class="far fa-arrow-left"></i></button>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          dots: true,
          nextArrow: '<button class="slick-arrow slick-next"><i class="fas fa-arrow-right"></i></button>',
          prevArrow: '<button class="slick-arrow slick-prev"><i class="fas fa-arrow-left"></i></button>',
        },
      },
    ],
  });

  // News carousel.
  $('.carousel-news').slick({
    infinite: false,
    mobileFirst: true,
    nextArrow: '<button class="slick-arrow slick-next"><i class="far fa-arrow-right"></i></button>',
    prevArrow: '<button class="slick-arrow slick-prev"><i class="far fa-arrow-left"></i></button>',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
        }
      },
    ],
  });

  // Team carousel.
  $('.carousel-team').slick({
    infinite: false,
    mobileFirst: true,
    nextArrow: '<button class="slick-arrow slick-next"><i class="far fa-arrow-right"></i></button>',
    prevArrow: '<button class="slick-arrow slick-prev"><i class="far fa-arrow-left"></i></button>',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        }
      },
    ],
  });

  // Agents carousel.
  $('.carousel-agents').slick({
    infinite: false,
    mobileFirst: true,
    nextArrow: '<button class="slick-arrow slick-next"><i class="far fa-arrow-right"></i></button>',
    prevArrow: '<button class="slick-arrow slick-prev"><i class="far fa-arrow-left"></i></button>',
  });

  // Base carousel.
  $('.carousel-base').slick({
    infinite: false,
    mobileFirst: true,
    nextArrow: '<button class="slick-arrow slick-next"><i class="far fa-arrow-right"></i></button>',
    prevArrow: '<button class="slick-arrow slick-prev"><i class="far fa-arrow-left"></i></button>',
  });

  // Sub carousel.
  $('.carousel-sub').slick({
    infinite: false,
    mobileFirst: true,
    nextArrow: '<button class="slick-arrow slick-next"><i class="far fa-arrow-right"></i></button>',
    prevArrow: '<button class="slick-arrow slick-prev"><i class="far fa-arrow-left"></i></button>',
    responsive: [
      {
        breakpoint: 565,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 6,
        }
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 8,
        }
      },
    ],
    slidesToShow: 2,
  });


  // Property gallery.
  if ($('.property-main').length) {
    $('.property-sub').on('click', function(){ 
      var item = $(this);
      var image = item.attr('data-image');
      $('.property-sub').removeClass('active');
      item.addClass('active');
      $('.property-main').css('background-image', 'url(' + image + ')');
    });
  }

  // Re-init AOS.
  $('#nav-property button').on('click', function() {
    console.log('ttt');
    setTimeout(function(){ AOS.init(); }, 500);
    console.log('rrr');
  });

  // AOS.
  AOS.init();
  setTimeout(function(){ AOS.init(); }, 500);
});


// Google Maps.
(function($) {
  function new_map($el) {
    var $markers = $el.find('.marker');
    var args = {
      center: new google.maps.LatLng(0, 0),
      disableDefaultUI: true,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}],
      zoom: 16,
    };
    var map = new google.maps.Map($el[0], args);
    map.markers = [];
    $markers.each(function(){
      add_marker($(this), map);
    });
    center_map(map);
    return map;
  }

  function new_map_alt($el) {
    var $markers = $el.find('.marker');
    var args = {
      center: new google.maps.LatLng(0, 0),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}],
      zoom: 16,
    };
    var map = new google.maps.Map($el[0], args);
    map.markers = [];
    $markers.each(function(){
      add_marker($(this), map);
    });
    center_map(map);
    return map;
  }

  function add_marker($marker, map) {
    var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));
    var icon = {url: ''+$marker.attr('data-icon')+'', scaledSize: new google.maps.Size(48, 48)};
    var marker = new google.maps.Marker({
      icon: icon,
      map: map,
      position: latlng,
    });
    map.markers.push(marker);
    if($marker.html()){
      var infowindow = new google.maps.InfoWindow({
        content: $marker.html()
      });
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
      });
    }
  }

  function center_map(map) {
    var bounds = new google.maps.LatLngBounds();
    $.each( map.markers, function(i, marker){
      var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
      bounds.extend(latlng);
    });
    if( map.markers.length == 1 ) {
      map.setCenter(bounds.getCenter());
      map.setZoom(16);
    } else {
      map.fitBounds(bounds);
    }
  }

  var map = null;
  $(document).ready(function(){
    $('.map').each(function(){
      map = new_map($(this));
    });

    $('.map-alt').each(function(){
      map = new_map_alt($(this));
    });
  });
})($);