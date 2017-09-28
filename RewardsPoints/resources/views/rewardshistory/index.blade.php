@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>ประวัฒิการแลกของรางวัล</center></div>
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
                                <th>IP Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            @php
                               $customers_id = $order->customers_id;
                            @endphp
                            <tr>
                                <td>{{ $order->first_name }} {{ $order->last_name }}</td>
                                <td>{{ $order->reward_name }}</td>
                                <td>{{ $order->rewards_amount }}</td>
                                <td>{{ $order->total_points}}</td>
                                <td>{{ $order->order_date }}</td>
                                <td>{{ $order->status }}</td>     
                                <td>{{ $order->ip_address }}</td>
                                <td>
                                    {!! Form::open(['url' => 'rewardshistory/detial']) !!}
                                    {{ Form::hidden('customers_id', $customers_id) }}
                                    {{ Form::submit('ดูรายละเอียด', ['class' => 'btn btn-info']) }}
                                    {{ csrf_field() }}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
