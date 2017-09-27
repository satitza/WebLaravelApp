@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <center>{{ $error }}</center>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading"><center>เพิ่มของรางวัล</center></div>
                <div class="panel-body">
                    {!! Form::open(['url' => 'rewardsstock/add', 'files' => true]) !!}
                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr class="">
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ Form::label('lb_reward_code', 'รหัส') }}</td>
                                <td>{{ Form::text('reward_code', null, ['class' => 'form-control', 'placeholder' => 'รหัสของรางวัล']) }}</td>
                            </tr>
                            <tr>
                                <td>{{ Form::label('lb_reward_name', 'ชื่อของรางวัล') }}</td>
                                <td>{{ Form::text('reward_name', null, ['class' => 'form-control', 'placeholder' => 'ชื่อของรางวัล']) }}</td>
                            </tr>                           
                            <tr>
                                <td>{{ Form::label('lb_detial', 'รายละเอียด') }}</td>
                                <td>{{ Form::textarea('reward_detial', null, ['class' => 'form-control', 'placeholder' => 'รายละเอียดของรางวัล']) }}</td>
                            </tr>
                            <tr class="info">
                                <td>{{ Form::label('lb_images_name', 'อัพโหลดรูปภาพ') }}</td>
                                <td>{{ Form::file('image', array('class' => 'image')) }}</td>
                            </tr>
                            <tr>
                                <td>{{ Form::label('lb_amount', 'จำนวน') }}</td>
                                <td>{{ Form::text('reward_amount', null, ['class' => 'form-control', 'placeholder' => 'จำนวนของรางวัล']) }}</td>
                            </tr>
                            <tr>
                                <td>{{ Form::label('lb_reward_points', 'คะแนน') }}</td>
                                <td>{{ Form::text('reward_points', null, ['class' => 'form-control', 'placeholder' => 'คะแนนสำหรับแลกของรางวัลชิ้นนี้']) }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <center>
                        {{ Form::submit('บันทึกลงฐานข้อมูล', ['class' => 'btn btn-primary']) }}
                    </center>
                    {{ csrf_field() }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection