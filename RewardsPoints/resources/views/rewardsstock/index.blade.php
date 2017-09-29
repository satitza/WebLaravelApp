@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>จัดการของรางวัล</center></div>
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr class="success">
                            <th>CODE</th>
                            <th>รูปภาพ</th>
                            <th>ชื่อของรางวัล</th>
                            <th>รายละเอียด</th>
                            <th>จำนวนคงเหลือ</th>
                            <th>คะแนนที่ใช้แลก</th>
                            <th>แก้ใขรายละเอียด</th>
                            <th>ลบของรางวัล</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rewards as $reward)
                        <tr>   
                            <td>{{ $reward->reward_code }}</td>
                            <td><img class="d-block w-50" src="{{ asset($reward->path_images) }}" alt="First slide" height="150"></td>                     
                            <td>{{ $reward->reward_name }}</td>
                            <td>{{ $reward->reward_detial }}</td>
                            <td>{{ $reward->amount }}</td>
                            <td>{{ $reward->reward_points }}</td>
                            <th>
                                {!! Form::open(['url' => 'rewardsstock_edit']) !!}
                                {{ Form::hidden('reward_id', $reward->id) }}
                                {{ Form::submit('Edit Reward', ['class' => 'btn btn-warning']) }}                              
                                {{ csrf_field() }}
                                {!! Form::close() !!}
                            </th>
                            <th>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    Delete Rewards
                                </button>
                                <?php /*
                                  {!! Form::open(['url' => 'rewardsstock/delete']) !!}
                                  {{ Form::hidden('reward_id', $reward->id) }}
                                  {{ Form::submit('Delete Reward', ['class' => 'btn btn-danger']) }}
                                  {{ csrf_field() }}
                                  {!! Form::close() !!} */ ?>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>

                </table>          
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;{!! $rewards->render() !!}
                <div class="panel-body">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ยืนยันการลบข้อมูล</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                คุณต้องการที่จะลบของรางวัลชิ้นนี้ออกจากระบบ
            </div>
            <div class="modal-footer">
                {!! Form::open(['url' => 'rewardsstock_delete']) !!}
                {{ Form::hidden('reward_id', $reward->id) }}
                {{ Form::submit('ยืนยัน', ['class' => 'btn btn-danger']) }}
                {{ csrf_field() }}
                {!! Form::close() !!}
                <!--button type="submit" class="btn btn-primary" href="#">Save changes</button-->
            </div>
        </div>
    </div>
</div>


@endsection