<?php
    include '../../../connection.php';
    // echo "Hello Friends";
    $class_id=$_REQUEST['ci'];
    $subject_code=$_REQUEST['sc'];
    $time=$_REQUEST['ti'];
    $day=$_REQUEST['di'];
    // echo $day;
    // echo $class_id." "." ".$time."  ".$day;
    $sel="select * from available_class where classID='$class_id' AND timeID='$time' AND dayID='$day'";

    $res=mysqli_query($con,$sel);
    if(mysqli_num_rows($res)>0)
    {    
        echo "This Class Is Not Free At That Day And Time Please <a href='../../index.php'>Click here</a> To View Time Table And Change Day And Time Accordingly Of Lecture";    
    }
    else
    {
        session_start();
        $facultyID=$_SESSION["facultyID"];
        // echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
        // echo $facultyID." ".$subject_code;
        $ins="insert into available_class(classID,timeID,dayID,facultyID,subjectCode) values('$class_id','$time','$day','$facultyID','$subject_code');";
        if(mysqli_query($con,$ins))
        {
            // echo "alert('Class Booked')";
            // header("location:../index.php");
            echo "Class Is Booked & Lecture Arranged Successfully <a href='../../index.php'>Click here</a> To View In Timetable";
        }
        else
        {
            echo mysqli_error($con);
        }
    }
?>