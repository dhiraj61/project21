<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            overflow: hidden;
            /* Prevent scrolling of the entire page */
        }

        .wrapper {
            width: 100%;
            height: 100%;
        }

        .head {
            width: 100%;
            height: 5vw;
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
        }

        .left {
            width: 18.8vw;
            height: 100%;
            border-bottom: 2px solid #000000;
            background-color: #212631;
            ;
        }

        .left h1 {
            color: white;
            font-size: 1.6vw;
            font-family: 'Times New Roman', Times, serif;
            font-weight: 400;
            margin-left: 1vw;
            margin-top: 1.8vw;
            box-sizing: border-box;
        }

        .right {
            width: 80.2vw;
            height: calc(100% - 30vw);
            display: flex;
            color: black;
            align-items: center;
            justify-content: space-between;

        }

        .right1 {
            width: 40vw;
            display: flex;
            align-items: center;

            gap: 8%;
            margin-left: 2vw;

        }

        .right1 h1 {
            font-size: 1.2vw;
            font-weight: 200;
            text-transform: capitalize;




        }

        .right2 {
            width: 40.20vw;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding-right: 8vw;
            gap: 8%;


        }

        .right2 h1 {
            font-size: 1vw;
        }

        .right h5 {
            color: #D3D4D6;
        }

        .sidebarmain {
            width: 100%;
            height: calc(100% - 4vw);

            display: flex;
        }

        .sidebar {
            width: 19vw;
            height: 100%;
            overflow-y: scroll;
            background-color: #212631;
        }

        .sidebar .menus {
            text-decoration: none;
            color: rgb(164, 163, 163);
            font-family: "Times New Roman", Times, serif;
            margin-top: 3vw;
        }

        .sidebar .menus a {
            text-decoration: none;
            color: rgb(0, 0, 0);
        }

        .sidebar .menus a h1 {
            font-size: 1.5vw;
            padding: 1vw 1.4vw;
            color: white;
        }

        .sidebar::-webkit-scrollbar {
            width: 5px;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background-color: #8a8a8a;
            border-radius: 10px;
        }

        .content {
            width: calc(100% - 18vw);
            height: 100%;

            overflow: hidden;
        }

        /* .nav{
        width: 100%;
        height: 4vw;
        background-color: #FFFFFF;
        display: flex;
        justify-content: space-between;
        align-items: center;
      } */

        .cards {
            width: 100%;
            height: 12vw;
            background-color: #edeaed;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            position: relative;
        }

        .contents {
            width: 100%;
            height: 100vh;

            overflow-y: scroll;
        }

        .contents::-webkit-scrollbar {
            width: .5vw;
        }

        .contents::-webkit-scrollbar-thumb {
            background-color: #8a8a8a;
            border-radius: 10px;
        }

        .car:nth-child(1) {
            width: 18vw;
            height: 80%;
            background-color: #5856D6;

            border-radius: 22px;
            position: relative;
        }

        .car:nth-child(2) {
            width: 18vw;
            height: 80%;
            background-color: #3399FF;
            border-radius: 22px;

            position: relative;
        }

        .car:nth-child(3) {
            width: 18vw;
            height: 80%;
            background-color: rgb(209, 181, 59);
            border-radius: 22px;

            position: relative;
        }

        .car:nth-child(4) {
            width: 18vw;
            height: 80%;
            background-color: #E55353;
            border-radius: 22px;

            position: relative;
        }

        .dropdown h2 {
            font-size: 1.4vw;
            transition: all 0.4s ease-in-out;
        }

        .dropdown2 h2 {
            font-size: 1.4vw;
            transition: all 0.4s ease-in-out;
        }

        .dropdown,
        .dropdown2 {
            display: none;
            transition: all 0.4s ease-in-out;
        }

        .car:hover {
            transform: translateY(-3px);
            transition: all 0.5s ease;
        }

        .container2 {
            width: 100%;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: black;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        .form-row label {
            width: 150px;
            margin-right: 10px;
            flex-shrink: 0;
            text-align: right;
            padding-top: 5px;
        }

        .form-row input,
        .form-row select,
        .form-row textarea {
            flex: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-row textarea {

            height: 80px;
            resize: vertical;
        }

        .btn-row {
            text-align: center;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: #ff0000;
            font-size: 0.9rem;
            margin-top: 5px;
        }

        input,
        textarea,
        select {
            outline: 1px solid black;
        }

        .register {
            display: none;

        }

        .circle:hover .register {
            display: block;
            transition: all 1s ease-in-out;
            cursor: pointer;
            background-color: grey;
        }

        .arrow4:hover {
            rotate: (180deg);

        }

        .register h5:hover {
            background-color: #dadada;
            border-radius: 3px;
        }

        tr,
        th,
        td {
            border: 1px solid black !important;

        }

        .atd::-webkit-scrollbar {
            width: 3px;
        }

        .atd::-webkit-scrollbar-thumb {
            background-color: #8a8a8a;
            border-radius: 10px;

        }
    </style>
</head>

<body>
    <?php
    if ($_SESSION['email'] == true) {
    ?>


        <div class="wrapper">
            <div class="head">
                <div class="left" style="border-right: 1px solid black;">
                    <h1>ACADEMIC FLOW</h1>
                </div>
                <div class="right">
                    <div class="right1">
                        <!-- <h1><i class="fa-solid fa-bars"></i></h1> -->
                        <h1>HOME</h1>
                        <h1 class="text"></h1>


                    </div>

                    <?php
                    require('connection.php');
                    if (isset($_POST['register'])) {
                        $name = $_POST['adminName'];

                        $email = $_POST['email'];

                        $password = $_POST['password'];

                        $phoneNumber = $_POST['phoneNumber'];

                        $image = $_FILES['image']['name'];

                        $image_tmp = $_FILES['image']['tmp_name'];
                        $folder = "imge/" . $image;

                        move_uploaded_file($image_tmp, $folder);

                        $query = "insert into adminpage(name,email,password,phno,img) values('$name','$email','$password','$phoneNumber','$folder')";

                        $result = mysqli_query($con, $query);

                        if ($result) {
                            echo "<script>alert('Registered Successfully');</script>";
                        }
                    }

                    $select = "select * from adminpage";
                    $result1 = mysqli_query($con, $select);
                    $imgs = mysqli_fetch_array($result1);
                    $counts = mysqli_num_rows($result1);
                    $emails = $_SESSION['email'];
                    $select2 = "select * from adminpage  where email='$emails'";
                    $result2 = mysqli_query($con, $select2);
                    $imgs2 = mysqli_fetch_array($result2);



                    ?>
                    <div class="right2">

                        <h4><i class="ri-notification-3-line"></i></h4>
                        <div class="circle" style="">
                            <h4><i class="fa-solid fa-circle " id="ar" style="font-size:3.6vw;"></i> <i class="ri-arrow-down-s-fill arrow4"> </i> <img src="<?php echo $imgs2['img'] ?>" alt="" width="58vw" height="56vw" style="position:absolute;right:11vw;border-radius:50%;border:none"></h4>
                            <div class="register" style="color:black;z-index:999999;position:absolute;background-color:white;right:1.8vw;width:11vw;">
                                <h5 id="profileModalTrigger" style="color: black; text-transform: capitalize; font-size: 1.4vw; width: 100%; cursor: pointer;">Profile</h5>
                                <div class="modal" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="profileModalLabel">Admin Profile</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true" class="closeicon">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">

                                                <img src="<?php echo $imgs2['img'] ?>" class="img-fluid rounded-circle mb-3" alt="Profile Image" style="width: 150px; height: 150px;">
                                                <table>
                                                    <tr>
                                                        <td>Name :</td>
                                                        <td>
                                                            <h4><?php echo $imgs2['name'] ?></h4>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email :</td>
                                                        <td>
                                                            <p><?php echo $imgs2['email'] ?></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Phone Number</td>
                                                        <td>
                                                            <p><?php echo $imgs2['phno'] ?></p>
                                                        </td>
                                                    </tr>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h5 id="registerModalTrigger" style="color: black; text-transform: capitalize; font-size: 1.4vw; width: 100%; cursor: pointer;">Register</h5>



                            </div>

                            <div class="modal" id="registerModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Register Admin</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="closeit">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="registerForm" method="post" action="" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="adminName">Admin Name</label>
                                                    <input type="text" class="form-control" id="adminName" name="adminName" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" id="password" name="password" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="phoneNumber">Phone Number</label>
                                                    <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber">
                                                </div>
                                                <div class="form-group">
                                                    <label for="image">Image</label>
                                                    <input type="file" class="form-control-file" id="image" name="image">
                                                </div>
                                                <input type="submit" name="register" value="Register" class="btn btn-success">

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="" method="post">
                    <input type="submit" name="logout" value="Logout" class="btn btn-danger" style="margin-right:1vw;position:absolute;right:6px;top:1vw;width:6vw;font-size:1vw;">
                </form>
                <?php

                if (isset($_POST['logout'])) {
                    session_unset();
                    echo "<script>window.open('login.php','_self')</script>";
                }

                ?>
            </div>
            <div class="sidebarmain">
                <div class="sidebar">
                    <div class="menus">
                        <a href="home.php" class="home">
                            <h1>HOME</h1>
                        </a>
                        <a href="time.php" class="time">
                            <h1>TIME TABLE</h1>
                        </a>
                        <a href="att_copy.php" class="att">
                            <h1>ATTENDENCE</h1>
                        </a>
                        <a href="#" class="att">
                            <h1>ATTENDENCE REPORT</h1>
                        </a>
                        <a href="learn.php" class="lean">
                            <h1>LEARNING MATERIAL</h1>
                        </a>
                        <a href="notice.php" class="note">
                            <h1 style="font-size:1.8vw;">Publish Notice</h1>
                        </a>

                        <div>
                            <a href="#">
                                <div style="
                    display: flex;
                    align-items: center;
                    transition: all 0.4s ease-in-out;
                  ">
                                    <h1 class="faculty">FACULTY</h1>
                                    <i class="ri-arrow-down-s-fill arrow1" style="font-size: 2vw; color: white"></i>
                                </div>
                            </a>
                            <div class="dropdown" style="margin-left: 3vw; color: white">
                                <a href="addfac.php" style="text-decoration:none;color:white;">
                                    <h2>Add Faculty</h2>
                                </a>
                                <a href="checkfac.php" style="text-decoration:none;color:white;">
                                    <h2>Check Faculty</h2>
                                </a>
                            </div>
                        </div>
                        <div>
                            <a href="#">
                                <div style="
                    display: flex;
                    align-items: center;
                    transition: all 0.4s ease-in-out;
                  ">
                                    <h1 class="student" style="font-size: 1.9vw">Students</h1>
                                    <i class="ri-arrow-down-s-fill arrow2" style="font-size: 2vw; color: white"></i>
                                </div>
                            </a>
                            <div class="dropdown2" style="margin-left: 3vw; color: white">
                                <a href="addstu.php" style="text-decoration:none;color:white;">
                                    <h2>Add Student</h2>
                                </a>
                                <a href="checkstu.php" style="text-decoration:none;color:white;">
                                    <h2>Check Students</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="nav"></div>


                    <div class="contents" style="display:flex;">
                        <div class="contleft" style="width:70%;height:100%;">
                            <div style="width:100%;height:50%;">


                                <div class="frm2">

                                    <h1 style="margin-bottom:3vw;margin-left:13vw;padding-top:3vw;"> ATTENDANCE REPORT</h1>

                                    <div style="margin-left:3vw;">
                                        <form method='post'>
                                            <label for="">Course</label>
                                            <select name="course" id="" class="">
                                                <option value="BCA">BCA</option>
                                                <option value="BCOM">BCOM</option>
                                                <option value="BBA">BBA</option>
                                            </select>
                                            <label for="">Semester</label>
                                            <select name="sem" id="" class="">
                                                <option value="Sem1">Sem1</option>
                                                <option value="Sem2">Sem2</option>
                                                <option value="Sem3">Sem3</option>
                                                <option value="Sem4">Sem4</option>
                                                <option value="Sem5">Sem5</option>
                                                <option value="Sem6">Sem6</option>
                                            </select>
                                            <label for="">Section</label>
                                            <select name="section" id="" class="">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                            </select>
                                            <input type="submit" name="search" value="Search" class="btn btn-primary" style="margin-left:1vw;margin-bottom:.5vw;">
                                        </form>
                                    </div>
                                </div>





                            </div>
                            <div class="atd" style="width:100%;height:50%;overflow-y:scroll;border-top:1px solid grey;">

                                <div class="percentage" style="width:90%">
                                    <table class="table table-sm table-hover " style="text-align:center;background-color:#dadada;margin-top:3vw;margin-left:2vw;;">
                                        <thead>
                                            <tr style="text-align:center;">
                                                <th>Student Id</th>
                                                <th>NAME</th>
                                                <th>Section</th>
                                                <th>Course</th>
                                                <th>Semester</th>
                                                <th>Subject</th>
                                                <th>Date</th>
                                                <th>ATTENDANCE</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $sql2 = "select DISTINCT (name) from attendence";
                                        $result = mysqli_query($con, $sql2);
                                        while ($row2 = mysqli_fetch_array($result)) {
                                            $name[] = $row2['name'];
                                        }

                                        $c = count($name);
                                        for ($i = 0; $i < $c; $i++) {
                                            $sql3 = "select COUNT(atten) as coun,name,stud_id,sec,course,semester,atten,sub,date from attendence where name='$name[$i]' AND atten='p' ";
                                            $result3 = mysqli_query($con, $sql3);
                                            $row3 = mysqli_fetch_array($result3);
                                            $ca[$i] = $row3['coun'];
                                            // echo $ca[$i] . "<br>";
                                            $sql4 = "select count(DISTINCT(date)) as dat from attendence ";
                                            $result4 = mysqli_query($con, $sql4);
                                            $row4 = mysqli_fetch_array($result4);
                                            $cat[$i] = $row4['dat'];
                                            // echo $cat[$i] . "<br>";
                                            $per[$i] =  $ca[$i] / $cat[$i] * 100;
                                            // echo $per . "<br>";
                                        ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $row3['stud_id'] ?></td>

                                                    <td><?php echo $name[$i] ?></td>
                                                    <td><?php echo $row3['sec'] ?></td>
                                                    <td><?php echo $row3['course'] ?></td>
                                                    <td><?php echo $row3['semester'] ?></td>
                                                    <td><?php echo $row3['sub'] ?></td>
                                                    <td><?php echo $row3['date'] ?></td>


                                                    <td><?php echo $per[$i] . "%" ?></td>
                                                <?php
                                            }
                                                ?>
                                                </tr>
                                            </tbody>
                                    </table>

                                    <?php
                                    ?>





                                </div>
                            </div>

                            <div class="contleft2"></div>
                        </div>
                        <div class="contleft" style="width:30%;height:100%;">




                            <?php

                            require('connection.php');

                            // if (isset($_SESSION['facultyid'])) {
                            if (isset($_POST['search'])) {
                                $course = $_POST['course'];
                                $sem = $_POST['sem'];
                                $section = $_POST['section'];


                                $sql = "SELECT DISTINCT sub FROM attendence WHERE course='$course' AND semester='$sem' AND sec='$section'";
                                $result = mysqli_query($con, $sql);
                            ?>
                                <div>
                                    <div class="frm" style="position:absolute;top:32%;left:55%">
                                        <form method="post">
                                            <label for="" style="font-size:1.5vw;">Subject</label>
                                            <select name="sub" id="" class="">
                                                <?php
                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <option value="<?php echo $row['sub'] ?>"><?php echo $row['sub'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>

                                            <input type="text" name="stud_id" placeholder="Enter Student Id" class="" />
                                            <input type="submit" value="Submit" name="submit" class="btn btn-primary" />
                                        </form>
                                    </div>

                                    <?php
                                }
                                if (isset($_POST['submit'])) {
                                    $sub = $_POST['sub'];
                                    $studid = $_POST['stud_id'];
                                    $sql2 = "SELECT COUNT(atten) AS count FROM attendence WHERE sub='$sub' AND stud_id='$studid' AND atten='p'";
                                    $result2 = mysqli_query($con, $sql2);

                                    if ($result2) {
                                        $row2 = mysqli_fetch_assoc($result2);
                                        $count2 = $row2['count'];
                                    ?>
                                        <div style="top:30%;position:absolute;left:78%">
                                            <?php echo "Total Present: $count2"; ?>
                                        </div>
                                    <?php
                                    } else {
                                        echo "Error in executing SQL: " . mysqli_error($con);
                                    }

                                    $sql3 = "SELECT COUNT(atten) AS count FROM attendence WHERE sub='$sub' AND stud_id='$studid'";
                                    $result3 = mysqli_query($con, $sql3);

                                    if ($result3) {
                                        $row3 = mysqli_fetch_assoc($result3);
                                        $count3 = $row3['count'];
                                    ?>
                                        <div style="top:30%;position:absolute;left:87%">
                                            <?php echo "Total Lectures: $count3"; ?>
                                        </div>
                                    <?php
                                    } else {
                                        echo "Error in executing SQL: " . mysqli_error($con);
                                    }


                                    ?>
                                    <div>
                                        <div style="top:35%;position:absolute;left:82%">
                                            <?php
                                            $present = $count2 / $count3 * 100;
                                            echo "<br/>Present Rate is : $present %";
                                            ?></div>

                                        <div style="width:200px;height:200px;top:43%;position:absolute;left:80%">
                                            <canvas id='myPieChart' width='200' height='200'></canvas>
                                        </div>
                                    </div>
                                <?php
                                }

                                ?>
                                </div>





                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    } else {
        echo "<script>window.open('login.php','_self')</script>";
    }
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        $(document).ready(function() {
            $("#registerModalTrigger").click(function() {
                $('#registerModal').modal('show');
            });
        });
        $(document).ready(function() {
            $("#profileModalTrigger").click(function() {
                $('#profileModal').modal('show');
            });
        });
        var faculty = document.querySelector(".faculty");
        var dropdown = document.querySelector(".dropdown");
        var dropdown2 = document.querySelector(".dropdown2");
        var arrow1 = document.querySelector(".arrow1");
        var arrow2 = document.querySelector(".arrow2");
        var student = document.querySelector(".student");
        var home = document.querySelector(".home");
        var time = document.querySelector(".time");
        var att = document.querySelector(".att");
        var lean = document.querySelector(".lean");
        var circle = document.querySelector('.circle');
        var register = document.querySelector(".register");
        var closeit = document.querySelector(".closeit");
        var registerModal = document.querySelector("#registerModal");
        var modal = document.querySelector(".modal");
        var closeicon = document.querySelector(".closeicon");
        var closeicon2 = document.querySelector(".closeicon2");
        var modal_backdrop = document.querySelector(".modal-backdrop .show");
        var body = document.querySelector("body");
        console.log(modal);
        console.log(closeicon);
        closeicon.addEventListener("click", function() {
            modal.style.display = "none";
            var backdropElement = document.querySelector('.modal-backdrop.show');


            if (backdropElement) {

                backdropElement.classList.remove('modal-backdrop');

                backdropElement.classList.remove('show');
            }


        })






        closeit.addEventListener("click", function() {
            var backdropElement = document.querySelector('.modal-backdrop.show');

            registerModal.style.display = "none";

            if (backdropElement) {

                backdropElement.classList.remove('modal-backdrop');

                backdropElement.classList.remove('show');
            }

            modal.style.opacity = "0px";
        })



        count = 1;
        faculty.addEventListener("click", function() {
            if (count == 1) {
                dropdown.style.transition = "all 3s ease";
                dropdown.style.display = "block";

                arrow1.style.transform = "rotate(180deg)";
                arrow1.style.transition = "all 0.5s ease";
                count = 0;
            } else {
                dropdown.style.display = "none";
                arrow1.style.transform = "rotate(0deg)";

                count = 1;
            }
        });
        var ctx = document.getElementById('myPieChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Present', 'Absent'],
                datasets: [{
                    label: 'Attendance',
                    data: [<?php echo $present; ?>, <?php echo 100 - $present; ?>],
                    backgroundColor: [
                        '#66fcf1',
                        '#c5c6c7',
                    ],
                    borderColor: [
                        '#66fcf1',
                        '#c5c6c7',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                title: {
                    display: true,
                    text: 'Attendance Percentage'
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var dataset = data.datasets[tooltipItem.datasetIndex];
                            var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                                return previousValue + currentValue;
                            });
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = Math.floor(((currentValue / total) * 100) + 0.5);
                            return percentage + "%";
                        }
                    }
                }
            }
        });
        count1 = 1;
        student.addEventListener("click", function() {
            if (count1 == 1) {
                dropdown2.style.transition = "all 3s ease";
                dropdown2.style.display = "block";

                arrow2.style.transform = "rotate(180deg)";
                arrow2.style.transition = "all 0.5s ease";
                count1 = 0;
            } else {
                dropdown2.style.display = "none";
                arrow2.style.transform = "rotate(0deg)";

                count1 = 1;
            }
        });
        const form = document.getElementById('myForm');
        form.addEventListener('submit', function(event) {
            const inputs = form.querySelectorAll('input, select, textarea');
            let isValid = true;

            inputs.forEach(input => {
                if (!input.checkValidity()) {
                    isValid = false;
                    input.classList.add('error');
                    const errorMessage = input.dataset.errorMessage || 'Please fill out this field.';
                    const errorElement = document.createElement('div');
                    errorElement.classList.add('error-message');
                    errorElement.textContent = errorMessage;
                    input.parentNode.insertBefore(errorElement, input.nextSibling);
                } else {
                    input.classList.remove('error');
                    const errorElement = input.nextElementSibling;
                    if (errorElement && errorElement.classList.contains('error-message')) {
                        errorElement.remove();
                    }
                }
            });

            if (!isValid) {
                event.preventDefault();
            }
        });
    </script>
</body>

</html>