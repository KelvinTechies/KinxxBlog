@extends('LayoutsDashboard.app')

@section('main')

{{-- <!doctype html>
<html class="no-js" lang="en"> --}}

<!-- Mirrored from demo.admireadmin.com/admire2/simple_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2022 05:00:37 GMT -->
<!-- Added by HTTrack -->
{{-- <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack --> --}}
{{-- <head>
<meta charset="UTF-8">
<title>View Posts | Admire</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/logo1.html" />

<link type="text/css" rel="stylesheet" href="{{asset('/css/components.css')}}" />
<link type="text/css" rel="stylesheet" href="css/custom.css" />


<link type="text/css" rel="stylesheet" href="{{asset('css/pages/tables.css')}}" />
<link type="text/css" rel="stylesheet" href="#" id="skin_change" />

</head>
<body> --}}
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
<img src="img/loader.html" style=" width: 40px;" alt="loading...">
</div>
</div> --}}
{{-- <div id="wrap">
<div id="top">

<nav class="navbar navbar-static-top">
<div class="container-fluid m-0">
<a class="navbar-brand" href="index-2.html">
<h4><img src="img/logo1.html" class="admin_img" alt="logo"> ADMIRE ADMIN</h4>
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
<img src="img/admin.jpg" class="admin_img2 img-thumbnail rounded-circle avatar-img" alt="avatar"> <strong>Micheal</strong>
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
<img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture" src="img/admin.jpg">
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
<li class="dropdown_menu">
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
<li>
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
<li class="dropdown_menu active">
<a href="#">
<i class="fa fa-th"></i>
<span class="link-title menu_hide">&nbsp; Tables</span>
<span class="fa arrow menu_hide"></span>
</a>
<ul>
<li class="active">
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
</ul>

</div>
</div> --}}

{{-- </div>
</div>  --}}

<div id="content" class="bg-container">
<header class="head">
<div class="main-bar">
<div class="row no-gutters">
<div class="col-lg-6 col-md-4 col-sm-4">
<h4 class="nav_top_align skin_txt">
<i class="fa fa-th"></i>
View Posts
</h4>
</div>
<div class="col-lg-6 col-md-8 col-sm-8">
<ol class="breadcrumb float-right nav_breadcrumb_top_align">
<li class="breadcrumb-item">
<a href="index1.html">
<i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
</a>
</li>
<li class="breadcrumb-item">
<a href="#">Posts</a>
</li>
<li class="active breadcrumb-item">View Posts</li>
</ol>
</div>
</div>
</div>
</header>
<div class="outer">
<div class="inner bg-container">
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header bg-white">



</div>
</div>
</div>
</div>

{{-- @foreach ($requests as $item) --}}
    
    {{-- <div class="col-lg-6"> --}}

<div class="card m-t-35">
  
<div class="card-header bg-white">
<i class="fa fa-table"></i> All Posts
</div>
<div class="card-body">
<div class="table-responsive m-t-35">
<table class="table table-striped table-bordered table-advance table-hover">
<thead>
<tr>
    @if(Session::get('success'))

    <span class="alert alert-success">
        {{ Session::get('success') }}
    </span>
    @endIf
<th>
<i class="fa fa-text"></i> Content
</th>
<th class="hidden-xs">
<i class="fa fa-user"></i> Images
</th>
 <th>
<i class="fa fa-user"></i> Author
</th>
<th>
  <i class="fa fa-shopping-cart"></i> Title
  </th>
  <th>
    <i class="fa fa-shopping-cart"></i> Description
    </th>
<th>Actions</th>
</tr>
</thead>
<tbody>
  
<tr>
{{-- @foreach ($requests as $item) --}}
  
@foreach ($req as $item)
  
<td class="highlight">
{{-- @foreach ($requests as $item) --}}
  
<span class="success"></span>
{{-- @foreach ($requests as $item) --}}

<a href="#">{{$item->Content}}</a>
</td>
<td class="hidden-xs">{{$item->Images}}</td>
<td>{{$item->Author}}</td>
<td>{{$item->Title}}</td>
<td>{{Str::limit($item->Description, 50)}}</td>
<td>
<a href="{{$item->id}}/edit" class="btn btn-success btn-xs purple">
<i class="fa fa-edit"></i> Edit
</a>
<form class="py-4" action="del/{{$item->id}}" method="post">
  @csrf

  @method('delete')
    <button class="btn btn-danger btn-xs black">
        <i class="fa fa-trash-o"></i> Delete
    </button>
</form>

</td>
</tr>
@endforeach

{{-- <tr>
<td>
<span class="info"></span>
<a href="#">Google</a>
</td>
<td class="hidden-xs">Adam</td>
<td>560.60$</td>
<td>
<a href="#" class="btn btn-info btn-xs black">
<i class="fa fa-trash-o"></i> Delete
</a>
</td>
</tr>
<tr>
<td class="highlight">
<span class="success"></span>
<a href="#">Apple</a>
</td>
<td class="hidden-xs">Daniel</td>
<td>3460.60$</td>
<td>
<a href="{{$item->id}}/edit" class="btn btn-success btn-xs purple">
<i class="fa fa-edit"></i> Edit
</a>
</td>
</tr>
<tr>
<td>
<span class="warning"></span>
<a href="#">Microsoft</a>
</td>
<td class="hidden-xs">Nick</td>
<td>2560.60$</td>
<td>
<a href="#" class="btn btn-warning btn-xs blue">
<i class="fa fa-share"></i> Share
</a>
</td>
 </tr> --}}
</tbody>
</table>
{{-- @endforeach --}}

</div>

</div>
</div>

</div>
</div>
</div>

</div>
{{-- @endforeach --}}



{{-- <div class="modal fade" id="search_modal" tabindex="-1" role="dialog" aria-hidden="true">
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


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="{{asset('asset/js/components.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/custom.js')}}"></script>

</body> --}}

<!-- Mirrored from demo.admireadmin.com/admire2/simple_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2022 05:00:38 GMT -->
{{-- </html> --}}

@endSection
