<?php
session_start();
if(isset($_SESSION['user']))
{
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
                            <form name="AddClass" action="" method="POST">
                                <fieldset>
                                    <label for="className">Class Name</label>
                                    <input type="text" placeholder="Class Name" id="className" name="class_name">
                                    <label for="Class_teacher">Class Teacher</label>
                                    <input type="text" placeholder="Class Teacher Name" id="Class_teacher" name="Class_teacher_name">
                                    <label for="commentField">Comment</label>
                                    <textarea placeholder="Comment Please" id="commentField" name="addclass_comment" cols="1" rows="5"></textarea>

                                    <input class="button-primary" type="submit" value="Add Section" name="AddClass_submit">
                                </fieldset>
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
                            <form>
                                <fieldset>
                                    <label for="className">Section Name</label>
                                    <input type="text" placeholder="Section Name" id="className" name="section_name">                                   
                                    <label for="commentField">Comment</label>
                                    <textarea placeholder="Comment Please" id="commentField" name="comment_section" cols="1" rows="5"></textarea>

                                    <input class="button-primary" type="submit" value="Add Section" name="AddSection_submit">
                                </fieldset>
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
                                    <tr>
                                        <td><?php echo $sl = 1; ?></td>
                                        <td>101</td>
                                        <td>Play</td>
                                        <td>Khalid hasan</td>
                                        <td>No comment</td>
                                        <td><a class="">Update</a>
                                            <a class="">Delete</a></td>
                                    </tr>   
                                    <tr>
                                        <td><?php echo ++$sl; ?></td>
                                        <td>101</td>
                                        <td>Play</td>
                                        <td>Fazlul Karim</td>
                                        <td>No comment</td>
                                        <td><a class="">Update</a>
                                            <a class="">Delete</a></td>
                                    </tr>  
                                    <tr>
                                        <td><?php echo ++$sl; ?></td>
                                        <td>101</td>
                                        <td>Play</td>
                                        <td>Mobasshira Farzana</td>
                                        <td>No comment</td>
                                        <td><a class="">Update</a>
                                            <a class="">Delete</a></td>
                                    </tr> 
                                    <tr>
                                        <td><?php echo ++$sl; ?></td>
                                        <td>101</td>
                                        <td>Play</td>
                                        <td>Arifa Ruhi</td>
                                        <td>No comment</td>
                                        <td><a class="">Update</a>
                                            <a class="">Delete</a></td>
                                    </tr>  
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
}
 else {
    header('location:index.php');
}
?>