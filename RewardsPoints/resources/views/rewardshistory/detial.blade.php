@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Rewards Orders</div>
                <div class="panel-body">
                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr>
                                <th>ชื่อผู้ใช้งาน</th>
                                <th>ชื่อของรางวัล</th>
                                <th>จำนวน</th>
                                <th>คะแนน</th>
                                <th>วันที่</th>
                                <th>สถานะ</th>
                                <th></th>
                                <th></th>
                                <th>IP Address</th>
                                <th>Host</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $order->first_name }} {{ $order->last_name }}</td>
                                <td>{{ $order->reward_name }}</td>
                                <td>{{ $order->rewards_amount }}</td>
                                <td>{{ $order->total_points}}</td>
                                <td>{{ $order->order_date }}</td>
                                <td>{{ $order->status }}</td>
                                <td>
                                    {!! Form::open(['url' => 'rewardshistory/success']) !!}
                                    {{ Form::submit('ส่งแล้ว', ['class' => 'btn btn-success']) }}
                                    {{ csrf_field() }}
                                    {!! Form::close() !!}
                                </td>
                                <td>
                                    {!! Form::open(['url' => 'rewardshistory/stop']) !!}
                                    {{ Form::submit('ระงับ', ['class' => 'btn btn-danger']) }}
                                    {{ csrf_field() }}
                                    {!! Form::close() !!}
                                </td>
                                <td>{{ $order->ip_address }}</td>
                                <td>{{ $order->from_host }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>ที่อยู่สำหรับจัดส่ง</center></div>
                {{ $customers["billing"]["phone"] }}
                <div class="panel-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
