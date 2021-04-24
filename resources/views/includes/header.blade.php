<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />

<!--//tags -->

<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css' />


<style>
    .dropdown-submenu {
        position: relative;
        font-weight: bold;
    }

    .dropdown-submenu>.dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
        margin-left: -1px;
        -webkit-border-radius: 0 6px 6px 6px;
        -moz-border-radius: 0 6px 6px;
        border-radius: 0 6px 6px 6px;
    }

    .dropdown-submenu:hover>.dropdown-menu {
        display: block;
    }

    /*li > a:only-child:after { content: ''; }*/

    .dropdown-submenu>a:after {
        display: block;
        content: " ";
        float: right;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid;
        border-width: 5px 0 5px 5px;
        border-left-color: #ccc;
        margin-top: 5px;
        margin-right: -10px;
        font-weight: bold;
    }

    .dropdown-submenu:hover>a:after {
        border-left-color: #fff;
    }

    .dropdown-submenu.pull-left {
        float: none;
    }

    .dropdown-submenu.pull-left>.dropdown-menu {
        left: -100%;
        margin-left: 10px;
        -webkit-border-radius: 6px 0 6px 6px;
        -moz-border-radius: 6px 0 6px 6px;
        border-radius: 6px 0 6px 6px;
    }

    ul {
        font-weight: bold;
        color: black;
    }

    li {
        font-weight: bold;
        color: black;
    }

    a {
        font-weight: bold;
        color: black;
    }
</style>
<!-- header -->
<div class="header" id="home">
    <div class="container-fluid">
        <ul>

            <li><a href="tel:+919930685868"><i class="fa fa-phone fa-2x" aria-hidden="true" style="color:white"> </i> </a>
                <a href="mailto:pickarindia@gmail.com"><i class="fa fa-envelope fa-2x" aria-hidden="true" style="color:white;">&nbsp;&nbsp;</i> </a>
            </li>
        </ul>
    </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">
        <div class="col-md-4 header-middle">

        </div>
        <!-- header-bot -->
        <div class="col-md-4 logo_agile">
            <h1><a href="index.php">
                    <img src="assets/images/logoNew4.png" />

                </a></h1>
        </div>
        <!-- header-bot -->
        <div class="col-md-4 agileits-social top_content">
            <ul class="social-nav model-3d-0 footer-social w3_agile_social">
                <!-- <li class="share">Share On : </li> -->
                <li><a href="https://www.facebook.com/Pickar/" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="#" class="twitter">
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="https://instagram.com/pickar_india?igshid=5xrjbp5ddeui" class="instagram">
                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="https://wa.me/919930685868" class="pinterest">
                        <div class="front"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
                    </a></li>
            </ul>



        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
    <div class="container">

        <div class="header-middle">
            <nav class="navbar navbar-default">
                <div class="">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <div class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="fa fa-bars fa-2x"></span>
                        </div>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list header-middle">
                            <li class="menu__item"><a class="menu__link" href="{{ url('/') }}">Home<span class="sr-only"></span> </a></li>
                            <li class=" menu__item"><a class="menu__link" href="{{ url('about') }}">About</a></li>
			<li class=" menu__item">
	
  
      <a id="dLabel" data-toggle="dropdown" data-target="#" class="menu__link">
                Womens Wear <span class="caret"></span>
            </a>
      	
      <ul class='dropdown-menu multi-level' role='menu' aria-labelledby='dropdownMenu'>
        <li><a href='womens.php'>Pickar Collection</a></li>
         <li class='divider'></li>
       
  </ul>
			</li>
			
					<li class=" menu__item"><a class="menu__link" href="{{ url('contact') }}">Contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		
		<div class="clearfix" ></div>
	</div>
</div>

  