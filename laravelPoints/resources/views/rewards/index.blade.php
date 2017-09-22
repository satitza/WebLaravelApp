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
                            <th>ID</th>
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
                            <td>{{ $reward->id }}</td>
                            <td><img class="d-block w-50" src="{{ asset($reward->path_images) }}" alt="First slide" height="150"></td>                     
                            <td>{{ $reward->reward_name }}</td>
                            <td>{{ $reward->reward_detial }}</td>
                            <td>{{ $reward->amount }}</td>
                            <td>{{ $reward->reward_points }}</td>
                            <th>
                                <!---->
                                {!! Form::open(['url' => 'rewards_stock/edit']) !!}
                                {{ Form::hidden('reward_id', $reward->id) }}
                                {{ Form::submit('Edit Reward', ['class' => 'btn btn-warning']) }}                              
                                {{ csrf_field() }}
                                {!! Form::close() !!}
                            </th>
                            <th>
                                {!! Form::open(['url' => 'rewards_stock/delete']) !!}
                                {{ Form::hidden('reward_id', $reward->id) }}
                                {{ Form::submit('Delete Reward', ['class' => 'btn btn-danger']) }}                              
                                {{ csrf_field() }}
                                {!! Form::close() !!}
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <center>
                    {!! Form::open(['url' => 'rewards_stock/form']) !!}
                    {{ Form::submit('Add Reward', ['class' => 'btn btn-primary']) }}                              
                    {{ csrf_field() }}
                    {!! Form::close() !!}
                </center>
                <div class="panel-body">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="favoritesModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" 
                        data-dismiss="modal" 
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" 
                    id="favoritesModalLabel">The Sun Also Rises</h4>
            </div>
            <div class="modal-body">
                <p>
                    Please confirm you would like to add 
                    <b><span id="fav-title">The Sun Also Rises</span></b> 
                    to your favorites list.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" 
                        class="btn btn-default" 
                        data-dismiss="modal">Close</button>
                <span class="pull-right">
                    <button type="button" class="btn btn-primary">
                        Add to Favorites
                    </button>
                </span>
            </div>
        </div>
    </div>
</div>
@endsection
