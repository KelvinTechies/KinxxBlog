@extends('LayoutsDashboard.app')

@section('main')


<title>View Posts | Kinx</title>


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
    <th>
            <i class="fa fa-shopping-cart"></i> Category
            </th>
<th>
        <i class="fa fa-shopping-cart"></i> Actions
</th>
</tr>
</thead>
<tbody>
  
<tr>
@foreach ($requests as $item)
  
<td class="highlight">
<span class="success"></span>
<a href="#">{{$item->Content}}</a>
</td>
<td class="hidden-xs">{{$item->Images}}</td>
<td>{{$item->Author}}</td>
<td>{{$item->Title}}</td>
<td>{{Str::limit($item->Description, 50)}}</td>
<td>{{$item->Categories}}</td>

<td>
<a href="{{$item->id}}/edit_cat" class="btn btn-success btn-xs purple">
<i class="fa fa-edit"></i> Edit
</a>
<form class="py-4" action="delete/{{$item->id}}" method="post">
  @csrf

  @method('delete')
    <button class="btn btn-danger btn-xs black">
        <i class="fa fa-trash-o"></i> Delete
    </button>
</form>

</td>
</tr>
@endforeach
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




@endSection
