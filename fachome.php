<?php
session_start();
require('conn.php');
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
                height: calc(100% - 12vw);

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
                height: 90%;
                background-color: #5856D6;

                border-radius: 22px;
                position: relative;
            }

            .car:nth-child(2) {
                width: 22vw;
                height: 90%;
                background-color: #3399FF;
                border-radius: 22px;

                position: relative;
            }

            .car:nth-child(3) {
                width: 22vw;
                height: 90%;
                background-color: rgb(209, 181, 59);
                border-radius: 22px;

                position: relative;
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
                        <h6 class="text1">Home</h6>


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
                        <a href="#">
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
                    <div class="nav"></div>
                    <?php

                    require('connection.php');
                    $stu = "select COUNT(student_id) as count from students where course='$course' AND semester='Sem1'";
                    $result = mysqli_query($con, $stu);
                    $row = mysqli_fetch_array($result);
                    $count = $row['count'];

                    $fac_count = "select COUNT(student_id) as count from students where course='$course' AND semester='Sem2'";
                    $result1 = mysqli_query($con, $fac_count);
                    $row1 = mysqli_fetch_array($result1);
                    $count1 = $row1['count'];

                    $fycount = $count + $count1;

                    $course1 = "select COUNT(student_id) as count from students where course='$course' AND semester='Sem3'";
                    $result2 = mysqli_query($con, $course1);
                    $row2 = mysqli_fetch_array($result2);
                    $count2 = $row2['count'];

                    $stu1 = "select COUNT(student_id) as count from students where course='$course' AND semester='Sem4'";
                    $result3 = mysqli_query($con, $stu1);
                    $row3 = mysqli_fetch_array($result3);
                    $count3 = $row3['count'];

                    $sycount = $count2 + $count3;

                    $fac_count1 = "select COUNT(student_id) as count from students where course='$course' AND semester='Sem5'";
                    $result4 = mysqli_query($con, $fac_count1);
                    $row4 = mysqli_fetch_array($result4);
                    $count4 = $row4['count'];

                    $course2 = "select COUNT(student_id) as count from students where course='$course' AND semester='Sem6'";
                    $result5 = mysqli_query($con, $course2);
                    $row5 = mysqli_fetch_array($result5);
                    $count5 = $row5['count'];

                    $tycount = $count4 + $count5;
                    ?>
                    <div class="cards" style="font-family: 'Times New Roman', Times, serif;">
                        <div class="car"><i class="fa-solid fa-chalkboard-user" style="font-size: 4.5vw;position:absolute;top:25%;right:5%;"></i>
                            <h4 style="font-size: 1.4vw;position:absolute;top:10%;margin-left: 1vw;color:white;">F.Y. Students</h4>
                            <button class="btn btn-primary" style="font-size: 3vw;position:absolute;top:26%;margin-left: 5vw;color:white;border:none;background-color:transparent;"><?php echo $fycount ?></button>
                        </div>
                        <div class="car"><i class="fa-solid fa-chalkboard-user" style="font-size: 4.5vw;position:absolute;top:27%;right:5%;"></i>
                            <h4 style="font-size: 1.4vw;position:absolute;top:10%;margin-left: 1vw;color:white;">S.Y. Students</h4>
                            <button class="btn btn-primary" style="font-size: 3vw;position:absolute;top:26%;margin-left: 5vw;color:white;border:none;background-color:transparent;"><?php echo $sycount ?></button>
                        </div>
                        <div class="car"><i class="fa-solid fa-chalkboard-user" style="font-size: 4.5vw;position:absolute;top:27%;right:5%;"></i>
                            <h4 style="font-size: 1.4vw;position:absolute;top:10%;margin-left: 1vw;color:white;">T.Y. Students</h4>
                            <button style="font-size: 3vw;position:absolute;top:33%;margin-left: 5vw;color:white;border:none;background-color:transparent;"><?php echo $tycount ?></button>
                        </div>

                    </div>

                    <div class="contents">

                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Font Awesome JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            var student = document.querySelector(".student");
            var dropdown = document.querySelector(".dropdown");
            var arrow1 = document.querySelector(".arrow1");
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
<?php
} else {
    echo "<script>window.open('faclogin.php','_self');</script>";
}
?>