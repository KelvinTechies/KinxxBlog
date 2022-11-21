@extends('LayoutsDashboard.app')



@section('main')

{{-- <div class="outer">
        <div class="inner bg-container">
        <div class="row">
        <div class="col-lg-12">
        <div class="card">
        <div class="card-header bg-white"> --}}
        
<div class="col-lg-12">

        <div class="card m-t-35">
        <div class="card-header bg-white">
        <i class="fa fa-table"></i> Bootstrap Table
        </div>
        <div class="card-body">
        <div class="table-responsive m-t-35">
        <table class="table table-striped table-bordered table-advance table-hover">
        <thead>
        <tr>
        <th>
        <i class="fa fa-briefcase"></i> Company
        </th>
        <th class="hidden-xs">
        <i class="fa fa-user"></i> Contact
        </th>
         <th>
        <i class="fa fa-shopping-cart"></i> Total
        </th>
        <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td class="highlight">
        <span class="success"></span>
        <a href="#">HP</a>
        </td>
        <td class="hidden-xs">Ramos</td>
        <td>2560.60$</td>
        <td>
        <a href="#" class="btn btn-success btn-xs purple">
        <i class="fa fa-edit"></i> Edit
        </a>
        </td>
        </tr>
        <tr>
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
        <a href="#" class="btn btn-success btn-xs purple">
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
         </tr>
        </tbody>
        </table>
        </div>
        </div>
        </div>

@endsection