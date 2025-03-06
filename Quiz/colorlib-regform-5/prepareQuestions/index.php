<?php
include "../../../connection.php";
$sc = $_REQUEST["subjectCode"];
$dt = $_REQUEST["date"];
$desc = $_REQUEST["description"];
$no_of_questions = $_REQUEST["no_of_question"];
$st = $_REQUEST["start_time"];
$et = $_REQUEST["end_time"];
$total_marks=$_REQUEST["total_marks"];
$query = "INSERT INTO quiz_details (subjectCode, date, description, number_of_questions, start_time, end_time, total_marks)
          VALUES ('$sc', '$dt', '$desc', '$no_of_questions', '$st', '$et', '$total_marks')";
$ins = mysqli_query($con, $query);

if($ins)
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
    <title>Quiz Questions</title>

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
                    <h2 class="title">Quiz Questions</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="ins.php">
                        <!-- <textarea name='ques$i' cols='30' rows='10' class='input--style-5'></textarea> -->
                        <?php
                        // $i = 1;
                        for ($i = 1; $i <= $no_of_questions; $i++) {
                            // $temp=$i+1;
                            echo "<div class='form-row'>";
                            echo "<div class='name'>Sno $i</div>";
                            echo "<div class='value'>";
                            echo "<div class='input-group'>";
                            // echo "<input class='input--style-5' type='text-area' name='ques$i'>";
                            echo "<textarea name='ques$i' cols='50' rows='5' class='input--style-5' style='width=100%'></textarea>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";


                            echo "<div class='form-row'>";
                            echo "<div class='name'>Marks Of Question No. $i</div>";
                            echo "<div class='value'>";
                            echo "<div class='input-group'>";
                            echo "<input class='input--style-5' type='text' name='marks$i'>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";



                            echo "<div class='form-row m-b-55'>";
                            echo "<div class='name'>Option</div>";
                            echo "<div class='value'>";
                            echo "<div class='row row-space'>";
                            echo "<div class='col-2'>";
                            echo "<div class='input-group-desc'>";
                            echo "<input class='input--style-5' type='text' name='option1_$i'>";
                            echo "<label class='label--desc'>Option 1</label>";
                            echo "</div>";
                            echo "</div>";
                            echo "<div class='col-2'>";
                            echo "<div class='input-group-desc'>";
                            echo "<input class='input--style-5' type='text' name='option2_$i'>";
                            echo "<label class='label--desc'>Option 2</label>";
                            echo "</div>";
                            echo "</div>";

                            echo "</div>";
                            echo "</div>";
                            echo "</div>";


                            echo "<div class='form-row m-b-55'>";
                            echo "<div class='name'></div>";
                            echo "<div class='value'>";
                            echo "<div class='row row-space'>";
                            echo "<div class='col-2'>";
                            echo "<div class='input-group-desc'>";
                            echo "<input class='input--style-5' type='text' name='option3_$i'>";
                            echo "<label class='label--desc'>Option 3</label>";
                            echo "</div>";
                            echo "</div>";
                            echo "<div class='col-2'>";
                            echo "<div class='input-group-desc'>";
                            echo "<input class='input--style-5' type='text' name='option4_$i'>";
                            echo "<label class='label--desc'>Option 4</label>";
                            echo "</div>";
                            echo "</div>";

                            echo "</div>";
                            echo "</div>";
                            echo "</div>";




                            echo "<div class='form-row'>
                                    <div class='name'>Correct Answer</div>
                                    <div class='value'>
                                        <div class='input-group'>
                                            <div class='rs-select2 js-select-simple select--no-search'>
                                                <select name='correct_answer$i'>
                                                    <option disabled='disabled' selected='selected'>Choose option</option>
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                </select>
                                                <div class='select-dropdown'></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>";
                        }
                        ?>
                        
                        <div>
                            <button class="btn btn--radius-2 btn--green" type="submit">Create Quiz</button>
                            <button class="btn btn--radius-2 btn--red" type="reset">Reset</button>
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