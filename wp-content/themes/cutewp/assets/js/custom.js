jQuery(document).ready(function($) {

    $(".cutewp-nav-secondary .cutewp-secondary-nav-menu").addClass("cutewp-secondary-responsive-menu").before('<div class="cutewp-secondary-responsive-menu-icon"></div>');

    $(".cutewp-secondary-responsive-menu-icon").click(function(){
        $(this).next(".cutewp-nav-secondary .cutewp-secondary-nav-menu").slideToggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 1112) {
            $(".cutewp-nav-secondary .cutewp-secondary-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".cutewp-secondary-responsive-menu > li").removeClass("cutewp-secondary-menu-open");
        }
    });

    $(".cutewp-secondary-responsive-menu > li").click(function(event){
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").slideToggle(function() {
            $(this).parent().toggleClass("cutewp-secondary-menu-open");
        });
        $(this).find(".children:first").slideToggle(function() {
            $(this).parent().toggleClass("cutewp-secondary-menu-open");
        });
    });

    $("div.cutewp-secondary-responsive-menu > ul > li").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").slideToggle(function() {
            $(this).parent().toggleClass("cutewp-secondary-menu-open");
        });
    });

    if(cutewp_ajax_object.sticky_menu){
    // grab the initial top offset of the navigation 
    var cutewpstickyNavTop = $('.cutewp-primary-menu-container').offset().top;
    
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var cutewpstickyNav = function(){
        var cutewpscrollTop = $(window).scrollTop(); // our current vertical position from the top
             
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative
        if(cutewp_ajax_object.sticky_menu_mobile){
            if (cutewpscrollTop > cutewpstickyNavTop) {
                $('.cutewp-primary-menu-container').addClass('cutewp-fixed');
            } else {
                $('.cutewp-primary-menu-container').removeClass('cutewp-fixed'); 
            }
        } else {
            
                if(window.innerWidth > 1112) {
                    if (cutewpscrollTop > cutewpstickyNavTop) {
                        $('.cutewp-primary-menu-container').addClass('cutewp-fixed');
                    } else {
                        $('.cutewp-primary-menu-container').removeClass('cutewp-fixed'); 
                    }
                }
            
        }
    };

    cutewpstickyNav();
    // and run it again every time you scroll
    $(window).scroll(function() {
        cutewpstickyNav();
    });
    }

    $(".cutewp-nav-primary .cutewp-nav-primary-menu").addClass("cutewp-primary-responsive-menu").before('<div class="cutewp-primary-responsive-menu-icon"></div>');

    $(".cutewp-primary-responsive-menu-icon").click(function(){
        $(this).next(".cutewp-nav-primary .cutewp-nav-primary-menu").slideToggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 1112) {
            $(".cutewp-nav-primary .cutewp-nav-primary-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".cutewp-primary-responsive-menu > li").removeClass("cutewp-primary-menu-open");
        }
    });

    $(".cutewp-primary-responsive-menu > li").click(function(event){
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").slideToggle(function() {
            $(this).parent().toggleClass("cutewp-primary-menu-open");
        });
        $(this).find(".children:first").slideToggle(function() {
            $(this).parent().toggleClass("cutewp-primary-menu-open");
        });
    });

    $("div.cutewp-primary-responsive-menu > ul > li").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").slideToggle(function() {
            $(this).parent().toggleClass("cutewp-primary-menu-open");
        });
    });

    $(".cutewp-social-icon-search").on('click', function (e) {
        e.preventDefault();
        document.getElementById("cutewp-search-overlay-wrap").style.display = "block";
    });

    $(".cutewp-search-closebtn").on('click', function (e) {
        e.preventDefault();
        document.getElementById("cutewp-search-overlay-wrap").style.display = "none";
    });

    $(".post").fitVids();

    $( 'body' ).prepend( '<div class="cutewp-scroll-top"></div>');
    var scrollButtonEl = $( '.cutewp-scroll-top' );
    scrollButtonEl.hide();

    $( window ).scroll( function () {
        if ( $( window ).scrollTop() < 20 ) {
            $( '.cutewp-scroll-top' ).fadeOut();
        } else {
            $( '.cutewp-scroll-top' ).fadeIn();
        }
    } );

    scrollButtonEl.click( function () {
        $( "html, body" ).animate( { scrollTop: 0 }, 300 );
        return false;
    } );

    if(cutewp_ajax_object.sticky_sidebar){
    $('.cutewp-main-wrapper, .cutewp-sidebar-one-wrapper').theiaStickySidebar({
        containerSelector: ".cutewp-content-wrapper",
        additionalMarginTop: 0,
        additionalMarginBottom: 0,
        minWidth: 890,
    });
    }

    // init Masonry
    var $cutewp_grid = $('.cutewp-posts').masonry({
      itemSelector: '.cutewp-grid-post',
      columnWidth: cutewp_ajax_object.columnwidth,
      gutter: cutewp_ajax_object.gutter,
      percentPosition: true
    });
    // layout Masonry after each image loads
    $cutewp_grid.imagesLoaded().progress( function() {
      $cutewp_grid.masonry('layout');
    });


    $(".cutewp-grid-posts").each(function(){
    var $thisgrid = $(this);

    // init Masonry
    var $cutewp_grid_widget = $thisgrid.masonry({
      itemSelector: '.cutewp-grid-post',
      columnWidth: $thisgrid.find(".cutewp-col-sizer")[0],
      gutter: $thisgrid.find(".cutewp-col-gutter")[0],
      percentPosition: true
    });
    // layout Masonry after each image loads
    $cutewp_grid_widget.imagesLoaded().progress( function() {
      $cutewp_grid_widget.masonry('layout');
    });

    });

});