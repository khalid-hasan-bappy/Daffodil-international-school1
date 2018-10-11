<?php
session_start();
if (isset($_SESSION['user'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>School Management System</title>
            <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
            <link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
            <link rel="stylesheet" type="text/css" href="inc/style.css" media="all" />
            <link href="style.css" rel="stylesheet" type="text/css"/>
            <?php include './inc/external_link.php'; ?>
        </head>

        <body>
            <?php include './inc/header.php'; ?>
            <?php include './inc/Side_bar.php'; ?>
            <section id="main-content" class="column column-offset-20">


                <?php
                require './lib/dbconnect.php';
                $studentId = $_GET['stid'];
                $sql1 = "SELECT * FROM `student_admission` WHERE `AdmissionID`=$studentId";
                $query1 = mysqli_query($conn, $sql1);
                $sl = 1;
                $result = mysqli_fetch_assoc($query1);
                ?>              



                <div class="id-main">
                    <div class="st-id">
                        <div class="id-card">
                            <div class="id-top">
                                <h3>Student ID Card</h3>
                            </div>
                            <div class="details">
                                <div class="photo">
                                    <img src="images/asma.jpg" alt="Student" />
                                </div>
                                <div class="st-info">
                                    <div class="box">
                                        <h3>Daffodil International School</h3>
                                        <p>Institution</p>
                                    </div>
                                    <div class="box">
                                        <h3><?php echo $result['Student_name']; ?></h3>
                                        <p>student name</p>
                                    </div>
                                    <div class="box">
                                        <h3><?php echo $result['S_class_id']; ?></h3>
                                        <p>Class Name</p>
                                    </div>
                                    <div class="box">
                                        <h3><?php echo $result['Date_of_birth']; ?></h3>
                                    <p>date of birth</p>
                                </div>
                                <div class="box">
                                    <h3>31 December, 2020</h3>
                                    <p>Valid Until</p>
                                </div>
                            </div>
                        </div>
                        <div class="id-footer">
                            <p>Emergency contact no. 01775206983</p>
                        </div>
                    </div>
                </div>
            </div>




            <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>


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