@extends('layouts.app')
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        @section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">ค้นหา Customers</div>
                    </div>
                    <form class="form-horizontal" method="GET" action="{{ url('/find_customers') }}">
                        <fieldset>
                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Server</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="select">
                                        <option value="1">perflexgroup.com</option>
                                        <option value="2">jessiemum.com</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-2 control-label">Customers ID</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputPassword" placeholder="Customers ID">
                                </div>
                            </div>                         
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">รายชื่อ Customers ที่มีอยู่ในฐานข้อมูลแล้ว</div>

                        <div class="panel-body">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
    </body>
</html>