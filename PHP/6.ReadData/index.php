<?php
 $connection = mysqli_connect("localhost","root","","userdata");

if($connection)
{
    echo "We are Connected";
} else 
{
    die("Database connected failed");
}

$query = "select * from users";

$result = mysqli_query($connection, $query);

if(!$result)
{
    die('Query Failed'.mysqli_error());
}
?>
<html>
    <head>
        <title>Read Data From Database</title>
    </head>
    <body>
        <div>
            <h2>Data Come From Database</div>
            <?php
                while($row = mysqli_fetch_row($result))
                {
            ?>
            <pre>
                <?php
                    print_r($row);
                ?>
            </pre>
            <?php
                }
            ?>
    </body>
</html>