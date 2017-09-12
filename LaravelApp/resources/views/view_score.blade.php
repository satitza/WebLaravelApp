<html>
    <head>
        <title>View Your Score</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> 
    </head>
    <body>

    <center><table border="1">
            <tbody>
                <tr>
                    <td width="900">
                        <?php
                        echo "<div class='container-fluid'>";
                        echo "<center><h3>List All Customers</h2></center>";
                        echo "<table class='table table-striped'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>รหัส</th>";
                        echo "<th>วันที่สมัคร</th>";
                        echo "<th>ชื่อผู้ใช้งาน</th>";
                        echo "<th>ชื่อ-นามสกุล</th>";
                        echo "<th>บริษัท</th>";
                        echo "<th>บ้านเลขที่ หรือ ถนน</th>";
                        echo "<th>อพาร์ทเม้นท์</th>";
                        echo "<th>จังหวัด</th>";
                        echo "<th>ประเทศ</th>";
                        echo "<th>รหัสไปรษณีย์</th>";
                        echo "<th>จำนวนออเดอร์ที่สั่งใว้</th>";
                        echo "<th>รวมยอดเงิน</th>";
                        echo "<th>คะแนนสะสม</th>";

                        echo "</tr>";
                        echo "</thead>";

                        echo "<tbody>";
                        echo "<tr>";

                        echo "<td>" . $CustomersArray["id"] . "</td>";
                        echo "<td>" . $CustomersArray["date_created"] . "</td>";
                        echo "<td>" . $CustomersArray["username"] . "</td>";
                        echo "<td>" . $CustomersArray["id"] . "</td>";
                        echo "<td>" . $CustomersArray["id"] . "</td>";
                        echo "<td>" . $CustomersArray["id"] . "</td>";
                        echo "<td>" . $CustomersArray["id"] . "</td>";
                        echo "<td>" . $CustomersArray["id"] . "</td>";
                        echo "<td>" . $CustomersArray["id"] . "</td>";
                        echo "<td>" . $CustomersArray["id"] . "</td>";
                        echo "<td>" . $CustomersArray["id"] . "</td>";
                        echo "<td>" . $CustomersArray["id"] . "</td>";
                        echo "<td>" . $CustomersArray["id"] . "</td>";


                        echo "</tr>";
                        echo "</tbody>";


                        echo "</table>";
                        echo "</div>";
                        ?> 
                    </td>
                </tr>
            </tbody>
        </table></center>
    <?php
    echo $CustomersArray["id"] . "<br>";
    echo $CustomersArray["date_created"] . "<br>";
    echo $CustomersArray["username"] . "<br>";
    echo $CustomersArray["shipping"]["first_name"] . "<br>";
    echo $CustomersArray["shipping"]["last_name"] . "<br>";
    echo $CustomersArray["shipping"]["company"] . "<br>";
    echo $CustomersArray["shipping"]["address_1"] . "<br>";
    echo $CustomersArray["shipping"]["address_2"] . "<br>";
    echo $CustomersArray["shipping"]["city"] . "<br>";
    echo $CustomersArray["shipping"]["state"] . "<br>";
    echo $CustomersArray["shipping"]["postcode"] . "<br>";
    echo $CustomersArray["shipping"]["country"] . "<br>";
    echo $CustomersArray["orders_count"] . "<br>";
    echo $CustomersArray["total_spent"] . "<br>";
    echo "Score is : 5555";
    ?>
</body>
</html>
