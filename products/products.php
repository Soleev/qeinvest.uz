<?php

$dsn = "mysql:host=localhost;port=3306;dbname=solar_system;charset=utf8";
$pdo = new PDO($dsn, 'testuser', 'testpassword', $options);

$stmt = $pdo->query("SELECT * FROM planets");
$results = $stmt->fetch(PDO::FETCH_ASSOC);
echo "PDO::FETCH_ASSOC: ";
print_r($results);
echo "<br>";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>QE Aziainvest Trading Company products</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<?php
    require_once("headscripts.php");
    ?>
</head>
<body>

    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="height: 0px; background: rgba(255, 255, 255, 0.901961);">
      <div class="panel-body">
	  
			  <div class="row bky1">
			  <form action="products.php" method="post">
			     <div class="col-md-2"></div>
			     <div class="col-md-7"><input placeholder="搜索" class="form-control" id="un" name="keyword" type="text"></div>
				 
				 <div class="col-md-3">
				    <button name="submit" type="submit" value="" class="btn btn-default"><span class="glyphicon glyphicon-search" style="font-size:22px;" aria-hidden="true"></span></button>
				 </div>
				 </form>
				 
			  </div>

      </div>
    </div>
  
  
<div class="daohang">
   <div class="dhkk">
      <div class="dhkk-logo"><img src="images/logo.png" border="0"></div>
	  <div class="dhkk-hh">
	     <li><a href="index.php">HOME</a></li>
		 <li><a href="about.php">ABOUT US</a></li>
		 <li><a href="products.php">PRODUCTS</a></li>
		 <li><a href="news.php">NEWS AND GALLERY</a></li>
		 <li><a href="about.php?gid=1">CONTACT</a></li>
	  </div>
	  <div class="dhkk-yy"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-globe"></span> EN <span class="glyphicon glyphicon-chevron-down"></span></a>
	  
	<ul class="dropdown-menu" role="menu">
    <li style="text-align:center"><a href="/en">ENGLISH</a></li>
    <li style="text-align:center"><a href="/cn">中文版</a></li>
     </ul>　|　<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
<span class="glyphicon glyphicon-search"></span></a></div>
   </div>
</div>
<div class="bnn">
<img src="images/bnn2.jpg" class="img-responsive juzhong" alt="Responsive image" border="0">
</div>


<div class="cpbjx">
   <div class="cptit"><img src="images/cptit.png" border="0"></div>
   
   <div class="cplan">
      	   	           <li class=""><a href="products.php?tid=3">
	  <div class="tb1"></div>
	  Coffee	  </a></li>
	  
	      <li class=""><a href="products.php?tid=4">
	  <div class="tb2"></div>
	  Snacks	  </a></li>
	  
	      <li class=""><a href="products.php?tid=5">
	  <div class="tb3"></div>
	  Jams and cans	  </a></li>
	  
	      <li class=""><a href="products.php?tid=6">
	  <div class="tb4"></div>
	  Olive Oil	  </a></li>
	  
	      <li class=""><a href="products.php?tid=7">
	  <div class="tb5"></div>
	  Sauce	  </a></li>
	  
	      <li class=""><a href="products.php?tid=8">
	  <div class="tb6"></div>
	  Pasta	  </a></li>
	  
	      <li class=""><a href="products.php?tid=9">
	  <div class="tb7"></div>
	  Others	  </a></li>
	  
	   </div>
   
   <div class="cpnei">
   
   
<div class="row tp">
            <div class="col-md-5">
          
		 <link type="text/css" rel="stylesheet" href="css/zzsc.css">
       	<div class="m10">


		<div class="cntr mt20">
			<div class="pgwSlideshow narrow" style="display: block;"><div class="ps-current" style="height: 565px;"><ul><li class="elt_1" style="display: block; opacity: 1; z-index: 2;"><a href="#"><img src="../images/2016122717330950.jpg" alt=""></a></li></ul><span class="ps-caption"></span></div><div class="ps-list"><span class="ps-prev" style="display: none;"><span class="ps-prevIcon"></span></span><ul class="" style="width: 76px; left: 0px; margin-left: 193px;">
                <li class="elt_1" style="cursor: pointer;"><span class="ps-item ps-selected"><a href="#"><img src="../images/2016122717330950.jpg" data-description=""></a></span></li>
											   			                   

			</ul><span class="ps-next" style="display: none;"><span class="ps-nextIcon"></span></span></div></div>
		</div>
	</div>    

       <script src="js/jquery.min.js" type="text/javascript"></script>
		  
            
        </div>
	    <div class="col-md-7">
	
	   <h3>F.CUTREAR XV OLIVE OIL ORO INTENSE 1L GREEN LBL</h3>
	   <p>&nbsp;</p>
