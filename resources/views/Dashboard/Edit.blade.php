<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.admireadmin.com/admire2/edit_user.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2022 04:56:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<title>Edit Admin | Admire</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/logo1.html" />

<link type="text/css" rel="stylesheet" href="{{asset('css/components.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}" />


<link type="text/css" rel="stylesheet" href="{{asset('vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" />

<link type="text/css" rel="stylesheet" href="#" id="skin_change" />
</head>
<body>
<div class="preloader" style=" position: fixed;
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
<img src="{{asset('img/loader.html')}}" style=" width: 40px;" alt="loading...">
</div>
</div>
<div id="wrap">
<div id="top">

<nav class="navbar navbar-static-top">
<div class="container-fluid m-0">
<a class="navbar-brand" href="index-2.html">
<h4><img src="{{asset('img/logo1.html')}}" class="admin_img" alt="logo"> ADMIRE ADMIN</h4>
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
<img src="{{asset('img/mailbox_imgs/5.html')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/mailbox_imgs/8.html')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/mailbox_imgs/7.html')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/mailbox_imgs/6.html')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/mailbox_imgs/5.html')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/mailbox_imgs/8.html')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/mailbox_imgs/7.html')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/mailbox_imgs/6.html')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/mailbox_imgs/1.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/mailbox_imgs/2.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/mailbox_imgs/3.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/mailbox_imgs/6.html')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/mailbox_imgs/1.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/mailbox_imgs/2.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/mailbox_imgs/3.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/mailbox_imgs/6.html')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/mailbox_imgs/1.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/admin.jpg')}}" class="admin_img2 img-thumbnail rounded-circle avatar-img" alt="avatar"> <strong>{{$loggedUserInfo->Full_name}}</strong>
<span class="fa fa-sort-down white_bg"></span>
</button>
<div class="dropdown-menu admire_admin">
<a class="dropdown-item title" href="#">
Admire Admin</a>
<a class="dropdown-item" href="edit_user.html"><i class="fa fa-cogs"></i>
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
<a class="user-link" href="{{asset('storage/' . $loggedUserInfo->Image)}}">
<img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture" src="{{asset('storage/'.$loggedUserInfo->Image)}}">
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
<span class="link-title menu_hide">&nbsp;Dashboard 1</span>
</a>
</li>
<li>
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

<div id="content" class="bg-container">
<header class="head">
<div class="main-bar">
<div class="row no-gutters">
<div class="col-lg-6">
<h4 class="nav_top_align skin_txt">
<i class="fa fa-pencil"></i>
Edit Admin
</h4>
</div>
<div class="col-lg-6">
<ol class="breadcrumb float-right nav_breadcrumb_top_align">
<li class="breadcrumb-item">
<a href="index1.html">
<i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
</a>
</li>
<li class="breadcrumb-item">
<a href="#">Admin</a>
</li>
<li class="breadcrumb-item active">Edit Admin</li>
</ol>
</div>
</div>
</div>
</header>
<div class="outer">
<div class="inner bg-container">
<div class="row">
<div class="col">
<div class="card">
<div class="card-body m-t-25">
<div>
<h4>Personal Information</h4>
</div>
<form class="form-horizontal login_validator" id="tryitForm" action="/update_ad/{{$loggedUserInfo->id}}" method="post" enctype="multipart/form-data">
  @csrf
    @method('PUT')
  @if(Session::get('success'))

  <span class="alert alert-success">
      {{ Session::get('success') }}
  </span>
  @endIf
<div class="row">
<div class="col">
<div class="form-group row m-t-15">
<div class="col-12 col-lg-3 text-center text-lg-right">
<label class="col-form-label">Profile Pic</label>
</div>
<div class="col-12 col-lg-6 text-center text-lg-left">
<div class="fileinput fileinput-new" data-provides="fileinput">
<div class="fileinput-new img-thumbnail text-center">
<img src="{{$loggedUserInfo->Image ? asset('storage/' . $loggedUserInfo->Image) : asset('img/default-img.png')}}" width="100%" height="100%" alt="not found"></div>
<div class="fileinput-preview fileinput-exists img-thumbnail"></div>
<div class="m-t-20 text-center">
<span class="btn btn-primary btn-file">
<span class="fileinput-new">Select image</span>
<span class="fileinput-exists">Change</span>
{{-- <input type="file" name="img"> --}}
<input name="img" type="file"> 
</span>
@error('img')
<p class="text-danger">{{$message}}</p>
@endError
<a href="#" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">Remove</a>
</div>
</div>
</div>
</div>
<div class="form-group row m-t-25">
  <div class="col-12 col-lg-3 text-lg-right">
  <label for="u-name" class="col-form-label">Full Name *</label>
  </div>
  <div class="col-12 col-xl-6 col-lg-8">
  <div class="input-group">
  <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
  </span>
  <input type="text" value="{{ $loggedUserInfo->Full_name }}" name="fullName" id="u-name" class="form-control">
  </div>
  @error('fullName')
  <p class="text-danger">{{$message}}</p>
@endError
  </div>
  </div>
