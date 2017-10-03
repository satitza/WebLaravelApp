@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Points Settings</center></div>
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
                    <table class="table table-striped table-hover ">
                        <tbody>
                            <tr>
                                <td><label for="inputEmail" class="col-lg-2 control-label">Points</label></td>
                                <td>
                                    {!! Form::open(['url' => 'updatepoints']) !!}
                                    {{ Form::text('points_settings', $points->points_settings, ['class' => 'form-control', 'placeholder' => 'Points Settings']) }}
                                    <span class="help-block">กรุณาระบุจำนวนตัวเลขที่จะนำไปหารกับจำนวนเงินเพื่อคิดผลลัพธ์เป็นคะแนนสำหรับผู้ใช้งาน
                                        เช่น 50 หาร 100  เท่ากับ 2 คะแนน
                                    </span>
                                    {{ Form::submit('บันทึกการเปลี่ยนแปลง', ['class' => 'btn btn-primary']) }}
                                    {{ csrf_field() }}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
