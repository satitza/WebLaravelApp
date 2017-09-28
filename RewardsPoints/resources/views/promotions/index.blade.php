@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    <div class="jumbotron">
                        <h4 class="display-4"></h4>
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

                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr class="info">
                                <th>Rewards Code</th>
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
                            $reward_code = $reward->reward_code;
                            @endphp
                            <tr>   
                                <td>{{ $reward->reward_code }}</td>
                                <td><img class="d-block w-50" src="{{ asset($reward->path_images) }}" alt="First slide" height="150"></td>                     
                                <td>{{ $reward->reward_detial }}</td>
                                <td>{{ $reward->amount }}</td>
                                <td>{{ $reward->reward_points }}</td>
                                <th>

                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> 

                    {!! $rewards->render() !!}
                    <!-------------------------------------------------------------------------------------------------->               
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>กรอกรายละเอียด</center></div>
                <div class="panel-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <center>{{ $error }}</center>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    {!! Form::open(['url' => 'dealrewards']) !!}
                    <table class="table table-striped table-hover ">
                        <tbody>                           
                            {{ Form::hidden('customers_id', $customers_id) }}
                            {{ Form::hidden('customers_points', $points) }}
                            {{ csrf_field() }}
                            <tr>
                                <td>{{ Form::label('lb_reward_code', 'รหัส') }}</td>
                                <td>{{ Form::text('reward_code', null, ['class' => 'form-control', 'placeholder'=> 'ระบุรหัสของรางวัล']) }}</td>
                            </tr>
                            <tr>
                                <td>{{ Form::label('lb_reward_amount', 'จำนวน') }}</td>
                                <td>{{ Form::text('reward_amount', null, ['class' => 'form-control', 'placeholder'=> 'ระบุจำนวนของรางวัล']) }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    {{ Form::submit('แลกของรางวัล', ['class' => 'btn btn-primary']) }}      
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    {{ csrf_field() }}
                    {!! Form::close() !!} 
                    <h2>เงื่อนใขในการแลกของรางวัล</h2>
                    <p><small>This line of text is meant to be treated as fine print.</small></p>
                    <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
                    <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
                    <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    The Founder Corp Rewards Points
</footer>
@endsection
