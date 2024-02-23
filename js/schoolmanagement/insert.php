<?php
include 'connect.php';
if (isset($_POST['record'])) {
 echo $_POST['c_name'];

$insert= $conn->query("insert into class values(null,'{$_POST['c_name']}')");
if ($insert == true) {
    echo"<script>
    alert('class inserted')
    window.location.href='dos previleges.php'
    </script>";
}else{
    echo"class not inserted";
}
}

//insert module
if (isset($_POST['recordmodule'])) {

    //var_dump($_POST['class']);die();
    $insert= $conn->query("insert into module values('{$_POST['modulecode']}','{$_POST['modulename']}','{$_POST['class']}','{$_POST['tr_id']}')");
    
    if ($insert == true) {
        echo"<script>
    alert('module inserted')
    window.location.href='dos previleges.php'
    </script>";
    }else{
        echo"no";
    }
    }

    //insert trainee

    if (isset($_POST['recordtrainee'])) {


        $insert = $conn->query("insert into trainee values(null,'{$_POST['traineefname']}','{$_POST['traineelname']}','{$_POST['class']}')");
        if ($insert == true) {
            echo"<script>
    alert('trainee inserted')
    window.location.href='dos previleges.php'
    </script>";
        }else{
            echo"no";
        }
        }
        //insert trainer

        if (isset($_POST['recordtrainer'])) {
            echo $_POST['t_fname'].$_POST['t_lname']." ";
           
           $insert= $conn->query("insert into trainer values(null,'{$_POST['t_fname']}','{$_POST['t_lname']}','{$_POST['t_email']}')");
           if ($insert == true) {
            echo"<script>
            alert('trainee inserted')
            window.location.href='dos previleges.php'
            </script>";
           }else{
               echo"no";
           }
           }
?>