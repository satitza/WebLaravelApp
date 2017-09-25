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
            <h1 class="display-3">สวัสดีคุณ : Anonymous Hacker</h1>
            <p class="lead">รายละเอียดผู้ใช้งาน</p>
            <hr class="my-4">
            <p>อธิบายแลกของรางวัล</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">กลับไปยังเว็บไวต์หลัก</a>
            </p>
        </div>

    <center><table border="0">
            @foreach ($rewards as $reward)
            <tr>
                <td>
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="{{ asset($reward->path_images) }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">{{ $reward->reward_name }}</h4>
                            <p class="card-text">{{ $reward->reward_detial }}</p>
                            <p class="card-text">จำนวนของที่มีอยู่ขณะนี้คือ {{ $reward->amount }} ชิ้น</p>
                            <p class="card-text">จำนวนคะแนนที่ใช้แลกของชิ้นนี้คือ  {{ $reward->points }} คะแนน</p>
                        </div>
                    </div>
                </td>
                {!! Form::open(['url' => '#']) !!}
                <td>
                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ระบุจำนวนที่ต้องการ']) }}
                    <br>
                    {{ Form::submit('แลกของรางวัล', ['class' => 'btn btn-primary']) }}
                </td>
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

