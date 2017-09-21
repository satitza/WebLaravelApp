@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>เพิ่มของรางวัล</center></div>

                <div class="panel-body">
                    {!! Form::open(['url' => 'rewards_stock', 'files' => true]) !!}
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
                                <td>{{ Form::textarea('reward_detial', null, ['class' => 'form-control']) }}</td>
                            </tr>
                            <tr class="info">
                                <td>{{ Form::label('images_name', 'อัพโหลดรูปภาพ') }}</td>
                                <td>{{ Form::file('image', array('class' => 'image')) }}</td>
                            </tr>
                            <tr>
                                <td>{{ Form::label('amount', 'จำนวนของรางวัล') }}</td>
                                <td>{{ Form::text('reward_amount', null, ['class' => 'form-control']) }}</td>
                            </tr>
                            <tr>
                                <td>{{ Form::label('reward_points', 'คะแนนที่ใช้แลก') }}</td>
                                <td>{{ Form::text('reward_points', null, ['class' => 'form-control']) }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <center>
                        {{ Form::submit('บันทึกลงฐานข้อมูล', ['class' => 'btn btn-primary']) }}
                    </center>
                    {{ Form::token() }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
