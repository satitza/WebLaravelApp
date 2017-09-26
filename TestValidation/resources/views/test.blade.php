<html>
<head>
    <title>
    </title>
</head>
<body>

@if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                    <center>{{ $error }}</center>
                    @endforeach
                </ul>
            </div>
            @endif
{!! Form::open(['url' => 'test/form']) !!}
{{ Form::text('customers_id', null) }}
{{ Form::submit('Click Me!') }}
{!! Form::close() !!}
</body>
</html>