<div class="form-group row m-t-25">
<div class="col-12 col-lg-3 text-lg-right">
<label for="u-name" class="col-form-label">User Name *</label>
</div>
<div class="col-12 col-xl-6 col-lg-8">
<div class="input-group">
<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
</span>
<input type="text" value="{{ $loggedUserInfo->Username }}" name="firstName" id="u-name" class="form-control">
</div>
@error('firstName')
<p class="text-danger">{{$message}}</p>
@endError
</div>
</div>
<div class="form-group row">
<div class="col-12 col-lg-3 text-lg-right">
<label for="email" class="col-form-label">Email *
</label>
</div>
<div class="col-12 col-xl-6 col-lg-8">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-envelope text-primary"></i></span>
<input type="text" value="{{$loggedUserInfo->Email}}" id="email" name="email" class="form-control">
</div>
@error('email')
<p class="text-danger">{{$message}}</p>
@endError
</div>
</div>
<div class="form-group row">
<div class="col-12 col-lg-3 text-lg-right">
{{-- <label for="pwd" class="col-form-label">Password *</label> --}}
</div>
<div class="col-12 col-xl-6 col-lg-8">
<div class="input-group">
{{-- <span class="input-group-addon"><i class="fa fa-lock text-primary"></i></span>
<input type="password" value="" name="password" id="pwd" class="form-control"> --}}
</div>
</div>
</div>
<div class="form-group row">
<div class="col-12 col-lg-3 text-lg-right">
{{-- <label for="cpwd" class="col-form-label">Confirm Password *</label>
</div>
<div class="col-12 col-xl-6 col-lg-8">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-lock text-primary"></i></span>
<input type="password" name="confirmpassword" value="" id="cpwd" class="form-control">
</div> --}}
</div>
</div>
<div class="form-group row">
<div class="col-12 col-lg-3 text-lg-right">
<label for="phone" class="col-form-label">Phone *</label>
</div>
<div class="col-12 col-xl-6 col-lg-8">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-phone text-primary"></i></span>
<input type="text" id="phone" name="fone" class="form-control" value="{{$loggedUserInfo->Phone}}">
</div>
@error('fone')
<p class="text-danger">{{$message}}</p>
@endError
</div>
</div>
<div class="form-group gender_message row">
<div class="col-12 col-lg-3 text-lg-right">
{{-- <label class="col-form-label">Gender *</label>
</div>
<div class="col-12 col-xl-6 col-lg-8">
<div class="custom-controls-stacked">
<label class="custom-control custom-radio">
<input id="radio1" type="radio" name="gender" class="custom-control-input" checked>
<span class="custom-control-indicator"></span>
<span class="custom-control-description">Male</span>
</label>
 <label class="custom-control custom-radio">
<input id="radio2" type="radio" name="gender" class="custom-control-input">
<span class="custom-control-indicator"></span>
<span class="custom-control-description">Female</span>
</label>
</div>
</div>
</div>
<div class="form-group row"> --}}
<div class="col-12 col-lg-3 text-lg-right">
{{-- <label for="address" class="col-form-label">Address *
</label>
</div>
<div class="col-12 col-xl-6 col-lg-8">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
<input type="text" value="Australia" id="address" name="address1" class="form-control">
</div>
</div> --}}
</div>
<div class="form-group row">
<div class="col-12 col-lg-3 text-lg-right">
{{-- <label for="city" class="col-form-label">City *</label>
</div>
<div class="col-12 col-xl-6 col-lg-8">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
<input type="text" value="Nakia" name="city" id="city" class="form-control">
</div> --}}
</div>
{{-- </div>
<div class="form-group row"> --}}
<div class="col-12 col-lg-3 text-lg-right">
{{-- <label for="pincode" class="col-form-label">Pincode *
</label> --}}
</div>
<div class="col-12 col-xl-6 col-lg-8">
{{-- <div class="input-group">
<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
<input type="text" value="522522" name="pincode" id=pincode class="form-control">
</div> --}}
</div>
</div>
{{-- <div class="form-group row">
<div class="col-12 col-lg-3 text-lg-right">
<label for="checkbox1" class="col-form-label">Status *</label>
</div> --}}
<div class="col-12 col-xl-6 col-lg-8">
{{-- <div>
<label class="custom-control custom-checkbox">
<input id="checkbox1" type="checkbox" name="activate" class="custom-control-input" checked>
<span class="custom-control-indicator"></span>
<span class="custom-control-description">Activate your account</span>
</label> --}}
</div>
</div>
</div>
<div class="form-group row">
<div class="col-12 col-lg-9 ml-auto">
<button class="btn btn-primary" id="submit2" type="submit">
Save
</button>
<input type="reset" class="btn btn-warning" value='Reset' id="clear" />
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

</div>


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
</div>

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
<img src="{{asset('img/images1.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/mailbox_imgs/8.html')}}" class="message-img avatar rounded-circle" alt="avatar1">
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
<img src="{{asset('img/mailbox_imgs/3.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1">
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
<img src="{{asset('img/mailbox_imgs/7.html')}}" class="message-img avatar rounded-circle" alt="avatar1">
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
<img src="{{asset('img/mailbox_imgs/2.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/mailbox_imgs/6.html')}}" class="message-img avatar rounded-circle" alt="avatar1">
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
<img src="{{asset('img/mailbox_imgs/4.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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
<img src="{{asset('img/mailbox_imgs/5.html')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
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



<script type="text/javascript" src="{{asset('asset/js/components.j')}}s"></script>
<script type="text/javascript" src="{{asset('asset/js/custom.js')}}"></script>


<script type="text/javascript" src="{{asset('asset/js/pluginjs/jasny-bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/holderjs/js/holder.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>

<script type="text/javascript" src="{{asset('asset/js/pages/validation.js')}}"></script>
</body>

<!-- Mirrored from demo.admireadmin.com/admire2/edit_user.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2022 04:56:31 GMT -->
</html>
