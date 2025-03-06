<?php
    include "../../../connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Arrange Lecture</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Arrange Lecture</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="check_availability.php">
                        <div class="form-row">
                            <div class="name">Class ID</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="ci">
                                            <?php
                                            $sel = "select * from class_info";
                                            $res = mysqli_query($con, $sel);
                                            while ($row = mysqli_fetch_row($res)) {
                                                echo "<option value='$row[0]'>" . $row[0] . "</option>";
                                            }
                                            ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Day</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="di">
                                            <?php
                                            $sel2 = "select * from day_of_class";
                                            $res2 = mysqli_query($con, $sel2);
                                            while ($row2 = mysqli_fetch_row($res2)) {
                                                echo "<option value='$row2[0]'>" . $row2[1] . "</option>";
                                            }
                                            ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Time</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="ti">
                                            <?php
                                            $sel3 = "select timeID,date_format(start_time,'%H:%i'),date_format(end_time,'%H:%i')  from time_of_class";
                                            $res3 = mysqli_query($con, $sel3);
                                            while ($row3 = mysqli_fetch_row($res3)) {
                                                echo "<option value='$row3[0]'>" . $row3[1] . " To " . $row3[2] . "</option>";
                                            }
                                            ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Subject</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="sc">
                                            <?php
                                            $sel4 = "select *  from subject_details";
                                            $res4 = mysqli_query($con, $sel4);
                                            while ($row4 = mysqli_fetch_row($res4)) {
                                                echo "<option value='$row4[1]'>" . $row4[2] . "</option>";
                                            }
                                            ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-2">
                                <button class="btn btn--radius-2 btn--green" type="submit">Submit</button>
                            </div>
                            <div class="col-2">
                                <input class="btn btn--radius-2 btn--red" type="reset" value="reset">                            
                            </div>
                         </div>
                        <!-- <div>
                            <input type="submit" class=" btn btn-secondary btn-lg">
                            <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->