@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Find Customers</div>
                <div class="panel-body">
                    {!! Form::open(['url' => '/find_customers']) !!}
                    <div>
                        {{ Form::label('wc_host', 'Host Server') }}
                    </div>
                    <div class="form-group">                     
                        <select class="form-control" name="wc_item">
                            @foreach ($wc_host_item as $wc_host)
                            <option value="{{ $wc_host->wc_host }}">{{ $wc_host->wc_host }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div>
                        {{ Form::label('customers_id', 'Customers ID') }}
                    </div>
                    <div>
                        {{ Form::text('name', null, ['class' => 'form-control']) }}                  
                    </div>
                    <br>
                    {{ Form::submit('ค้นหา', ['class' => 'btn btn-primary']) }}
                    {!! Form::close() !!}                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
