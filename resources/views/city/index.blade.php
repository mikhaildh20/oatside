@extends('index')
@section('content')
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             City Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <a href="/city/create" class="btn btn-primary">Add Data</a>
                            <hr>
                            @if(session('success'))
                            <p class="text-success">{{ session('success') }}</p>
                            @endif
                            @if(session('error'))
                            <p class="text-danger">{{ session('error') }}</p>
                            @endif
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>City</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($city as $c)
                                        <tr class="odd gradeX">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $c->city_name }}</td>
                                            <td>
                                                <a href="/city/edit/{{ $c->id }}" class="btn btn-warning">Edit</a>
                                                <a href="/city/destroy/{{ $c->id }}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this data?')">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>

    <script src="{{ asset('assets/js/jquery-1.10.2.js')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ asset('assets/js/jquery.metisMenu.js')}}"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="{{ asset('assets/js/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('assets/js/dataTables/dataTables.bootstrap.js')}}"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('assets/js/custom.js')}}"></script>
@endsection