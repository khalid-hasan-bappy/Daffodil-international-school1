<?php
session_start();
if (isset($_SESSION['user'])) {
    ?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>School Management System</title>
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
                                <h3>Add Classs</h3>
                            </div>
                            <div class="card-block">
                                <?php
                                if (isset($_GET['msz'])) {
                                    $result = $_GET['msz'];
                                    if ($result == 0) {
                                        echo "Data not sent";
                                    } else {
                                        echo "Data sent successfully";
                                    }
                                }
                                ?>



                                <form class="form-horizontal" action="lib/processClass.php" method="POST">
                                    <div class="form-group">
                                        <label for="class_name" class="col-sm-3 control-label">Class Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="class_name" placeholder="One" name="class_name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Class_teacher_name" class="col-sm-3 control-label">Class Teacher's Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="Class_teacher_name"  name="Class_teacher_name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="class_comment" class="col-sm-3 control-label">Comment</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="class_comment" name="addclass_comment">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-6 col-sm-3">
                                            <button type="submit" class="btn btn-default" name="AddClass_submit">Add Class</button>
                                            <button type="submit" class="btn btn-default">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row grid-responsive">
                    <div class="column ">
                        <div class="card">
                            <div class="card-title">
                                <h3>Add Section</h3>
                            </div>
                            <div class="card-block">

                                <?php
                                if (isset($_GET['mszz'])) {
                                    $result = $_GET['mszz'];
                                    if ($result == 0) {
                                        echo "Data not sent";
                                    } else {
                                        echo "Data sent successfully";
                                    }
                                }
                                ?>

                                <form class="form-horizontal" action="lib/processSection.php" method="POST">
                                    <div class="form-group">
                                        <label for="section_name" class="col-sm-3 control-label">Section Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="section_name" placeholder="One" name="section_name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="comment_section" class="col-sm-3 control-label">Comment</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="comment_section" name="comment_section">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-6 col-sm-3">
                                            <button type="submit" class="btn btn-default" name="AddSection_submit">Add Section</button>
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
                                <h3>Current Class</h3>
                            </div>
                            <div class="card-block">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Class Id</th>
                                            <th>Class Name</th>
                                            <th>Clas Teacher Name</th>                                                                                
                                            <th>Class Comment</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        require './lib/dbconnect.php';

                                        $sql1 = "SELECT * FROM `class_details`";
                                        $query1 = mysqli_query($conn, $sql1);
                                        $sl = 1;
                                        while ($result = mysqli_fetch_assoc($query1)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $sl++; ?></td>
                                                <td><?php echo $result['classID']; ?></td>
                                                <td><?php echo $result['className']; ?></td>
                                                <td><?php echo $result['classTeacherID']; ?></td>
                                                <td><?php echo $result['classComment']; ?></td>
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



                <div class="row grid-responsive">
                    <div class="column ">
                        <div class="card">
                            <div class="card-title">
                                <h3>Current Section</h3>
                            </div>
                            <div class="card-block">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Section Id</th>
                                            <th>Section Title</th>                                                                                                                
                                            <th>Section Comment</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require './lib/dbconnect.php';

                                        $sql1 = "SELECT * FROM `section_details`";
                                        $query1 = mysqli_query($conn, $sql1);
                                        $sl = 1;
                                        while ($result = mysqli_fetch_assoc($query1)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $sl++; ?></td>
                                                <td><?php echo $result['sectionID']; ?></td>
                                                <td><?php echo $result['sectionName']; ?></td>
                                                <td><?php echo $result['sectionComment']; ?></td>                                        
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