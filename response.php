<!DOCTYPE HTML>
<html>
    <head>
    <?php
            $server="localhost";
            $username="alessio";
            $password="Password01";
            $database="userinfo";
            $conn=mysqli_connect($server, $username, $password, $database);

            $request=htmlspecialchars($_POST["product_name"]);


            $sql="SELECT num_items FROM Products WHERE product_name='{$request}';";
            $result=mysqli_query($conn, $sql);

            mysqli_close($conn);
    ?>
    </head>
    <body>
        <?php
        foreach($result as $row)
        {
            echo "There are {$row['num_items']} {$request} left in stock!";
        }
        ?>
    </body>
</html>