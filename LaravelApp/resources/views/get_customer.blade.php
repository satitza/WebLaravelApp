<html>
    <head>
        <title>Get Customer Where ID</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    <center><table border="0" width="">
            <tbody>
                <tr>
                    <td with="300"><h4><span class="label label label-success">ID</span></h4></td>
                    <td width="500"><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="ID" value="<?php echo $CustomersArray["id"] ?>"></td>
                    <td></td>
                    <td with="300"><center><h4><span class="label label label-info" align="right" bgcolor="">ที่อยู่สำหรับจัดส่งสินค้า</span></h4></center></td>
                </tr>
                <tr>
                    <td with=""><h4><span class="label label label-success">Date Created</span></h4></td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="Date Created" value="<?php echo $CustomersArray["date_created"] ?>"></td>
                    <td with=""><h4>&nbsp;&nbsp;&nbsp;&nbsp;<span class="label label label-success" align="right" bgcolor="">บริษัท</span></h4></td>
                    <td width="500"><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="บริษัท" value="<?php echo $CustomersArray["shipping"]["company"] ?>"></td>
                </tr>
                <tr>
                    <td with=""><h4><span class="label label label-success">Username</span></h4></td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="Username" value="<?php echo $CustomersArray["username"] ?>"></td>
                    <td with=""><h4>&nbsp;&nbsp;&nbsp;&nbsp;<span class="label label label-success" align="right" bgcolor="">บ้านเลขที่ / ถนน</span></h4></td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="บ้านเลขที่ / ถนน" value="<?php echo $CustomersArray["shipping"]["address_1"] ?>"></td>
                </tr>            
                <tr>
                    <td with=""><h4><span class="label label label-success">Name</span></h4></td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="Name" value="<?php echo $CustomersArray["first_name"] ?>"></td>
                    <td with=""><h4>&nbsp;&nbsp;&nbsp;&nbsp;<span class="label label label-success" align="right" bgcolor="">อพาร์ทเม้นท์</span></h4></td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="อพาร์ทเม้นท์" value="<?php echo $CustomersArray["shipping"]["address_2"] ?>"></td>
                </tr>
                <tr>
                    <td with=""><h4><span class="label label label-success">Last Name</span></h4></td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="Last Name" value="<?php echo $CustomersArray["last_name"] ?>"></td>
                    <td with=""><h4>&nbsp;&nbsp;&nbsp;&nbsp;<span class="label label label-success" align="right" bgcolor="">อำเภอ</span></h4></td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="อำเภอ" value="<?php echo $CustomersArray["shipping"]["city"] ?>"></td>
                </tr>
                <tr>
                    <td with=""><h4><span class="label label label-success">E-Mail</span></h4></td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="E-Mail Address" value="<?php echo $CustomersArray["email"] ?>"></td>
                    <td with=""><h4>&nbsp;&nbsp;&nbsp;&nbsp;<span class="label label label-success" align="right" bgcolor="">จังหวัด</span></h4></td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="จังหวัด" value="<?php echo $CustomersArray["shipping"]["state"] ?>"></td>
                </tr>
                <tr>
                    <td with=""><h4><span class="label label label-success">Order Count</span></h4></td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="Order Count" value="<?php echo $CustomersArray["orders_count"] ?>"></td>
                    <td with=""><h4>&nbsp;&nbsp;&nbsp;&nbsp;<span class="label label label-success" align="right" bgcolor="">รหัสไปรษณีย์</span></h4></td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="รหัสไปรษณีย์" value="<?php echo $CustomersArray["shipping"]["postcode"] ?>"></td>
                </tr>
                <tr>
                    <td with=""><h4><span class="label label label-warning">Total Spent</span></h4></td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="Total Spent" value="<?php echo $CustomersArray["total_spent"] ?>"></td>
                    <td with=""><h4>&nbsp;&nbsp;&nbsp;&nbsp;<span class="label label label-success" align="right" bgcolor="">ประเทศ</span></h4></td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="ประเทศ" value="<?php echo $CustomersArray["shipping"]["country"] ?>"></td>
                </tr>
                <tr>
                    <td with=""><h4><span class="label label label-danger">Customer Score</span></h4></td>
                    <td>
                        <input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="Customer Score" value="<?php
                               if ($CustomersArray["total_spent"] < 50) {
                                   echo "0.00";
                               } else {
                                   echo $CustomersArray["total_spent"] / 50;
                               }
                               ?>">
                    </td>
                </tr>
            </tbody></center>
</table>
</body>
</html>

