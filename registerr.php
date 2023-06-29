<?php
    if($_POST){
        $uname=$_POST["name"];
        $uemail=$_POST["email"];
        $upassword= md5($_POST["password"]);

        $servername="localhost";
        $username="root";
        $password="";
        $dbname="smart_krishi";

        $connection=new mysqli($servername,$username,$password,$dbname);

        if($connection){    
            $sql="INSERT INTO myguests(uname, pw, email) VALUES ('$uname', '$upassword', '$uemail')";
            mysqli_query($connection, $sql);
        }    
        mysqli_close($connection);
    }
?>