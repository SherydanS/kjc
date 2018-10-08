(function ($, Drupal) {
  Drupal.behaviors.homeslider = {
    attach: function (context, settings) {
        function injector(t, splitter, klass, after) {
          var text = t.text()
          , a = text.split(splitter)
          , inject = '';
          if (a.length) {
            $(a).each(function(i, item) {
              inject += '<div class="'+klass+(i+1)+'" aria-hidden="true">'+item+'</div>'+after;
            });
            t.attr('aria-label',text)
            .empty()
            .append(inject)

          }
        }
        var methods = {
          init : function() {
            return this.each(function() {
              injector($(this), '', 'char', '');
            });
          },
          words : function() {
            return this.each(function() {
              injector($(this), ' ', 'word', ' ');
            });
          },
          lines : function() {
            return this.each(function() {
              var r = "eefec303079ad17405c889e092e105b0";
              injector($(this).children("br").replaceWith(r).end(), r, 'line', '');
            });

          }
        };
        $.fn.lettering = function( method ) {
          if ( method && methods[method] ) {
            return methods[ method ].apply( this, [].slice.call( arguments, 1 ));
          } else if ( method === 'letters' || ! method ) {
            return methods.init.apply( this, [].slice.call( arguments, 0 ) ); // always pass an array
          }
          $.error( 'Method ' +  method + ' does not exist on jQuery.lettering' );
          return this;
        };
        $('#edit-party-size option:first').text('Party Size');
        $('#edit-hall-reservation option:first').text('Hall Reservation');
        jQuery(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll >= 100) {
          $("#header").addClass("sticky");
        } else {
          $("#header").removeClass("sticky");
        }

        });

        jQuery(document).ready(function( $ ) {
         new WOW().init();  
         $('.loop').owlCarousel({
          loop: true,
          margin: 10,
          responsive: {
            0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:1
              }    
          }
        });
        $(".special-menu-carousel").owlCarousel({
          autoplay: true,
          dots: false,
          loop: true,
          nav: true,
          responsive: { 0: { items: 1 }, 768: { items: 2 }, 900: { items: 4 }
          }
        });
        $( ".owl-prev").html('<i class="fa fa-angle-left"></i>');
         $( ".owl-next").html('<i class="fa fa-angle-right"></i>');
         $('a.page-scroll').click(function() {
         if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top-68},900);
                    return false;
                }
            }
            
        });
});
        jQuery(document).ready(function( $ ) {
        // Initiate superfish on nav menu
        $('.navbar-nav').superfish({
          animation: {
            opacity: 'show'
          },
          speed: 400
        });

        $('.portfolio-popup').magnificPopup({
          type: 'image',
          removalDelay: 300,
          mainClass: 'mfp-fade',
          gallery: {
            enabled: true
          },
          zoom: {
            enabled: false,
            duration: 300,
            easing: 'ease-in-out',
            opener: function(openerElement) {
              return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
          }
        });
        });


        jQuery(document).ready(function() {
            $('#datepicker').datepicker({
                  uiLibrary: 'bootstrap4'
              });


        });
        $(window).on('load', function(){ 
        // $(window).load(function(){
          var $container = $('.portfolioContainer');
          if ($container.length) {
          $container.isotope({
              filter: '*',
              animationOptions: {
                  duration: 750,
                  easing: 'linear',
                  queue: false
              }
          });
        }
        $(".special-menu-title h2").lettering('words').children("div").lettering();
         $("#our-clients h2").lettering('words').children("div").lettering();
          $('.portfolioFilter a').click(function(){
              $('.portfolioFilter .current').removeClass('current');
              $(this).addClass('current');

              var selector = $(this).attr('data-filter');
              $container.isotope({
                  filter: selector,
                  animationOptions: {
                      duration: 750,
                      easing: 'linear',
                      queue: false
                  }
               });
               return false;
          }); 
        });
   }


  };
})(jQuery, Drupal);




