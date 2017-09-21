@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>จัดการของรางวัล</center></div>
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr class="success">
                            <th>รูปภาพ</th>
                            <th>ชื่อของรางวัล</th>
                            <th>รายละเอียด</th>
                            <th>จำนวนคงเหลือ</th>
                            <th>คะแนนที่ใช้แลก</th>
                            <th>แก้ใขรายละเอียด</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rewards as $reward)
                        <tr>                           
                            <td><img class="d-block w-50" src="{{ asset($reward->path_images) }}" alt="First slide" height="150"></td>
                            <td>{{ $reward->reward_name }}</td>
                            <td>{{ $reward->reward_detial }}</td>
                            <td>{{ $reward->amount }}</td>
                            <td>{{ $reward->reward_points }}</td>
                            <th>
                                {!! Form::open(['url' => '#']) !!}
                                {{ Form::hidden('rewards_id', $reward->id) }}
                                {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}                              
                                {{ Form::token() }}
                                {!! Form::close() !!}
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <center>
                    {!! Form::open(['url' => 'rewards_stock/form']) !!}
                    {{ Form::submit('Add Reward', ['class' => 'btn btn-primary']) }}                              
                    {{ Form::token() }}
                    {!! Form::close() !!}
                </center>
                <div class="panel-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
