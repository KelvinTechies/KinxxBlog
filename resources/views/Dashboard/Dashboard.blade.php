@extends('LayoutsDashboard.app')


@section('main')
   
    <div id="content" class="bg-container">
    <header class="head">
    <div class="main-bar">
    <div class="row no-gutters">
    <div class="col-6">
    <h4 class="m-t-5">
    <i class="fa fa-home"></i>
    Dashboard
    </h4>
    </div>
    </div>
    </div>
    </header>
    <div class="outer">
    <div class="inner bg-container">
    
    <div class="row widget_countup">
    <div class="col-12 col-sm-6 col-xl-3">
    <div id="top_widget1">
    <div class="front">
    <div class="bg-primary p-d-15 b_r_5">
    <div class="float-right m-t-5">
    <i class="fa fa-users"></i>
    </div>
    <div class="user_font">Posts</div>
<div id="">{{DB::table('post_models')->count()}} Posts</div>
    
    </div>
    </div>
    <div class="back">
    <div class="bg-white b_r_5 section_border">
    <div class="p-t-l-r-15">
    <div class="float-right m-t-5">
    {{-- <i class="fa fa-users text-primary"></i> --}}
    <i class="fa fa-comments-o text-primary"></i>
    </div>
<div id="widget_countup12">{{DB::table('comment_models')->count()}} </div>
    <div>Coments</div>
    </div>
    <div class="row">
    <div class="col-lg-12">
    <span id="visitsspark-chart" class="spark_line"></span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-3 media_max_573">
    <div id="top_widget2">
    <div class="front">
    <div class="bg-success p-d-15 b_r_5">
    <div class="float-right m-t-5">
    <i class="fa fa-users"></i>
    </div>
    <div class="user_font">Categories Post</div>
<div id="">{{DB::table('categories_models')->count()}} Categories</div>
    
    </div>
    </div>
    <div class="back">
    <div class="bg-white b_r_5 section_border">
    <div class="p-t-l-r-15">
    <div class="float-right m-t-5 text-success">
            <i class="fa fa-comments-o"></i>
    {{-- <i class="fa fa-shopping-cart"></i> --}}
    </div>
<div id="widget_countup22">{{DB::table('category_comment_models')->count()}}</div>


    <div>Categories Comments</div>
    </div>
    <div class="row">
    <div class="col-lg-12">
    <span id="salesspark-chart" class="spark_line"></span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-3 media_max_1199">
    <div id="top_widget3">
    <div class="front">
    <div class="bg-warning p-d-15 b_r_5">
    <div class="float-right m-t-5">
    <i class="fa fa-comments-o"></i>
    </div>
    <div class="user_font">Comments</div>
    {{-- widget_countup3 --}}
<div id="">{{DB::table('comment_models')->count()}} Coments</div>
    
    </div>
    </div>
    <div class="back">
    <div class="bg-white b_r_5 section_border">
    <div class="p-t-l-r-15">
    <div class="float-right m-t-5 text-warning">
    <i class="fa fa-users"></i>
    </div>
<div id="widget_countup32">{{DB::table('post_models')->count()}}</div>
    <div>Posts</div>
    </div>
    <div class="row">
    <div class="col-lg-12">
    <span id="mousespeed" class="spark_line"></span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-3 media_max_1199">
    <div id="top_widget4">
    <div class="front">
    <div class="bg-danger p-d-15 b_r_5">
    <div class="float-right m-t-5">
    <i class="fa fa-comments-o"></i>
    </div>
    <div class="user_font">Categories Comment</div>
    {{-- widget_countup4 --}}
<div id="">{{DB::table('category_comment_models')->count()}} Categories Comments</div>
    
    </div>
    </div>
    <div class="back">
    <div class="bg-white section_border b_r_5">
    <div class="p-t-l-r-15">
    <div class="float-right m-t-5 text-danger">
    <i class="fa fa-users"></i>
    </div>
