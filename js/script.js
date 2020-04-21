$(document).ready(function() {

  var scroll_start = 0;
  var startchange = $('#mainNav');
  var offset = startchange.offset();
  if (startchange.length){
   $(document).scroll(function() { 
    scroll_start = $(this).scrollTop();
    if(scroll_start > offset.top) {
      $(".navbar").css('background-color', '#AE8964');
      $('.menu .nav-link').attr('style', 'color:#7E5835 !important');
      $('.menu .navbar-brand').attr('style', 'color:#7E5835 !important');
      $('.menu .nav-link').mouseenter(function(){
        $(this).attr('style', 'color:white !important');
      });
      $('.menu .nav-link').mouseout(function(){
        $(this).attr('style', 'color:#7E5835 !important');
      });
      $('.menu .navbar-brand').mouseenter(function(){
        $(this).attr('style', 'color:white !important');
      });
      $('.menu .navbar-brand').mouseout(function(){
        $(this).attr('style', 'color:#7E5835 !important');
      });
    } else {
      $('.navbar').css('background-color', 'transparent');
      $('.menu .nav-link').attr('style', 'color: white !important');
      $('.menu .navbar-brand').attr('style', 'color: white !important');
      $('.menu .nav-link').mouseenter(function(){
        $(this).attr('style', 'color:#DEB887 !important');
      });
      $('.menu .nav-link').mouseout(function(){
        $(this).attr('style', 'color:white !important');
      });
      $('.menu .navbar-brand').mouseenter(function(){
        $(this).attr('style', 'color:#DEB887 !important');
      });
      $('.menu .navbar-brand').mouseout(function(){
        $(this).attr('style', 'color:white !important');
      });
    }
  });
}

/*$('.no-click').on('click',function(e){
  e.preventDefault();
});*/


var win = $(window);
var winWidth = win.width();
var winHeight = win.height();
// Lazy
var $lazy = $('.lazy');
if( $lazy.length ){

  var showOnScroll = function(){
    $lazy.each(function(index, value){
      var $value = $(value);
      if( win.scrollTop() + winHeight > $value.offset().top ){
        $value.removeClass('lazy');
        $lazy = $('.lazy');
        // charger aussi les img, qui auront un attribute data-src au lieux de src
        $value.find('[data-src]').each(function(i, v){
          var $v = $(v);
          $v.attr('src', $v.attr('data-src'));
        });

      }else{
        return false;
      }
    });

  }
  if(win.scrollTop() > 0){
    showOnScroll();
  }

  win.on('scroll', function(){
    showOnScroll();
  });

}

});


