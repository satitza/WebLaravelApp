@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    <div class="jumbotron">
                        <h4 class="display-4">The Founder Corp Reward Potins</h4>
                        <p class="lead">รายละเอียดผู้ใช้งาน</p>
                        <ul>
                            <li>รหัสผู้ใช้งาน : {{ $customers_id }}</li>
                            <li>ชื่อผู้ใช้งาน : {{ $first_name }}  {{ $last_name }} </li>
                            <li>จำนวนคะแนน : {{ $points }}</li>
                        </ul>
                        <hr class="my-4">
                        <p></p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="http://www.perflexgroup.com/my-account" role="button">กลับไปยังเว็บไวต์หลัก</a>
                        </p>
                    </div>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <center>{{ $error }}</center>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr class="info">
                                <th>รูปภาพ</th>
                                <th>รายละเอียด</th>
                                <th>จำนวนคงเหลือ</th>
                                <th>คะแนนที่ใช้แลก</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rewards as $reward)
                            @php
                            $reward_id = $reward->id;
                            @endphp
                            <tr>   
  
                                <td><img class="d-block w-50" src="{{ asset($reward->path_images) }}" alt="First slide" height="150"></td>                     
                                <td>{{ $reward->reward_detial }}</td>
                                <td>{{ $reward->amount }}</td>
                                <td>{{ $reward->reward_points }}</td>
                                <th>
                                    <!---->
                                    {!! Form::open(['url' => 'dealrewards']) !!}
                                    {{ Form::hidden('customers_id', $customers_id) }}
                                    {{ Form::hidden('customers_points', $points) }}
                                    {{ Form::hidden('rewards_id', $reward->id) }}
                                    {{ Form::hidden('rewards_points', $reward->reward_points) }}
                                    {{ Form::text('new_amount', null, ['class' => 'form-control', 'placeholder'=> 'ระบุจำนวนของรางวัล']) }} <br>                          
                                    {{ Form::submit('แลกของรางวัล', ['class' => 'btn btn-primary']) }}                              
                                    {{ csrf_field() }}
                                    {!! Form::close() !!}
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> 
                    {!! $rewards->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    The Founder Corp Rewards Points
</footer>
@endsection
