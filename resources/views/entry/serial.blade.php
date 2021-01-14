@extends('layouts.app')

@section('content')


<div class="content-page">
                                    <!-- Start content -->
          <div class="content" style="float:center" >
                                        
                                    <div class="container">


                        <div class="container-fluid">
                        <form role="form" method="post" enctype="multipart/form-data" action="{{url('add-billinfo')}}">
                        @csrf
                        <h2 class=""align="left"style="color:black">New Serial</h2>

                    <div class="container">
                        <div class="row">
                        <div class="col-sm-4 bg-success">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Name</label>
                        <input id="name" type="name" name="name" required autocomplete="name">
                        @error('name')
                                            <div style="color:red">{{$message}}</div>

                                            @enderror
                        </div>

                        <div class="col-sm-4 bg-success">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Serial</label>
                        <input id="serial" type="serial" name="serial" required autocomplete="serial">
                        @error('serial')
                                            <div style="color:red">{{$message}}</div>

                                            @enderror
                        </div>

                        <div class="col-sm-4 bg-info">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Account</label>
                        <input id="account" type="account" name="account" required autocomplete="account">
                        @error('account')
                                            <div style="color:red">{{$message}}</div>

                                            @enderror
                        </div>
                        </div>
                    </div>
                    <br>
                    <br>

                    <div class="container">
                        <div class="row">
                        <div class="col-sm-4 bg-success">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Address</label>
                        <input id="address" type="address" name="address" required autocomplete="address">
                        @error('address')
                                            <div style="color:red">{{$message}}</div>

                                            @enderror
                        </div>
                        <div class="col-sm-4 bg-info">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                        <input id="phone" type="phone" name="phone" required autocomplete="phone">
                        @error('phone')
                                            <div style="color:red">{{$message}}</div>

                                            @enderror
                        </div> 
                    
                        </div>
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>

  <!-- <div class="container">
    <div class="row">
      <div class="col-sm-4 bg-success">
      <label for="password" class="col-md-4 col-form-label text-md-right">Year</label>
      <input id="year" type="year" name="year" required autocomplete="year">
      </div>
      <div class="col-sm-4 bg-primary">
      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
      <input id="address" type="address" name="address" required autocomplete="address">
      </div> 
   
    </div>
  </div>
  <br>
  <br>


  <div class="container">
    <div class="row">
      <div class="col-sm-4 bg-success">
      <label for="password" class="col-md-4 col-form-label text-md-right">Phone</label>
      <input id="phone" type="phone" name="phone" required autocomplete="phone">
      </div>
      <div class="col-sm-4 bg-primary">
      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
      <input id="status" type="status" name="status" required autocomplete="status">
      </div> 
   
    </div>
  </div>
  <br>
<br>

  <div class="container">
    <div class="row">
      <div class="col-sm-4 bg-success">
      <label for="password" class="col-md-4 col-form-label text-md-right">Last_Date</label>
      <input id="last_date" type="last_date" name="last_date" required autocomplete="last_date">
      </div>
      <div class="col-sm-4 bg-primary">
      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Comment') }}</label>
      <input id="comment" type="comment" name="comment" required autocomplete="current-password">
      </div> 
   
    </div>
  </div>
  <br>
<br> -->
</form>
</div>
    
                    </div>
                    </div>
                    </div>
@endsection