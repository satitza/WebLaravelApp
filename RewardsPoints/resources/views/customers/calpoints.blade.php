@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">สรุปคะแนนสมาชิก</div>
                {!! Form::open(['url' => 'addpoints']) !!}
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="badge">{{ $customers_id }}</span>
                        Customers ID
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{ $old_total }}</span>
                        จำนวนเงินเดิม
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{ $old_points }}</span>
                        จำนวนคะแนนเดิม
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{ $new_total }}</span>
                        จำนวนเงินใหม่
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{ $settlement }}</span>
                        ยอดเงินที่เพิ่มเข้ามา
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{ $new_orders_count }}</span>
                        รวมจำนวนครั้งที่สั่งของ
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{ $new_points }}</span>
                        คะแนนใหม่ที่ใด้รับ
                    </li>
                </ul>
                <center>
                    {{ Form::submit('Update Points', ['class' => 'btn btn-primary']) }}
                </center>
                {{ Form::hidden('customers_id', $customers_id) }}
                {{ Form::hidden('new_orders_count', $new_orders_count) }}
                {{ Form::hidden('new_total', $new_total) }}
                {{ Form::hidden('settlement', $settlement) }}
                {{ Form::hidden('new_points', $new_points) }}
                {{ csrf_field() }}
                {!! Form::close() !!}
                <br>
            </div>
        </div>
    </div>
</div>
</div>
@endsection