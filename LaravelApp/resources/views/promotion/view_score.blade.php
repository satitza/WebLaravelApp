<html>
    <head>
        <title>View Your Score</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <style type="text/css">
            html {
                background-image: url('/images/background.jpg');
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed;
                -o-background-size: 100% 100%, auto;
                -moz-background-size: 100% 100%, auto;
                -webkit-background-size: 100% 100%, auto;
                background-size: 100% 100%, auto;
            }
        </style>
    </head>
    <body>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/images/gift1.jpg" alt="First slide" height="300">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/images/gift2.jpg" alt="Second slide" height="300">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/images/gift3.jpg" alt="Third slide" height="300">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    <center><table border="0">
            <tbody>
                <tr>
                    <td>
                        <div class='container-fluid'>
                            <center><h4>รายละเอียดสะสมแต้มของสามชิก</h4></center>
                            <table class='table table-striped'>
                                <thead>
                                    <tr>
                                        <th>รหัส</th>
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>บริษัท</th>
                                        <th>บ้านเลขที่ หรือ ถนน</th>
                                        <th>อพาร์ทเม้นท์</th>
                                        <th>อำเภอ</th>
                                        <th>รหัสไปรษณีย์</th>
                                        <th>รวมยอดเงิน</th>
                                        <th>คะแนนสะสม</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>{{ $Customer["id"] }}</td>
                                        <td>{{ $Customer["first_name"] }}</td>
                                        <td>{{ $Customer["company"] }}</td>
                                        <td>{{ $Customer["address_1"] }}</td>
                                        <td>{{ $Customer["address_2"] }}</td>
                                        <td>{{ $Customer["city"] }}</td>
                                        <td>{{ $Customer["postcode"] }}</td>
                                        <td>{{ $Customer["total_spent"] }}</td>
                                        <td>{{ $Customer["scores"] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table></center>
    <div class="alert alert-info" role="alert">
        <h3>วิธีการแลกของรางวัล</h3>
        <ul>
            <li>1. เลือกของรางวัลที่ต้องการ</li>
            <li>2. xxxxxx</li>
            <li>3. xxxxxx</li>
            <li>3. xxxxxx</li>
        </ul>
    </div>
    <center><table border="0">
            <tbody>
                <tr>
                    <td>
                        <div class='container-fluid'>
                            <center><h4>รายการของรางวัล</h4></center>
                            <table class='table table-striped'>
                                <thead>
                                    <tr>
                                        <th>รูปภาพ</th>
                                        <th>คำอธิบาย</th>
                                        <th>คะแนนที่ใช้แลก</th>
                                        <th>แลกของรางวัล</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="/images/reward_images/rw_1.jpg"></td>
                                        <td>
                                            กระเป๋าเดินทาง<br>
                                            ขนาด : 15 x 20 นิ้ว<br>
                                            จำนวน : 2 ใบ
                                        </td>
                                        <td>60 คะแนน</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><img src="/images/reward_images/rw_2.jpg"></td>
                                        <td>ไมโครเวฟ</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><img src="/images/reward_images/rw_3.jpg"></td>
                                        <td>โทรศัพท์ Galexy 8</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><img src="/images/reward_images/rw_4.jpg"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><img src="/images/reward_images/rw_5.jpg"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><img src="/images/reward_images/rw_6.jpg"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><img src="/images/reward_images/rw_7.jpg"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><img src="/images/reward_images/rw_8.jpg"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><img src="/images/reward_images/rw_9.jpg"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><img src="/images/reward_images/rw_10.jpg"></td>
                                        <td>สแปร์น้ำฉีดน้ำหอม</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table></center>
    <br></br>
    <br></br>
</body>
</html>
