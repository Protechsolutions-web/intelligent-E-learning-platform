<!DOCTYPE html>
<html>
    <head>
    </head>
<body>
    <form action="" method="post">    
        <select name="myDropDown" onChange="this.form.submit()">
        <option value='' disabled selected>Assign Driver</option>
        <option value='4353'>Steve Jobs</option>
        <option value='3333'>Ian Wright</option>
        <option value='66666'>Mark James</option>
     </select>
     </form>

</body>
</html>
<?php
    if(isset($_REQUEST["myDropDown"]))
    {
        echo "Hello";
    }
    else
    {

        echo "nathi thatu";
    }
?>