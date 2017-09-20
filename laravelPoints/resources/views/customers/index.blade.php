@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <center><div class="panel-heading">ค้นหา Customers จาก ID</div></center>
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
                    {{ csrf_field() }}
                    {!! Form::close() !!}                  
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 col-md-offset">
    <div class="panel panel-primary">
        <center><div class="panel-heading">รายชื่อ Customers ที่มีอยู่ในฐานข้อมูลแล้ว</div></center>
        <table class="table table-striped table-hover ">
            <thead>
                <tr>
                    <th>รหัส</th>
                    <th>วันที่สมัครส</th>
                    <th>อีเมล์</th>
                    <th>ชื่อ-นามสกุล</th>
                    <?php //<th>สิทธิผู้ใช้งาน</th> ?>
                    <?php //<th>ชื่อผู้ใช้งาน</th> ?>
                    <th>บริษัท</th>
                    <th>เบอร์โทรศัพท์</th>
                    <th>ออเดอร์</th>
                    <th>ยอดเงิน</th>
                    <th>ผู้ใช้งานจาก Host</th>
                    <th>คะแนน</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $users)
                <tr class="default">            
                    <td>{{ $users->customers_id }}</td>
                    <td>{{ $users->date_created }}</td>
                    <td>{{ $users->email }}</td>
                    <td>{{ $users->first_name }} {{ $users->last_name}}</td>
                    <?php //<td>{{ $users->role }}</td> ?>
                    <?php //<td>{{ $users->username }}</td> ?>
                    <td>{{ $users->company }}</td>
                    <td>{{ $users->phone }}</td>
                    <td>{{ $users->orders_count }}</td>
                    <td>{{ $users->total_spent }}</td>
                    <td>{{ $users->from_host }}</td> 
                    <td>{{ $users->points }}</td>
                    <td>
                        {!! Form::open(['url' => 'cal_points']) !!}
                        {{ Form::hidden('customers_id', $users->customers_id) }}
                        {{ Form::hidden('total_spent', $users->total_spent) }}
                        {{ Form::hidden('from_host', $users->from_host) }}
                        {{ Form::hidden('points', $users->points) }}
                        {{ Form::submit('Update From Server', ['class' => 'btn btn-primary']) }}
                        {{ csrf_field() }}
                        {!! Form::close() !!}   
                    </td>                
                </tr>
                @endforeach
            </tbody>
        </table> 
    </div>
</div>
@endsection