<p><span style="font-size: larger;"><span style="font-family: Arial;">F.CUTREAR XV OLIVE OIL ORO INTENSE 1L GREEN LBL</span></span></p>
<p><span style="font-size: larger;"><span style="font-family: Arial;">F.CUTREAR 特级初榨橄榄油 1升</span></span></p>
<p><span style="font-size: larger;"><span style="font-family: Arial;">Packaging:1L</span></span></p>
<p><span style="font-size: larger;"><span style="font-family: Arial;">Unit per case:12ps</span></span></p>
<p>&nbsp;</p>	</div>

</div>


	         <div style="width:100%; height:30px; line-height:30px; text-align:left; margin-top:20px; border-top:solid 1px #CCCCCC;">
 	<div style="float:left">
    <a id="preLink" href="productsd.php?pid=27&amp;tid=6" style="margin:0px 8px; color:#666;">Prev:Without </a>
     </div>
     <div style="float:right;">   
<a id="nextLink" href="productsd.php?pid=28&amp;tid=6" style="margin:0px 8px; color:#666;">Next:IL TARTUFO D'ORO WHITE TRUFFLE XV OLIVE OIL 60ML 01</a>
        </div>
        </div>

	  
	  
   </div>
</div>





<div class="bottom">
   <div class="bmkk">
      <div class="col-md-3">
	     <h2>CONTACT US</h2>
		 <p><img src="/images/201612271759249.png" alt="" width="22" height="22">&nbsp;Tel： +86(0)574-87136087</p>
<p><img src="/images/2016122717593423.png" alt="" width="22" height="22">&nbsp;Fax：+86(0)574-87130109</p>
<p><img src="/images/2016122717594680.png" alt="" width="22" height="22">&nbsp;M.P：+86 18057427767</p>
<p><img src="/images/2016122717595615.png" alt="" width="22" height="22">&nbsp;Email：info@ningboqe.com</p>
<p><img src="/images/2016122718000665.png" alt="" width="22" height="22">&nbsp;Add: Room 1901,No.3 Building Shangdong International Center, No.1926 Canghai Road,Jiangdong Ningbo, China</p>	  </div>
	  <div class="col-md-3">
	     <h2>MESSAGE</h2>
		 		         <script language="JavaScript" type="text/JavaScript">
function check(){ 
var obj = document.form; 
if (obj.姓名.value == "") 
{ 
alert("请填写联系人姓名！"); 
return false; 
} 
if (obj.电话.value == "") 
{ 
alert("请填写电话号码！");  
return false;
}

if (obj.留言.value == "") 
{ 
alert("请填写您的留言！");  
return false;
}
 }
</script>
<form action="/en/productsd.php" method="post" name="form" onsubmit="return check();">
		 	<p><input placeholder="name" class="form-control" id="un" name="姓名" type="text"></p>
			<p><input placeholder="Tel" class="form-control" id="un" name="电话" type="text"></p>
			<p><textarea placeholder="Message" class="form-control" rows="5" name="留言"></textarea></p>
			<p><button type="submit" name="submit" class="btn btn-warning btn-block">SEND</button></p>
			</form>
	  </div>
	  <div class="col-md-3 dilan">
	     <h2>NAVIGATION</h2>
		 		<li>
				<a href="index.php">
			<span class="dilan-left">Home</span>
			<span class="dilan-right">&gt;</span>
			</a>
			</li>
			
						<li>
						<a href="about.php">
			<span class="dilan-left">About Us</span>
			<span class="dilan-right">&gt;</span>
			</a>
			</li>
			
						<li>
						<a href="products.php">
			<span class="dilan-left">Products</span>
			<span class="dilan-right">&gt;</span>
			</a>
			</li>
			
						<li>
						<a href="news.php">
			<span class="dilan-left">News And Gallery </span>
			<span class="dilan-right">&gt;</span>
			</a>
			</li>
			
						<li>
						<a href="about.php?gid=1">
			<span class="dilan-left">Contact</span>
			<span class="dilan-right">&gt;</span>
			</a>
			</li>
	  </div>
	  <div class="col-md-3">
	     <h2>FAST CONNECTION</h2>
		 
		 Welcome to our social accounts.<br>
		 <img src="images/d1.png" border="0">　<img src="images/d2.png" border="0">　<img src="images/d3.png" border="0"><br><br>
		 <img src="images/wx.jpg" border="0">
	  </div>
   </div>
</div>


<div class="footer"><p>Copyright  2008-2015 Ningbo QE international trading company All rights reserved. &nbsp; &nbsp; &nbsp; &nbsp; Technology support: <a href="http://www.rswl.cc" target="_blank">RSWL</a></p></div>















</body>
</html>