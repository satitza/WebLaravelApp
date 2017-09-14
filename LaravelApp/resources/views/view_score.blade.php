<html>
    <head>
        <title>View Your Score</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </head>
    <body>
       <center><table border="0">
            <tbody>
                <tr>
                    <td>
                        <?php
                        echo "<div class='container-fluid'>";
                        echo "<center><h4>รายละเอียดสะสมแต้มของสามชิก</h4></center>";
                        echo "<table class='table table-striped'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>รหัส</th>";
                        echo "<th>ชื่อ-นามสกุล</th>";
                        echo "<th>บริษัท</th>";
                        echo "<th>บ้านเลขที่ หรือ ถนน</th>";
                        echo "<th>อพาร์ทเม้นท์</th>";
                        echo "<th>อำเภอ</th>";
                        echo "<th>รหัสไปรษณีย์</th>";
                        echo "<th>รวมยอดเงิน</th>";
                        echo "<th>คะแนนสะสม</th>";

                        echo "</tr>";
                        echo "</thead>";

                        echo "<tbody>";
                        echo "<tr>";

                        echo "<td>" . $CustomersArray["id"] . "</td>";
                        echo "<td>" . $CustomersArray["first_name"]." ".$CustomersArray["last_name"] . "</td>";
                        echo "<td>" . $CustomersArray["shipping"]["company"] . "</td>";
                        echo "<td>" . $CustomersArray["shipping"]["address_1"] . "</td>";
                        echo "<td>" . $CustomersArray["shipping"]["address_2"] . "</td>";
                        echo "<td>" . $CustomersArray["shipping"]["city"] . "</td>";
                        echo "<td>" . $CustomersArray["shipping"]["postcode"] . "</td>";
                        echo "<td>" . $CustomersArray["total_spent"] . "</td>";
                        if ($CustomersArray["total_spent"] < 50)
                        {
                            echo "<td>0.00</td>";
                        }
                        else
                        {
                            echo "<td>" . $CustomersArray["total_spent"]/50 . "</td>";
                        }
                        echo "</tr>";
                        echo "</tbody>";
                        echo "</table>";
                        echo "</div>";
                        ?>
                        <img src='/images/gift.jpg'>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table></center>
</body>
</html>
