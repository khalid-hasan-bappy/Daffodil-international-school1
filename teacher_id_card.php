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


                <?php
                require './lib/dbconnect.php';
                $teacherId = $_GET['tchid'];
                $sql1 = "SELECT * FROM `teacher_info` WHERE `teacherID`=$teacherId";
                $query1 = mysqli_query($conn, $sql1);
                $sl = 1;
                while ($result = mysqli_fetch_assoc($query1)) {
                    ?>
                    <tr>
                        <td><?php echo $sl++; ?></td>
                        <td><?php echo $result['teacherID']; ?></td>
                        <td><?php echo $result['profilePicture']; ?></td>
                        <td><?php echo $result['teacherName']; ?></td>
                        <td><?php echo $result['teacherMobileNumber']; ?></td>
                        <td><a class="">Update</a>
                            <a class="">Delete</a></td>
                    </tr> 
                    <?php
                }
                ?>




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