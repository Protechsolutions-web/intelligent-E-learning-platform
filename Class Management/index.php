<?php
include '../connection.php'; 
session_start();?>
<!DOCTYPE html>
<html>

<head>
    <!-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href=""> -->






    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />

    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css" />

    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" type="text/css" href="css/util.css" />
    <link rel="stylesheet" type="text/css" href="css/main2.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Table</title>













    <style>
        /* table {
            border-collapse: collapse;
        } */

        /* td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        } */

        td .class-info {
            border: 1px solid black;
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>

<body>




    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100">
                    <table style="width: 100%;">
                        <thead>
                            <tr class="table100-head">
                                <th class="column1" style="text-align:center;">
                                    Time
                                </th>
                                <?php
                                $sel2 = "select * from day_of_class";
                                $t = 2;
                                $res2 = mysqli_query($con, $sel2);
                                while ($row2 = mysqli_fetch_row($res2)) {
                                    if ($t > 7) {
                                        $t = 7;
                                    }
                                    echo "<th class='column$t' style='text-align:center;'>" . $row2[1] . "</th>";
                                    $t++;
                                }
                                ?>
                        </thead>
                        </tr>




                        <!-- <table border="5">
        <tr>
            <th>
                Time
            </th>
            <th>
                Monday
            </th>
            <th>
                Tuesday
            </th>
            <th>
                Wednesday
            </th>
            <th>
                Thursday
            </th>
            <th>
                Friday
            </th>
            <th>
                Saturday
            </th>
            <th>
                Sunday
            </th>
        </tr> -->
                        <?php
                        $sel = mysqli_query($con, "select * from time_of_class");
                        while ($row = mysqli_fetch_assoc($sel)) {
                            echo "<tr>";
                            echo "<td style='text-align:center;' class='column1'>";
                            $ti1 = $row["start_time"];
                            $fst = date('H:i', strtotime($ti1));
                            $ti2 = $row["end_time"];
                            $fet = date('H:i', strtotime($ti2));
                            echo $fst . " To " . $fet;
                            $tid = $row["timeID"];
                            echo "</td>";
                            $sel3 = mysqli_query($con, "select * from day_of_class");
                            $t = 2;
                            while ($row3 = mysqli_fetch_assoc($sel3)) {
                                $t++;
                                $did = $row3["dayID"];
                                $sel2 = mysqli_query($con, "select * from available_class where timeID='" . $tid . "' and dayID='" . $did . "'");
                                echo "<td class='column$t' style='text-align:center;'>";
                                // echo "<td style='border: 1px solid black !important; padding: 5px !important;'>";
                                while ($row2 = mysqli_fetch_assoc($sel2)) {
                                    $fid = $row2["facultyID"];
                                    $sel4 = mysqli_query($con, "SELECT fullName FROM users WHERE userID=(SELECT userID FROM faculty WHERE facultyID='" . $fid . "')");
                                    $t2 = mysqli_fetch_row($sel4);
                                    $nm = $t2[0];
                                    // echo $row2["classID"] . " " . $row2["subjectCode"] . " " . $nm . "<br/>";
                                    echo "<div class='class-info'>" . $row2["classID"] . " " . $row2["subjectCode"] . "<br/>" . $nm . "</div>";
                                }
                                echo "</td>";
                            }
                        }
                        // $sel4 = mysqli_query($con, "select fullName from users where userID=(select userID from faculty where facultyID='" . $fid . "'");
                        // $t = mysqli_fetch_row($sel4);
                        // $nm = $t[0];

                        // $t = mysqli_fetch_row($sel4);
                        // $uid = $t[0];
                        // $sel5 = mysqli_query($con, "select firstName from users userID='" . $uid . "'");
                        // $t1 = mysqli_fetch_row($sel5);
                        // $nm = $t1[0];

                        //     $did=$row3["dayId"];
                        // }
                        ?>
                    </table>
                        <button type="button" onclick="window.location.href = 'PHP/ArrangeLecture/index.php';" class="m-3 btn btn-success btn-lg float-right">Book Lecture Slot</button>
                    
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1" style="text-align:center;">
                                    Subject Code
                                </th>
                                <th style="text-align:center;">
                                    Subject Name
                                </th>
                            </tr>
                        </thead>
                        <!-- <tr>
            <th>
                Subject Code
            </th>
            <th>
                Subject Name
            </th> -->
                        <?php
                        $sel = mysqli_query($con, "SELECT * FROM subject_details");
                        while ($r = mysqli_fetch_assoc($sel)) {
                            echo "<tr><td style='text-align:center;'>" . $r["subjectCode"] . "</td>";
                            echo "<td style='text-align:center;'>" . $r["subjectName"] . "</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendor/select2/select2.min.js"></script>

    <script src="js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "UA-23581568-13");
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7a760ae1e8dd03bd","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.2.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>