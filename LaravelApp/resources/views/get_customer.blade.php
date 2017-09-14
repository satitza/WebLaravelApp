<html>
    <head>
        <title>Get Customer Where ID</title>
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
    <center><table border="0" width="">
            <tbody>
                <tr>
                    <td width="300"> <label>ID</label></td>
                    <td width="500"><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="ID" value="<?php echo $CustomersArray["id"] ?>"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="Username" value="<?php echo $CustomersArray["username"] ?>"></td>
                </tr>
                <tr>
                    <td>Date Created</td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="Date Created" value="<?php echo $CustomersArray["date_created"] ?>"></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="Name" value="<?php echo $CustomersArray["first_name"] ?>"></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="Last Name" value="<?php echo $CustomersArray["last_name"] ?>"></td>
                </tr>
                <tr>
                    <td>E-Mail</td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="E-Mail Address" value="<?php echo $CustomersArray["email"] ?>"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="Phone" value="<?php echo $CustomersArray["billing"]["phone"] ?>"></td>
                </tr>
                <tr>
                    <td>Orders Count</td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="Order Count" value="<?php echo $CustomersArray["orders_count"] ?>"></td>
                </tr>
                <tr>
                    <td>Total Spent</td>
                    <td><input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="Total Spent" value="<?php echo $CustomersArray["total_spent"] ?>"></td>
                </tr>
                <tr>
                    <td>Customer Score</td>
                    <td>
                        <input type="email" class="form-control" id="text_id" aria-describedby="" placeholder="Customer Score" value="<?php 
                        if ($CustomersArray["total_spent"] < 50){ echo "0.00";}
                        else{ echo $CustomersArray["total_spent"] / 50; } ?>">
                    </td>
                </tr>
            </tbody>
        </table></center>
</body>
</html>

