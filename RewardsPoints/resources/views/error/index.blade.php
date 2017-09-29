@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-danger">
                <div class="panel-heading"><center><h4>Error Message</h4></center></div>
                <div class="panel-body">
                    <center>{{ $error_message }}</center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


