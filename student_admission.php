<?php
session_start();
if (isset($_SESSION['user'])) {
    ?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>College Management System</title>
            <?php include './inc/external_link.php'; ?>
        </head>

        <body>
            <?php include './inc/header.php'; ?>
            <?php include './inc/Side_bar.php'; ?>
            <section id="main-content" class="column column-offset-20">
                <div class="row grid-responsive">
                    <div class="column ">
                        <div class="card">
                            <div class="card-title">
                                <h3>Admission Student</h3>
                            </div>
                            <div class="card-block">
                                <?php
                                if (isset($_GET['msz'])) {
                                    $result = $_GET['msz'];
                                    if ($result == 0) {
                                        echo "Data not sent";
                                    } else {
                                        echo "Student Admitted successfully";
                                    }
                                }
                                ?>



                                <form class="form-horizontal" action="lib/processAdmission.php" method="POST">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Select Class</label>
                                        <div class="col-sm-9">
                                            <select required="" name="select_classid">
                                                <?php
                                                require './lib/dbconnect.php';

                                                $sql1 = "SELECT * FROM `class_details`";
                                                $query1 = mysqli_query($conn, $sql1);
                                                $sl = 1;
                                                while ($result = mysqli_fetch_assoc($query1)) {
                                                    ?>


                                                    <option value='<?php echo $result['className']; ?>'><?php echo $result['className']; ?></option>
                                                    <?php
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">Select Section</label>
                                        <div class="col-sm-9">
                                            <select required="" name="select_sectionid">
                                                <?php
                                                require './lib/dbconnect.php';

                                                $sql1 = "SELECT * FROM `section_details`";
                                                $query1 = mysqli_query($conn, $sql1);
                                                $sl = 1;
                                                while ($result = mysqli_fetch_assoc($query1)) {
                                                    ?>

                                                    <option value='<?php echo $result['sectionName']; ?>'><?php echo $result['sectionName']; ?></option>

                                                    <?php
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="Student_name" class="col-sm-3 control-label">Student Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="Student_name" placeholder="Student Name" name="student_name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Student_name" class="col-sm-3 control-label">Date Of Birth</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="Student_name" placeholder="21/january/1995" name="date">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="father_name" class="col-sm-3 control-label">Father's Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="father_name" placeholder="Father's Name" name="father_name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="father_contact" class="col-sm-3 control-label">Father's Contact No</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="father_contact" name="father_contact">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="father_occupation" class="col-sm-3 control-label">Father's Occupation</label>
                                        <div class="col-sm-9">
                                            <select required="" name="father_occupation">
                                                <option value=""></option>
                                                <option value="1501">Govt. service Holder</option>
                                                <option value="1502">Private job holder</option>
                                                <option value="1504">Teacher</option>
                                                <option value="1505">Defence</option>
                                                <option value="1506">Business</option>
                                                <option value="1506">Farmar</option>
                                                <option value="1506">Others</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="mother_name" class="col-sm-3 control-label">Mother's Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="mother_name" placeholder="Mother's Name" name="mother_name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mather_contact" class="col-sm-3 control-label">Mother's Contact No</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="mather_contact" name="mather_contact">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="mail" class="col-sm-3 control-label">Gardian Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" placeholder="example@demo.com" id="mail"  name="mail">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="present_add" class="col-sm-3 control-label">Present Address</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="present_add" name="present_add" cols="12" rows="2"></textarea>                                        
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="parmanent_add" class="col-sm-3 control-label">Parmanent Address</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="parmanent_add" name="parmanent_add" cols="12" rows="2"></textarea>     

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="parmanent_add" class="col-sm-3 control-label">Gender</label>
                                        <div class="col-sm-8">
                                            <label class="checkbox-inline">
                                                <input type="radio"   id="m" value="Male" name="gender"> Male
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="radio" id="m" value="Female" name="gender"> Female
                                            </label>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="present_add" class="col-sm-3 control-label">Select Your Picture</label>
                                        <div class="col-sm-8">
                                            <input type="file" id="exampleInputFile" name="u_picture">                                    
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-6 col-sm-3">
                                            <button type="submit" class="btn btn-default" name="admited">Admited</button>
                                            <button type="submit" class="btn btn-default">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <!--Tables-->

                <div class="row grid-responsive">
                    <div class="column ">
                        <div class="card">
                            <div class="card-title">
                                <h3>Admitted Student</h3>
                            </div>
                            <div class="card-block">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Student Id</th>
                                            <th>Student Picture</th>
                                            <th>Student Name</th>                                                                                
                                            <th>Class ID</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require './lib/dbconnect.php';

                                        $sql1 = "SELECT * FROM `student_admission`  order by `Admission_date` DESC LIMIT 5";
                                        $query1 = mysqli_query($conn, $sql1);
                                        $sl = 1;
                                        while ($result = mysqli_fetch_assoc($query1)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $sl++; ?></td>
                                                <td><?php echo $result['AdmissionID']; ?></td>
                                                <td><?php echo $result['profile_picture']; ?></td>
                                                <td><?php echo $result['Student_name']; ?></td>
                                                <td><?php echo $result['S_class_id']; ?></td>
                                                <td><?php echo $result['S_section_id']; ?></td>

                                                <td><a class="">Update</a>
                                                    <a class="">Delete</a></td>
                                            </tr> 
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>





                <p class="credit">Copyright © 2017 Bappy<a href="#"> All Rights Reserved</a></p>
            </section>
        </div>



        <script src="inc/chart.min.js"></script>
        <script src="inc/chart-data.js"></script>
        <script>
            window.onload = function () {
                var chart1 = document.getElementById("line-chart").getContext("2d");
                window.myLine = new Chart(chart1).Line(lineChartData, {
                    responsive: true,
                    scaleLineColor: "rgba(0,0,0,.2)",
                    scaleGridLineColor: "rgba(0,0,0,.05)",
                    scaleFontColor: "#c5c7cc"
                });
                var chart2 = document.getElementById("bar-chart").getContext("2d");
                window.myBar = new Chart(chart2).Bar(barChartData, {
                    responsive: true,
                    scaleLineColor: "rgba(0,0,0,.2)",
                    scaleGridLineColor: "rgba(0,0,0,.05)",
                    scaleFontColor: "#c5c7cc"
                });
                var chart4 = document.getElementById("pie-chart").getContext("2d");
                window.myPie = new Chart(chart4).Pie(pieData, {
                    responsive: true,
                    segmentShowStroke: false
                });
                var chart5 = document.getElementById("radar-chart").getContext("2d");
                window.myRadarChart = new Chart(chart5).Radar(radarData, {
                    responsive: true,
                    scaleLineColor: "rgba(0,0,0,.05)",
                    angleLineColor: "rgba(0,0,0,.2)"
                });
                var chart6 = document.getElementById("polar-area-chart").getContext("2d");
                window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
                    responsive: true,
                    scaleLineColor: "rgba(0,0,0,.2)",
                    segmentShowStroke: false
                });
            };
        </script>			

    </body>
    </html> 

    <?php
} else {
    header('location:index.php');
}
?>