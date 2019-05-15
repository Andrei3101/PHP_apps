<?php
include('dbcon.php');
/**
 * Created by IntelliJ IDEA.
 * User: ANDY
 * Date: 10-May-19
 * Time: 17:51
 */
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper">
    <h3> SIGN UP HERE : </h3>

    <form method="post" action="">

        <div class="form-item">
            <input type="text" name="newUser" required="required" placeholder="Username" autofocus required></input>
        </div>

        <div class="form-item">
            <input type="password" name="newPass" required="required" placeholder="Password" required></input>
        </div>

        <div class="button-panel">
            <input type="submit" class="button" title="Sign Up" name="signUp" value="Sign Up"></input>
        </div>

    </form>

    <?php
    if (isset($_POST['signUp'])) {
        $username = mysqli_real_escape_string($con, $_POST['newUser']);
        $password = mysqli_real_escape_string($con, $_POST['newPass']);

        $query2 = mysqli_query($con, "SELECT * FROM users WHERE username='$username';");
        $num_row = mysqli_num_rows($query2);
        if ($num_row > 0) {
            echo "User Already Exists !";
        } else {
            $sqlQuery = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
            if (mysqli_query($con, $sqlQuery))
                echo "User Successfully Registered";
            else
                echo "Error !!! " . mysqli_error($con);
        }
    }
    ?>

    <div class="reminder">
        <p><a href="index.php">Back to Login page -> </a></p>
    </div>
</div>

</body>
</html>

