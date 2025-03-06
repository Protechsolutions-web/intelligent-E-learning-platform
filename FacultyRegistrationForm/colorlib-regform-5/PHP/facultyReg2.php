<?php
    include '../../../connection.php';
    if($db)
    {   
        $n=$_REQUEST["noOfSubject"];
        $fid=$_REQUEST["fid"];
        for($i=0;$i<$n;$i++)
        {
            $temp=$_GET[$i];
            $ins="insert into faculty_subject values('".$fid."','".$temp."')";
            if(mysqli_query($con,$ins))
            {
                echo "Faculty registered";
            }
            else
            {
                echo mysqli_error($con);
            }
            $up="update subject_details set facultyID='".$fid."' where subjectCode='".$_GET[$i]."';";
            if(mysqli_query($con,$up))
            {
                echo "Query Executed";
                if(mysqli_affected_rows($con))
                {
                    echo "Database Updated";
                }
            }
            else
            {
                echo mysqli_error($con);    
            }
        }
    }
    else {
        
    }
?>