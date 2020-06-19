$(document).ready(function(){       
    var $carousel = $('.product-image');

    var settings = {
      dots: true,
      arrows: false,
      slide: '.slick-slideshow__slide',
      slidesToShow: 1,
      centerMode: true,
      centerPadding: '60px',
    };

    $carousel.slick(settings);
    // $carousel.slick('slickGoTo', 1);
    // setSlideVisibility();

    // $carousel.on('afterChange', function() {
    //   setSlideVisibility();
    // });

    $('.full-slider').slick({
        lazyLoad: 'ondemand',
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
    });
    $("input[type=radio]").click(function(){
        $(".product-image").slick('setPosition');
    });
    $('._2p3a').css('width','94%');
});


$(document).ready(function() {
    $(".tabs").scrollCenter(".active", 300);
    $(".tabs .tab").on("click", function() {
        $(".tabs .tab").removeClass("active");
        $(this).addClass("active");
      // CALL scrollCenter PLUSGIN
    $(".tabs").scrollCenter(".active", 300);

    });
});


jQuery.fn.scrollCenter = function(elem, speed) {

  var active = jQuery(this).find(elem); 
  var activeWidth = active.width() / 2; 
  var pos = active.position().left + activeWidth;
  var elpos = jQuery(this).scrollLeft(); 
  var elW = jQuery(this).width(); 
  pos = pos + elpos - elW / 2;

  jQuery(this).animate({
    scrollLeft: pos
  }, speed == undefined ? 1000 : speed);
  return this;
};

jQuery.fn.scrollCenterORI = function(elem, speed) {
  jQuery(this).animate({
    scrollLeft: jQuery(this).scrollLeft() - jQuery(this).offset().left + jQuery(elem).offset().left
  }, speed == undefined ? 1000 : speed);
  return this;
};


const slider = document.querySelector(".tabs");
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener("mousedown", e => {
  isDown = true;
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});

slider.addEventListener("mouseleave", () => {
  isDown = false;
});

slider.addEventListener("mouseup", () => {
  isDown = false;
});

slider.addEventListener("mousemove", e => {
  if (!isDown) return;
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 3;
  slider.scrollLeft = scrollLeft - walk;
});

$(document).ready(function() {
    var top = $('.tabs-section').offset().top;
    $(window).scroll(function() {
      var height = $('#panels').outerHeight() + top;
      if ( $(this).scrollTop() >= top && $(this).scrollTop() <= height ) {
          $(".tabs-section").css({
            'position': 'sticky',
            'top': '0',
            'left': '0',
            'right': '0',
            'z-index': '99',
          });
      }
    });
});