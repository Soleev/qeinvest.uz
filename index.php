<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
      QE Aziainvest Trading Company
    </title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <?php
    require_once("headscripts.php");
    ?>
    <meta name="yandex-verification" content="53733892a93d43e3" />
  </head>

  <body>
    <div class="yc">
      <a id="nav-toggle" class="nav_slide_button" href="#">
        <span>
        </span>
      </a>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="height: 0px; background: rgba(255, 255, 255, 0.901961);">
      <div class="panel-body">
        <div class="row bky1">
          <form action="products.php" method="post">
            <div class="col-md-2">
            </div>
            <div class="col-md-7">
              <input placeholder="搜索" class="form-control" id="un" name="keyword" type="text">
            </div>
            <div class="col-md-3">
              <button name="submit" type="submit" value="" class="btn btn-default">
                <span class="glyphicon glyphicon-search" style="font-size:22px;" aria-hidden="true">
                </span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <?php
    require_once("menu.php");
    ?>

    <div class="bannerx">
      <div class="banner clearfix" id="phone" style="height: 966px;">
        <div class="banner-prev">
          <img src="images/banner_prev.png">
        </div>
        <div class="banner-next">
          <img src="images/banner_next.png">
        </div>
        <ul class="banner-list">
          <li class="banlion" style="background: transparent url(images/2017010911383639.jpg) no-repeat scroll center top / cover; display: none;">
          </li>
          <li class="banlion" style="background: transparent url(images/2017010914500827.jpg) no-repeat scroll center top / cover; display: list-item;">
          </li>
          <li class="banlion" style="background: transparent url(images/2017010914503187.jpg) no-repeat scroll center top / cover; display: none;">
          </li>
        </ul>
      </div>
    </div>
    <script>
      $('.lang1 ul li').hover(function(){
        $(this).find('.ewm').stop().animate({
          right:'15',opacity:'1'}
                                           );
      }
                              ,function(){
                                $(this).find('.ewm').stop().animate({
                                  right:'-25',opacity:'0'}
                                                                   );
                              }
                             )
    </script>
    <script>
      $(window).load(function(){
        if($(window).width()>991){
          $('.banner').height($(window).height());
          $(window).resize(function(){
            $('.banner').height($(window).height());
          }
                          )
          $('.colse_btn').click(function(){
            $('.pro_list').removeClass('pro_list_hidden')
            $('.pro_list').stop(true).fadeIn(0);
            $('.pro_inner').stop(true).fadeOut(0);
          }
                               )
        }
        else{
          $('.banner').height($(window).width()*600/500);
          $(window).resize(function(){
            $('.banner').height($(window).width()*600/500);
          }
                          )
        }
        var lileft1=$('.heard-nav>ul>li').eq(4).offset().left+30;
        var liw1=$('.heard-nav>ul>li').eq(4).width();
        $('.lion').stop(true).animate({
          left:lileft1}
                                      ,0)
        $('.lion').css("width",liw1)
        $(window).resize(function(){
          $('.banner').height($(window).height());
        }
                        )
        $('.banner-list>li').eq(0).addClass('banlion')
        $('.cont1').find('.bf').stop(true).animate({
          top:"50%",opacity:"1"}
                                                   ,500)
        $('.cont1').find('.bf-te').stop(true).delay(300).animate({
          top:"50%",opacity:"1"}
                                                                 ,500)
        $('.cont1').find('.bf-te1').stop(true).delay(600).animate({
          bottom:"15%",opacity:"1"}
                                                                  ,500)
        $('.cont1').find('.readmore').stop(true).delay(900).animate({
          bottom:"10%",opacity:"1"}
                                                                    ,500)
      }
                    )
      $('.heard-nav>ul>li').hover(function(){
        var lileft=$(this).offset().left+30;
        var liw=$(this).width();
        //$('.lion').css("width",liw)
        $('.lion').stop(true).animate({
          "width":liw,left:lileft}
                                      ,600)
      }
                                 )
      //banner
      function nav1(){
        $('.banner-list>li').eq(0).removeClass('banlion');
        setTimeout('show1()',300)
        $('.banner-list>li').fadeOut(300);
        $('.banner-list>li').eq(0).fadeIn(1000);
        $('.banzi').find('.banner-zi').fadeOut(500);
        $('.banzi').find('.banner-zi').eq(0).fadeIn(1000);
      }
      function show1(){
        $('.banner-list>li').eq(0).addClass('banlion')
      }
      function nav2(){
        $('.banner-list>li').eq(1).removeClass('banlion');
        setTimeout('show2()',300)
        $('.banner-list>li').fadeOut(300);
        $('.banner-list>li').eq(1).fadeIn(1000);
        $('.banzi').find('.banner-zi').fadeOut(500);
        $('.banzi').find('.banner-zi').eq(1).fadeIn(1000);
      }
      function show2(){
        $('.banner-list>li').eq(1).addClass('banlion')
      }
      function nav3(){
        $('.banner-list>li').eq(2).removeClass('banlion');
        setTimeout('show3()',300)
        $('.banner-list>li').fadeOut(300);
        $('.banner-list>li').eq(2).fadeIn(1000);
        $('.banzi').find('.banner-zi').fadeOut(500);
        $('.banzi').find('.banner-zi').eq(2).fadeIn(1000);
      }
      function show3(){
        $('.banner-list>li').eq(2).addClass('banlion')
      }
      var play=0;
      var n=1;
      function xh(){
        if(n==1){
          nav2();
          n=2;
          return;
        }
        if(n==2){
          nav3();
          n=3;
          return;
        }
        if(n==3){
          nav1();
          n=1;
          return;
        }
      }
      function xh1(){
        if(n==1){
          nav2();
          n=2;
          return;
        }
        if(n==2){
          nav3();
          n=3;
          return;
        }
        if(n==3){
          nav1();
          n=1;
          return;
        }
      }
      $('.banner-next').click(function(){
        xh();
      }
                             )
      $('.banner-prev').click(function(){
        xh1()
      }
                             )
      function lunbo(){
        play=setInterval(function(){
          xh();
        }
                         ,8000)
      }
      lunbo();
      $('.banner').hover(function(){
        clearInterval(play);
      }
                         ,function(){
                           lunbo();
                         }
                        )
      if($(window).width()<767){
        var isdrag=false;
        var tx,x,ty,y;
        $(function(){
          document.getElementById("phone").addEventListener('touchend',function(){
            sdrag = false;
          }
                                                           );
          document.getElementById("phone").addEventListener('touchstart',touchStart);
          document.getElementById("phone").addEventListener('touchmove',touchMove);
        }
         );
        function touchMove(e){
          if (isdrag){
            e.preventDefault();
            var m = tx + e.touches[0].pageX - x;
            var m1 = ty + e.touches[0].pageY - y;
            if(Math.abs(m1)>1){
              var s=$('body').scrollTop();
              $('body').stop().animate({
                scrollTop: s-m1 }
                                       ,0);
            }
            if(Math.abs(m)>80){
              if(m<0){
                xh();
                isdrag = false;
                return;
              }
              else{
                xh1();
                isdrag = false;
                return;
              }
            }
          }
        }
        function touchStart(e){
          isdrag = true;
          tx = parseInt(document.getElementById("phone").style.left+0);
          ty = parseInt(document.getElementById("body").style.top+0);
          x = e.touches[0].pageX;
          y = e.touches[0].pageY;
          return false;
        }
      }
      $('.pro_list').hover(function(){
        //	$(this).find('img').addClass('fd');
        $(this).find('.pro_list_bg').stop(true).fadeOut(500)
      }
                           ,function(){
                             //		$(this).find('img').removeClass('fd');
                             $(this).find('.pro_list_bg').stop(true).fadeIn(500)
                           }
                          )
      $('.news_list_con').hover(function(){
        $(this).find('img').toggleClass('fd')
        $(this).find('.pro_list_bg').stop(true).fadeOut(500)
      }
                                ,function(){
                                  $(this).find('.pro_list_bg').stop(true).fadeIn(500)
                                  $(this).find('img').removeClass("fd");
                                }
                               )
      $('.lang1 ul li').hover(function(){
        $(this).find('.ewm').stop().animate({
          right:'-25',opacity:'1'}
                                           );
      }
                              ,function(){
                                $(this).find('.ewm').stop().animate({
                                  right:'-50',opacity:'0'}
                                                                   );
                              }
                             )
      $('.pro_inner>ul>li').width($('.pro_box').width()/8);
      $('.pro_inner>ul').width($('.pro_inner>ul>li').width()*$('.pro_inner>ul>li').size())
      $('.pro_inner>ul>li').hover(function(){
        $(this).find('.pro_inner_list>img').stop(true).animate({
          top:"-50px"}
                                                               ,500)
      }
                                  ,function(){
                                    $(this).find('.pro_inner_list>img').stop(true).animate({
                                      top:"0px"}
                                                                                           ,500)
                                  }
                                 )
      $(function(){
        var i=0;
        var speed=0;
        var timer1=null;
        var timer2=null;
        var left=0;
        var right=0;
        var liw=$('.pro_inner>ul>li').width();
        var linum=$('.pro_inner>ul>li').size();
        $('.pro_inner .left').hover(
          function(){
            i=0;
            timer1=setInterval(function(){
              if($('.pro_inner ul').offset().left>=0){
                i--;
                speed=i;
                left=$('.pro_inner ul').offset().left+speed;
                $('.pro_inner ul').css({
                  left:left}
                                      )
                if(i<=0){
                  clearInterval(timer1)
                }
              }
              else if(i>=30){
                i=30;
                speed=i;
                left=$('.pro_inner ul').offset().left+speed;
                $('.pro_inner ul').css({
                  left:left}
                                      )
              }
              else{
                i+=1;
                speed=i;
                left=$('.pro_inner ul').offset().left+speed;
                $('.pro_inner ul').css({
                  left:left}
                                      )
              }
            }
                               ,50)			
          }
          ,
          function(){
            clearInterval(timer1)
          }
        )
        $('.pro_inner .right').hover(
          function(){
            i=0;
            timer2=setInterval(function(){
              if($('.pro_inner ul').offset().left<=-liw*(linum-9)){
                i--;
                speed=i;
                left=$('.pro_inner ul').offset().left-speed;
                $('.pro_inner ul').css({
                  left:left}
                                      )
                if(i<=0){
                  clearInterval(timer2)
                }
              }
              else if(i>=30){
                i=30;
                speed=i;
                left=$('.pro_inner ul').offset().left-speed;
                $('.pro_inner ul').css({
                  left:left}
                                      )
              }
              else{
                i+=1;
                speed=i;
                left=$('.pro_inner ul').offset().left-speed;
                $('.pro_inner ul').css({
                  left:left}
                                      )
              }
            }
                               ,50)		
          }
          ,
          function(){
            clearInterval(timer2)
          }
        )
      }
       )
    </script>
    <div class="abbj">
      <div class="abtit">
        <img src="images/abtit.png" border="0">
      </div>
      <div class="abnei">
        <p style="margin: 0px; text-align: center; text-indent: 24pt;">
          <span style="font-size: medium;">
            <span style="font-family: Arial;">
              <span style="margin: 0px;" lang="EN-US">
                QE Aziainvest trading company is located in the heart of one of Uzbekistan city, Tashkent. 
              </span>
            </span>
          </span>
        </p>
        <p style="margin: 0px; text-align: center; text-indent: 24pt;">
          <span style="font-size: medium;">
            <span style="font-family: Arial;">
              <span style="margin: 0px;" lang="EN-US">
                The company is specialized in pre-packed food and its own branded Hastings Mill coffee from the best selected countries and farms. 
              </span>
            </span>
          </span>
        </p>
        <p style="margin: 0px; text-align: center; text-indent: 24pt;">
          <span style="font-size: larger;">
          </span>
          <span style="font-size: medium;">
            <span style="font-family: Arial;">
              <span style="margin: 0px;" lang="EN-US">
                And also QE Aziainvest sells all different general products such as machines, sanitary ware, general tools and equipment etc. 
              </span>
            </span>
          </span>
        </p>
        <p style="margin: 0px; text-align: center; text-indent: 24pt;">
          <span style="font-size: larger;">
          </span>
          <span style="font-size: medium;">
            <span style="font-family: Arial;">
              <span style="margin: 0px;" lang="EN-US">
                Our company deals only with the best source in china and all other countries. 
              </span>
            </span>
          </span>
        </p>
        <p style="margin: 0px; text-align: center; text-indent: 24pt;">
          <span style="font-size: larger;">
          </span>
          <span style="font-size: medium;">
            <span style="font-family: Arial;">
              <span style="margin: 0px;" lang="EN-US">
                This allows us to bring the consumer, a diverse range of high quality products, at very competitive prices.
              </span>
            </span>
          </span>
        </p>
        <p style="margin: 0px; text-align: center; text-indent: 24pt;">
          <span style="font-size: larger;">
          </span>
          <span style="font-size: medium;">
            <span style="font-family: Arial;">
              <span style="margin: 0px;" lang="EN-US">
                The products in our catalogues have been tried and tested in European and North American markets, 
              </span>
            </span>
          </span>
        </p>
        <p style="margin: 0px; text-align: center; text-indent: 24pt;">
          <span style="font-size: medium;">
            <span style="font-family: Arial;">
              <span style="margin: 0px;" lang="EN-US">
                thereby gaining the confidence of consumer worldwide....
              </span>
            </span>
            &nbsp;
          </span>
        </p>
        <div class="abmore">
          <a href="about.html">
            LEARN MORE
          </a>
        </div>
      </div>
    </div>
    <div class="fenge">
    </div>
    <div class="cpbj">
      <div class="cptit">
        <img src="images/cptit.png" border="0">
      </div>
      <div class="cplan">
        <li>
          <a href="products.php?tid=3">
            <div class="tb1">
            </div>
            Coffee	  
          </a>
        </li>
        <li>
          <a href="products.php?tid=4">
            <div class="tb2">
            </div>
            Snacks	  
          </a>
        </li>
        <li>
          <a href="products.php?tid=5">
            <div class="tb3">
            </div>
            Jams and cans	  
          </a>
        </li>
        <li>
          <a href="products.php?tid=6">
            <div class="tb4">
            </div>
            Olive Oil	  
          </a>
        </li>
        <li>
          <a href="products.php?tid=7">
            <div class="tb5">
            </div>
            Sauce	  
          </a>
        </li>
        <li>
          <a href="products.php?tid=8">
            <div class="tb6">
            </div>
            Pasta	  
          </a>
        </li>
        <li>
          <a href="products.php?tid=9">
            <div class="tb7">
            </div>
            Others	  
          </a>
        </li>
      </div>
      <div class="cpnei">
        <div class="row">
          <div id="portfolioSlider">
            <ul class="slides">
         <li>
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="products/products6.php">
                        <img src="./images/2016122717330950.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        F.CUTREAR XV OLIVE OIL ORO INTENSE 1L GREEN LBL							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=27">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="productsd.php?tid=&amp;pid=28">
                        <img src="./images/2016122717331767.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        IL TARTUFO D'ORO WHITE TRUFFLE XV OLIVE OIL 60ML 01							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=28">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="productsd.php?tid=&amp;pid=30">
                        <img src="./images/2016122717333248.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        ILIADA KALAMATA XV OLIVE OIL PDO 500 ML TIN							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=30">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="productsd.php?tid=&amp;pid=31">
                        <img src="./images/2016122717333881.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        ILIADA KALAMATA XV OLIVE OIL PDO PEZA CRETE 500 ML							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=31">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="flex-active-slide" style="float: left; display: block; width: 1230px;">
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="productsd.php?tid=&amp;pid=11">
                        <img src="./images/2016122811143170.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        MOLISE COLOMBIAN DECAF COFFEE BEANS 400GR							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=11">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="productsd.php?tid=&amp;pid=12">
                        <img src="./images/2016122811290352.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        MOLISE FRENCH ROAST COFFEE BEANS 400GR							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=12">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="productsd.php?tid=&amp;pid=13">
                        <img src="./images/2016122717293832.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        MOLISE GOURMET COFFEE BEANS 400GR							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=13">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="productsd.php?tid=&amp;pid=14">
                        <img src="./images/2016122717294712.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        MOLISE ORGANIC ESPRESSO COFEE BEANS							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=14">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li style="float: left; display: block; width: 1230px;" class="">
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="productsd.php?tid=&amp;pid=2">
                        <img src="./images/2016122717263581.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        MOLISE CUCINA LUPINI BEANS 580ML							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=2">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="productsd.php?tid=&amp;pid=3">
                        <img src="./images/2016122717264499.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        MOLISE CUCINA PITTED ITALIAN OLIVE MEDLEY 327ML							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=3">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="productsd.php?tid=&amp;pid=4">
                        <img src="./images/2016122717265816.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        MOLISE CUCINA PITTED TAGGIASCA OLV 327ML							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=4">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="productsd.php?tid=&amp;pid=5">
                        <img src="./images/2016122717270898.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        MOLISE CUCINA WHOLE PEELED TOMATOES 2.84L							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=5">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li style="float: left; display: block; width: 1230px;" class="">
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="productsd.php?tid=&amp;pid=27">
                        <img src="./images/2016122717330950.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        F.CUTREAR XV OLIVE OIL ORO INTENSE 1L GREEN LBL							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=27">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="productsd.php?tid=&amp;pid=28">
                        <img src="./images/2016122717331767.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        IL TARTUFO D'ORO WHITE TRUFFLE XV OLIVE OIL 60ML 01							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=28">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="productsd.php?tid=&amp;pid=30">
                        <img src="./images/2016122717333248.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        ILIADA KALAMATA XV OLIVE OIL PDO 500 ML TIN							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=30">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="productsd.php?tid=&amp;pid=31">
                        <img src="./images/2016122717333881.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        ILIADA KALAMATA XV OLIVE OIL PDO PEZA CRETE 500 ML							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=31">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="clone" aria-hidden="true" style="float: left; display: block; width: 1230px;">
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="productsd.php?tid=&amp;pid=11">
                        <img src="./images/2016122811143170.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        MOLISE COLOMBIAN DECAF COFFEE BEANS 400GR							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=11">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="productsd.php?tid=&amp;pid=12">
                        <img src="./images/2016122811290352.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        MOLISE FRENCH ROAST COFFEE BEANS 400GR							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=12">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="productsd.php?tid=&amp;pid=13">
                        <img src="./images/2016122717293832.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        MOLISE GOURMET COFFEE BEANS 400GR							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=13">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 wwr">
                    <div class="cp">
                      <div class="gu">
                      </div>
                      <a href="productsd.php?tid=&amp;pid=14">
                        <img src="./images/2016122717294712.jpg" class="img-responsive tudi" alt="Responsive image" draggable="false" border="0">
                      </a>
                      <div class="cpzi">
                        MOLISE ORGANIC ESPRESSO COFEE BEANS							
                        <div class="cpmm">
                        </div>
                        <div class="cpmr">
                          <a href="productsd.php?tid=&amp;pid=14">
                            LEARN MORE
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <div class="xwbj">
      <div class="xwtit">
        <img src="images/xwtit.png" border="0">
      </div>
      <div class="xwnei">
        <div class="row">
          <div class="col-md-3 xwnn">
            <a href="newsd.php?gid=&amp;nid=8">
              <img src="./images/2017010314100871.jpg" class="img-responsive tudi" alt="Responsive image" border="0">
              <div class="xwzi">
                <h2>
                  Truffle Olive Oil
                </h2>
                High quality white truffle XV olive oil
                Made in Italy			   
                <div class="time">
                  <div class="time-a">
                    2017/01/09
                  </div>
                  <div class="time-b">
                    <img src="images/more.png" border="0">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3 xwnn">
            <a href="newsd.php?gid=&amp;nid=7">
              <img src="./images/2017010313554496.jpg" class="img-responsive tudi" alt="Responsive image" border="0">
              <div class="xwzi">
                <h2>
                  Sanitary ware
                </h2>
                The company's official valve series up online
                Gate valve, taps etc.			   
                <div class="time">
                  <div class="time-a">
                    2017/01/04
                  </div>
                  <div class="time-b">
                    <img src="images/more.png" border="0">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3 xwnn">
            <a href="newsd.php?gid=&amp;nid=6">
              <img src="./images/2017010314065291.jpg" class="img-responsive tudi" alt="Responsive image" border="0">
              <div class="xwzi">
                <h2>
                  Traditional Coffeepot
                </h2>
                Lets meet our traditional coffeepot
                Different Sizes			   
                <div class="time">
                  <div class="time-a">
                    2017/01/09
                  </div>
                  <div class="time-b">
                    <img src="images/more.png" border="0">
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-3 xwnn">
            <a href="newsd.php?gid=&amp;nid=5">
              <img src="./images/2017011111482631.jpg" class="img-responsive tudi" alt="Responsive image" border="0">
              <div class="xwzi">
                <h2>
                  CAMP'ORO STROZZAPRETI
                </h2>
                CAMP'ORO STROZZAPRETI 500 GR pasta 			   
                <div class="time">
                  <div class="time-a">
                    2017/01/11
                  </div>
                  <div class="time-b">
                    <img src="images/more.png" border="0">
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <?php
    require_once("footer.php");
    ?>

    
  </body>
</html>
