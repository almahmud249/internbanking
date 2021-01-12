@extends('layouts.app')

@section('content')


<div class="content-page">
                <!-- Start content -->
                <div class="content" style="float:center" >
                    
                   <div class="container">


    <div class="container-fluid">

    <h1 class=""align="center"style="">Bill Entry</h1>

  <div class="container">
    <div class="row">
      <div class="col-sm-4 bg-success">
      <label for="password" class="col-md-4 col-form-label text-md-right">Serial</label>
      <input id="serial" type="serial" name="serial" required autocomplete="serial">
      </div>
      <div class="col-sm-4 bg-primary">
      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Account') }}</label>
      <input id="account" type="account" name="account" required autocomplete="account">
      </div> 
   
    </div>
  </div>
  <br>
  <br>

  <div class="container">
    <div class="row">
      <div class="col-sm-4 bg-success">
      <label for="password" class="col-md-4 col-form-label text-md-right">Amount</label>
      <input id="amount" type="amount" name="amount" required autocomplete="amount">
      </div>
      <div class="col-sm-4 bg-primary">
      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Month') }}</label>
      <input id="month" type="month" name="month" required autocomplete="month">
      </div> 
   
    </div>
  </div>
  <br>
<br>

  <div class="container">
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
<br>

</div>
    
                    </div>
                    </div>
                    </div>
@endsection