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

                            <div class="card-block">
                                <form action="" class="form-inline" method="post">
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail3"></label>
                                        <select class="selectpicker" name="select_class">
                                            <?php
                                            require './lib/dbconnect.php';

                                            $slct = "SELECT * FROM `class_details`";

                                            $query1 = mysqli_query($conn, $slct);
                                            ?>
                                            <option>Select Class</option>
                                            <?php
                                            while ($result = mysqli_fetch_assoc($query1)) {
                                                ?>
                                                <option value="<?php echo $result['className']; ?>"><?php echo $result['className']; ?></option>


                                                <?php
                                            }
                                            ?>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail3"></label>
                                        <select class="selectpicker" name="select_section">
                                            <?php
                                            require './lib/dbconnect.php';

                                            $slct = "SELECT * FROM `section_details`";

                                            $query1 = mysqli_query($conn, $slct);
                                            ?>
                                            <option>Select Section</option>
                                            <?php
                                            while ($result = mysqli_fetch_assoc($query1)) {
                                                ?>
                                                <option value="<?php echo $result['sectionName']; ?>"><?php echo $result['sectionName']; ?></option>


                                                <?php
                                            }
                                            ?>

                                        </select>
                                    </div>

                                    <input type="submit" name="filter" class="btn btn-default" value="Filter"/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <?php
                if (isset($_POST['filter'])) {
                    $class_name = $_POST['select_class'];
                    $class_section = $_POST['select_section'];
                }
                ?>
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
                                            <th>Class Name</th>
                                            <th>Section Name</th>
                                            <th>Mobile Number</th>
                                            <th>Id Card</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require './lib/dbconnect.php';

                                        $sql1 = "SELECT * FROM `student_admission` WHERE  `S_class_id`='$class_name' and `S_section_id`='$class_section'";
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
                                                <td><?php echo $result['Father_contact']; ?></td>
                                                <td><a href="id_card.php?stid=<?php echo $result['AdmissionID'] ?>">View</a></td>
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