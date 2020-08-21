//test reloading 2
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

    //$('.full-slider').slick({
        //lazyLoad: 'ondemand',
        //infinite: false,
        //slidesToShow: 1,
        //slidesToScroll: 1,
        //dots: true,
        //arrows: false,
    //});
    $("input[type=radio]").click(function(){
        $(".product-image").slick('setPosition');
    });
    $('._2p3a').css('width','94%');
});

var filterDaysSelected = [];

$(document).ready(function() {
    $(".tabs").scrollCenter(".active", 300);

    $('.day-selection').click(function(e){
      let day = $(e.target).data('day');
      
      $(this).toggleClass('active');
      if ($(this).hasClass('active')){
        $(this).find('.plus-sign').removeClass('plus-sign').addClass('check');
        if(!filterDaysSelected.includes(day))
          filterDaysSelected.push(day);
        filterProducts(filterDaysSelected);
      }else{
        $(this).find('.check').removeClass('check').addClass('plus-sign');
        if(filterDaysSelected.indexOf(day)>=0) {
          filterDaysSelected.splice(filterDaysSelected.indexOf(day), 1);
          filterProducts(filterDaysSelected);
        }
      }
    });
    function filterProducts(selected) {
      
        if(selected.length) {
          // if(selected.length ==1) {
          //   if(selected.includes('sunday')) {
          //     $("#NoBowls").removeClass('hide-product');
          //   }
          // } else {
          //   $("#NoBowls").addClass('hide-product');
          // }
          globalProducts =[]
          document.querySelectorAll('.product-list')
          .forEach((domContainer, index) => {
             let days = domContainer.dataset.days_available;
             days = days.split(',');
             let hideProduct = false;
             let productToShow=[];
             for (let index = 0; index < selected.length; index++) {
               const element = selected[index];
               if(days.includes(element.toLowerCase())) {
                productToShow.push(true);
                globalProducts.push(true)
               }
             }
             
             if(productToShow.length) {
               if (domContainer.id !="product-dummy-product" && domContainer.id !="NoBowls") {
                 domContainer.classList.remove('hide-product');
                }
             } else {
               console.log("here", selected);
               domContainer.classList.add('hide-product');
             }
            
          });
         if(!globalProducts.length) {
          $("#NoBowls").removeClass('hide-product');
         } else {
          $("#NoBowls").addClass('hide-product');
         }
          
        } else {
          document.querySelectorAll('.product-list')
          .forEach((domContainer, index) => {
            if (domContainer.id !="product-dummy-product" && domContainer.id !="NoBowls") {
              domContainer.classList.remove('hide-product');
            }						
          });
        }
    }

  });





// });
$(window).load(function() {
  $('img.banner_image').attr("src",$('img.banner_image').attr("data-src"));
  $('img.banner_image').removeAttr("data-src");
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
    var top = $('.select-box').offset().top;
    $(window).scroll(function() {
      var height = $('#panels').outerHeight() + top;
      if ( $(this).scrollTop() >= top && $(this).scrollTop() <= height ) {
        $(".select-box").css({
          'position': 'sticky',
          'top': '0',
          'left': '0',
          'right': '0',
          'z-index': '3',
        });
      }
    });
});
$(function() {    
  $('#switch-box').on('click', function(){    
    $('.product-image').toggleClass('d-none').slick('setPosition'); 
    $('.slick-dots').toggleClass('d-none'); 
  }); 
});

// $(window).load(function(){
//   $(".select-days").addClass('d-none');
//   $(".js-select2").removeClass('d-none');
//   $(".js-select2").select2({
//     closeOnSelect : false,
//     placeholder : "Select days of the week",
//     allowClear: false,
//     tags: false,
//     scrollAfterSelect: true
//   });
//   $(".chosen-select").removeClass('select2-results__option--highlighted');
//   $('.select2-container').on('click', function(event){
//     if ($(this).hasClass('select2-container--open')){
//       $('.select2-selection').addClass('select2-selection__render'); 
//     }else{
//       $('.select2-selection').removeClass('select2-selection__render'); 
//     }
//   });
// });
