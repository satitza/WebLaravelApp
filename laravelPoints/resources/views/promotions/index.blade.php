<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>The Founder Corp Rewards Points</title>
        <meta name="author" content="Codrops" />
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    </head>
    <body>
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

    <center><table border="0">
            @foreach ($rewards as $reward)
            @php
            $reward_id = $reward->id;
            @endphp
            <tr>
                <td width="600">
                    <div class="card" style="width: 25rem;">
                        <img class="card-img-top" src="{{ asset($reward->path_images) }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">{{ $reward->reward_name }}</h4>
                            <p class="card-text">{{ $reward->reward_detial }}</p>
                            <p class="card-text">จำนวนของที่มีอยู่ขณะนี้คือ {{ $reward->amount }} ชิ้น</p>
                            <p class="card-text">จำนวนคะแนนที่ใช้แลกของชิ้นนี้คือ  {{ $reward->reward_points }} คะแนน</p>
                        </div>
                    </div>
                </td>
                {!! Form::open(['url' => 'deal_rewards']) !!}
                <td width="300">
                    {{ Form::text('new_amount', null, ['class' => 'form-control', 'placeholder' => 'ระบุจำนวนที่ต้องการ']) }}
                    <br>
                    {{ Form::submit('แลกของรางวัล', ['class' => 'btn btn-primary']) }}
                </td>
                {{ Form::hidden('customers_id', $customers_id) }}
                {{ Form::hidden('customers_points', $points) }}
                {{ Form::hidden('reward_id', $reward_id) }}
                {{ Form::hidden('reward_points', $reward->reward_points) }}
                {{ Form::hidden('old_amount', $reward->amount) }}
                {{ csrf_field() }}
                {!! Form::close() !!}
            </tr>
            @endforeach
        </table></center>
    <footer>
        The Founder Corp
    </footer>
</body>
</html>

