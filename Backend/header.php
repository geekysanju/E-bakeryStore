
<!DOCTYPE html>
<html>
<head>
<title>Bakery Store Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- header-bot -->
<div class="header-bot">
  <div class="header-bot_inner_wthreeinfo_header_mid">
    <div class="col-md-4 header-middle">
      <form action="#" method="post">
          <input type="search" name="search" placeholder="Search here..." required="">
          <input type="submit" value=" ">
        <div class="clearfix"></div>
      </form>
    </div>
    <!-- header-bot -->
      <div class="col-md-4 logo_agile">
        <h1><a href="index.html"><span>E</span>Bakery Store <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
      </div>
        <!-- header-bot -->
    <div class="col-md-4 agileits-social top_content">
            <ul class="social-nav model-3d-0 footer-social w3_agile_social">
                                               <li class="share">Share On : </li>
                              <li><a href="#" class="facebook">
                                  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                              <li><a href="#" class="twitter"> 
                                  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                              <li><a href="#" class="instagram">
                                  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                              <li><a href="#" class="pinterest">
                                  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                            </ul>



    </div>
    <div class="clearfix"></div>
  </div>
</div>




<!-- //header-bot -->

<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">


                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                     <ul class="nav navbar-nav menu__list">
          <li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
          <li class=" menu__item"><a class="menu__link" href="about.html">About</a></li>
          <li class=" menu__item"><a class="menu__link" href="products.php#cake">Cake</a></li>
         
          <li class="dropdown menu__item">
            <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bakery products <span class="caret"></span></a>
              <ul class="dropdown-menu multi-column columns-2">
                <div class="agile_inner_drop_nav_info">
                  <div class="col-sm-2 multi-gd-img">
                    <ul class="multi-column-dropdown">
                      <li><a href="products.php#cookies">cookies </a></li>
                      <li><a href="products.php#pastry">Pastry</a></li>
                      <li><a href="products.php#breads">breads</a></li>
                      <li><a href="products.php#snacks">snacks</a></li>
                     
                    </ul>
                  </div>
                  </div>
                </ul>
                
               

         
          <li class=" menu__item"><a class="menu__link" href="contact.html">Contact</a></li>
          </ul>
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <?php
                           }else{
                            ?>

                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>


</body>

</html>