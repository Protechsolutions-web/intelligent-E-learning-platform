<?php
    include "../../../connection.php";
    $tqid=mysqli_query($con,"SELECT MAX(quizID) FROM quiz_details;");
    $row=mysqli_fetch_row($tqid);
    $quizID=$row[0];
    $tnoOfQues=mysqli_query($con,"SELECT number_of_questions FROM quiz_details WHERE quizID='$quizID'");
    $row=mysqli_fetch_row($tnoOfQues);
    $no_of_questions=$row[0];
    $i=0;
    $ques=array();
    $marks=array();
    $correct_answer=array();
    $op1=array();
    $op2=array();
    $op3=array();
    $op4=array();
    
    for($i=1;$i<=$no_of_questions;$i++)
    {
        $ques[]=nl2br($_REQUEST["ques$i"]);
        $marks[]=$_REQUEST["marks$i"];
        $correct_answer[]=$_REQUEST["correct_answer$i"];
        $op1[]=$_REQUEST["option1_$i"];
        $op2[]=$_REQUEST["option2_$i"];
        $op3[]=$_REQUEST["option3_$i"];
        $op4[]=$_REQUEST["option4_$i"];
        $ins=null;
        $ins=mysqli_query($con,"insert into quiz_questions values('".$quizID."','".$i."','".$_REQUEST["ques$i"]."','".$_REQUEST["marks$i"]."','".$_REQUEST["option1_$i"]."','".$_REQUEST["option2_$i"]."','".$_REQUEST["option3_$i"]."','".$_REQUEST["option4_$i"]."','".$_REQUEST["correct_answer$i"]."');");
        if($ins)
        {

        }
        else
        {
            echo mysqli_error($con);
        }
    }
    echo "<h1 style='color: green;'>Quiz Is Created</h1>"

?>