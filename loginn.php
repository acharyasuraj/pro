<?php 
    if($_POST){
        $uemail=$_POST["uname"];
        $upassword=$_POST["psw"];

        $servername="localhost";
        $username="root";
        $password="";
        $dbname="smart_krishi";

        $connection=new mysqli($servername,$username,$password,$dbname);

        if($connection){  
            $sql="SELECT uname FROM myguests WHERE email='$uemail' AND pw='$upassword'";
            $result=mysqli_query($connection, $sql);

            if(mysqli_num_rows($result) == 1) {
                echo "Login successful";
            }
            else {
                echo "Incorrect information";
            }
        }    
        else{
            echo "Connection not established";
        }
        echo "here";

        mysqli_close($connection);
        header("Location: http://localhost:8080/pro/index.html");
    }
?>