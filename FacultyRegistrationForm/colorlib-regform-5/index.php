<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="Colorlib Templates" />
    <meta name="author" content="Colorlib" />
    <meta name="keywords" content="Colorlib Templates" />

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link
      href="vendor/mdi-font/css/material-design-iconic-font.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/font-awesome-4.7/css/font-awesome.min.css"
      rel="stylesheet"
      media="all"
    />
    <!-- Font special for pages-->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
      rel="stylesheet"
    />

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all" />
    <link
      href="vendor/datepicker/daterangepicker.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Main CSS-->
    <!-- <script src="js/main.js"></script> -->
    
    <!-- <script>
      
function subjectDetail() {

  <?php
    if(isset($_REQUEST["noOfSub"]))
    {
     include '../../../connection.php';
        $n=$_GET["noOfSub"];
        if($db)
        {
          for($i=0;$i<$n;$i++)
          {
            $res=mysqli_query($con,"select * from subject_details");
          
          echo "<select>";
          while($row=mysqli_fetch_row($res))
          {
            echo "<option value=$row[1]>".$row[1]."</option>";
          }
          echo "</select>";
          $res=mysqli_query($con,"select * from subject_details");
          
          echo "<select>";
          while($row=mysqli_fetch_row($res))
          {
            echo "<option value=$row[2]>".$row[2]."</option>";
          }
          echo "</select>";

          echo "<br/>";
        }
        }
        else
        {
          echo mysqli_error($con);
        }
      }
      else
      {
        echo "Nathi Thatu";
      }
      ?> 

    var n=document.getElementById("noOfSubject").value;
    // alert("grgkji");
    
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '../css/main.css';
    document.getElementById("container1").innerHTML = "";
    document.getElementById("container2").innerHTML = "";
    // alert("jigr");
    for (let i = 1; i <= n; i++) {
        const dropdown = document.createElement("select");
        dropdown.name = "dropdown-" + i;
        dropdown.id = "dropdown-" + i;
        dropdown.innerHTML+="<br/>";
        const op=document.createElement("option");
        
        op.text="Web Technologies";
        dropdown.appendChild(op);
        document.getElementById("container1").className="rs-select2 js-select-simple select--no-search";
        document.getElementById("container1").appendChild(dropdown);
    
    
        
        const dropdown2 = document.createElement("select");
        dropdown2.name = "dropdown2-" + i;
        dropdown2.id = "dropdown2-" + i;
        dropdown2.innerHTML+="<br/>";
        const op2=document.createElement("option");
        op2.text="Web Technologies";
        dropdown2.appendChild(op2);
        document.getElementById("container2").className="rs-select2 js-select-simple select--no-search";
        document.getElementById("container2").appendChild(dropdown2);
      }
        
    }
    </script> -->
    <link href="css/main.css" rel="stylesheet" media="all" />
  </head>

  <body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
      <div class="wrapper wrapper--w790">
        <div class="card card-5">
          <div class="card-heading">
            <h2 class="title">Faculty Registration Form</h2>
          </div>
          <div class="card-body">
            <form method="POST" action="PHP/facultyRegistration.php">

              
              <div class="form-row">
                <div class="name">User ID</div>
                <div class="value">
                  <div class="input-group">
                    <input class="input--style-5" type="text" name="uid" readonly value="<?php echo $_GET['uid']?>"/>
                  </div>
                </div>
              </div>


              <div class="form-row">
                <div class="name">Faculty ID</div>
                <div class="value">
                  <div class="input-group">
                  <input class="input--style-5" type="text" name="fid" />
                  
                    <!-- <input class="input--style-5" type="text" name="faculty_id" /> -->
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="name">How Many Subjects Do You Want To Teach?</div>
                <div class="value">
                  <div class="input-group">
                    <div class="rs-select2 js-select-simple select--no-search">
                      <select
                        id="noOfSubject"
                        name="noOfSubject" 
                      >
                        <option disabled="disabled" selected="selected">
                          Choose option
                        </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                      </select>
                      <div class="select-dropdown"></div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- <div class="form-row m-b-55">
                <div class="name">Name</div>
                <div class="value">
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group-desc">
                        <div
                          class="rs-select2 js-select-simple select--no-search" id="container1">
                          <label class="label--desc">Subject Name</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="input-group-desc">
                        <div id="container2" class="rs-select2 js-select-simple select--no-search">

                        </div>
                        <label class="label--desc">Subject Code</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->

              <!-- <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="father_name">
                                            <label class="label--desc">Subject Name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name=mother_name">
                                            <label class="label--desc">Subject Code</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
              <!-- <div class="form-row m-b-55">
                <div class="name">Name</div>
                <div class="value">
                  <div class="row row-space">
                    <div class="col-2">
                      <div class="input-group-desc">
                        <div class="input-group-desc">
                          <div
                            class="rs-select2 js-select-simple select--no-search"
                          >
                            <select name="subjectName" id="subjectName">
                              <option disabled="disabled" selected="selected">
                                Choose option
                              </option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                            </select>
                            <div class="select-dropdown"></div>
                          </div>
                          <label class="label--desc">Subject Name</label>
                        </div>
                      </div>
                    </div>
                    <div class='col-2'>
                      <div class='input-group-desc'>
                        <div
                          class="rs-select2 js-select-simple select--no-search"
                        >
                          <select name="subjectCode">
                            <option disabled="disabled" selected="selected">
                              Choose option
                            </option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                          </select>
                          <div class="select-dropdown"></div>
                        </div>
                        <label class="label--desc">Subject Code</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email">
                                </div>
                            </div>
                        </div> -->
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
                                            <input class="input--style-5" type="text" name="phonenumber">
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
              <div class="form-row">
                <div class="col-2">
                  <button class="btn btn--radius-2 btn--green" type="submit">
                    Next
                  </button>
                </div>
                <div class="col-2">
                  <input
                    class="btn btn--radius-2 btn--red"
                    type="reset"
                    value="reset"
                  />
                </div>
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
  </body>
  <!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<!-- end document-->
