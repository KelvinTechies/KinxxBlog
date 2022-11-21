@extends('layouts.app')

@section('content')
<h3 class="text-center">
    <img src="img/knx1.jpg" alt="kinx logo" class="admire_logo"><span class="text-white"> Kinx<br />
    Sign Up</span>
    </h3>
    </div>
    <div class="bg-white login_content login_border_radius">
    {{-- <form class="form-horizontal login_validator m-b-20" id="register_valid" action="/login" method="post">
        @csrf

    <div class="form-group row">
    <div class="col-sm-12">
    <label for="username" class="col-form-label">Full Name *</label>
    <div class="input-group">
    <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
    </span>
    <input type="text" class="form-control" name="name" id="username" placeholder="Enter your Full Name">
    </div>
    </div>
    @error('name')
     <p class="text-danger">{{$message}}</p>
@endError
    </div>
    <div class="form-group row">
        <div class="col-sm-12">
        <label for="username" class="col-form-label">Username *</label>
        <div class="input-group">
        <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
        </span>
        <input type="text" class="form-control" name="UserName" id="username" placeholder="Username">
        </div>
        </div>
        @error('Username')
         <p class="text-danger">{{$message}}</p>
    @endError
     </div>
    <div class="form-group row">
    <div class="col-sm-12">
    <label for="email" class="col-form-label">Email *</label>
    <div class="input-group">
    <span class="input-group-addon">
    <i class="fa fa-envelope text-primary"></i>
    </span>
    <input type="text" placeholder="Email Address" name="email" id="email" class="form-control" />
    </div>
    </div>
    @error('email')
     <p class="text-danger">{{$message}}</p>
@endError
    </div>
    <div class="form-group row">
    <div class="col-sm-12">
    <label for="password" class="col-form-label text-sm-right">Password *</label>
    <div class="input-group">
    <span class="input-group-addon">
    <i class="fa fa-key text-primary"></i>
    </span>
    <input type="password" placeholder="Password" id="password" name="password" class="form-control" />
    </div>
    </div>
    @error('password')
     <p class="text-danger">{{$message}}</p>
@endError
    </div>
    <div class="form-group row">
    <div class="col-sm-12">
    <label for="confirmpassword" class="col-form-label">Confirm Password *</label>
    <div class="input-group">
    <span class="input-group-addon">
    <i class="fa fa-key text-primary"></i>
    </span>
    <input type="password" placeholder="Confirm Password" name="confirmpassword" id="confirmpassword" class="form-control" />
    </div>
    </div>
    @error('confirmpassword')
     <p class="text-danger">{{$message}}</p>
@endError
    </div>
    </div>
    <div class="form-group row">
    <div class="col-sm-12">
    <label for="phone" class="col-form-label">Phone *</label>
    <div class="input-group">
    <span class="input-group-addon">
    <i class="fa fa-phone text-primary"></i>
    </span>
    <input type="text" id="phone" placeholder="Phone Number" name="phone" class="form-control" />
    </div>
    </div>
    @error('phone')
     <p class="text-danger">{{$message}}</p>
@endError
    </div>
    </div>
    <div class="form-group row">
    <div class="col-sm-12">
    <label class="col-form-label">Gender</label>
    </div>
    <div class="col-sm-2 col-12">
    <label class="custom-control custom-radio">
    <input type="radio" name="radio" class="custom-control-input form-control">
    <span class="custom-control-indicator"></span>
    <a class="custom-control-description">Male</a>
    </label>
    </div>
    <div class="col-sm-2 col-12">
    <label class="custom-control custom-radio">
    <input type="radio" name="radio" class="custom-control-input form-control">
    <span class="custom-control-indicator"></span>
    <a class="custom-control-description">Female</a>
    </label>
    </div>
        @error('gender')
     <p class="text-danger">{{$message}}</p>
@endError
    </div>
    </div>
    <div class="mb-3">
        <label for="formFileSm" class="form-label">Profile picture</label>
        <input class="form-control form-control-sm" id="formFileSm" type="file">
      </div>
      <div class="form-group row">
        <div class="col-sm-12">
        <label for="formFileSm" class="col-form-label">Profile picture *</label>
        <div class="input-group">
        <span class="input-group-addon">
        <i class="fa fa-user" aria-hidden="true"></i>
        </span>
        <input class="form-control form-control-sm" id="formFileSm" name="img" type="file">        
        </div>
        </div>
        </div>
    <div class="form-group row">
    <div class="col-sm-9">
    <label class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input form-control">
    <span class="custom-control-indicator"></span>
    <a class="custom-control-description">Send me latest news and updates.</a>
    </label>
    </div>
    </div>
    <div class="form-group row">
    <div class="col-sm-9">
    <input type="submit" value="Submit" class="btn btn-primary" />
    <button type="reset" class="btn btn-danger">Reset</button>
    </div>
    </div>
     <div class="row">
    <div class="col-sm-9">
    <label class="col-form-label">Already have an account?</label> <a href="" class="text-primary login_hover"><b>Log In</b></a>
    </div>
    </div>
    </form> --}}



    <div class="bg-white login_content login_border_radius">
        <form class="form-horizontal login_validator m-b-20" id="register_valid" action="/login" method="post" enctype="multipart/form-data">
            @csrf


            
                <div class="form-group row">
                        <div class="col-sm-12">
                        <label for="username" class="col-form-label">Full Name *</label>
                        <div class="input-group">
                        <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
                        </span>
                        <input type="text" class="form-control" name="name" id="usename" placeholder="Enter your Full Name">
                        </div>
                        </div>
                        @error('name')
                         <p class="text-danger">{{$message}}</p>
                    @endError
                        </div>

        <div class="form-group row">
        <div class="col-sm-12">
        <label for="username" class="col-form-label">Username *</label>
        <div class="input-group">
        <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
        </span>
        <input type="text" class="form-control" name="UserName" id="username" placeholder="Username">
        </div>
        </div>
        @error('UserName')
         <p class="text-danger">{{$message}}</p>
    @endError
        </div>
        <div class="form-group row">
        <div class="col-sm-12">
        <label for="email" class="col-form-label">Email *</label>
        <div class="input-group">
        <span class="input-group-addon">
        <i class="fa fa-envelope text-primary"></i>
        </span>
        <input type="text" placeholder="Email Address" name="email" id="email" class="form-control" />
        </div>
        </div>
        @error('email')
         <p class="text-danger">{{$message}}</p>
    @endError
        </div>
        <div class="form-group row">
        <div class="col-sm-12">
        <label for="password" class="col-form-label text-sm-right">Password *</label>
        <div class="input-group">
        <span class="input-group-addon">
        <i class="fa fa-key text-primary"></i>
        </span>
        <input type="password" placeholder="Password" id="password" name="password" class="form-control" />
        </div>
        </div>
        @error('password')
         <p class="text-danger">{{$message}}</p>
    @endError
        </div>
        <div class="form-group row">
        <div class="col-sm-12">
        <label for="confirmpassword" class="col-form-label">Confirm Password *</label>
        <div class="input-group">
        <span class="input-group-addon">
        <i class="fa fa-key text-primary"></i>
        </span>
        <input type="password" placeholder="Confirm Password" name="password_confirmation" id="confirmpassword" class="form-control" />
        </div>
        </div>
        @error('password')
         <p class="text-danger">{{$message}}</p>
    @endError
        </div>
        <div class="form-group row">
        <div class="col-sm-12">
        <label for="phone" class="col-form-label">Phone *</label>
        <div class="input-group">
        <span class="input-group-addon">
        <i class="fa fa-phone text-primary"></i>
        </span>
        <input type="text" id="phone" placeholder="Phone Number" name="phone" class="form-control" />
        </div>
        </div>
        @error('phone')
         <p class="text-danger">{{$message}}</p>
    @endError
        </div>
        {{-- <div class="radio">
                   <div class="form-group row">
        <div class="col-sm-12">
        <label class="col-form-label">Gender</label>
        </div>
        <div class="col-sm-2 col-12">
        <label class="custom-control custom-radio">
        <input type="radio" name="radio" class="custom-control-input form-control">
        <span class="custom-control-indicator"></span>
        <a class="custom-control-description">Male</a>
        </label>
        </div>
        <div class="col-sm-2 col-12">
        <label class="custom-control custom-radio">
        <input type="radio" name="radio" class="custom-control-input form-control">
        <span class="custom-control-indicator"></span>
        <a class="custom-control-description">Female</a>
        </label>
        </div>
        </div>
        @error('radio')
        <p class="text-danger">{{$message}}</p>
   @endError
        </div> --}}

        <div class="form-group row">
                <div class="col-sm-12">
                <label for="formFileSm" class="col-form-label">Profile picture *</label>
                <div class="input-group">
                <span class="input-group-addon">
                <i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <input class="form-control form-control-sm" id="formFileSm" name="img" type="file">        
                </div>
                </div>
                @error('img')
                <p class="text-danger">{{$message}}</p>
           @endError
               </div>
                </div>
        <div class="form-group row">
        <div class="col-sm-9">
        <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input form-control">
        <span class="custom-control-indicator"></span>
        <a class="custom-control-description">Send me latest news and updates.</a>
        </label>
        </div>
        </div>
        <div class="form-group row">
        <div class="col-sm-9">
        <input type="submit" value="Submit" class="btn btn-primary" />
        <button type="reset" class="btn btn-danger">Reset</button>
        </div>
        </div>
         <div class="row">
        <div class="col-sm-9">
        <label class="col-form-label">Already have an account?</label> <a href="/login" class="text-primary login_hover"><b>Log In</b></a>
        </div>
        </div>
        </form>
@endSection