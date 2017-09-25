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
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
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
                        </div>
                    </div>
                </td>
                <td>
                    <div class="col-lg-10">
                        <select class="form-control" id="select">
                            <option>{{ $reward->amount }}</option>
                        </select>
                    </div>
                </td>
                <td>
                    {{ Form::submit('แลกของรางวัล', ['class' => 'btn btn-primary']) }}
                </td>
            </tr>
            @endforeach
        </table></center>

</body>
</html>

