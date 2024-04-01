<?php
require('conn.php');
session_start();
if (($_SESSION['id']) == true) {
    $facid = $_SESSION['id'];
    $sql = "select dep from faculty where fac_id='$facid'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $course = $row['dep'];
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />


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
                padding-right: 4vw;
                gap: 6%;


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



            .cards {
                width: 100%;
                height: 12vw;
                background-color: #edeaed;
                display: flex;
                align-items: center;
                justify-content: space-evenly;



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
                width: 22vw;
                height: 80%;
                background-color: #5856D6;

                border-radius: 22px;
                position: absolute;
            }

            .car:nth-child(2) {
                width: 22vw;
                height: 80%;
                background-color: #3399FF;
                border-radius: 22px;

                position: absolute;
            }

            .car:nth-child(3) {
                width: 22vw;
                height: 80%;
                background-color: rgb(209, 181, 59);
                border-radius: 22px;
                position: absolute;
            }

            .dropdown h2 {
                font-size: 1.4vw;
                transition: all 0.4s ease-in-out;
            }


            .dropdown {
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

            .text {
                width: 20vw;
                height: 6vh;
                margin-left: 1vw;
            }

            .text1 {
                font-size: 5vh;
                font-family: 'Times New Roman', Times, serif;
            }
        </style>
    </head>

    <body>
        <div class="wrapper">
            <div class="head">
                <div class="left" style="border-right: 1px solid black;">
                    <h1>ACADEMIC FLOW</h1>
                </div>
                <div class="right">
                    <div class="text">
                        <h6 class="text1">Attendance</h6>


                    </div>
                    <div class="right2">
                        <?php

                        $select = "select * from faculty where fac_id='$facid'";
                        $result = mysqli_query($con, $select);
                        $row = mysqli_fetch_assoc($result);

                        ?>
                        <button type="button" class="circular-button" data-toggle="modal" data-target="#studentProfileModal" style="position:absolute;top:2vh;border-radius:3vw;">
                            <img src="<?php echo $row['img'] ?>" alt="Faculty Profile Image" style="width:50px;height:50px;border-radius:50%">
                        </button>

                        <div class="modal fade" id="studentProfileModal" tabindex="-1" role="dialog" aria-labelledby="studentProfileModalLabel" aria-hidden="true" data-backdrop="false">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="studentProfileModalLabel" style="color:black;width:100%;text-align:center">Profile</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="image-container">
                                            <img class="profile-image" src="<?php echo $row['img'] ?>" alt="Student Profile Image" style="height:20vh">
                                        </div>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Faculty ID</th>
                                                    <td><?php echo $row['fac_id'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Name</th>
                                                    <td><?php echo $row['name'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email</th>
                                                    <td><?php echo $row['email'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">DOB</th>
                                                    <td><?php echo $row['dob'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Phone</th>
                                                    <td><?php echo $row['phone'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Gender</th>
                                                    <td><?php echo $row['gender'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Address</th>
                                                    <td><?php echo $row['address'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Department</th>
                                                    <td><?php echo $row['dep'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebarmain">
                <div class="sidebar">
                    <div class="menus">
                        <a href="fachome.php">
                            <h1>HOME</h1>
                        </a>
                        <a href="factime.php">
                            <h1>TIME TABLE</h1>
                        </a>
                        <a href="facatt.php">
                            <h1>ATTENDENCE</h1>
                        </a>
                        <a href="facattrep.php">
                            <h1>ATTENDENCE REPORT</h1>
                        </a>
                        <a href="faclearn.php">
                            <h1>LEARNING MATERIAL</h1>
                        </a>
                        <a href="facnot.php">
                            <h1>PUBLISH NOTICE</h1>
                        </a>
                        <div>
                            <a href="#">
                                <div style="
                    display: flex;
                    align-items: center;
                    transition: all 0.4s ease-in-out;
                  ">
                                    <h1 class="student" style="font-size: 1.9vw">Students</h1>
                                    <i class="ri-arrow-down-s-fill arrow1" style="font-size: 2vw; color: white"></i>
                                </div>
                            </a>
                            <div class="dropdown" style="margin-left: 3vw; color: white">
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
                    <div class="nav">
                    </div>
                    <div class="contents">
                        <!-- <h1 style="text-align:center;">Attendance</h1> -->
                        <div class="display_student">
                            <div class="container" style="margin-top:2vw;">

                                <div class="se" style="padding:1vw;">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div style="position:absolute;top:40vh">
                                            <div style="display:flex;align-items:center;justify-content:center;gap:10vw;">
                                                <div style="display:flex;gap:1vw;">
                                                    <label for="">Course</label>
                                                    <select name="course" id="course" class="course">
                                                        <option value="">Select the course</option>
                                                        <option value="<?php echo $_SESSION['course'] ?>"><?php echo $_SESSION['course'] ?></option>
                                                    </select>

                                                </div>

                                                <div style="display:flex;gap:1vw;"><label for="">Semester</label>
                                                    <select name="sem" id="">
                                                        <option value="Sem1">Sem1</option>
                                                        <option value="Sem2">Sem2</option>
                                                        <option value="Sem3">Sem3</option>
                                                        <option value="Sem4">Sem4</option>
                                                        <option value="Sem5">Sem5</option>
                                                        <option value="Sem6">Sem6</option>

                                                    </select>
                                                </div>
                                                <div style="display:flex;gap:1vw;">
                                                    <label for="">Section</label>
                                                    <select name="section" id="">
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                    </select>
                                                </div>

                                                <input type="submit" name="search" value="search" class="btn btn-primary" style="margin-left:-7vw;">
                                            </div>

                                            <div style="display:flex;align-item:flex-start;gap:4vw;margin:1vw;position:absolute;top:80%;">

                                                <div style="display:flex;margin-left:-1vw"><label>Subject Name:</label><input type="text" name="subject" placeholder="enter name of subject" style="margin-left:1vw"></div>

                                                <div>Date: <input type="date" name="date"></div>
                                            </div>
                                        </div>
                                        <?php

                                        if (isset($_POST['search'])) {
                                            $course = $_POST['course'];
                                            $section = $_POST['section'];
                                            $sem = $_POST['sem'];

                                            $sql23 = "select count(student_id) as coun from students where course='$course'";
                                            $result23 = mysqli_query($con, $sql23);
                                            $row23 = mysqli_fetch_array($result23);

                                            $sql24 = "select count(student_id) as coun from students where course='$course' AND semester='$sem'";
                                            $result24 = mysqli_query($con, $sql24);
                                            $row24 = mysqli_fetch_array($result24);


                                            $sql25 = "select count(student_id) as coun from students where course='$course' AND semester='$sem' AND sec='$section'";
                                            $result25 = mysqli_query($con, $sql25);
                                            $row25 = mysqli_fetch_array($result25);


                                        ?>

                                            <div class="cards" style="position:absolute;top:10%;left:19%">
                                                <div class="car" style="font-size: 4.5vw;position:absolute;top:7%;left:4%;">
                                                    <i class="fa-solid fa-solid fa-chalkboard-user" style="font-size: 4.5vw;position:absolute;top:27%;right:5%;"></i>
                                                    <h4 style="font-size: 1.4vw;position:absolute;top:10%;margin-left: 1vw;color:white;">Numbers of students in <?php echo $course ?></h4>
                                                    <button class="btn btn-primary" style="font-size: 3vw;position:absolute;top:26%;margin-left: 5vw;color:white;border:none;background-color:transparent;"><?php echo $row23['coun']; ?></button>
                                                </div>
                                                <div class="car" style="font-size: 4.5vw;position:absolute;top:7%;left:29%;"><i class="fa-solid fa-chalkboard-user" style="font-size: 4.5vw;position:absolute;top:27%;right:5%;"></i>
                                                    <h4 style="font-size: 1.4vw;position:absolute;top:10%;margin-left: 1vw;color:white;">Numbers of Students in <?php echo $sem ?></h4>
                                                    <button class="btn btn-primary" style="font-size: 3vw;position:absolute;top:26%;margin-left: 5vw;color:white;border:none;background-color:transparent;"><?php echo $row24['coun'] ?></button>
                                                </div>

                                                <div class="car" style="font-size: 4.5vw;position:absolute;top:7%;left:54%;"><i class="fa-solid fa-chalkboard-user" style="font-size: 4.5vw;position:absolute;top:27%;right:5%;"></i>
                                                    <h4 style="font-size: 1.4vw;position:absolute;top:10%;margin-left: 1vw;color:white;">Numbers of students in Section <?php echo $section ?></h4>
                                                    <button class="btn btn-primary" style="font-size: 3vw;position:absolute;top:26%;margin-left: 5vw;color:white;border:none;background-color:transparent;"><?php echo $row25['coun'] ?></button>
                                                </div>

                                            </div>

                                        <?php
                                        }


                                        ?>
                                        <div class="" style="position:absolute;top:60vh;width:70%">
                                            <table class="table table-striped table-bordered">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>Student ID</th>
                                                        <th>Name</th>
                                                        <th>Section</th>
                                                        <th>Course</th>

                                                        <th>Semester</th>

                                                        <th>Update</th>

                                                    </tr>
                                                </thead>
                                                <tbody id="studentTableBody">
                                                    <?php
                                                    require('connection.php');
                                                    if (isset($_POST['search'])) {
                                                        $course = $_POST['course'];
                                                        $semester = $_POST['sem'];
                                                        $sec = $_POST['section'];

                                                        $sel = "SELECT * FROM students WHERE course='$course' AND semester='$semester' AND sec='$sec'";
                                                        $result = mysqli_query($con, $sel);
                                                        while ($row = mysqli_fetch_array($result)) {
                                                    ?>
                                                            <tr>
                                                                <td><input style="width:100px" type="text" value="<?php echo $row['student_id'] ?>" name="id_<?php echo $row['student_id']; ?>" readonly></td>
                                                                <td><input style="width:230px" type="text" value="<?php echo $row['name'] ?>" name="name_<?php echo $row['student_id']; ?>" readonly></td>
                                                                <td><input style="width:30px" type="text" value="<?php echo $row['sec'] ?>" name="sec_<?php echo $row['student_id']; ?>" readonly></td>
                                                                <td><input style="width:50px" type="text" value="<?php echo $row['course'] ?>" name="course_<?php echo $row['student_id']; ?>" readonly></td>
                                                                <td><input style="width:50px" type="text" value="<?php echo $row['semester'] ?>" name="semester_<?php echo $row['student_id']; ?>" readonly></td>
                                                                <td>
                                                                    <input type="checkbox" name="p_<?php echo $row['student_id']; ?>" value="p"> P
                                                                    <input type="checkbox" name="p_<?php echo $row['student_id']; ?>" value="A"> A
                                                                </td>
                                                            </tr>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>

                                            <input type="submit" name="submit" value="Attendance Submit" class="btn btn-primary">

                                            <?php
                                            if (isset($_POST['submit'])) {
                                                require('connection.php');
                                                foreach ($_POST as $key => $value) {
                                                    if (strpos($key, 'id_') === 0) {
                                                        $student_id = substr($key, 3); // Extract student ID from the input name
                                                        $name = $POST["name$student_id"];
                                                        $sec = $POST["sec$student_id"];
                                                        $course = $POST["course$student_id"];
                                                        $semester = $POST["semester$student_id"];
                                                        $status = $POST["p$student_id"];
                                                        $sub = $_POST['subject'];
                                                        $date = $_POST['date'];
                                                        $sql = "INSERT INTO attendence VALUES('$student_id', '$name', '$sec', '$course', '$semester', '$status','$sub','$date')";
                                                        $result = mysqli_query($con, $sql);
                                                        if ($result) {
                                                            echo "<script>alert('inserted');</script>";
                                                        } else {
                                                            echo "Error: " . $sql . "<br>" . mysqli_error($con);
                                                        }
                                                    }
                                                }
                                            }
                                            ?>

                                        </div>
                                </div>
                            </div>
                        </div>
                    <?php
                } else {
                    echo "<script>window.open('faclogin.php','_self')</script>";
                }
                    ?>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
                    <!-- Font Awesome JS -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
                    <script>
                        var dropdown = document.querySelector(".dropdown");
                        var arrow1 = document.querySelector(".arrow1");
                        var student = document.querySelector(".student");
                        var home = document.querySelector(".home");
                        var time = document.querySelector(".time");
                        var att = document.querySelector(".att");
                        var lean = document.querySelector(".lean");

                        count = 1;
                        student.addEventListener("click", function() {
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