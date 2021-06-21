import $ from 'jquery';
window.jQuery = $;
require('bootstrap');
var _ = require('lodash');
import slick from 'slick-carousel';
import AOS from 'aos';

$(document).ready(function(){
  // Full menu.
  function openFullMenu(openFull) { $('#fullmenu').toggleClass('open', openFull); $('#navigation-full ul').toggleClass('open', openFull); $('#header').toggleClass('open', openFull); }
  var openFull = false;
  $('#fullmenu').on('click', function() { openFull = !openFull; openFullMenu(openFull); });

  // Burger menu.
  function openMobileMenu(openBurger) { $('#burger').toggleClass('open', openBurger); $('#navigation-mobile ul').toggleClass('open', openBurger); $('#header').toggleClass('open', openBurger); }
  var openBurger = false;
  $('#burger').on('click', function() { openBurger = !openBurger; openMobileMenu(openBurger); });

  // Active class.
  // $('#header .nav > li > a[href]').each(function() { if (this.href == window.location.href) { $(this).addClass('active'); } });

  // Scroll check.
  function scrollCheck() {
    var header = $('#header').outerHeight();
    if ($(document).scrollTop() > header) {
      $('#header').addClass('scroll');
    } else {
      $('#header').removeClass('scroll');
    }
  }
  $(document).on('ready', function(){ scrollCheck(); });
  $(window).on('scroll', function(){ scrollCheck(); });

  // Hero slider.
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
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: [{"featureType":"administrative.land_parcel","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","stylers":[{"visibility":"off"}]}],
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
  });
})($);