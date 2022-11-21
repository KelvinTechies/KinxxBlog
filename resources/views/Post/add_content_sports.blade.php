@extends('LayoutsDashboard.app')

@section('main')



{{-- <!doctype html>
<html class="no-js" lang="en"> --}}

<!-- Mirrored from demo.admireadmin.com/admire2/form_layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2022 05:00:12 GMT -->
<!-- Added by HTTrack -->
{{-- <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack --> --}}
<head>
{{-- <meta charset="UTF-8"> --}}
<title>Add Sports</title>


<div class="col-12">
        <div class="card m-t-35">
        <div class="card-header bg-white">
        Add Products
        </div>
        <div class="card-body">
        <form class="form-horizontal" action="/categoryValidation" method="post" enctype="multipart/form-data">
          @csrf
        <fieldset>
            @if(Session::get('success'))
        
          <span class="alert alert-success">
              {{ Session::get('success') }}
          </span>
          @endIf
        <div class="form-group row m-t-35">
        <div class="col-lg-3 col-xl-2 text-lg-right">
        <label for="name4" class=" col-form-label">Author</label>
        </div>
        <div class="col-lg-8 col-xl-4">
        <div class="input-group">
        <span class="input-group-addon">
        <i class="fa fa-user"></i>
        </span>
        <input type="text" id="name4" name="Author" class="form-control" placeholder="Author">
        </div>
        @error('Author')
        <p class="text-danger">{{$message}}</p>
        @endError
        
        </div>
        <div class="col-lg-3 col-xl-2  text-lg-right">
        <label for="name5" class="col-form-label two_column_label_margintop">Content</label>
        </div>
        <div class="col-lg-8 col-xl-4  two_column_signup_margintop">
        <div class="input-group">
        <input type="text" id="name5" name="Content" class="form-control" placeholder="Content">
        <span class="input-group-addon">
        <i class="fa fa-container"></i>
        </span>
        </div>
        @error('Content')
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
        <input type="text" id="username4" name="Title" class="form-control" placeholder="title">
        </div>
        @error('Title')
        <p class="text-danger">{{$message}}</p>
        @endError
        
        </div>

        <div class="form-group row">
                {{-- <div class="col-lg-12"> --}}
                <label for="query1" class="col-form-label">
                Category
                </label>
                <div class="input-group">
                    </div>
                    <div class="col-lg-8 col-xl-12">
                    <div class="input-group">
                    <span class="input-group-addon">
                    <i class="fa fa-category                                                                                                "></i>
                    </span>
                    <input type="text" id="username4" name="Category" class="form-control" placeholder="Category e.g(Sports, Entertainment, Education e.t.c.)">
                    </div>
                    </div>
                </div>
        </div>
        @error('Category')
        <p class="text-danger">{{$message}}</p>
        @endError
        
        </div>
        <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
        <label for="email4" class="control-label">Images</label>
        </div>
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
                <textarea class="form-control" id="query1" name="Description" rows="4" placeholder="Your Query"></textarea>
                </div>
                @error('Description')
                <p class="text-danger">{{$message}}</p>
            @endError
                </div>
                </div>
        <div class="form-group row">
        <div class="col-lg-10  ml-auto">
        <button class="btn btn-primary l w-100 p-2" >Add Posts</button>
        {{-- <button class="btn btn-warning layout_btn_prevent">Cancel</button> --}}
        </div>
        </div>
        </fieldset>
        </form>
        </div>
        </div>
        </div>
        



@endSection
