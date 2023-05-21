@extends('index')
@section('content')
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Player Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>E-mail</th>
                                            <th>User ID</th>
                                            <th>Prize</th>
                                            <th>Location</th>
                                            <th>E-mail Status</th>
                                            <th>Play Session</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($game as $g)
                                        <tr class="odd gradeX">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $g->name }}</td>
                                            <td>{{ $g->email }}</td>
                                            <td>{{ $g->uid }}</td>
                                            <td>{{ $g->prize }}</td>
                                            <td>{{ $g->location->name }}</td>
                                            <td>{{ $g->email_sent_status }}</td>
                                            <td>{{ $g->play_session }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <a href="#" class="btn btn-primary">Export to excel</a>
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