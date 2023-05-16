

$(document).ready(function() {


  var targetSrc = $('img.logo').attr('src'); // 画像URLを取得
  var replaceURLB = targetSrc.replace('logo_white.png','logo.png'); 
  var replaceURLW = targetSrc.replace('logo.png','logo_white.png'); 

  

  $('#fullpage').fullpage({
      anchors:['section1', 'section2', 'section3', 'section4', 'section5', 'section6', 'section7', 'section8', 'section9', 'section10'],
      menu: '#slide_menu',
      navigation: true,
      navigationPosition : 'left',
      navigationTooltips:['TOP', 'ABOUT', 'SERVICE', 'RECRUIT', 'NEWS', 'CONTACT'],
      showActiveTooltip: true,
      responsiveWidth: 1024,

      afterLoad: function (anchorLink, index) {  
              
          if(location.hash=="#section1"){
           $('#fp-nav').css('display','none');
       //    $('img.logo').attr({src:replaceURLW});
          }

    
      }, 


      onLeave: function(index, nextIndex, direction){

        if(index == 1 && direction =='down'){
        //セクション１を下にスクロールしたとき実行されます
         
          $('#fp-nav').css('display','block');

          // サイドのナビを一旦黒色へ
              $('#fp-nav ul li a span').css('background-color', '#231815');
              $('#fp-nav ul li div').css('color', '#231815');
              $('.sub-menu a').css('color', '#ffffff');
      //        $('img.logo').attr({src:replaceURLB});

              $('.sub-menu a').css('color', '#ffffff');
              
              
              // サイドのナビを一旦見えるようにする
              $('#fp-nav').show();
                       
        }

       

        else if(index == 2 && direction =='up'){
           $('#fp-nav').css('display','none');
         //  $('#site-navigation a').css('color', '#ffffff');
          //  $('#masthead').css('background','unset');
      //    $('img.logo').attr({src:replaceURLW});
         
        }

        else if(index == 6 && direction =='up'){
           $('#fp-nav').css('display','block');
           $('.quiz').css('display','block');
         //  $('#site-navigation a').css('color', '#ffffff');
          //  $('#masthead').css('background','unset');
          
         
        }

        else if(index == 5 && direction =='down'){
           $('#fp-nav').css('display','none');
           $('.quiz').css('display','none');
         //  $('#site-navigation a').css('color', '#ffffff');
          //  $('#masthead').css('background','unset');
        //  $('img.logo').attr({src:replaceURLW});
         
        }


      },

    

  });
  
});


