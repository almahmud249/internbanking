@extends('layouts.app')

@section('content')


<div class="content-page">
                                    <!-- Start content -->
          <div class="content" style="float:center" >
                    
                <div class="container">
                        <div class="container-fluid">
                        <form role="form" method="post" enctype="multipart/form-data" action="{{url('insert_bill')}}">
                        @csrf
                        <h2 class=""align="left"style="color:black">New Serial</h2>

                        <div class="container">
                        <div class="row">
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
                        <label for="password" class="col-md-4 col-form-label text-md-right">Amount</label>
                        <input id="amount" type="amount" name="amount" required autocomplete="amount">
                        @error('amount')
                        <div style="color:red">{{$message}}</div>
                        @enderror
                        </div>


                        <div class="col-sm-4 bg-info">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Month</label>
                        <input id="month" type="month" name="month" required autocomplete="month">
                        @error('month')
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
                        <label for="password" class="col-md-4 col-form-label text-md-right">Status</label>
                        <input id="status" type="status" name="status" required autocomplete="status">
                        @error('serial')
                        <div style="color:red">{{$message}}</div>
                        @enderror
                        </div>


                        <div class="col-sm-4 bg-info">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Comment</label>
                        <input id="comment" type="comment" name="comment" required autocomplete="comment">
                        @error('account')
                        <div style="color:red">{{$message}}</div>
                        @enderror
                        </div>


                        </div>
                    </div>
                    <br>
                    <br>

                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                       
                </form>
                </div>
    
                    </div>
                    </div>
                    </div>
@endsection