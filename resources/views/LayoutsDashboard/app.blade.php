{{-- {{$loggedUserInfo->Image ? asset('storage/' . $loggedUserInfo->Image) : asset('img/default-img.png')}} --}}

<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.admireadmin.com/admire2/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2022 04:54:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<title>Dashboard | Kinx</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{asset('img/logo1.html')}}" />

<link type="text/css" rel="stylesheet" href="{{asset('css/components.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}" />

<link type="text/css" rel="stylesheet" href="{{asset('vendors/chartist/css/chartist.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('vendors/circliful/css/jquery.circliful.css')}}">
<link type="text/css" rel="stylesheet" href="{{asset('css/pages/index.css')}}">
<link type="text/css" rel="stylesheet" href="{{asset('#" id="skin_change')}}" />
</head>
<body class="body">
{{-- <div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
<div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
<img src="img/loader.html" style=" width: 50px;" alt="loading...">
</div>
</div> --}}


<script type="text/javascript" src="{{asset('asset/js/components.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/custom.js')}}"></script>


<div id="wrap">
    <div id="top">
    <div id="wrap">
<div id="top">
<nav class="navbar navbar-static-top">
    <div class="container-fluid m-0">
    <a class="navbar-brand" href="index-2.html">
    <h4><img src="{{asset('img/knx1.jpg')}}" class="admin_img" alt="logo"> Kinx</h4>
    </a>


    <div class="menu mr-sm-auto">
    <span class="toggle-left" id="menu-toggle">
    <i class="fa fa-bars"></i>
    </span>
    </div>
    <div class="top_search_box d-none d-md-flex">
    <form class="header_input_search">
    <input type="text" placeholder="Search" name="search">
    <button type="submit">
    <span class="font-icon-search"></span>
    </button>
    <div class="overlay"></div>
    </form>
    </div>
    <div class="topnav dropdown-menu-right">
    <div class="btn-group small_device_search" data-toggle="modal" data-target="#search_modal">
    <i class="fa fa-search text-primary"></i>
    </div>
    <div class="btn-group">
    <div class="notifications no-bg">
    <a class="btn btn-default btn-sm messages" data-toggle="dropdown" id="messages_section"> <i class="fa fa-envelope-o fa-1x"></i>
    <span class="badge badge-pill badge-warning notifications_badge_top">8</span>
    </a>
    <div class="dropdown-menu drop_box_align" role="menu" id="messages_dropdown">
    <div class="popover-header">You have 8 Messages</div>
    <div id="messages">
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/5.html" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-10 message-data"><strong>hally</strong>
    sent you an image.
    <br>
    <small>add to timeline</small>
    </div>
    </div>
    </div>
     <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/8.html" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-10 message-data"><strong>Meri</strong>
    invitation for party.
    <br>
    <small>add to timeline</small>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/7.html" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-10 message-data">
    <strong>Remo</strong>
    meeting details .
    <br>
    <small>add to timeline</small>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/6.html" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-10 message-data">
    <strong>David</strong>
    upcoming events list.
    <br>
    <small>add to timeline</small>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/5.html" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-10 message-data"><strong>hally</strong>
    sent you an image.
    <br>
    <small>add to timeline</small>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/8.html" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-10 message-data"><strong>Meri</strong>
    invitation for party.
    <br>
    <small>add to timeline</small>
    </div>
     </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/7.html" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-10 message-data">
    <strong>Remo</strong>
    meeting details .
    <br>
    <small>add to timeline</small>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/6.html" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-10 message-data">
    <strong>David</strong>
    upcoming events list.
    <br>
    <small>add to timeline</small>
    </div>
    </div>
    </div>
    </div>
    <div class="popover-footer">
    <a href="mail_inbox.html" class="text-white">Inbox</a>
    </div>
    </div>
    </div>
    </div>
    <div class="btn-group">
    <div class="notifications messages no-bg">
    <a class="btn btn-default btn-sm" data-toggle="dropdown" id="notifications_section"> <i class="fa fa-bell-o"></i>
    <span class="badge badge-pill badge-danger notifications_badge_top">9</span>
    </a>
    <div class="dropdown-menu drop_box_align" role="menu" id="notifications_dropdown">
    <div class="popover-header">You have 9 Notifications</div>
    <div id="notifications">
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-10 message-data">
    <i class="fa fa-clock-o"></i>
    <strong>Remo</strong>
    sent you an image
    <br>
    <small class="primary_txt">just now.</small>
    <br>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-10 message-data">
    <i class="fa fa-clock-o"></i>
    <strong>clay</strong>
    business propasals
    <br>
    <small class="primary_txt">20min Back.</small>
    <br>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-10 message-data">
    <i class="fa fa-clock-o"></i>
    <strong>John</strong>
    meeting at Ritz
    <br>
    <small class="primary_txt">2hrs Back.</small>
    <br>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/6.html" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-10 message-data">
    <i class="fa fa-clock-o"></i>
    <strong>Luicy</strong>
    Request Invitation
    <br>
    <small class="primary_txt">Yesterday.</small>
    <br>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-10 message-data">
    <i class="fa fa-clock-o"></i>
    <strong>Remo</strong>
    sent you an image
    <br>
    <small class="primary_txt">just now.</small>
    <br>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-10 message-data">
    <i class="fa fa-clock-o"></i>
    <strong>clay</strong>
    business propasals
    <br>
    <small class="primary_txt">20min Back.</small>
    <br>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-10 message-data">
    <i class="fa fa-clock-o"></i>
    <strong>John</strong>
    meeting at Ritz
    <br>
    <small class="primary_txt">2hrs Back.</small>
    <br>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/6.html" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-10 message-data">
    <i class="fa fa-clock-o"></i>
    <strong>Luicy</strong>
    Request Invitation
    <br>
    <small class="primary_txt">Yesterday.</small>
    <br>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-10 message-data">
    <i class="fa fa-clock-o"></i>
    <strong>Remo</strong>
    sent you an image
    <br>
    <small class="primary_txt">just now.</small>
    <br>
    </div>
    </div>
    </div>
    </div>
    <div class="popover-footer">
    <a href="#" class="text-white">View All</a>
    </div>
    </div>
    </div>
    </div>
    <div class="btn-group">
    <div class="notifications request_section no-bg">
    <a class="btn btn-default btn-sm messages" id="request_btn"> <i class="fa fa-sliders" aria-hidden="true"></i>
    </a>
    </div>
    </div>
    <div class="btn-group">
    <div class="user-settings no-bg">
    <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
    <img src="{{asset('img/knx1.jpg')}}" class="admin_img2 img-thumbnail rounded-circle avatar-img" alt="avatar"> <strong>{{$loggedUserInfo->Full_name}}</strong>
    <span class="fa fa-sort-down white_bg"></span>
    </button>
    <div class="dropdown-menu admire_admin">
    <a class="dropdown-item title" href="#">
    Admire Admin</a>
    <a class="dropdown-item" href="/edit/{{$loggedUserInfo->id}}"><i class="fa fa-cogs"></i>
    Account Settings</a>
    <a class="dropdown-item" href="#">
    <i class="fa fa-user"></i>
    User Status
    </a>
    <a class="dropdown-item" href="mail_inbox.html"><i class="fa fa-envelope"></i>
    Inbox</a>
    <a class="dropdown-item" href="lockscreen.html"><i class="fa fa-lock"></i>
    Lock Screen</a>
    <a class="dropdown-item" href="/logout"><i class="fa fa-sign-out"></i>
    Log Out</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    </nav>
    
    
    </div>
    
    <div class="wrapper">
    <div id="left">
    <div class="menu_scroll">
    <div class="left_media">
    <div class="media user-media">
    <div class="user-media-toggleHover">
    <span class="fa fa-user"></span>
    </div>
    <div class="user-wrapper">
    <a class="user-link" href="{{asset('storage/'.$loggedUserInfo->Image)}}">
