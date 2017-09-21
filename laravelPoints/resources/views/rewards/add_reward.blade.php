@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>เพิ่มของรางวัล</center></div>

                <div class="panel-body">
                    {!! Form::open(['url' => '#']) !!}

                    <?php /* {{ Form::label('reward_name', 'ชื่อของรางวัล') }} 
                      {{ Form::text('reward_name', null, ['class' => 'form-control']) }} */ ?>

                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr class="">
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ Form::label('reward_name', 'ชื่อของรางวัล') }}</td>
                                <td>{{ Form::text('reward_name', null, ['class' => 'form-control']) }}</td>
                            </tr>
                            <tr>
                                <td>{{ Form::label('reward_detial', 'รายละเอียดของรางวัล') }}</td>
                                <td>{{ Form::textarea('reward_name', null, ['class' => 'form-control']) }}</td>
                            </tr>
                            <tr class="success">
                                <td>{{ Form::label('path_images', 'อัพโหลดรูปภาพ') }}</td>
                                <td>{{ Form::file('image') }}</td>
                            </tr>
                        </tbody>
                    </table>
                    {{ Form::token() }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
