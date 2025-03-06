<?php
    include "../../connection.php";
    $res=mysqli_query($con,"SELECT * FROM subject_details");
    if($res)
    {
    }
    else
    {
        echo mysqli_error($con);
    }
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
    <title>Quiz</title>

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
                    <h2 class="title">quiz</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="prepareQuestions/index.php">
                        <div class="form-row">
                            <div class="name">Subject</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subjectCode">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <?php
                                                while($row=mysqli_fetch_row($res))
                                                {
                                                echo "<option value='".$row[1]."'>Subject Code: ".$row[1]."=>Subject Name: ".$row[2]."</option>";
                                                }
                                            ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Date</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="date">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="description">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">NoOfQuestions</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="no_of_question">
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Total Marks</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="total_marks">
                                </div>
                            </div>
                        </div>


                        <div class="form-row m-b-55">
                            <div class="name">Time</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="time" name="start_time">
                                            <label class="label--desc">Start Time</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="time" name="end_time">
                                            <label class="label--desc">End Time</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="area_code">
                                            <label class="label--desc">Area Code</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone">
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="form-row p-t-20">
                            <label class="label label--block">Are you an existing customer?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div> -->
                        <div>
                            <button class="btn btn--radius-2 btn--green" type="submit">Submit</button>
                            <button class="btn btn--radius-2 btn--red" type="reset">Reset</button>
                            <button onclick='window.location.href="../../HomePage/sidebar-01/index.php"' type="button" class="btn btn--radius-2 btn--blue">Home</button>
                        </div>
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