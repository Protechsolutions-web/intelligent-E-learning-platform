<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="#" method="get"> 
  <select name="noOfSub" onchange="this.form.submit()">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
  </select>
  <br/>
  <input type="submit" value="submit">
  </form>
</body>
</html>
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