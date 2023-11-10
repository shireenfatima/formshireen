<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" id="name" name="name" placeholder="Full Name" autocomplete="off" required>
                        <label for="name" class="form-label">Name</label><br/>
                        <input type="submit" name="submit" id="submit" value="Save Record">

        </form>
                            <?php
                        include_once 'Connection.php';
                        if(isset($_POST['submit'])){
                            $name = $_POST['name'];
                           
                            $query = "INSERT INTO informations VALUES ('$name')";
                            if(mysqli_query($conn, $query)){
                                echo 'DONE';
                            }
                            else{
                                echo 'ERROR';
                            }
                        }
                    ?>

        
    </body>
</html>
