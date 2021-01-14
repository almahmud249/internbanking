@extends('layouts.app')

@section('content')
   <!-- ============================================================== -->                      
   <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Datatable</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li class="active">Datatable</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Datatable</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial</th>
                                                            <th>account</th>
                                                            <th>amount</th>
                                                            <th>month</th>
                                                            <th>Last date</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>

                                         
                                                    <tbody>
                                                    
                                                    @foreach($today as $row)
                                                    <tr>
                                                    <td>{{ $row->serial }}</td>
                                                    <td>{{ $row->account }}</td>
                                                    <td>{{ $row->amount }}</td>
                                                    <td>{{ $row->month }}</td>
                                                    <td>{{ $row->last_date }}</td>

                                                   
                                                    <td>
                                                    <a href="{{URL::to('view_bill/'.$row->id)}}" class="btn btn-primary">View</a>
                                                    <a href="{{URL::to('edit-employee/'.$row->id)}}" class="btn btn-success">Edit</a>
                                                    <a href="{{URL::to('delete-employee/'.$row->id)}}" id="delete" class="btn btn-danger">Delete</a>

                                                </td>
                                                    </tr>
                                                 @endforeach 
                                               
                                                    </tbody>
                                                 
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!-- End Row -->

</div>
       </div>
                    </div>
@endsection