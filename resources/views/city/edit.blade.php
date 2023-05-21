@extends('index')
@section('content')
<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add City Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                <a href="/city/index" class="btn btn-warning">Back</a>
                                    <h3>Input City Data</h3>
                                    <form method="post" action="/city/update/{{ $city->id }}" role="form">
                                        @csrf
                                        <div class="form-group">
                                            <label>City Name</label>
                                            <input type="text" name="city_name" class="form-control" placeholder="City you want to add" value="{{ $city->city_name }}"/>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Change</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
@endsection