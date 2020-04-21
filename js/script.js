$(document).ready(function() {

  var win = $(window);
  var winWidth = win.width();
  var winHeight = win.height();

  var $lazy = $('.lazy');
  //var scroll_start = 0;
  var startchange = $('#mainNav');
  //var offset = startchange.offset();
  if (startchange.length)
  {
    win.on('scroll', function() 
    { 
      changeColorMenu();
    });

    changeColorMenu();
  }

  $('.menu a').on('click', function()
  {
    var id = $(this).attr('href');
    var element = $('body').find(id);
    scrollTo(element);
  });

  if( $lazy.length )
  {

    var showOnScroll = function()
    {
      $lazy.each(function(index, value)
      {
        var $value = $(value);
        if( win.scrollTop() + winHeight > $value.offset().top )
        {
          $value.removeClass('lazy');
          $lazy = $('.lazy');
          // charger aussi les img, qui auront un attribute data-src au lieux de src
          $value.find('[data-src]').each(function(i, v){
            var $v = $(v);
            $v.attr('src', $v.attr('data-src'));
          });

        }
        else
        {
          return false;
        }
      });

    }
    if(win.scrollTop() > 0)
    {
      showOnScroll();
    }

    win.on('scroll', function()
    {
      showOnScroll();
    });

  }

});

function changeColorMenu()
{
  var scroll_start = $(document).scrollTop();
  //if(scroll_start > offset.top) {
  if(scroll_start > 0) {
    $(".navbar").css('background-color', '#AE8964');
    $('.menu div a').attr('style', 'color:#7E5835');
    $('.menu div a').mouseenter(function(){
      $(this).attr('style', 'color:white');
    });
    $('.menu div a').mouseout(function(){
      $(this).attr('style', 'color:#7E5835');
    });

  } else {
    $('.navbar').css('background-color', 'transparent');
    $('.menu div a').attr('style', 'color: white');
    $('.menu div a').mouseenter(function(){
      $(this).attr('style', 'color:#DEB887');
    });
    $('.menu div a').mouseout(function(){
      $(this).attr('style', 'color:white');
    });
  }
}

function scrollTo( target ) {
    if( target.length ) {
        $("html, body").stop().animate( { scrollTop: target.offset().top }, 1500);
    }
}


