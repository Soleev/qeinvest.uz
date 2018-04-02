    <script src="js/jquery.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script src="js/jquery-1.11.1.min.js">
    </script>
    <link rel="stylesheet" href="font/demo.css">
    <link rel="stylesheet" href="font/iconfont.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="shortcut icon" href="docs-assets/ico/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/queries.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/typography.css" rel="stylesheet">
    <script src="js/jquery-1.4.2.min.js" type="text/javascript">

    </script>
    <script src="js/overlay.js">
    </script>
    <script src="js/modernizr.js">
    </script>
    <script src="js/jquery.libs-1.2.6pack.js" type="text/javascript">
    </script>
    <script src="js/effect_commonv1.1.js" type="text/javascript">
    </script>
    <script type="text/javascript">
      function DY_scroll(wraper,prev,next,img,speed,or)
      {
        var wraper = $(wraper);
        var prev = $(prev);
        var next = $(next);
        var img = $(img).children('ul');
        var w = img.children('li').outerWidth(true);
        var s = speed;
        next.click(function()
                   {
                     img.animate({
                       'margin-left':-w}
                                 ,function()
                                 {
                                   img.children('li').eq(0).appendTo(img);
                                   img.css({
                                     'margin-left':0}
                                          );
                                 }
                                );
                   }
                  );
        prev.click(function()
                   {
                     img.children('li:last').prependTo(img);
                     img.css({
                       'margin-left':-w}
                            );
                     img.animate({
                       'margin-left':0}
                                );
                   }
                  );
        if (or == true)
        {
          ad = setInterval(function() {
            next.click();
          }
                           ,s*1000);
          wraper.hover(function(){
            clearInterval(ad);
          }
                       ,function(){
                         ad = setInterval(function() {
                           next.click();
                         }
                                          ,s*1000);
                       }
                      );
        }
      }
    </script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->