-    <img class="media-object img-thumbnail user-img rounded-circle admin_img3" src="{{asset('storage/'.$loggedUserInfo->Image)}}" alt="User Picture" >
    <p class="user-info menu_hide">Welcome {{$loggedUserInfo->Full_name}}</p>
    </a>
    </div>
    </div>
    <hr />
    </div>
    <ul id="menu">
    <li>
    <a href="/dashboard">
    <i class="fa fa-home"></i>
    <span class="link-title menu_hide">&nbsp;My Dashboard</span>
    </a>
    </li>
    <li>
        <a href="/add_content">
        <i class="fa fa-plus"></i>
        <span class="link-title menu_hide">&nbsp;Add Content</span>
        </a>
        </li>
        <li>
            <a href="/viewposts">
            <i class="fa fa-view"></i>
            <span class="link-title menu_hide">&nbsp;View Posts</span>
            </a>
            </li>
            <li>
                    <a href="/add_content_sports">
                    <i class="fa fa-view"></i>
                    <span class="link-title menu_hide">&nbsp;Add Sports</span>
                    </a>
                    </li>
                    <li>
                            <a href="/viewtables">
                            <i class="fa fa-view"></i>
                            <span class="link-title menu_hide">&nbsp;View Tables</span>
                            </a>
                            </li>
                            <li>
                                <a href="/">
                                <i class="fa fa-view"></i>
                                <span class="link-title menu_hide">&nbsp;Blog</span>
                                </a>
                                </li>
    
    </div>
    
    </div>
    <main>
        @yield('main')
    </main>
   
    </div>
        
    </div>

   

    <div id="right">
        <div class="right_content">
        <div class="well-small dark m-t-15">
        <div class="row m-0">
        <div class="col-lg-12 p-d-0">
        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('blue_black_skin.html','css')">
        <div class="skin_blue skin_size b_t_r"></div>
        <div class="skin_blue_border skin_shaddow skin_size b_b_r"></div>
        </div>
        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('green_black_skin.html','css')">
        <div class="skin_green skin_size b_t_r"></div>
        <div class="skin_green_border skin_shaddow skin_size b_b_r"></div>
        </div>
        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('purple_black_skin.html','css')">
        <div class="skin_purple skin_size b_t_r"></div>
        <div class="skin_purple_border skin_shaddow skin_size b_b_r"></div>
        </div>
        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('orange_black_skin.html','css')">
        <div class="skin_orange skin_size b_t_r"></div>
        <div class="skin_orange_border skin_shaddow skin_size b_b_r"></div>
        </div>
        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('red_black_skin.html','css')">
        <div class="skin_red skin_size b_t_r"></div>
        <div class="skin_red_border skin_shaddow skin_size b_b_r"></div>
         </div>
        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('mint_black_skin.html','css')">
        <div class="skin_mint skin_size b_t_r"></div>
        <div class="skin_mint_border skin_shaddow skin_size b_b_r"></div>
        </div>
        
        <div class="skin_btn skinsingle_btn skin_blue b_r height_40 skin_shaddow" onclick="javascript:loadjscssfile('blue_skin.html','css')"></div>
        <div class="skin_btn skinsingle_btn skin_green b_r height_40 skin_shaddow" onclick="javascript:loadjscssfile('green_skin.html','css')"></div>
        <div class="skin_btn skinsingle_btn skin_purple b_r height_40 skin_shaddow" onclick="javascript:loadjscssfile('purple_skin.html','css')"></div>
        <div class="skin_btn  skinsingle_btn skin_orange b_r height_40 skin_shaddow" onclick="javascript:loadjscssfile('orange_skin.html','css')"></div>
        <div class="skin_btn skinsingle_btn skin_red b_r height_40 skin_shaddow" onclick="javascript:loadjscssfile('red_skin.html','css')"></div>
        <div class="skin_btn skinsingle_btn skin_mint b_r height_40 skin_shaddow" onclick="javascript:loadjscssfile('mint_skin.html','css')"></div>
        </div>
        <div class="col-lg-12 text-center m-t-15">
        <button class="btn btn-dark button-rounded" onclick="javascript:loadjscssfile('black_skin.html','css')">Dark
        </button>
        <button class="btn btn-secondary button-rounded default_skin" onclick="javascript:loadjscssfile('default.html','css')">Default
        </button>
        </div>
        </div>
        </div>
        </div>
        </div>
        
        </div>
        
        
<script type="text/javascript" src="{{asset('asset/vendors/countUp.js/js/countUp.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/vendors/flip/js/jquery.flip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/pluginjs/jquery.sparkline.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/vendors/chartist/js/chartist.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/pluginjs/chartist-tooltip.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/vendors/swiper/js/swiper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/vendors/circliful/js/jquery.circliful.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/vendors/flotchart/js/jquery.flot.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/vendors/flotchart/js/jquery.flot.resize.js')}}"></script>

<script type="text/javascript" src="{{asset('asset/js/pages/index.js')}}"></script>
</body>

<!-- Mirrored from demo.admireadmin.com/admire2/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2022 04:56:13 GMT -->
</html>