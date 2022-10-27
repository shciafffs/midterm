<!DOCTYPE HTML>
<html>
    <head>
    <?php
            $server="localhost";
            $username="alessio";
            $password="Password01";
            $database="Products";
            $conn=mysqli_connect($server, $username, $password, $database);

            $request=htmlspecialchars($_POST['product_name']);


            $sql="SELECT num_items FROM Products WHERE product_name='{$request}';";
            $result=mysqli_query($conn, $sql);
            if ($result) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            mysqli_close($conn);
    ?>
    </head>
    <body>
        <p>There are <?php echo "$result . $request . 'in stock!'" ?></p><br>
    </body>
</html>