<div id="widget_countup42">{{DB::table('categories_models')->count()}}</div>
    <div>Categories Post</div>
    </div>
    <div class="row">
    <div class="col-lg-12">
    <span id="rating" class="spark_line"></span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row m-t-35">
    <div class="col">
    <div class="card">
    {{-- <div class="card-header bg-white">
    <span class="card-title">Today Stats</span>
    <div class="dropdown chart_drop float-right">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    <i class="fa fa-ellipsis-v"></i>
    </a>
    <ul class="dropdown-menu" role="menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
    </ul>
    <i class="fa fa-arrows-alt"></i>
    </div>
    </div>
    <div class="card-body">
    <div class="demo-chartist mb-md m-t-15" id="chart1"></div>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-3 m-t-35">
    <div class="bg-white section_border circliful_section">
    <div class="tab-content text-center">
     <div class="tab-pane active" id="fa-icons">
    <h4 class="p-t-30">Design Progress</h4>
    <div id="myStat"></div>
    </div>
    <div class="tab-pane" id="themify-icons">
    <h4 class="p-t-30">Coding Progress</h4>
    <div id="myStat2"></div>
    </div>
    <div class="tab-pane" id="ionicons">
    <h4 class="p-t-30">Doc's Progress</h4>
    <div id="myStat3"></div>
    </div>
    </div>
    <ul class="nav nav-tabs m-t-35 text-center">
    <li class="nav-item">
    <a class="nav-link active" href="#fa-icons" data-toggle="tab">
    <div><i class="fa fa-pie-chart"></i></div>
    <span>Design</span>
    </a>
    </li>
    <li class="nav-item" id="themify_icon">
    <a class="nav-link" href="#themify-icons" data-toggle="tab">
    <div><i class="fa fa-check-square-o"></i></div>
    <span>Coding</span>
    </a>
    </li>
    <li class="nav-item" id="ionicons_tab">
    <a class="nav-link" href="#ionicons" data-toggle="tab">
    <div><i class="fa fa-pencil"></i></div>
    <span>Docs</span>
    </a>
    </li>
    </ul>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="card m-t-35 real_charts">
    <div class="card-header bg-white">
    <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
    <a class="nav-link active text-center" href="#orders_section" role="tab" data-toggle="tab">Orders</a>
    </li>
    <li class="nav-item">
    <a class="nav-link text-center" href="#sales_section" role="tab" data-toggle="tab">Sales</a>
    </li>
    <li class="nav-item">
    <a class="nav-link text-center" href="#users_section" role="tab" data-toggle="tab">Users</a>
    </li>
    </ul>
    </div>
    <div class="card-body">
    
    <div class="tab-content m-t-20">
    <div role="tabpanel" class="tab-pane fade show active" id="orders_section">
    <div id="order_realtime" class="flotChart1">
    </div>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="sales_section">
    <div id="sale_realtime" class="flotChart1">
    </div>
    </div>
     <div role="tabpanel" class="tab-pane fade" id="users_section">
    <div id="users_realtime" class="flotChart1">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-5 col-12 m-t-35">
    <div class="row">
    <div class="col-12 text-center text-white">
    <div class="lorem_background">
    <div>
    <img src="img/mailbox_imgs/2.jpg" alt="lorem" class="img-fluid rounded-circle lorem_img">
    </div>
    <div class="text-white font_18">Stuart</div>
    
    <div class="text-center lorem_bg m-b-0">
    <div class="row">
    <div class="col-3 lorem_font_icon">
    <i class="fa fa-facebook"></i>
    </div>
    <div class="col-3 lorem_font_icon">
    <i class="fa fa-twitter"></i>
    </div>
    <div class="col-3 lorem_font_icon">
    <i class="fa fa-google-plus"></i>
    </div>
    <div class="col-3">
    <i class="fa fa-instagram"></i>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col">
    <div class="list-group bg-white section_border">
    <a href="#" class="lorem_group_item lorem_group_item_bottom">
    <span class="badge badge-pill badge-primary float-right">224</span>
    <span class="p-l-10">Followers</span>
    <span class="float-left">
    <i class="fa fa-user"></i>
    </span>
    </a>
    <a href="#" class="lorem_group_item">
    <span class="badge badge-pill badge-primary float-right">14</span>
    <span class="p-l-10">Following</span>
    <span class="float-left">
    <i class="fa fa-users"></i>
    </span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-5">
    <div class="row">
    <div class="col m-t-35">
    <div class="weather_img">
    <div class="row header_align">
    <div class="col-sm-8 col-7 text-white info">
    <div class="city">City: Bangkok</div>
    <div class="night">Night - 21:17 PM</div>
    <div class="temp">4<sup>o</sup></div>
    <div class="wind">
    <span>28 km/h</span>
    </div>
    </div>
    <div class="icon col-5 col-sm-4">
    <img src="img/weather1.png" alt="weather" class="img-fluid">
    </div>
    </div>
    <div class="row">
    <div class="col">
    <div class="background_opacity">
    <div class="row header_align">
    <div class="col-2 border_right days_margin_top">
    <div class="day text-center">
    <div class="day_font">Mon</div>
    <div>
    <img src="img/w5.png" alt="weather" class="img-fluid">
    </div>
    <div class="day_font">30<sup>o</sup></div>
    </div>
    </div>
    <div class="col-2 border_right days_margin_top">
    <div class="day text-center">
    <div class="day_font">Tue</div>
    <div>
    <img src="img/w2.png" alt="weather" class="img-fluid">
    </div>
    <div class="day_font">29<sup>o</sup></div>
    </div>
    </div>
    <div class="col-2 border_right days_margin_top">
    <div class="day text-center">
    <div class="day_font">Wed</div>
    <div>
    <img src="img/w3.png" alt="weather" class="img-fluid">
    </div>
    <div class="day_font">34<sup>o</sup></div>
    </div>
    </div>
    <div class="col-2 border_right days_margin_top">
    <div class="day text-center">
    <div class="day_font">Thu</div>
    <div>
    <img src="img/w4.png" alt="weather" class="img-fluid">
    </div>
    <div class="day_font">32<sup>o</sup></div>
    </div>
    </div>
    <div class="col-2 border_right days_margin_top">
    <div class="day text-center">
    <div class="day_font">Fri</div>
    <div>
    <img src="img/w5.png" alt="weather" class="img-fluid">
    </div>
    <div class="day_font">35<sup>o</sup></div>
    </div>
    </div>
    <div class="col-2 days_margin_top">
    <div class="day text-center">
    <div class="day_font">Sat</div>
    <div>
    <img src="img/w2.png" alt="weather" class="img-fluid">
    </div>
    <div class="day_font">36<sup>o</sup></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div> --}}
    {{-- <div class="col-lg-3">
    <div class="card m-t-35">
    <div class="card-body m-t-10">
    
    <div class="row">
    <div class="col-lg-12">
    <h5>Average Monthly Uploads</h5>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
    <div id="test-circle">
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
    <br />
    <span id="monthly_upload"></span>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 m-t-35">
    <div class="social-counter text-center">
    <ul class="m-b-0">
    <li class="facebook">
    <a href="#">
    <div class="row">
    <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-facebook"></i></span></div>
    <div class="col-8 text-left social_fa_top"><span class="count"><span id="fb_count">354</span>K</span> Likes</div>
    </div>
    </a>
    </li>
    <li class="twitter">
    <a href="#">
    <div class="row">
    <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-twitter"></i></span></div>
    <div class="col-8 text-left social_fa_top"><span class="count" id="tw_count">547</span> Followers</div>
    </div>
    </a>
    </li>
    <li class="google">
    <a href="#">
    <div class="row">
    <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-google-plus"></i></span></div>
    <div class="col-8 text-left social_fa_top"><span class="count" id="g+_count">678</span> Followers</div>
    </div>
    </a>
    </li>
    <li class="instagram">
    <a href="#">
    <div class="row">
    <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-instagram"></i></span></div>
    <div class="col-8 text-left social_fa_top"><span class="count">2M</span> Followers</div>
    </div>
    </a>
    </li>
    <li class="linkedin">
    <a href="#">
    <div class="row">
    <div class="col-4 text-right social_icon_top"><span class="social-icon text-center"><i class="fa fa-linkedin"></i></span></div>
    <div class="col-8 text-left social_fa_top"><span class="count" id="in_count">124</span> Followers</div>
    </div>
    </a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    </div> --}}
    
    
    
    <div class="modal fade" id="search_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <form>
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span class="float-right" aria-hidden="true">&times;</span>
    </button>
    <div class="input-group search_bar_small">
    <input type="text" class="form-control" placeholder="Search..." name="search">
    <span class="input-group-btn">
    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
    </span>
    </div>
    </div>
    </div>
    </form>
    </div>
    
    <div id="request_list">
    <div class="request_scrollable">
    <ul class="nav nav-tabs m-t-15">
    <li class="nav-item">
     <a class="nav-link active text-center" href="#settings" data-toggle="tab">Settings</a>
    </li>
    <li class="nav-item">
    <a class="nav-link text-center" href="#favourites" data-toggle="tab">Favorites</a>
    </li>
    </ul>
    <div class="tab-content">
    <div class="tab-pane active" id="settings">
    <div id="settings_section">
    <div class="layout_styles mx-3">
    <div class="row">
    <div class="col-12 m-t-35">
    <h4>Layout settings</h4>
    </div>
    </div>
    <form autocomplete="off">
    <div class="row">
    <div class="col-12">
    <div class="float-left m-t-20">Fixed Header</div>
    <div class="float-right m-t-15">
    <div id="setting_fixed_nav">
    <input class="make-switch" data-on-text="ON" data-off-text="OFF" type="checkbox" data-size="small">
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-12">
    <div class="float-left m-t-20">Fixed Menu</div>
    <div class="float-right m-t-15">
    <div id="setting_fixed_menunav">
    <input class="make-switch" data-on-text="ON" data-off-text="OFF" name="radioBox" type="checkbox" data-size="small">
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-12">
    <div class="float-left m-t-20">No Breadcrumb</div>
    <div class="float-right m-t-15">
    <div id="setting_breadcrumb">
    <input class="make-switch" data-on-text="ON" data-off-text="OFF" type="checkbox" data-size="small">
    </div>
    </div>
    </div>
    </div>
    </form>
    </div>
    <div class="mx-3">
    <div class="row">
    <div class="col-12 m-t-35">
    <h4 class="setting_title">General Settings</h4>
    </div>
    </div>
    <div class="data m-t-5">
    <div class="row">
    <div class="col-2"><i class="fa fa-bell-o setting_ions text-info"></i></div>
    <div class="col-7">
    <span class="chat_name">Notifications</span><br />
    Get new notifications
    </div>
    <div class="col-2 checkbox float-right">
    <label class="text-info">
    <input type="checkbox" value="" checked>
     <span class="cr"><i class="cr-icon fa fa-check"></i></span>
    </label>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2"><i class="fa fa-envelope-o setting_ions text-danger"></i>
    </div>
    <div class="col-7">
    <span class="chat_name">Messages</span><br />
    Get new messages
    </div>
    <div class="col-2 checkbox float-right">
    <label class="text-danger">
    <input type="checkbox" value="" checked>
    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
    </label>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <i class="fa fa-exclamation-triangle setting_ions text-warning"></i>
    </div>
    <div class="col-7">
    <span class="chat_name">Warnings</span><br />
    Get new warnings
    </div>
    <div class="col-2 checkbox float-right">
    <label class="text-warning">
    <input type="checkbox" value="" checked>
    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
    </label>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <i class="fa fa-calendar texlayout_stylest-primary setting_ions"></i>
    </div>
    <div class="col-7">
    <span class="chat_name">Events</span><br />
    Show new events
    </div>
    <div class="col-2 checkbox float-right">
    <label class="text-primary">
    <input type="checkbox" value="">
    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
    </label>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="tab-pane" id="favourites">
    <div id="requests" class="mx-3">
    <div class="m-t-35">
    <h4 class="setting_title">Favorites</h4>
    </div>
    <div class="data m-t-10">
    <div class="row">
    <div class="col-2">
    <img src="img/images1.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-8 message-data"><span class="chat_name">Philip J. Webb</span><br />
    Available
     </div>
    <div class="col-1">
    <i class="fa fa-circle text-success"></i>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/8.html" class="message-img avatar rounded-circle" alt="avatar1">
    </div>
    <div class="col-8 message-data">
    <span class="chat_name">Nancy T. Strozier</span><br />
    Away
    </div>
    <div class="col-1">
    <i class="fa fa-circle text-warning"></i>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle" alt="avatar1">
    </div>
    <div class="col-8 message-data">
    <span class="chat_name">Robbinson</span><br />
    Offline
    </div>
    <div class="col-1">
    <i class="fa fa-circle"></i>
    </div>
    </div>
    </div>
    <h4 class="setting_title">Contacts</h4>
    <div class="data m-t-10">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/7.html" class="message-img avatar rounded-circle" alt="avatar1">
    </div>
    <div class="col-8 message-data">
    <span class="chat_name">Chester Hardesty</span><br />
    Busy
    </div>
    <div class="col-1">
    <i class="fa fa-circle text-warning"></i>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-8 message-data">
    <span class="chat_name">Peter</span><br />
    Online
    </div>
    <div class="col-1">
    <i class="fa fa-circle text-warning"></i>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/6.html" class="message-img avatar rounded-circle" alt="avatar1">
    </div>
    <div class="col-8 message-data">
    <span class="chat_name">Devin Hartsell</span><br />
    Available
    </div>
    <div class="col-1">
    <i class="fa fa-circle text-success"></i>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/4.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-8 message-data">
    <span class="chat_name">Kimy Zorda</span><br />
    Available
    </div>
    <div class="col-1">
    <i class="fa fa-circle text-success"></i>
    </div>
    </div>
    </div>
    <div class="data">
    <div class="row">
    <div class="col-2">
    <img src="img/mailbox_imgs/5.html" class="message-img avatar rounded-circle" alt="avatar1"></div>
    <div class="col-8 message-data">
    <span class="chat_name">Jessica Bell</span><br />
    Offline
    </div>
    <div class="col-1">
    <i class="fa fa-circle"></i>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <div id="right">
    <div class="right_content">
    <div class="well-small dark m-t-15">
    <div class="row m-0">
    <div class="col-lg-12 p-d-0">
    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('blue_black_skin.html','css')">
    <div class="skin_blue skin_size b_t_r"></div>
    <div class="skin_blue_border skin_shaddow skin_size b_b_r blue"></div>
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
    {{-- </div>
    
    </div> --}}
    @endSection
    