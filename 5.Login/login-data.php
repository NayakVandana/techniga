<?php
    if(isset($_POST["submit"]))
    {
        // echo "form submitted";
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $useremail = $_POST["useremail"];
        $userphone = $_POST["userphone"];

        // echo $fname;
        // echo $lname;
        // echo $useremail;
        // echo $userphone;

        $connection = mysqli_connect("localhost","root","","userdata");
        
        if($connection)
        {
            echo "Connected";
        }
        else
        {
            die("Not Connected");
        }

        $query = "insert into users (id , FirstName, LastName, UserEmail, UserPhone) values (1, '$fname', '$lname', '$useremail' , '$userphone')";

        $result = mysqli_query($connection, $query);
        // if(!result)
        // {
        //     die("Query Failed".mysqli_err());
        // }
    }
?>