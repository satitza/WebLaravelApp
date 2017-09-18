<html>
    <head>
        <title>List All Customers From Woocommerce API Server</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>        
    </head>
    <body>
        <!-----------------------------------------------Header Menu------------------------------------------------------>
        <ul class="nav nav-tabs navbar-custom">
            <li class="nav-item">
                <a class="nav-link" href="{{url('main')}}">Main</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Customers</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('list_customers')}}">List All Customers</a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Orders</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{url('list_orders')}}">List All Orders</a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Products</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">List All Products</a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>
        </ul>
        <!--------------------------------------------------------------------------------------------------------------->
        <br></br>
        <hr></hr>
    <center><table border="1">
            <tbody>
                <tr>
                    <td width="">

                        <div class='container-fluid'>
                            <center><h3>{{ $host_name }}</h2></center>
                            <table class='table table-striped'>
                                <thead>
                                    <tr>
                                        <th>รหัส</th>
                                        <th>วันที่สมัครสมาชิก</th>
                                        <th>อีเมล์</th>
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>สิทธิผู้ใช้งาน</th>
                                        <th>ชื่อผู้ใช้งาน</th>
                                        <th>บริษัท</th>
                                        <th>เบอร์โทรศัพท์</th>
                                        <th>จำนวนครั้งที่สั่งของ</th>
                                        <th>ยอดเงินสะสม</th>
                                        <th>ดูรายละเอียด</th>
                                    </tr>
                                </thead>
                                @foreach ($CustomersArray as $user)
                                <tbody>
                                    <tr>

                                        <td>{{ $user["id"] }}</td>
                                        <th>{{ $user["date_created"] }}</td>
                                        <td>{{ $user["email"] }}</td>
                                        <td>{{ $user["first_name"]." ".$user["last_name"] }}</td>
                                        <td>{{ $user["role"] }}</td>
                                        <td>{{ $user["username"] }}</td>
                                        <td>{{ $user["billing"]["company"] }}</td>
                                        <td>{{ $user["billing"]["phone"] }}</td>
                                        <td>{{ $user["orders_count"] }}</td>
                                        <td>{{ $user["total_spent"] }}</td>
                                        <td><a href="{{url('get_customer/'.$user["id"])}}" button type='button' class='btn btn-success'>View</button></td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table></center>
</body>
</html>

