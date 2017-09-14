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
                    <td width="400"></td>
                    <td width="900">
                        <?php
                        echo "<div class='container-fluid'>";
                        echo "<center><h3>List All Customers</h2></center>";
                        echo "<table class='table table-striped'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Username</th>";
                        echo "<th>Date Created</th>";
                        echo "<th>Date Modified</th>";
                        echo "<th>First Name</th>";
                        echo "<th>Last Name</th>";
                        echo "<th>E-Mail</th>";
                        echo "<th>Phone</th>";
                        echo "<th>Orders Count</th>";
                        echo "<th>Total Spent</th>";
                        echo "<th>View Order</th>";
                        echo "</tr>";
                        echo "</thead>";

                        foreach ($CustomersArray as $value) {
                            echo "<tbody>";
                            echo "<tr>";

                            echo "<td>" . $value["id"] . "</td>";
                            echo "<th>" . $value["username"] . "</td>";
                            echo "<td>" . $value["date_created"] . "</td>";
                            echo "<td>" . $value["date_modified"] . "</td>";
                            echo "<td>" . $value["first_name"] . "</td>";
                            echo "<td>" . $value["last_name"] . "</td>";
                            echo "<td>" . $value["email"] . "</td>";
                            echo "<td>" . $value["billing"]["phone"] . "</td>";
                            echo "<td>" . $value["orders_count"] . "</td>";
                            echo "<td>" . $value["total_spent"] . "</td>";
                            ?>
                        <td><a href="{{url('get_customer/'.$value["id"])}}" button type='button' class='btn btn-success'>View</button></td>
                        <?php
                        echo "</tr>";
                        echo "</tbody>";
                    }

                    echo "</table>";
                    echo "</div>";
                    ?> 
                    </td>
                </tr>
            </tbody>
        </table></center>
</body>
</html>

