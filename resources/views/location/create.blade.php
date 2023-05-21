@extends('index')
@section('content')
<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Location Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="/location/index" class="btn btn-warning">Back</a>
                                    <h3>Input Location Data</h3>
                                    <form method="post" action="/location/store" role="form">
                                        @csrf
                                        <div class="form-group">
                                            <label>Location Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Location"/>
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <select class="form-control" name="city_id" id="">
                                                <option>Choose your city</option>
                                                @foreach ($city as $c)
                                                <option value="{{ $c->id }}">{{ $c->city_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Events date</label>
                                            <input type="date" name="date" class="form-control" />
                                        </div>
                                        <button class="btn btn-primary" type="submit">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
@endsection