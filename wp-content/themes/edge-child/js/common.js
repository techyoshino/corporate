


window.addEventListener('DOMContentLoaded', function(){
  var pagetop = $('#top_btn');
  // ボタン非表示
  pagetop.hide();
  // 100px スクロールしたらボタン表示
  $(window).scroll(function () {
     if ($(this).scrollTop() > 100) {
          pagetop.fadeIn();
     } else {
          pagetop.fadeOut();
     }
  });
  pagetop.click(function () {
     $('body, html').animate({ scrollTop: 0 }, 500);
     return false;
  });
});


//////////////////////////////////////
//ヘッダーの表示、非表示




jQuery(function() {

  var header2 = $('#masthead');

  if (window.matchMedia("(max-width: 990px)").matches) {
    
    header2.removeClass('othrt-cont-header');
  } else {
    header2.removeClass('hide2');
  };
});




jQuery(function(){
let startPos = 0;
let winScrollTop = 0;
const Header = $('#masthead');
$(window).on('scroll',function(){
  winScrollTop = $(this).scrollTop();
  if (winScrollTop >= startPos && winScrollTop > 100) { // ここにコードを追加
    $(Header).addClass('hide');
    
  } else {
    $(Header).removeClass('hide');
  }
  startPos = winScrollTop;
});
});


 




//////////////////////////////////////
//共有

//トップジャンプ
$(function () {
  $('.cp_arrows a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
　　 var speed = 500;
    $("html, body").animate({
      scrollTop: position
    }, speed, "swing");
    return false;
  });
});


//ナレッジグローバルメニュージャンプボタン

$(function () {
  $('.othrt-cont-header a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
　　 var speed = 500;
    $("html, body").animate({
      scrollTop: position
    }, speed, "swing");
    return false;
  });
});








//////////////////////////////////////
//ハンバーガーMENU




$(document).on("click", ".openbtn4", function(){
  $(this).toggleClass('active');
  $('.drawer-content').toggleClass('active-block');

});

$(document).on("click", ".navi-in ul li", function(){

  $('.drawer-content').toggleClass('active-block');
  $('.openbtn4').toggleClass('active');

});



//リクルートページのページ内リンク
$(function () {
  $('.recruit-1 a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
　　 var speed = 500;
    $("html, body").animate({
      scrollTop: position
    }, speed, "swing");
    return false;
  });
});


//サービスページのページ内リンク

$(function () {
  $('.service-1 a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
　　 var speed = 500;
    $("html, body").animate({
      scrollTop: position
    }, speed, "swing");
    return false;
  });
});




$(function () {
  $('.container-content---in_bottom_link a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
　　 var speed = 500;
    $("html, body").animate({
      scrollTop: position
    }, speed, "swing");
    return false;
  });
});




/*
///トップ以外のトップに戻るボタン

$(function () {
  $('.other-top a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
　　 var speed = 500;
    $("html, body").animate({
      scrollTop: position
    }, speed, "swing");
    return false;
  });
});
*/


$(function () {
  $('.btn_arrows a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
　　 var speed = 500;
    $("html, body").animate({
      scrollTop: position
    }, speed, "swing");
    return false;
  });
});






//////////////////////////////////////
//リクルートページ「recruit」


$(function recruit(){
  $('.section_col').hide();
  $('.item').on('click',function(){
    $('.section_col').not($('.'+$(this).attr('id'))).hide();
    $('.'+$(this).attr('id')).show();
  });
});


$(function recruit2(){
  $('.section_col').on('click',function(){
    $('.section_col').hide();
   // $('.item img').removeClass('active').attr('src', 'http://muckari.sakura.ne.jp/newsite//wp-content/themes/edge/images/recruit-14.png');
   $('.item img').removeClass('active');
   
  });
});










////////////////////////////////////
//splide


if(document.URL.match(/recruit/)){

document.addEventListener('DOMContentLoaded', function () {
  
  new Splide('#new-product', {
   
    destroy: true,

    breakpoints: {
      1025: {
        type : 'loop',
        perPage: 1,
        destroy: false,
        // arrows: false,
        

      },
      500: {
        
      
      },
    }
  }).mount();
});



document.addEventListener('DOMContentLoaded', function () {
  new Splide('#featured-product', {
    destroy: true,

    breakpoints: {
      1025: {
        type : 'loop',
        perPage: 1,
        destroy: false,
       // arrows: false,

      },
      500: {
        
      
      },
    }
  }).mount();
});

document.addEventListener('DOMContentLoaded', function () {
  new Splide('#occupation', {
    destroy: true,

    breakpoints: {
      1025: {
        type : 'loop',
        perPage: 1,
        destroy: false,
      //  arrows: false,

      },
      500: {
        
      
      },
    }
  }).mount();
});


}

//////////////////////////////////////
//knowlege-holder-scheduler

////////////////////////////////////
//splide



if(document.URL.match(/kh-scheduler/)){

document.addEventListener('DOMContentLoaded', function () {
  new Splide('#price', {
    destroy: true,

    breakpoints: {
      700: {
        type : 'loop',
        perPage: 1,
        destroy: false,
    //    arrows: false,

      },
      500: {
        
      
      },
    }
  }).mount();
});

}


//////////////////////////////////////
//knowlege-holder

////////////////////////////////////
//splide

if(document.URL.match(/knowledgeholder/)){

document.addEventListener('DOMContentLoaded', function () {
  new Splide('#knowledgeholder-3', {
    destroy: true,

    breakpoints: {
      700: {
        type : 'loop',
        perPage: 1,
        destroy: false,
     //   arrows: false,

      },
      500: {
        
      
      },
    }
  }).mount();
});



document.addEventListener('DOMContentLoaded', function () {
  new Splide('#knowledgeholder-4', {
    destroy: true,

    breakpoints: {
      700: {
        type : 'loop',
        perPage: 1,
        destroy: false,
     //   arrows: false,

      },
      500: {
        
      
      },
    }
  }).mount();
});


}



$(function() {
  
      $("tr:contains('受付終了')").css("background", "#cccccc");

  });