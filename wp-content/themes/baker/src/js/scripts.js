$(function(){

  mobileNav = function() {
    var mobileBtn = $('.btn-mobile');
    var mainMenu = $('.main-nav .menu-main-menu-container');
    mobileBtn.on('click', function(e){
      e.preventDefault();
      mainMenu.toggleClass('show');
      $(this).toggleClass('active');
    });
  };

  pageHeight = function() {
    var sidebar = $('#sidebar');
    var pageContent = $('#page-content');
    var sidebarHeight = sidebar.height();
    var windowWidth = $(window).width();
    if (windowWidth > 700) {
      pageContent.css('min-height', sidebarHeight);
    } else if (windowWidth < 700) {
      pageContent.css('min-height', '');
    }
  };

  $(window).on('load', function() {
    $('.animate').addClass('fade-in');
  });

  $(window).resize(function() {
    pageHeight();
  });

  $(".body").fitVids();

  mobileNav();
  pageHeight();

});
