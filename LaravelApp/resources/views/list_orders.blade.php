<html>
    <head>
        <title>List All Orders From Woocommerce API Server</title>
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
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Customers</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('list_customers')}}">List All Customers</a>
                    <a class="dropdown-item" href="#">Get Customer</a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Orders</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('list_orders') }}">List All Orders</a>
                    <a class="dropdown-item" href="#">Get Order</a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Products</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">List All Products</a>
                    <a class="dropdown-item" href="#">Get Product</a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>
        </ul>
        <!--------------------------------------------------------------------------------------------------------------->

    <center><table border="1">
            <tbody>
                <tr>
                    </td>
                    <td width = '400'></td>
                    <td width="900">
                        <?php
                        echo "<div class='container-fluid'>";
                        echo "<center><h3>List All Orders</h2></center>";
                        echo "<table class='table table-striped'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Create VIA</th>";
                        echo "<th>Status</th>";
                        echo "<th>Date Created</th>";
                        echo "<th>Date Modified</th>";
                        echo "<th>Discount Total</th>";
                        echo "<th>Total</th>";
                        echo "<th>Customer ID</th>";
                        echo "<th>IP Address</th>";
                        echo "<th>View Customer</th>";
                        echo "</tr>";
                        echo "</thead>";

                        foreach ($OrdersArray as $value) {
                            echo "<tbody>";
                            echo "<tr>";

                            echo "<td>" . $value["id"] . "</td>";
                            echo "<td>" . $value["created_via"] . "</td>";
                            echo "<td>" . $value["status"] . "</td>";
                            echo "<td>" . $value["date_created"] . "</td>";
                            echo "<td>" . $value["date_modified"] . "</td>";
                            echo "<td>" . $value["discount_total"] . "</td>";
                            echo "<td>" . $value["total"] . "</td>";
                            echo "<td>" . $value["customer_id"] . "</td>";
                            echo "<td>" . $value["customer_ip_address"] . "</td>";
                            echo "<td><href='#' button type='button' class='btn btn-success'>View</button></td>";

                            echo "</tr>";
                            echo "</tbody>";
                        }

                        echo "</table>";
                        echo "</div>";
                        echo "</tr>";
                        echo "</tbody></center>";
                        echo "</table>"




                        /* foreach ($OrdersArray as $value) {
                          echo "ID : " . $value["id"] . "<br>";
                          echo "Create VIA : " . $value["created_via"] . "<br>";
                          echo "Status : " . $value["status"] . "<br>";
                          echo "Date Created : " . $value["date_created"] . "<br>";
                          echo "Date Modified : " . $value["date_modified"] . "<br>";
                          echo "Discount Total : " . $value["discount_total"] . "<br>";
                          echo "Total : " . $value["total"] . "<br>";
                          echo "Customer ID : " . $value["customer_id"] . "<br>";
                          echo "IP Address : " . $value["customer_ip_address"] . "<br>";
                          echo "<hr>";
                          } */
                        ?>
                        </body>
                        </html>
