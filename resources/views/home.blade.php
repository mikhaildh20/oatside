@extends('index')

@section('content')
<div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome Admin, Love to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
<div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">{{ $player }} Total</p>
                    <p class="text-muted">Players</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-star"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">{{ $location }} Total</p>
                    <p class="text-muted">Event's</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-arrow-circle-up"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">{{ $product }} Total</p>
                    <p class="text-muted">Product Out</p>
                </div>
             </div>
		     </div>
            <hr />                       
        </div>
@endsection
