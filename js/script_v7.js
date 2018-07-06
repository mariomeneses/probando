$(document).ready(function(){
  $('a[href^="#"]').on('click',function (e) {
    e.preventDefault();

    var target = this.hash;
    $target = $(target);

    $('html, body').stop().animate({
      'scrollTop':  $target.offset().top
    }, 900, 'swing', function () {
      window.location.hash = target;
    });
  });
});


$(document).ready(function() {
  $("#hrService").hover(
    function() {
      $("#hrHover").slideDown(500);
    }, function() {
      $("#hrHover").slideUp(500);
    });

  $("#hrService").hover(function(){
    $("#hrHover").css("display: inline-flex !important");
  }, function(){
    $("#hrHover").css("display: none");
  });

  $("#contService").hover(
    function() {
      $("#contHover").slideDown(500);
    }, function() {
      $("#contHover").slideUp(500);
    });

  $("#contService").hover(function(){
    $("#contHover").css("display: inline-flex !important");
  }, function(){
    $("#contHover").css("display: none");
  });

  $("#startService").hover(
    function() {
      $("#startHover").slideDown(500);
    }, function() {
      $("#startHover").slideUp(500);
    });

  $("#startService").hover(function(){
    $("#startHover").css("display: inline-flex !important");
  }, function(){
    $("#startHover").css("display: none");
  });

  $("#enterpriseService").hover(
    function() {
      $("#enterpriseHover").slideDown(500);
    }, function() {
      $("#enterpriseHover").slideUp(500);
    });

  $("#enterpriseService").hover(function(){
    $("#enterpriseHover").css("display: inline-flex !important");
  }, function(){
    $("#enterpriseHover").css("display: none");
  });

});