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
                <div class="panel-heading"><center>แก้ใขของรางวัล</center></div>
                <div class="panel-body">
                    {!! Form::open(['url' => 'rewardsstock_update', 'files' => true]) !!}
                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr class="">
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ Form::label('lb_reward_id', 'Reward ID') }}</td>
                                <td>{{ $reward_id }}</td>
                            </tr>
                            <tr>
                                <td>{{ Form::label('lb_reward_name', 'ชื่อของรางวัล') }}</td>
                                <td>{{ Form::text('reward_name', $reward_name, ['class' => 'form-control']) }}</td>
                            </tr>
                            <tr>
                                <td>{{ Form::label('lb_detial', 'รายละเอียดของรางวัล') }}</td>
                                <td>{{ Form::textarea('reward_detial', $reward_detial, ['class' => 'form-control']) }}</td>
                            </tr>
                            <!--tr class="info">
                                <td>{{ Form::label('lb_images_name', 'อัพโหลดรูปภาพ') }}</td>
                                <td>{{ Form::file('image', array('class' => 'image')) }}</td>
                            </tr-->
                            <tr>
                                <td>{{ Form::label('lb_amount', 'จำนวนของรางวัล') }}</td>
                                <td>{{ Form::text('reward_amount', $amount, ['class' => 'form-control']) }}</td>
                            </tr>
                            <tr>
                                <td>{{ Form::label('lb_reward_points', 'คะแนนที่ใช้แลก') }}</td>
                                <td>{{ Form::text('reward_points', $reward_points, ['class' => 'form-control']) }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <center>
                        {{ Form::submit('บันทึกลงฐานข้อมูล', ['class' => 'btn btn-primary']) }}
                    </center>
                    {{ Form::hidden('reward_id', $reward_id) }}
                    {{ csrf_field() }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection