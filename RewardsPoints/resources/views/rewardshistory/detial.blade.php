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
        <div class="col-md-6">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><center>ที่อยู่สำหรับจัดส่ง</center></div>
                            <div class="panel-body">
                                <table class="table table-striped table-hover ">
                                    <tbody>
                                        <tr>
                                            <td>เบอร์โทรศัทพ์</td>
                                            <td>{{ $customers["billing"]["phone"] }}</td>
                                        </tr>
                                        <tr>
                                            <td>บริษัท</td>
                                            <td>{{ $customers["shipping"]["company"] }}</td>
                                        </tr>
                                        <tr>
                                            <td>บ้านเลขที่ / ถนน</td>
                                            <td>{{ $customers["shipping"]["address_1"] }}</td>
                                        </tr>
                                        <tr>
                                            <td>อพาร์ทเม้นท์ </td>
                                            <td>{{ $customers["shipping"]["address_2"] }}</td>
                                        </tr>
                                        <tr>
                                            <td>อำเภอ</td>
                                            <td>{{ $customers["shipping"]["city"] }}</td>
                                        </tr>
                                        <tr>
                                            <td>จังหวัด</td>
                                            <td>{{ $customers["shipping"]["state"] }}</td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <table class="table table-striped table-hover ">
                <thead>
                    <tr class="success">
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="card" style="width: 20rem;">
                                <img class="card-img-top" src="{{ asset('reward_images/1506664017.jpg') }}" alt="First slide" height="150">
                                <div class="card-body">
                                    <p class="card-text">Anonymous Hacker</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>  
        </div>
    </div>
</div>
@endsection
