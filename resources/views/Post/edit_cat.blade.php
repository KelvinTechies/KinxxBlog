@extends('LayoutsDashboard.app')

@section('main')


{{-- <!doctype html>
<html class="no-js" lang="en"> --}}

<!-- Mirrored from demo.admireadmin.com/admire2/form_layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2022 05:00:12 GMT -->
<!-- Added by HTTrack -->
{{-- <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8"> --}}
<title>Edit Posts</title>
{{-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/logo1.html" />

<link type="text/css" rel="stylesheet" href="{{asset('css/components.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}" />


<link rel="stylesheet" href="{{ ('vendors/intl-tel-input/css/intlTelInput.css') }}">
<link type="text/css" rel="stylesheet" href="{{asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('vendors/sweetalert/css/sweetalert2.min.css')}}" />


<link type="text/css" rel="stylesheet" href="{{asset('css/pages/sweet_alert.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('css/pages/form_layouts.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('#" id="skin_change')}}" />

</head>
<body> --}}
{{-- <div class="{{asset('preloader')}}" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
<div class="{{asset('preloader_img')}}" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
<img src="{{asset('img/loader.html')}}" style=" width: 40px;" alt="loading...">
</div>
</div> --}}
{{-- <div id="wrap">
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
<img src="{{asset('img/admin.jpg')}}" class="admin_img2 img-thumbnail rounded-circle avatar-img" alt="avatar"> <strong>Micheal</strong>
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
<a class="dropdown-item" href="login2.html"><i class="fa fa-sign-out"></i>
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
<a class="user-link" href="#">
<img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture" src="{{asset('img/admin.jpg')}}">
<p class="user-info menu_hide">Welcome Micheal</p>
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
<li> --}}
{{-- <a href="index-2.html">
<i class="fa fa-tachometer"></i>
<span class="link-title menu_hide">&nbsp;Dashboard 2
</span>
</a>
</li>
<li class="dropdown_menu">
<a href="javascript:;">
<i class="fa fa-anchor"></i>
<span class="link-title menu_hide">&nbsp; Components</span>
<span class="fa arrow menu_hide"></span>
</a>
<ul>
<li>
<a href="general_components.html">
<i class="fa fa-angle-right"></i>
&nbsp; General Components
</a>
</li>
<li>
<a href="cards.html">
<i class="fa fa-angle-right"></i>
<span class="link-title">&nbsp;Cards</span>
</a>
</li>
<li>
<a href="transitions.html">
<i class="fa fa-angle-right"></i>
&nbsp; Transitions
</a>
</li>
<li>
<a href="buttons.html">
<i class="fa fa-angle-right"></i>
&nbsp; Buttons
</a>
</li>
<li>
<a href="icons.html">
<i class="fa fa-angle-right"></i>
&nbsp; Icons
</a>
</li>
<li>
<a href="tooltips.html">
<i class="fa fa-angle-right"></i>
&nbsp; Tooltips
</a>
</li>
<li>
<a href="animations.html">
<i class="fa fa-angle-right"></i>
&nbsp; Animations
</a>
</li>
<li>
<a href="sliders.html">
<i class="fa fa-angle-right"></i>
&nbsp; Sliders
</a>
 </li>
<li>
<a href="notifications.html">
<i class="fa fa-angle-right"></i>
&nbsp; Notifications
</a>
</li>
<li>
<a href="p_notify.html">
<i class="fa fa-angle-right"></i>
&nbsp; P-Notify
</a>
</li>
<li>
<a href="izitoast.html">
<i class="fa fa-angle-right"></i>
&nbsp; Izi-Toast
</a>
</li>
<li>
<a href="cropper.html">
<i class="fa fa-angle-right"></i>
&nbsp; Cropper
</a>
</li>
<li>
<a href="file_upload.html">
<i class="fa fa-angle-right"></i> &nbsp; File Upload
</a>
</li>
<li>
<a href="jstree.html">
<i class="fa fa-angle-right"></i>
&nbsp;Js Tree
</a>
</li>
<li>
<a href="modal.html">
<i class="fa fa-angle-right"></i>
&nbsp; Modals
</a>
</li>
<li>
<a href="sortable.html">
<i class="fa fa-angle-right"></i>
&nbsp; Sortable
</a>
</li>
<li>
<a href="sweet_alert.html">
<i class="fa fa-angle-right"></i>
&nbsp; Sweet alerts
</a>
</li>
<li>
<a href="grids_layout.html">
<i class="fa fa-angle-right"></i>
&nbsp; Grid View
</a>
</li>
</ul>
</li>
<li class="dropdown_menu">
<a href="javascript:;">
<i class="fa fa-th-large"></i>
<span class="link-title menu_hide">&nbsp; Widgets</span>
<span class="fa arrow menu_hide"></span>
</a>
<ul>
<li>
<a href="widgets1.html">
<i class="fa fa-angle-right"></i>
&nbsp; Widgets 1
</a>
</li>
<li>
<a href="widgets2.html">
<i class="fa fa-angle-right"></i>
&nbsp; Widgets 2
 </a>
</li>
<li>
<a href="widgets3.html">
<i class="fa fa-angle-right"></i>
<span class="link-title">&nbsp; Widgets 3</span>
</a>
</li>
</ul>
</li>
<li class="dropdown_menu active">
<a href="javascript:;">
<i class="fa fa-pencil"></i>
<span class="link-title menu_hide">&nbsp; Forms</span>
<span class="fa arrow menu_hide"></span>
</a>
<ul>
<li>
<a href="form_elements.html">
<i class="fa fa-angle-right"></i>
&nbsp; Form Elements
</a>
</li>
<li class="active">
<a href="form_layouts.html">
<i class="fa fa-angle-right"></i>
&nbsp; Form Layouts
</a>
</li>
<li>
<a href="form_validations.html">
<i class="fa fa-angle-right"></i>
&nbsp; Form Validations
</a>
</li>
<li>
<a href="form_editors.html">
<i class="fa fa-angle-right"></i>
&nbsp; Form Editors
</a>
</li>
<li>
<a href="radio_checkbox.html">
<i class="fa fa-angle-right"></i>
&nbsp; Radio and Checkbox
</a>
</li>
<li>
<a href="form_wizards.html">
<i class="fa fa-angle-right"></i>
&nbsp; Wizards
</a>
</li>
<li>
<a href="datetime_picker.html">
<i class="fa fa-angle-right"></i>
&nbsp; Date Time Picker
</a>
</li>
<li>
<a href="ratings.html">
<i class="fa fa-angle-right"></i>
&nbsp; Ratings
</a>
</li>
</ul>
</li>
<li class="dropdown_menu">
<a href="#">
<i class="fa fa-th"></i>
<span class="link-title menu_hide">&nbsp; Tables</span>
<span class="fa arrow menu_hide"></span>
</a>
<ul>
<li>
<a href="simple_tables.html">
<i class="fa fa-angle-right"></i>
&nbsp; Simple Tables
 </a>
</li>
<li>
<a href="simple_datatables.html">
<i class="fa fa-angle-right"></i>
<span class="link-title">&nbsp; Simple Data Tables </span>
</a>
</li>
<li>
<a href="datatables.html">
<i class="fa fa-angle-right"></i>
&nbsp; Data Tables
</a>
</li>
<li>
<a href="advanced_tables.html">
<i class="fa fa-angle-right"></i>
&nbsp; Advanced Tables
</a>
</li>
</ul>
</li>
<li class="dropdown_menu">
<a href="#">
<i class="fa fa-bar-chart"></i>
<span class="link-title menu_hide">&nbsp; Charts</span>
<span class="fa arrow menu_hide"></span>
</a>
<ul>
<li>
<a href="charts.html">
<i class="fa fa-angle-right"></i>
&nbsp; Flot Charts
</a>
</li>
<li>
<a href="advanced_charts.html">
<i class="fa fa-angle-right"></i>
&nbsp; Advanced Charts
</a>
</li>
<li>
<a href="chartist.html">
<i class="fa fa-angle-right"></i>
&nbsp; Chartist
</a>
</li>
<li>
<a href="rickshaw.html">
<i class="fa fa-angle-right"></i>
&nbsp; Rickshaw Charts
</a>
</li>
</ul>
</li>
<li class="dropdown_menu">
<a href="#">
<i class="fa fa-user"></i>
<span class="link-title menu_hide">&nbsp; Users</span>
<span class="fa arrow menu_hide"></span>
</a>
<ul>
<li>
<a href="users.html">
<i class="fa fa-angle-right"></i>
&nbsp; User Grid
</a>
</li>
<li>
<a href="add_user.html">
<i class="fa fa-angle-right"></i>
&nbsp; Add User
</a>
</li>
<li>
<a href="view_user.html">
<i class="fa fa-angle-right"></i>
&nbsp; User Profile
</a>
 </li>
<li>
<a href="delete_user.html">
<i class="fa fa-angle-right"></i>
&nbsp; Delete User
</a>
</li>
</ul>
</li>
<li>
<a href="calendar.html">
<i class="fa fa-calendar"></i>
<span class="link-title menu_hide">&nbsp; Calendar</span>
<span class="badge badge-pill badge-primary float-right calendar_badge menu_hide">7</span>
</a>
</li>
<li class="dropdown_menu">
<a href="javascript:;">
<i class="fa fa-picture-o"></i>
<span class="link-title menu_hide">&nbsp; Galleries</span>
<span class="fa arrow menu_hide"></span>
</a>
<ul>
<li>
<a href="gallery.html">
<i class="fa fa-angle-right"></i> &nbsp; Gallery
</a>
</li>
<li>
<a href="video_gallery.html">
<i class="fa fa-angle-right"></i> &nbsp; Video Gallery
</a>
</li>
</ul>
</li>
<li class="dropdown_menu">
<a href="#">
<i class="fa fa-envelope-o"></i>
<span class="link-title menu_hide">&nbsp; Email</span>
<span class="fa arrow menu_hide"></span>
</a>
<ul>
<li>
<a href="mail_compose.html">
<i class="fa fa-angle-right"></i>
&nbsp; Compose
</a>
</li>
<li>
<a href="mail_inbox.html">
<i class="fa fa-angle-right"></i>
&nbsp; Inbox
</a>
</li>
<li>
<a href="mail_view.html">
<i class="fa fa-angle-right"></i>
&nbsp; View
</a>
</li>
<li>
<a href="mail_sent.html">
<i class="fa fa-angle-right"></i>
&nbsp; Sent
</a>
</li>
<li>
<a href="mail_spam.html">
<i class="fa fa-angle-right"></i>
&nbsp; Spam
</a>
</li>
<li>
<a href="mail_draft.html">
<i class="fa fa-angle-right"></i>
&nbsp; Draft
</a>
</li>
<li>
 <a href="mail_trash.html">
<i class="fa fa-angle-right"></i>
&nbsp; Trash
</a>
</li>
</ul>
</li>
<li class="dropdown_menu">
<a href="#">
<i class="fa fa-map-marker"></i>
<span class="link-title menu_hide">&nbsp; Maps</span>
<span class="fa arrow menu_hide"></span>
</a>
<ul>
<li>
<a href="maps.html">
<i class="fa fa-angle-right"></i>
&nbsp; Google Maps
</a>
</li>
<li>
<a href="jqvmaps.html">
<i class="fa fa-angle-right"></i>
&nbsp; Vector Maps
</a>
</li>
</ul>
</li>
<li class="dropdown_menu">
<a href="javascript:;">
<i class="fa fa-file"></i>
<span class="link-title menu_hide">&nbsp; Pages</span>
<span class="fa arrow menu_hide"></span>
</a>
<ul>
<li>
<a href="404.html">
<i class="fa fa-angle-right"></i>
&nbsp; 404
</a>
</li>
<li>
<a href="500.html">
<i class="fa fa-angle-right"></i>
&nbsp; 500
</a>
</li>
<li>
<a href="login1.html">
<i class="fa fa-angle-right"></i>
&nbsp; Login 1
</a>
</li>
<li>
<a href="login2.html">
<i class="fa fa-angle-right"></i>
&nbsp;<span class="link-title">&nbsp;Login 2</span>
</a>
</li>
<li>
<a href="login3.html">
<i class="fa fa-angle-right"></i>
&nbsp;<span class="link-title">&nbsp;Login 3</span>
</a>
</li>
<li>
<a href="register1.html">
<i class="fa fa-angle-right"></i>
&nbsp; Register 1
</a>
</li>
<li>
<a href="register2.html">
<i class="fa fa-angle-right"></i>
&nbsp;<span class="link-title">&nbsp;Register 2</span>
</a>
</li>
<li>
<a href="register3.html">
<i class="fa fa-angle-right"></i>
&nbsp;<span class="link-title">&nbsp;Register 3</span>
</a>
</li>
<li>
<a href="lockscreen.html">
<i class="fa fa-angle-right"></i>
&nbsp; Lock Screen 1
</a>
</li>
<li>
<a href="lockscreen2.html">
<i class="fa fa-angle-right"></i>
&nbsp; Lock Screen 2
</a>
</li>
<li>
<a href="lockscreen3.html">
<i class="fa fa-angle-right"></i>
&nbsp; Lock Screen 3
</a>
</li>
<li>
<a href="invoice.html">
<i class="fa fa-angle-right"></i>
&nbsp; Invoice
</a>
</li>
<li>
<a href="blank.html">
<i class="fa fa-angle-right"></i>
&nbsp; Blank Page
</a>
</li>
</ul>
</li>
<li class="dropdown_menu">
<a href="javascript:;">
<i class="fa fa-th"></i>
<span class="link-title menu_hide">&nbsp; Layouts</span>
<span class="fa arrow menu_hide"></span>
</a>
<ul>
<li>
<a href="boxed.html">
<i class="fa fa-angle-right"></i>
&nbsp; Boxed Layout
</a>
</li>
<li>
<a href="fixed-header-boxed.html">
<i class="fa fa-angle-right"></i>
&nbsp; Boxed &amp; Fixed Header
</a>
</li>
<li>
<a href="fixed-header-menu.html">
<i class="fa fa-angle-right"></i>
&nbsp; Fixed Header &amp; Menu
</a>
</li>
<li>
<a href="fixed-header.html">
<i class="fa fa-angle-right"></i>
&nbsp; Fixed Header
</a>
</li>
<li>
<a href="fixed-menu-boxed.html">
<i class="fa fa-angle-right"></i>
&nbsp; Boxed &amp; Fixed Menu
</a>
</li>
<li>
<a href="fixed-menu.html">
<i class="fa fa-angle-right"></i>
&nbsp; Fixed Menu
</a>
</li>
<li>
<a href="no-header.html">
<i class="fa fa-angle-right"></i>
&nbsp; No Header
</a>
</li>
<li>
<a href="no-left-sidebar.html">
<i class="fa fa-angle-right"></i>
&nbsp; No Left Sidebar
</a>
</li>
</ul>
</li>
<li class="dropdown_menu">
<a href="javascript:;">
<i class="fa fa-sitemap"></i>
<span class="link-title menu_hide">&nbsp; Multi Level Menu</span>
<span class="fa arrow menu_hide"></span>
</a>
<ul class="sub-menu">
<li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 1
<span class="fa arrow"></span>
</a>
<ul class="sub-menu sub-submenu">
<li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 2
</a>
</li>
<li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 2
</a>
</li>
<li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 2
<span class="fa arrow"></span>
</a>
<ul class="sub-menu sub-submenu">
<li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 3
</a>
</li>
<li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 3
</a>
</li>
<li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 3
<span class="fa arrow"></span>
</a>
<ul class="sub-menu sub-submenu">
 <li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 4
</a>
</li>
<li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 4
</a>
</li>
<li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 4
<span class="fa arrow"></span>
</a>
<ul class="sub-menu sub-submenu">
<li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 5
</a>
</li>
<li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 5
</a>
</li>
<li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 5
</a>
</li>
</ul>
</li>
</ul>
</li>
<li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 4
</a>
</li>
</ul>
</li>
<li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 2
</a>
</li>
</ul>
 </li>
<li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 1
</a>
</li>
<li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 1
<span class="fa arrow"></span>
</a>
<ul class="sub-menu sub-submenu">
<li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 2
</a>
</li>
<li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 2
</a>
</li>
<li>
<a href="javascript:;">
<i class="fa fa-angle-right"></i>
&nbsp;Level 2
</a>
</li>
</ul>
</li>
</ul>
</li>
</ul> --}}

{{-- </div>
</div> --}}

{{-- <div id="content" class="bg-container">
<header class="head">
<div class="main-bar">
<div class="row no-gutters">
<div class="col-sm-5 col-lg-6 skin_txt">
<h4 class="nav_top_align">
<i class="fa fa-pencil"></i>
Form Layouts
</h4>
</div>
<div class="col-sm-7 col-lg-6">
<ol class="breadcrumb float-right nav_breadcrumb_top_align">
<li class="breadcrumb-item">
<a href="index1.html">
<i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
</a>
</li>
<li class="breadcrumb-item">
<a href="#">Forms</a>
</li>
<li class="active breadcrumb-item">Form Layouts</li>
</ol>
</div>
</div>
</div>
</header>
<div class="outer">
<div class="inner bg-container">
<div class="row">
<div class="col-12 col-xl-6">
<div class="card">
<div class="card-header bg-white">
Basic Sign In Layout
</div>
<div class="card-body">

<div class="row justify-content-center">
 <div class="col-lg-10">
<div class="form-check row m-t-30">
<div class="col-lg-12">
<label class="custom-control custom-radio signin_radio1">
<input id="radio" name="radio1" type="radio" class="custom-control-input">
<span class="custom-control-indicator"></span>
<span class="custom-control-description">Username</span>
</label>
<label class="custom-control custom-radio signin_radio2">
<input id="radio2" name="radio1" type="radio" class="custom-control-input" checked>
<span class="custom-control-indicator"></span>
<span class="custom-control-description"> E-mail</span>
</label>
</div>
</div>
<form class="form-horizontal">
<fieldset>

<div class="form-group row">
<div class="col-lg-12 user_icon_change1">
<label for="email" class="col-form-label form-group-horizontal form_lay_email1">
E-mail
</label>
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-envelope"></i>
</span>
<input type="text" class="form-control form_lay_input1" id="email" name="user" placeholder="E-mail">
</div>
</div>
</div>
<div class="form-group row">
<div class="col-lg-12">
<label for="password" class="col-form-label form-group-horizontal">
Password
</label>
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-lock"></i>
</span>
<input type="password" id="password" class="form-control" name="password" placeholder="Password">
</div>
</div>
</div>
<div class="form-group row">
<div class="col-lg-12">
<label for="confirm" class="col-form-label form-group-horizontal">
Confirm Password
</label>
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-lock"></i>
</span>
<input type="password" id="confirm" class="form-control" name="password" placeholder="Confirm Password">
</div>
</div>
</div>
<div class="form-check row">
<div class="col-lg-6">
<div class="input-group">
<label for="login" class="custom-control custom-checkbox">
<input type="checkbox" id="login" class="custom-control-input">
<span class="custom-control-indicator"></span>
<span class="custom-control-description">Keep me logged in</span>
</label>
</div>
</div>
</div>
<div class="form-group row">
<div class="col-lg-12">
<a href="#">Forgot Password?</a>
</div>
</div>
<div class="form-group row">
<div class="col-lg-11">
<button class="btn btn-primary layout_btn_prevent">Sign In</button>
</div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
</div>

<div class="col-12 col-xl-6">
<div class="row">
<div class="col-lg-12">
<div class="card inline_section_align media_max_1199">
<div class="card-header bg-white">
Inline Sign In Layout
</div>
<div class="card-body">
<form>
<fieldset>

<div class="form-group row form_inline_inputs_bot">
<div class="col-lg-1"></div>
 <div class="col-lg-4">
<div class="input-group m-t-35">
<input type="text" class="form-control" name="user" placeholder="E-mail">
</div>
</div>
<div class="col-lg-4">
<div class="input-group m-t-35">
<input type="password" class="form-control" name="password" placeholder="Password">
</div>
</div>
<div class="col-lg-3 m-t-35">
<button class="btn btn-primary layout_btn_prevent btn-responsive form_inline_btn_margin-top">Sign In</button>
</div>
</div>
</fieldset>
</form>
</div>
</div>
</div>

<div class="col-lg-12">
<div class="card m-t-35">
<div class="card-header bg-white">
Horizontal Sign In Layout
</div>
<div class="card-body ">

<div class="form-check row m-t-30">
<div class="col-lg-9 ml-auto">
<label for="radio3" class="custom-control custom-radio signin_radio3">
<input id="radio3" name="radio3" type="radio" class="custom-control-input" checked>
<span class="custom-control-indicator"></span>
<span class="custom-control-description">Username</span>
</label>
<label for="radio4" class="custom-control custom-radio signin_radio4">
<input id="radio4" name="radio3" type="radio" class="custom-control-input">
<span class="custom-control-indicator"></span>
<span class="custom-control-description"> E-mail</span>
</label>
</div>
</div>
<form class="form-horizontal">
<fieldset>

<div class="form-group row">
<div class="col-lg-3 text-lg-right">
<label for="username2" class="col-form-label form_lay_email2">Username</label>
 </div>
<div class="col-lg-8 user_icon_change2">
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-user"></i>
</span>
<input type="text" class="form-control form_lay_input2" id="username2" placeholder="Username">
</div>
</div>
</div>
<div class="form-group row">
<div class="col-lg-3 text-lg-right">
<label for="horz_password" class="col-form-label">Password</label>
</div>
<div class="col-lg-8">
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-lock"></i>
</span>
<input type="password" class="form-control" id="horz_password" placeholder="Password">
</div>
</div>
</div>
<div class="form-check row">
<div class="col-lg-9 ml-auto">
<div>
<label class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input">
<span class="custom-control-indicator"></span>
<span class="custom-control-description">Keep me logged in</span>
</label>
</div>
</div>
</div>
<div class="form-group row">
<div class="col-lg-9 ml-auto">
<button class="btn btn-primary layout_btn_prevent">Sign In</button>
</div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
</div>

<div class="col-12 col-xl-6">
<div class="card m-t-35">
<div class="card-header bg-white">
Basic Sign Up Layout
</div>
<div class="card-body">
 <div class="row justify-content-center">
<div class="col-lg-10">
<form class="form-horizontal">
<fieldset>

<div class="form-group row m-t-25">
<div class="col-lg-12">
<label for="signup_name" class="col-form-label form-group-horizontal">
First Name
</label>
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-user"></i>
</span>
<input type="text" class="form-control" id="signup_name" placeholder="First Name">
</div>
</div>
</div>

<div class="form-group row">
<div class="col-lg-12">
<label for="signup_lastname" class="col-form-label form-group-horizontal">
Last Name
</label>
<div class="input-group">
<input type="text" class="form-control" id="signup_lastname" placeholder="Last Name">
<span class="input-group-addon">
<i class="fa fa-user"></i>
</span>
</div>
</div>
</div>

<div class="form-group row">
<div class="col-lg-12">
<label for="signup_email" class="col-form-label form-group-horizontal">
E-mail
</label>
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-envelope"></i>
</span>
<input type="text" class="form-control" id="signup_email" placeholder="E-mail">
</div>
</div>
</div>

<div class="form-group row">
<div class="col-lg-12">
 <label for="signup_password" class="col-form-label form-group-horizontal">
Password
</label>
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-lock"></i>
</span>
<input type="password" id="signup_password" class="form-control" placeholder="Password">
</div>
</div>
</div>

<div class="form-group row">
<div class="col-lg-12">
<label for="signup_confirm" class="col-form-label form-group-horizontal">
Confirm Password
</label>
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-lock"></i>
</span>
<input type="password" id="signup_confirm" class="form-control" placeholder="Confirm Password">
</div>
</div>
</div>

<div class="form-group row">
<div class="col-lg-12">
<label for="signup_gender" class="col-form-label form-group-horizontal">
Gender
</label>
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-users"></i>
</span>
<select class="form-control" id="signup_gender">
<option value="male">Male</option>
<option value="female">Female</option>
</select>
</div>
</div>
</div>
<div class="form-group row">
<div class="col-lg-12">
<label for="signup_dob" class="col-form-label orm-group-horizontal">
Date Of Birth
</label>
<div class="input-group">
 <span class="input-group-addon">D</span>
<select class="form-control form_lay_select_padding" id="signup_dob">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select>
<span class="input-group-addon">M</span>
<select class="form-control form_lay_select_padding">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
</select>
<span class="input-group-addon">Y</span>
<select class="form-control form_lay_select_padding">
<option>2000</option>
<option>2001</option>
<option>2002</option>
<option>2003</option>
<option>2004</option>
<option>2005</option>
<option>2006</option>
<option>2007</option>
<option>2008</option>
<option>2009</option>
<option>2010</option>
<option>2011</option>
<option>2012</option>
<option>2013</option>
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
<option>2018</option>
<option>2019</option>
<option>2020</option>
</select>
</div>
</div>
</div>

<div class="form-check row">
<div class="col-lg-11">
<label class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input">
<span class="custom-control-indicator"></span>
<span class="custom-control-description">Keep me logged in</span>
</label>
</div>
</div>
<div class="form-group row">
<div class="col-lg-11">
 <a href="#">Forgot Password?</a>
</div>
</div>
<div class="form-group row">
<div class="col-lg-11">
<button class="btn btn-primary layout_btn_prevent">Sign Up</button>
<button class="btn btn-warning layout_btn_prevent">Cancel</button>
</div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
</div>

<div class="col-12 col-xl-6">
<div class="card m-t-35">
<div class="card-header bg-white">
Horizontal Sign Up Layout
</div>
<div class="card-body">
<form class="form-horizontal">
<fieldset>

<div class="form-group row m-t-35">
<div class="col-lg-3 text-lg-right">
<label for="name3" class="col-form-label">First Name</label>
</div>
<div class="col-lg-8">
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-user"></i>
</span>
<input type="text" id="name3" class="form-control" placeholder="First Name">
</div>
</div>
</div>

<div class="form-group row">
<div class="col-lg-3 text-lg-right">
<label for="lastname3" class="col-form-label">Last Name</label>
</div>
<div class="col-lg-8">
<div class="input-group">
<input type="text" class="form-control" id="lastname3" placeholder="Last Name">
<span class="input-group-addon">
<i class="fa fa-user"></i>
</span>
</div>
</div>
</div>

<div class="form-group row">
<div class="col-lg-3 text-lg-right">
<label for="email3" class="col-form-label">E-mail</label>
</div>
<div class="col-lg-8">
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-envelope"></i>
</span>
<input type="text" id="email3" class="form-control" placeholder="E-mail">
</div>
</div>
</div>

<div class="form-group row">
<div class="col-lg-3 text-lg-right">
<label for="password3" class="col-form-label">Password</label>
</div>
<div class="col-lg-8">
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-lock"></i>
</span>
<input type="password" id="password3" class="form-control" placeholder="Password">
</div>
</div>
</div>

<div class="form-group row">
<div class="col-lg-3 text-lg-right">
<label for="confirm3" class="col-form-label">Confirm Password</label>
</div>
<div class="col-lg-8">
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-lock"></i>
</span>
<input type="password" id="confirm3" class="form-control" placeholder="Confirm Password">
</div>
</div>
</div>

<div class="form-group row">
<div class="col-lg-3 text-lg-right">
<label for="gender3" class="col-form-label">Gender</label>
</div>
<div class="col-lg-8">
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-users"></i>
</span>
<select class="form-control" id="gender3">
<option>Male</option>
<option>Female</option>
</select>
 </div>
</div>
</div>

<div class="form-group row">
<div class="col-lg-9 ml-auto">
<label class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input">
<span class="custom-control-indicator"></span>
<span class="custom-control-description"> I Agree Terms to the
<a href="#">Terms and Conditions</a></span>
</label>
</div>
</div>
<div class="form-group row">
<div class="col-lg-9 ml-auto">
<button class="btn btn-primary layout_btn_prevent">Sign Up</button>
<button class="btn btn-warning layout_btn_prevent">Cancel</button>
</div>
</div>
</fieldset>
</form>
</div>
</div>
<div class="card m-t-30">
<div class="card-header bg-white">
OTP Layout
</div>
<div class="card-body">
<form class="form-horizontal" id="otp_validation">
<fieldset>

<div class="form-group row m-t-30">
<div class="col-xl-12 text-center">
<span>
Please Enter 10 digit mobile number to receive OTP.
</span>
</div>
</div>
<div class="form-group row">
<div class="col-lg-3 text-lg-right">
<label for="onetime_password" class="col-form-label">Mobile Number</label>
</div>
<div class="col-lg-8">
<input type="tel" name="digits_only" class="form-control" id="onetime_password" autocomplete="off" required>
</div>
</div>
<div class="form-group row">
<div class="col-lg-9 ml-auto">
<button type="submit" id="confirm_tel" class="btn btn-primary">Confirm</button>
</div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
  --}}
  @if(Session::get('success'))

  <span class="alert alert-Success">
      {{ Session::get('success') }}
  </span>
  @endIf
<div class="col-12">
<div class="card m-t-35">
<div class="card-header bg-white">
    {{-- {{$reqs -> $reqs}} --}}
        
Update Posts
</div>
<div class="card-body">
<form class="form-horizontal" action="/updated/{{$reqs->id}}" method="post" enctype="multipart/form-data">
  @csrf

  @method('PUT')
<fieldset>
<div class="form-group row m-t-35">
<div class="col-lg-3 col-xl-2 text-lg-right">
<label for="name4" class=" col-form-label">Author</label>
</div>
<div class="col-lg-8 col-xl-4">
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-user"></i>
</span>
<input type="text" id="name4" value="{{$reqs->Author}}" name="author" class="form-control" placeholder="Author">
</div>
@error('author')
<p class="text-danger">{{$message}}</p>
@endError

</div>
<div class="col-lg-3 col-xl-2  text-lg-right">
<label for="name5" class="col-form-label two_column_label_margintop">Content</label>
</div>
<div class="col-lg-8 col-xl-4  two_column_signup_margintop">
<div class="input-group">
<input type="text" value="{{$reqs->Content}}" id="name5" name="content" class="form-control" placeholder="Content">
<span class="input-group-addon">
<i class="fa fa-container"></i>
</span>
</div>
@error('content')
<p class="text-danger">{{$message}}</p>
@endError
</div>
</div>
<div class="form-group row">
<div class="col-lg-3 col-xl-2 text-lg-right">
<label for="username4" class="col-form-label">Title</label>
</div>
<div class="col-lg-8 col-xl-4">
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-user"></i>
</span>
<input type="text" value="{{$reqs->Title}}" id="username4" name="title" class="form-control" placeholder="title">
</div>
@error('title')
<p class="text-danger">{{$message}}</p>
@endError

</div>

<div class="form-group row">
        <div class="col-lg-3 col-xl-2 text-lg-right">
        <label for="username4" class="col-form-label">Category</label>
        </div>
        {{-- <div class="col-lg-8 col-xl-4"> --}}
        <div class="input-group">
        <span class="input-group-addon">
        <i class="fa fa-user"></i>
        </span>
        <input type="text" value="{{$reqs->Categories}}" id="username4" name="Category" class="form-control" placeholder="title">
        </div>
        @error('Category')
        <p class="text-danger">{{$message}}</p>
        @endError
        
</div>
{{-- <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
<label for="email4" class="control-label">Images</label>
</div> --}}
<div class="col-lg-8 col-xl-4 two_column_signup_margintop">
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-file"></i>
</span>
<input type="file" id="email4" name="img" class="form-control" placeholder="">
</div>
@error('img')
<p class="text-danger">{{$message}}</p>
@endError
</div>
</div>


<div class="form-group row">
        <div class="col-lg-12">
        <label for="query1" class="col-form-label">
        Query
        </label>
        <div class="input-group float">
        <textarea class="form-control" id="query1" name="description" rows="4" placeholder="Your Query">{{$reqs->Description}}</textarea>
        </div>
        @error('description')
        <p class="text-danger">{{$message}}</p>
    @endError
        </div>
        </div>
<div class="form-group row">
<div class="col-lg-10  ml-auto">
<button class="btn btn-primary l w-100" type="submit">Update</button>
{{-- <button class="btn btn-warning layout_btn_prevent">Cancel</button> --}}
</div>
</div>
</fieldset>
</form>
</div>
</div>
</div>

{{-- <div class="col-12">
<div class="card m-t-35">
<div class="card-header bg-white">
Query Layout
</div>
<div class="card-body m-t-10">
<div class="row">
<div class="col-xl-6">
<div class="row justify-content-center">
<div class="col-lg-10">
<form class="form-horizontal">
<fieldset>

<div class="form-group row m-t-25">
<div class="col-lg-12">
<h5>Basic Form</h5>
</div>
<div class="col-lg-12">
<label for="email5" class="col-form-label">
E-mail
</label>
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-envelope"></i>
</span>
<input type="text" id="email5" class="form-control" placeholder="E-mail">
</div>
</div>
</div>
<div class="form-group row">
<div class="col-lg-12">
<label for="subject1" class="col-form-label">
Subject
</label>
<div class="input-group">
<input type="text" id="subject1" class="form-control" placeholder="Subject">
<span class="input-group-addon"><i class="fa fa-text-width" aria-hidden="true"></i></span>
</div>
</div>
</div>
<div class="form-group row">
<div class="col-lg-12">
<label for="query1" class="col-form-label">
Query
</label>
<div class="input-group float">
<textarea class="form-control" id="query1" rows="4" placeholder="Your Query"></textarea>
</div>
</div>
</div>

<div class="form-group row">
<div class="col-lg-12">
<button class="btn btn-responsive layout_btn_prevent btn-primary">Submit</button>
<button class="btn btn-responsive layout_btn_prevent btn-warning">Cancel</button>
</div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
<div class="col-xl-6">
<form class="form-horizontal">
<fieldset>

<div class="form-group row m-t-25">
<div class="col-lg-11 ml-lg-auto">
<h5>Horizontal Form</h5>
</div>
</div>
<div class="form-group row">
<div class="col-lg-3 text-lg-right">
<label for="email6" class="col-form-label">E-mail</label>
</div>
<div class="col-lg-8">
<div class="input-group">
<span class="input-group-addon">
<i class="fa fa-envelope"></i>
</span>
<input type="text" id="email6" class="form-control" placeholder="E-mail">
</div>
</div>
</div>
<div class="form-group row">
<div class="col-lg-3 text-lg-right">
<label for="subject2" class="col-form-label">Subject</label>
</div>
<div class="col-lg-8">
<div class="input-group">
<input type="text" id="subject2" class="form-control" placeholder="Subject">
<span class="input-group-addon"><i class="fa fa-text-width" aria-hidden="true"></i></span>
</div>
</div>
 </div>
<div class="form-group row">
<div class="col-lg-3 text-lg-right">
<label for="query2" class="col-form-label">Query</label>
</div>
<div class="col-lg-8">
<div class="input-group">
<textarea id="query2" class="form-control" rows="4" placeholder="Your Query"></textarea>
</div>
</div>
</div>

<div class="form-group row">
<div class="col-lg-9 ml-auto">
<button class="btn btn-responsive layout_btn_prevent btn-primary">Submit</button>
<button class="btn btn-responsive layout_btn_prevent btn-warning">Cancel</button>
</div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
</div>


</div>
</div>

</div>


<div class="modal fade" id="search_modal" tabindex="-1" role="dialog" aria-hidden="true">
<form> --}}
{{-- <div class="modal-dialog" role="document">
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
</div> --}}


{{-- <div id="request_list">
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


<script type="text/javascript" src="{{asset('asset/js/components.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/custom.js')}}"></script>


<script type="text/javascript" src="{{asset('asset/vendors/intl-tel-input/js/intlTelInput.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/vendors/sweetalert/js/sweetalert2.min.js')}}"></script>


<script type="text/javascript" src="{{asset('asset/js/pages/form_layouts.js')}}"></script>

</body> --}}

<!-- Mirrored from demo.admireadmin.com/admire2/form_layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2022 05:00:14 GMT -->
{{-- </html> --}}

@endSection
