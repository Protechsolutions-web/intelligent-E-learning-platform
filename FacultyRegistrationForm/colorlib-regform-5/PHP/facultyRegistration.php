<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Colorlib Templates" />
    <meta name="author" content="Colorlib" />
    <meta name="keywords" content="Colorlib Templates" />

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all" />
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all" />
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet" />

    <!-- Vendor CSS-->
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all" />
    <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all" />
    <link href="../css/main.css" rel="stylesheet" media="all" />
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Faculty Registration Form</h2>
                </div>

                <div class="card-body">
                    <form action='facultyReg2.php'>


                        <!-- Jquery JS-->

                        <?php




    include '../../../connection.php';
    if($db)
    {
        $uid=$_REQUEST["uid"];
        $fid=$_REQUEST["fid"];

        $noOfSubject=$_REQUEST["noOfSubject"];
        $ins="insert into faculty values('".$fid."','".$uid."')";
        echo "";
        echo "<input type='hidden' name='noOfSubject' value='".$noOfSubject."'>";
        echo "<input type='hidden' name='fid' value='".$fid."'>";
        
        if(mysqli_query($con,$ins))
        {
     

            for($i=0;$i<$noOfSubject;$i++)
            {
              $res=mysqli_query($con,"select * from subject_details WHERE facultyID IS NULL");
            echo "<div class='form-row'>";
            echo "<div class='name'>Select Subject Code</div>";
            //echo "<div class='name'>How Many Subjects Do You Want To Teach?</div>";
            echo "<div class='value'>
            <div class='input-group-desc'>
                       
            <div class='rs-select2 js-select-simple select--no-search'>";
            echo "<select name=$i>";
            while($row=mysqli_fetch_row($res))
            {
              echo "<option value=$row[1]>".$row[1]."</option>";
            }
            echo "</select>";
            echo "<div class='select-dropdown'></div>
            </div>
            </div>
          </div>
        </div>";

      $res=mysqli_query($con,"select * from subject_details");
            
      //echo "<div class='form-row'>";
      //echo "<div class='name'>How Many Subjects Do You Want To Teach?</div>";
      // echo "<div class='value'>
      // <div class='col-2'
      // <div class='input-group-desc'>
                       
      //   <div class='rs-select2 js-select-simple select--no-search'>";
      //       echo "<select name='nm ".$i."'>";
      //       while($row=mysqli_fetch_row($res))
      //       {
      //         echo "<option value=$row[2]>".$row[2]."</option>";
      //       }
      //       echo "</select>";
    
      //       echo "<div class='select-dropdown'></div>
      //       </div>
      //     </div>
      //     </div>
      //   </div>
      // ";

        }
        }
      
        else
        {
            echo mysqli_error($con);
        }
    }
    else
    {
        echo mysqli_error($con);
    }
?>

                        <div class="form-row">
                            <div class="col text-center">

                                <button class="btn btn--radius-2 btn--green" type="submit">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all" />
            <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all" />
            <!-- Font special for pages-->
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
                rel="stylesheet" />

            <!-- Vendor CSS-->
            <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all" />
            <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all" />
            <link href="../css/main.css" rel="stylesheet" media="all" />



            <script src="../vendor/jquery/jquery.min.js"></script>
            <!-- Vendor JS-->
            <script src="../vendor/select2/select2.min.js"></script>
            <script src="../vendor/datepicker/moment.min.js"></script>
            <script src="../vendor/datepicker/daterangepicker.js"></script>

            <!-- Main JS-->
            <script src="../js/global.js"></script>

</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>